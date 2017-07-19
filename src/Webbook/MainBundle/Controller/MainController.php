<?php

namespace Webbook\MainBundle\Controller;

use FOS\UserBundle\Form\Factory\FactoryInterface;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Webbook\MainBundle\Entity\Book;
use Webbook\MainBundle\Entity\BookBlock;
use Webbook\MainBundle\Entity\Media;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Webbook\MainBundle\Entity\Version;
use Webbook\MainBundle\Form\MediaType;

class MainController extends Controller
{

    public function indexAction(){
        return $this->redirect('http://webbook.marzouk-med.loc:4200');
    }



    public function profileAction(Request $request){
        $user=$this->getUser();
        /** @var $formFactory FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        $form = $formFactory->createForm();
        if(in_array('ROLE_AUTHOR',$user->getRoles()))
            $form->add('bibliography',null,['label'=>'Bibliographie']);

        $form->add('picture',MediaType::class);

        $form->setData($user);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($user);
                $em->flush();
                $this->addFlash('success',"Votre profil a été mis à jour");
                return $this->redirect($request->getRequestUri());
            }
        }
        return $this->render('@Main/shared/profile.html.twig',['form'=>$form->createView()]);
    }

    public function pageNotFoundAction()
    {
        return $this->render('@Main/shared/not_found.html.twig');
    }

    public function fileManagerAction(Request $request,$token,$type='all')
    {
        $em = $this->getDoctrine()->getManager();
        $version=$em->getRepository('MainBundle:Version')->findOneBy(['token'=>$token]);
        if($version)
            $files = $em->getRepository('MainBundle:Media')->findBy(['version'=>$version->getId()], ['createdAt' => 'DESC']);
        else
            return $this->redirectToRoute('not_found');

        return $this->render('form/my.fileManager.html.twig', array(
            'files' => $files,
            'type' => $type,
            'version_token' => $token
        ));
    }

    public function fileManagerFileUploadAction(Request $request, $version_token)
    {
        $em = $this->getDoctrine()->getManager();
        $block = $em->getRepository('MainBundle:Version')->findOneBy(array("token" => $version_token));
        $file = $request->files->get('media');
        $result = array();
        $helper = $this->get('vich_uploader.templating.helper.uploader_helper');
        $media = new Media();
        $media->setVersion($block);
        $media->setMediaFile($file[0]);
        $em->persist($media);
        $em->flush();
        $result['id']=$media->getId();
        $result['name'] = $media->getMedia()->getOriginalName();
        $result['size'] = $media->getMedia()->getSize();
        $result['type'] = $media->getMedia()->getMimeType();
        $result['date'] = $media->getCreatedAt()->format('Y-m-d H:i');
        $result['path'] = $media->getPath();
        return new JsonResponse($result);
    }

    public function fileManagerFileRemoveAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->request->get('id');
        $media = $em->find(Media::class, $id);
        if ($media) {
            $em->remove($media);
            $em->flush();
        }
        return new Response();
    }

    public function testAction(){

        $file = new UploadedFile($this->getParameter('upload_dir').'/58fe136a05f611.95235113.tmp',
            '58fe136a05f611.95235113.tmp');
        var_dump($file);die();
    }

}
