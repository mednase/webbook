<?php

namespace Webbook\NotificationBundle\Extension;


use Symfony\Component\DependencyInjection\ContainerInterface;

class CountNotificationExtension extends \Twig_Extension
{

    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * CountNotification constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container =  $container;
    }

    public function countNotification(){
        $em=$this->container->get('doctrine')->getManager();
        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        return count($em->getRepository("NotificationBundle:Notification")
            ->findBy(array("user"=>$user,"seen"=>false)));
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions() {
        return array(
            'count_notification' => new \Twig_Function_Method($this, 'countNotification')
        );
    }

    public function getName()
    {
        return 'count_notification_extension';
    }


}
