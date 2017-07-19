<?php
/**
 * Created by PhpStorm.
 * User: medna
 * Date: 21/05/2017
 * Time: 14:48
 */

namespace Webbook\MessagingBundle\Services;


use SensioLabs\Security\SecurityChecker;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;

class routeRole
{

    private $authChecker;

    function __construct(AuthorizationChecker $authorizationChecker)
    {
        $this->authChecker=$authorizationChecker;
    }

    public function getRouteRole(){
        if($this->authChecker->isGranted('ROLE_ADMINISTRATOR'))
            return 'administrator';
        elseif($this->authChecker->isGranted('ROLE_VALIDATOR'))
            return 'validator';
        elseif ($this->authChecker->isGranted('ROLE_AUTHOR'))
            return 'author';
        else
            return "";
    }

}