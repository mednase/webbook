<?php
/**
 * Created by PhpStorm.
 * User: medna
 * Date: 11/05/2017
 * Time: 23:14
 */

namespace Core\UserBundle\Listener;
use Core\UserBundle\Entity\User;
use FOS\UserBundle\Model\UserInterface;
use JMS\Serializer\SerializationContext;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationFailureEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationFailureResponse;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;


class JWTResponseListener
{
    protected
        $router,
        /**
         * @var AuthorizationChecker $security
         */
        $security;

    public function __construct(ContainerInterface $container)
    {
        $this->container=$container;
        $this->router = $container->get('router');
        $this->security = $container->get('security.authorization_checker');
    }

    /**
     * @param AuthenticationSuccessEvent $event
     */
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
    {
        $data = $event->getData();
        $user = $event->getUser();
        if (!$user instanceof UserInterface) {
            return;
        }
        /** @var User $user */

        $prefix="http://webbook.marzouk-med.loc";
        $url="";
        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        if ($this->security->isGranted('ROLE_ADMINISTRATOR'))
            $url =$prefix.':80'.$this->router->generate('administrator_homepage');
        elseif ($this->security->isGranted('ROLE_VALIDATOR'))
            $url =$prefix.':80'.$this->router->generate('validator_homepage');
        elseif ($this->security->isGranted('ROLE_AUTHOR'))
            $url =$prefix.':80'.$this->router->generate('author_homepage');

        $vich=$this->container->get('vich_uploader.templating.helper.uploader_helper');

        $userInfo['fullName']=$user->getFullName();
        $userInfo['picture']=$user->getPicture()?$vich->asset($user->getPicture(),'mediaFile'):'';
        $data['user'] = $userInfo;
        $data['url']= $url;
        $event->setData($data);
    }

    /**
     * @param AuthenticationFailureEvent $event
     */
    public function onAuthenticationFailureResponse(AuthenticationFailureEvent $event)
    {
        $data = [
            'status'  => '401 Unauthorized',
            'message' => 'Nom d\'utilisateur ou mot de passe incorrect',
        ];

        $response = new JWTAuthenticationFailureResponse($data);

        $event->setResponse($response);
    }
}