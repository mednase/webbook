<?php
/**
 * Created by PhpStorm.
 * User: medna
 * Date: 30/05/2017
 * Time: 18:53
 */

namespace Webbook\MainBundle\Listener;


use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Webbook\MainBundle\Entity\BlockHistoric;
use Webbook\MainBundle\Entity\BookBlock;
use Webbook\MainBundle\Entity\Version;

class blockHistoricListener  implements EventSubscriber
{

    private $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }


    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();
        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        if ($entity instanceof BookBlock) {
            $historic=new BlockHistoric();
            $historic->setMessage("Création du block par ".$user->getFullName());
            $entity->addHistoric($historic);
        }
        if ( $entity instanceof Version) {
            $historic=new BlockHistoric();
            $historic->setMessage("Debut d'édition de version numéro ".$entity->getNumber()."par ".$user->getFullName());
            /** Version $entity */
            $entity->getBookBlock()->addHistoric($historic);
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
            'prePersist',
        );
    }
}