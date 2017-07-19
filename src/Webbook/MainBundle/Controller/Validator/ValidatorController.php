<?php

namespace Webbook\MainBundle\Controller\Validator;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Request;
use Webbook\MainBundle\Entity\BlockHistoric;
use Webbook\MainBundle\Entity\Version;
use Webbook\NotificationBundle\Entity\Notification;

class ValidatorController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Main/Validator/index.html.twig', array(// ...
        ));
    }

    public function validationRequestsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $validationRequests = $em->getRepository('MainBundle:ValidationRequest')->findBy(['validator' => $user->getId()], ['date' => 'DESC']);

        return $this->render('@Main/Validator/validation.requests.html.twig', array(
            'validationRequests' => $validationRequests));
    }

    public function verifyVersionAction(Request $request, $token)
    {
        $em = $this->getDoctrine()->getManager();

        $validationRequest = $em->getRepository('MainBundle:ValidationRequest')->findOneBy(['token' => $token]);
        if (!$validationRequest)
            return $this->redirectToRoute('not_found');


        /** @var Version $version */
        $version = $validationRequest->getVersion();
        $bookBlock = $version->getBookBlock();

        $form = $this->createForm('Webbook\MainBundle\Form\ValidationRequestType', $validationRequest);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $version->setContent(str_replace('../../../../uploads','/uploads',$version->getContent()));
            // test if validation is done
            if ($validationRequest->getProgress() == 100) {

                $test = $this->verifyFigureAndTable($version->getContent());
                if ($test === true) {
                    $historic = new BlockHistoric();
                    $historic->setMessage("Fin de validation de version numéro " . $version->getNumber() . " par " . $this->getUser()->getFullName());
                    $bookBlock->addHistoric($historic);
                    $em->persist($bookBlock);
                    $version->setStatus(2);
                    $em->persist($version);
                    $superAdmin = $em->getRepository('UserBundle:User')->findByRoles(['ROLE_ADMINISTRATOR', 'ROLE_SUPER_ADMIN']);
                    $allConcernedUser = array_merge($superAdmin, $bookBlock->getBook()->getMainAuthors()->toArray());
                    foreach ($allConcernedUser as $user) {
                        $notif = new Notification();
                        $notif->setMessage("Une nouvelle version du bloc " . $bookBlock->getTitle() . " de livre  "
                            . $bookBlock->getBook()->getTitle() . " a été validé");
                        $notif->setIcon('fa-check-square-o');
                        if (in_array('ROLE_AUTHOR', $user->getRoles()))
                            $notif->setUrl($this->generateUrl('author_show_book', ['token' => $bookBlock->getBook()->getToken()]));
                        else
                            $notif->setUrl($this->generateUrl('administrator_book_block', ['token' => $bookBlock->getToken()]));

                        $notif->setUser($user);
                        $em->persist($notif);
                    }
                    $this->addFlash('success', "La validation de cette version a été terminé ");
                } else {
                    $validationRequest->setProgress(99);
                    $em->persist($version);
                    $this->addFlash('error', $test);
                    $em->flush();
                    return $this->redirectToRoute('validator_verify_version', ['token' => $token]);
                }
                $em->flush();
                return $this->redirectToRoute('validator_validation_requests');
            } else {
                $em->flush();
                $this->addFlash('info', 'Toutes les modifications ont été enregistrés');
                return $this->redirectToRoute('validator_verify_version', ['token' => $token]);
            }
        }

        return $this->render('@Main/Validator/verify.version.html.twig', array(
            'validationRequest' => $validationRequest,
            'block' => $bookBlock,
            'form' => $form->createView()));
    }

    private function verifyFigureAndTable($content)
    {
        $crawler = new Crawler($content);
        // first verify that all images has caption
        /** @var \DOMElement $imgDom */
        foreach ($crawler->filter('img') as $imgDom) {
            if ($imgDom->parentNode->nodeName != "figure")
                return "Chaque figure doit avoir une légende<br>
                <ul class='toastr-list'>
                    <li>Cliquer sur l'image</li>
                    <li>Cliquer option de l'image</li> 
                    <li>Cocher case 'Titre'</li>
                    <li>Entrer titre du figure</li>
                </ul>";
            elseif (strpos($imgDom->parentNode->textContent, "&&figureNumber&&")===false)
                return "Vous devez ajouter une marque de légende pour que le numéro du figure sera générer automatiquement<br>
                <ul class='toastr-list'>
                    <li>placer le curseur sur la légende de figure</li>
                    <li>cliquez sur le bouton vert en haut à droite de l'éditeur</li>
                </ul>";
        }
        // now  verify that all table has caption 2
        /** @var \DOMElement $tableDom */
        foreach ($crawler->filter('table') as $tableDom) {
            if ($tableDom->firstChild->nodeName != "caption")
                return "Vous devez ajouter une légende a chaque tableau <br>
                <ul class='toastr-list'>
                    <li>Cliquer sur le tableau</li>
                    <li>Cliquer propriétés du tableau</li> 
                    <li>Cocher case 'Titre'</li>
                    <li>Entrer titre du tableau </li>
                </ul>";
            elseif (strpos($tableDom->firstChild->textContent, "&&tableNumber&&")===false){
                return "Vous devez ajouter une marque de légende pour que le numéro du tableau sera générer automatiquement<br>
                <ul class='toastr-list'>
                    <li>placer le curseur sur la légende du tableau</li>
                    <li>cliquez sur le bouton bleu en haut à droite de l'éditeur</li>
                </ul>";
            }
        }
        return true;
    }

}
