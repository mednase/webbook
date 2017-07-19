<?php
/**
 * Created by PhpStorm.
 * User: medna
 * Date: 02/03/2017
 * Time: 12:15
 */

namespace Webbook\NotificationBundle\Listener;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Gos\Component\WebSocketClient\Exception\BadResponseException;
use Webbook\NotificationBundle\Entity\Notification;
use Symfony\Component\DependencyInjection\ContainerInterface;

class NotificationSync implements EventSubscriber
{

    private $mailer=null;
    private $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->mailer=$container->get('mailer');
        $this->container = $container;
    }


    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if ($entity instanceof Notification) {
            $message = \Swift_Message::newInstance()
                ->setSubject("subject")
                ->setFrom("mednaceur-marzouk@hotmail.fr")
                ->setTo($entity->getUser()->getEmail())
                ->setBody($this->container->get('templating')->render('NotificationBundle:Default:contact.email.html.twig', array('notification' => $entity)));
                $this->mailer->send($message);

            $serializer = $this->container->get('serializer');
            $notif = $serializer->serialize($entity, 'json');
            // send socket to the user
            try{
                $pusher = $this->container->get('gos_web_socket.wamp.pusher');
                $pusher->push($notif, 'notification_topic',['username'=>$entity->getUser()->getUsername()]);
            }catch (BadResponseException $exception){
                echo $exception->getMessage();
            }
        }
    }

    /**
     * Returns an array of events this subscriber wants to listen to.
     *
     * @return array
     */
    public function getSubscribedEvents()
    {
        return array(
            'postPersist',
        );
    }
}