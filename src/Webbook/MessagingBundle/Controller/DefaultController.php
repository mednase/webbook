<?php

namespace Webbook\MessagingBundle\Controller;

use Core\UserBundle\Entity\User;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Webbook\MainBundle\Entity\Media;
use Webbook\MessagingBundle\Entity\Message;
use Webbook\MessagingBundle\Entity\MessageGroup;
use Webbook\MessagingBundle\Entity\UserHasMessage;

class DefaultController extends Controller
{

    public function inboxAction(Request $request,$date)
    {
        if($date)
            try{
                $date=new \DateTime($date);
            }catch(\Exception $ex){
                $date=null;
            }
        if(!$date)
            $date=new \DateTime();

        $date=$date->format('Y-m-d');

        $em=$this->getDoctrine()->getManager();
        $query=$em->getRepository('MessagingBundle:UserHasMessage')
            ->getInboxMessageByDateQuery($this->getUser()->getId(),$date);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            15/*limit per page*/
        );
        return $this->render('@Messaging/Default/inbox.html.twig',
            ['pagination'=>$pagination,'date'=>$date]);
    }

    public function sentAction(Request $request,$date)
    {
        if($date)
            try{
            $date=new \DateTime($date);
            }catch(\Exception $ex){
                $date=null;
            }
        if(!$date)
            $date=new \DateTime();

        $date=$date->format('Y-m-d');
        $em=$this->getDoctrine()->getManager();
        $query=$em->getRepository('MessagingBundle:Message')
            ->getSentMessageByDateQuery($this->getUser()->getId(),$date);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            15/*limit per page*/
        );

        return $this->render('@Messaging/Default/sent.html.twig',
            ['pagination'=>$pagination,'date'=>$date]);
    }
    public function importantAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $importantMessages=$em->getRepository('MessagingBundle:UserHasMessage')
            ->findBy(['receiver'=>$this->getUser()->getId(),'important'=>true]);
        return $this->render('@Messaging/Default/important.html.twig',
            ['importantMessages'=>$importantMessages]);

    }

    public function setMsgImportantAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $messages=$request->request->get('messages');
        if($messages)
            foreach ($messages as $message_id) {
                    $msg = $em->find(UserHasMessage::class,$message_id);
                    if($msg){
                        $msg->setImportant(!$msg->isImportant());
                        $em->persist($msg);
                    }
            }
        $em->flush();
        return new Response();
    }

    public function showMessageAction(Request $request,$token)
    {
        $em=$this->getDoctrine()->getManager();
        $msg=$em->getRepository('MessagingBundle:UserHasMessage')->findOneBy(['token'=>$token]);

        $message=new Message();
        $messageForm=$this->createForm('Webbook\MessagingBundle\Form\MessageType',$message);
        $messageForm->handleRequest($request);
        if($messageForm->isSubmitted() && $messageForm->isValid()) {
            $message->setSubject('Re:'.$msg->getMessage()->getSubject());
            $attachments = $request->files->get('attachments');
            $message->setSender($this->getUser());
            if($attachments)
                /** @var UploadedFile $attachment */
            foreach ($attachments as $attachment) {
                if ($attachment)
                    try {
                        if (!strpos($attachment->getMimeType(), 'exec')) {
                            $media = new Media();
                            $media->setMediaFile($attachment);
                            $message->addAttachment($media);
                        }
                    } catch (FileNotFoundException $exception) {
                        echo "file not found";
                    }
            }
            $userHasMessage = new UserHasMessage($msg->getMessage()->getSender());
            $message->addReceiver($userHasMessage);
            $message->setDateSend(new \DateTime());
            $message->setSent(true);
            $em->persist($message);
            $em->flush();
            $this->addFlash('success', 'votre message a été envoyé avec succès!');
            $roleRoute=$this->get('role.route.service')->getRouteRole();
            return $this->redirectToRoute('messaging_sent',['role'=>$roleRoute]);
        }

        // set message to seen if he is not already
        if(!$msg->isSeen()){
            $msg->setSeen(true);
            $em->persist($msg);
            $em->flush();
        }

        return $this->render('@Messaging/Default/show.message.html.twig',['hasMessage'=>$msg,
            'messageForm'=>$messageForm->createView()]);
    }

    public function showSentMessageAction($token)
    {
        $em=$this->getDoctrine()->getManager();
        $msg=$em->getRepository('MessagingBundle:Message')->findOneBy(['token'=>$token]);

        return $this->render('@Messaging/Default/show.message.html.twig',['message'=>$msg]);
    }

    public function composeAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();

        $message=new Message();
        $messageForm=$this->createForm('Webbook\MessagingBundle\Form\MessageType',$message);
        $messageForm->handleRequest($request);
        if($messageForm->isSubmitted() && $messageForm->isValid()) {
            $attachments = $request->files->get('attachments');
            $message->setSender($this->getUser());
            if($attachments)
            /** @var UploadedFile $attachment */
            foreach ($attachments as $attachment) {
                if ($attachment)
                    try {
                        if (!strpos($attachment->getMimeType(), 'exec')) {
                            $media = new Media();
                            $media->setMediaFile($attachment);
                            $message->addAttachment($media);
                        }
                    } catch (FileNotFoundException $exception) {
                        echo "file not found";
                    }
            }
            //sending message
            // getting all users whose gonna receive this message
            $receivers = $request->request->get('receivers');
            if ($receivers) {
                foreach ($receivers as $receiver) {
                    $user = $em->find(User::class, $receiver);
                    if ($user) {
                        $userHasMessage = new UserHasMessage($user);
                        $message->addReceiver($userHasMessage);
                    }
                }
                $message->setDateSend(new \DateTime());
                $message->setSent(true);
                $em->persist($message);
                $em->flush();
                $this->addFlash('success', 'votre message a été envoyé avec succès!');
                $roleRoute=$this->get('role.route.service')->getRouteRole();
                return $this->redirectToRoute('messaging_sent',['role'=>$roleRoute]);
            } else
                $this->addFlash('error', 'vous devez spécifier un destinateur !');
        }
        $users = $em->getRepository('UserBundle:User')
            ->findByRoles(['ROLE_AUTHOR','ROLE_VALIDATOR','ROLE_ADMINISTRATOR']);

        return $this->render('@Messaging/Default/compose.html.twig',
            ['users'=>$users,'messageForm'=>$messageForm->createView()]);
    }

    public function deleteSenTMessageAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $messages=$request->request->get('messages');
        foreach ($messages as $message_id) {
                $msg = $em->find(Message::class, $message_id);
                if($msg)
                    $em->remove($msg);
        }
        $em->flush();
        return new Response();
    }

    public function deleteInboxMessageAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $messages=$request->request->get('messages');
        foreach ($messages as $message_id) {
            $msg = $em->find(UserHasMessage::class, $message_id);
            if($msg){
                $msg->setDeleted(true);
                $em->persist($msg);
            }
        }
        $em->flush();
        if($request->isXmlHttpRequest())
            return new Response();
        else{
            $this->addFlash('success','le message a été supprimer');
            $roleRoute=$this->get('role.route.service')->getRouteRole();
            return $this->redirectToRoute('messaging_inbox',['role'=>$roleRoute]);
        }
    }

    public function markAsReadAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $messages=$request->request->get('messages');
        foreach ($messages as $message_id) {
            $msg = $em->find(UserHasMessage::class, $message_id);
            if($msg){
                $msg->setSeen(true);
                $em->persist($msg);
            }
        }
        $em->flush();
        return new Response();
    }

    public function getUserMessagesAction()
    {
        $em=$this->getDoctrine()->getManager();
        $msg=$em->getRepository('MessagingBundle:UserHasMessage')
            ->getLastInboxMessage($this->getUser()->getId());

        $roleRoute=$this->get('role.route.service')->getRouteRole();
        $vich=$this->get('vich_uploader.templating.helper.uploader_helper');
        $messages=array();
        /** @var UserHasMessage $m */
        foreach ($msg as $m){
            $message['url']=$this->generateUrl('messaging_show_msg',
                ['token'=>$m->getToken(),'role'=>$roleRoute]);
            $message['seen']=$m->isSeen();
            $message['subject']=$m->getMessage()->getSubject();
            $message['dateSent']=$m->getMessage()->getDateSend()->format('d-m-Y H:i');
            $message['sender']['fullName']=$m->getMessage()->getSender()->getProfile()->getFullName();
            $pic=$m->getMessage()->getSender()->getPicture();
            $pic?$message['sender']['picture']=$vich->asset($pic,'mediaFile'):
                $message['sender']['picture']='/assets/img/avatar/no-avatar.png';

            array_push($messages,$message);
            unset($message);
        }
        $serializer = $this->get('serializer');
        $data = $serializer->serialize($messages, 'json');

        return new Response($data);
    }

    public function searchAction(Request $request)
    {
        /** @var EntityManager $em */
        $em=$this->getDoctrine()->getManager();
        $searchFor=$request->query->get('searchMessage');

        $query=$em->createQuery('SELECT uhm FROM MessagingBundle:UserHasMessage uhm 
          JOIN MessagingBundle:Message m where ( uhm.message = m.id ) 
          JOIN UserBundle:User u where (m.sender = u.id) 
          JOIN UserBundle:Profile p where (u.profile = p.id)
          where ( uhm.deleted = false) AND (uhm.receiver = :user)
          AND ((m.subject like :search) OR ( p.firstName like :search) OR (p.lastName like :search) 
            OR( CONCAT(p.firstName,p.lastName) like :search ) OR( CONCAT(p.lastName,p.firstName) like :search )
           OR (m.dateSend like :search) OR (m.body LIKE :search) )ORDER BY  m.dateSend DESC ')
            ->setParameters(['user'=>$this->getUser()->getId(),
            'search'=>'%'.$searchFor.'%']);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('@Messaging/Default/search.html.twig',['pagination'=>$pagination,'search'=>$searchFor]);
    }
}
