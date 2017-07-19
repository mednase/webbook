<?php

namespace Webbook\MainBundle\Controller\Administrator;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Webbook\MainBundle\Entity\Media;
use Webbook\MainBundle\Entity\NewsLetter;

class NewsletterController extends Controller
{
    public function newAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $newsLetter=new NewsLetter();
        $form=$this->createForm('Webbook\MainBundle\Form\NewsLetterType',$newsLetter);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $attachments = $request->files->get('attachments');
            if($attachments)
                /** @var UploadedFile $attachment */
                foreach ($attachments as $attachment) {
                    if ($attachment)
                        try {
                            if (!strpos($attachment->getMimeType(), 'exec')) {
                                $media = new Media();
                                $media->setMediaFile($attachment);
                                $newsLetter->addAttachment($media);
                            }
                        } catch (FileNotFoundException $exception) {
                            echo "file not found";
                        }
                }

            $em->persist($newsLetter);
            $em->flush();
            $this->addFlash('success','Une nouvelle newsletter a été enregistrée');
            return $this->redirectToRoute('newsletter_preview',['id'=>$newsLetter->getId()]);
        }


        return $this->render('@Main/Admin/newsletters/new.html.twig', array('form'=>$form->createView()));
    }

    public function editAction(Request $request,NewsLetter $newsLetter= null){

        if(!$newsLetter)
            return $this->redirectToRoute('not_found');

        $em=$this->getDoctrine()->getManager();
        $form=$this->createForm('Webbook\MainBundle\Form\NewsLetterType',$newsLetter);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $attachments = $request->files->get('attachments');
            if($attachments)
                /** @var UploadedFile $attachment */
                foreach ($attachments as $attachment) {
                    if ($attachment)
                        try {
                            if (!strpos($attachment->getMimeType(), 'exec')) {
                                $media = new Media();
                                $media->setMediaFile($attachment);
                                $newsLetter->addAttachment($media);
                            }
                        } catch (FileNotFoundException $exception) {
                            echo "file not found";
                        }
                }

            $em->persist($newsLetter);
            $em->flush();
            $this->addFlash('info','La newsletter a été mise a jour');
            return $this->redirectToRoute('newsletter_preview',['id'=>$newsLetter->getId()]);
        }

        return $this->render('@Main/Admin/newsletters/edit.html.twig',
            array('form'=>$form->createView(),'newsletter'=>$newsLetter));

    }

    public function removeAction(NewsLetter $newsLetter=null){

        if($newsLetter){
            $em=$this->getDoctrine()->getManager();
            $em->remove($newsLetter);
            $em->flush();
        }
        return new Response();
    }

    public function listAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $query=$em->getRepository('MainBundle:NewsLetter')->findAllQuery();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('@Main/Admin/newsletters/list.html.twig', array('newsLetters'=>$pagination));
    }

    public function sendAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $newsLetters=$em->getRepository('MainBundle:NewsLetter')->findAll();
        if($request->getMethod()=="POST"){
            $this->addFlash('success',"L'envoi de newsletter a été exécuté avec success ");
            return $this->redirectToRoute('newsletter_send');
        }


        return $this->render('@Main/Admin/newsletters/send.html.twig', array('newsLetters'=>$newsLetters));
    }

    public function previewAction(NewsLetter $newsLetter=null){

        $template= $this->renderView('MainBundle:Admin/newsletters:template.html.twig',array('newsletter'=>$newsLetter));

        return $this->render('@Main/Admin/newsletters/preview.html.twig',
            ['template'=>$template]);
    }


    public function removeAttachmentAction(Media $media=null){
        $em=$this->getDoctrine()->getManager();
        if($media){
            $em->remove($media);
            $em->flush();
        }
        return new Response();
    }
}
