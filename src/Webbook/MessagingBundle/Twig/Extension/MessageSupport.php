<?php

namespace Webbook\MessagingBundle\Twig\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;

class MessageSupport extends \Twig_Extension
{
    private $container;

    function __construct(ContainerInterface $container)
    {
        $this->container=$container;
    }

    public function getRole(){
        return $this->container->get('role.route.service')->getRouteRole();
    }

    public function countNewMessages(){
        $em=$this->container->get('doctrine.orm.entity_manager');
        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        return count($em->getRepository('MessagingBundle:UserHasMessage')
            ->findBy(['seen'=>false,'deleted'=>false,'receiver'=>$user->getId()]));
    }

    function filesize_formatted($size)
    {
        $units = array( 'B', 'KB', 'MB');
        $power = $size > 0 ? floor(log($size, 1024)) : 0;
        return number_format($size / pow(1024, $power), 0, '.', ',') . ' ' . $units[$power];
    }

    public function getFunctions()
    {
        return array(
            'getRole' => new \Twig_Function_Method($this, 'getRole'),
            'countNewMessages' => new \Twig_Function_Method($this, 'countNewMessages'),
            'getFormattedSize' =>  new \Twig_Function_Method($this, 'filesize_formatted')
        );
    }


    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'message_support';
    }
}
