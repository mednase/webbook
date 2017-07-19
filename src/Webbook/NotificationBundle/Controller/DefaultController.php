<?php

namespace Webbook\NotificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function getNotificationsAction()
    {
        $em=$this->getDoctrine()->getManager();
        $notifications=$em->getRepository("NotificationBundle:Notification")->findBy(array(
            "user"=>$this->getUser()),array("date"=>"DESC","seen"=>"ASC"),10);

        $serializer = $this->get('serializer');
        $data = $serializer->serialize($notifications, 'json');

        foreach ($notifications as $notification){
            $notification->setSeen(true);
            $em->persist($notification);
        }
        $em->flush();

        return new Response($data);
    }
}
