<?php

namespace Webbook\MainBundle\Controller\Author;

use Core\UserBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Webbook\MainBundle\Entity\Authorization;
use Webbook\MainBundle\Entity\BlockHistoric;
use Webbook\MainBundle\Entity\BookBlock;
use Webbook\MainBundle\Entity\ValidationRequest;
use Webbook\MainBundle\Entity\Version;
use Webbook\NotificationBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Field\TextareaFormField;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Main/Author/index.html.twig', array(// ...
        ));
    }

    public function myBooksAction()
    {

        $em = $this->getDoctrine()->getManager();
        /** @var User $user */
        $user = $this->getUser();
        $booksFromAuth = $em->getRepository('MainBundle:Book')
            ->getUserBooksFromAuthorization($user->getId());
        $booksAuthor = $user->getHasBook();
        $books = new ArrayCollection(
            array_unique(array_merge($booksFromAuth, $booksAuthor->toArray()), SORT_REGULAR)
        );

        return $this->render('MainBundle:Author:my.books.html.twig', array(
            'books' => $books
        ));
    }

    public function allBooksAction()
    {

        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository('MainBundle:Book')->findAll();

        return $this->render('MainBundle:Author:all.books.html.twig', array(
            'books' => $books
        ));
    }

    public function showBookAction($token)
    {
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('MainBundle:Book')->findOneBy(array("token" => $token));
        if(!$book)
            return $this->redirectToRoute('not_found');

        return $this->render('@Main/Author/show.book.html.twig', array(
            'book' => $book,
        ));
    }

    public function createNewBlockVersionAction($token)
    {
        $em = $this->getDoctrine()->getManager();
        $block = $em->getRepository('MainBundle:BookBlock')->findOneBy(array("token" => $token));
        if(!$block)
            return $this->redirectToRoute('not_found');

        /** @var Version $lastVersion */
        $lastVersion=$block->getLastValidatedVersion();
        $newVersion = new Version();
        if($lastVersion){
            $newVersion->setNumber($lastVersion->getNumber()+0.1);
            $newVersion->setContent($lastVersion->getContent());
        }
        $newVersion->setBookBlock($block);
        $newVersion->setCreatedBy($this->getUser());
        $em->persist($newVersion);
        $em->flush();

        return $this->redirectToRoute('author_block_version_edit', ['token' => $newVersion->getToken()]);
    }

    public function showBlockAction($token)
    {
        $em = $this->getDoctrine()->getManager();
        $block = $em->getRepository('MainBundle:BookBlock')->findOneBy(array("token" => $token));
        if(!$block)
            return $this->redirectToRoute('not_found');


        $validators=$em->getRepository('UserBundle:User')->findByRoles(['ROLE_VALIDATOR']);
        $authors=$em->getRepository('UserBundle:User')->findByRoles(['ROLE_AUTHOR']);

        foreach ($block->getBook()->getMainAuthors() as $author){
            $pos=array_search($author,$authors);
            array_splice($authors,$pos,1);
        }
        return $this->render('@Main/Author/show.block.html.twig', array(
            'block' => $block,
            'validators'=>$validators,
            'authors'=>$authors
        ));
    }

    public function editBookVersionAction(Request $request, $token)
    {
        $em = $this->getDoctrine()->getManager();
        $version = $em->getRepository('MainBundle:Version')->findOneBy(array("token" => $token));
        if(!$version)
            return $this->redirectToRoute('not_found');

        $form=$this->createForm('Webbook\MainBundle\Form\VersionType',$version);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $version->setContent(str_replace('../../../../uploads','/uploads',$version->getContent()));
            $em->flush();
            // if the edition run validation process
            if ($version->getProgress()==100) {
                $historic=new BlockHistoric();
                $historic->setMessage("Fin d'édition de version numéro ".$version->getNumber()  ." par ".$this->getUser()->getFullName());
                $version->getBookBlock()->addHistoric($historic);
                $em->persist($historic);
                $validator = $this->getValidator($version->getBookBlock());
                if (!$validator) {
                    $validators = $em->getRepository('UserBundle:User')->findByRoles(['ROLE_VALIDATOR']);
                    if (count($validators) > 0)
                        $validator = $validators[0];
                }
                // status 1 mean the version on the validation mode
                $version->setStatus(1);
                $validationRequest = new ValidationRequest();
                $validationRequest->setValidator($validator);
                $validationRequest->setVersion($version);
                $em->persist($validationRequest);
                $em->persist($version);
                $em->flush();

                // send notification to the assigned validator
                $notif = new Notification();
                $notif->setMessage("Nouvelle demande de verifcation de version de " . $this->getUser()->getProfile()->getFullName());
                $notif->setIcon('fa-check-square-o');
                $notif->setUrl($this->generateUrl('validator_verify_version', ['token' => $validationRequest->getToken()]));
                $notif->setUser($validator);
                $em->persist($notif);
                $em->flush();
                $this->addFlash('success', "L'edition de la nouvelle version est terminé , Le processus de validation a été lancé  ");
                return $this->redirectToRoute('author_show_book', ['token' => $version->getBookBlock()->getBook()->getToken()]);
            }else {
                $this->addFlash('info', 'Toutes les modifications ont été enregistrés');
                return $this->redirectToRoute('author_block_version_edit', ['token' => $token]);
            }
        }
        return $this->render('@Main/Author/edit.block.html.twig', array(
            'form' => $form->createView(),
            'version' => $version
        ));
    }

    public function cancelVersionCreationAction($token)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var Version $version */
        $version = $em->getRepository('MainBundle:Version')->findOneBy(array("token" => $token));
        $urlForBook = $this->generateUrl('author_show_book', ['token' => $version->getBookBlock()->getBook()->getToken()]);
        // removing all block created in this version
        /** @var BookBlock $bl */
        foreach ($version->getBookBlock()->getBook()->getBlocks() as $bl){
            if($bl->getLevel()>0 && $bl->getParent()==null)
                $em->remove($bl);
        }
        $this->addFlash('info', 'La creation du version a été annuler');
        $em->remove($version);
        $em->flush();
        return new JsonResponse(['done' => true, 'url' => $urlForBook]);
    }

    public function getValidator(BookBlock $block)
    {
        $permissions = $block->getAuthorizations();
        /** @var Authorization $permission */
        foreach ($permissions as $permission) {
            if(in_array('ROLE_VALIDATOR',$permission->getUser()->getRoles()))
                return $permission->getUser();

        }
        if ($block->getParent())
            return $this->getValidator($block->getParent());
        else
            return null;
    }

    public function deleteBlockAction($token)
    {
        $em = $this->getDoctrine()->getManager();
        $block = $em->getRepository('MainBundle:BookBlock')->findOneBy(array("token" => $token));
        if ($block) {
            $parent = $block->getParent();
            $position = $block->getPosition();
            $em->remove($block);
            $em->flush();
            if($parent){
                foreach ($parent->getChildrens() as $child) {
                    if ($child->getPosition() > $position)
                        $child->setPosition($child->getPosition() - 1);
                }
                $em->persist($parent);
            }
            $em->flush();
        }

        return new Response();
    }

    public function versionProgressionAction($token){
        $em=$this->getDoctrine()->getManager();
        $version=$em->getRepository("MainBundle:Version")->findOneBy(['token'=>$token]);
        if(!$version)
            return $this->redirectToRoute('not_found');

        return $this->render('MainBundle:Author:version.progression.html.twig',
            ['version'=>$version]);
    }

    public function workflowAction(){
        $em=$this->getDoctrine()->getManager();
        $versions=$em->getRepository("MainBundle:Version")->findBy(
            ['createdBy'=>$this->getUser()->getId(),'status'=>0]);

        return $this->render('@Main/Author/workflow.html.twig',['versions'=>$versions]);

    }

}
