<?php

namespace Webbook\MainBundle\Twig\Extension;

use Core\UserBundle\Entity\User;
use Webbook\MainBundle\Entity\BookBlock;
use Webbook\MainBundle\Entity\Version;
use Symfony\Component\DependencyInjection\ContainerInterface;

class BlockOptions extends \Twig_Extension
{

    private $container;

    /**
     * BlockOptions constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container=$container;
    }

    public function hasPermission($permission ,BookBlock $block){
        $mainBlock=$block;
        $param=array();
        $param['r']=strpos($permission,'r');
        $param['w']=strpos($permission,'w');
        $param['d']=strpos($permission,'d');
        $param['v']=strpos($permission,'v');
        /** @var User $user */
        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        $em=$this->container->get('doctrine.orm.entity_manager');

        if($block){
            $block=$em->find(BookBlock::class,$block);
            if(in_array($block->getBook(),($user->getHasBook()->toArray()))){
                return true;
            }
            while ($block!=null){
                $limited=$block->getId()!=$mainBlock->getId();
                if($em->getRepository('MainBundle:BookBlock')->hasUserPermission($block->getId(),$user->getId(),$param,$limited)){
                    return true;
                }
                else
                    $block=$block->getParent();
            }
        }

        return false;
    }

    public function versionHasStatus($status,BookBlock $block){
        $em=$this->container->get('doctrine.orm.entity_manager');
        $version=$em->getRepository('MainBundle:Version')->findOneBy(['bookBlock'=>$block->getId(), 'status'=>$status]);
            if($version)
                return $version;
        return null;
    }

    public function versionActivityProgress(Version $version){
        $em=$this->container->get('doctrine.orm.entity_manager');
        if($version->getStatus()==0)
            return $version->getProgress();
        elseif($version->getStatus()==1){
            $validationActivity=$em->getRepository('MainBundle:ValidationRequest')->findOneBy(['version'=>$version->getId()]);
            return $validationActivity->getProgress();
        }
        return 0;
    }

    public function isChildOf(BookBlock $child,BookBlock $parent){
        if($child->getParent())
            if($child->getParent()->getId()==$parent->getId())
                return true;
            else
               return $this->isChildOf($child->getParent(),$parent);

        return false;
    }

    public function sortByPosition($content) {
        if (is_a($content, 'Doctrine\Common\Collections\Collection')) {
            $content = $content->toArray();
        }
        if (count($content) < 1) {
            return $content;
        } else {
           /** @var BookBlock $a   */
            @usort($content, function ($a, $b) {
                    $a_sort_value = $a->getPosition();
                    $b_sort_value = $b->getPosition();

                if ($a_sort_value == $b_sort_value) {
                    return 0;
                } else if ($a_sort_value > $b_sort_value) {
                    return 1;
                } else {
                    return -1;
                }
            });
        }
        return $content;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions() {
        return array(
            'has_permission' => new \Twig_Function_Method($this, 'hasPermission'),
            'version_has_status' => new \Twig_Function_Method($this, 'versionHasStatus'),
            'version_activity_progress' => new \Twig_Function_Method($this, 'versionActivityProgress'),
            'isChildOf' =>  new \Twig_Function_Method($this, 'isChildOf'),
            );
    }

    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('sortByPosition', array($this, 'sortByPosition'))
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'block_operations';
    }
}
