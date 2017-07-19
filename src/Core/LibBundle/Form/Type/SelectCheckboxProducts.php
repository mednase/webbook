<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core\LibBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

/**
 * Class SelectCheckboxProducts
 */
class SelectCheckboxProducts extends AbstractType
{
    private $_entityManager, $_choices;

    public function __construct(\Doctrine\ORM\EntityManager $_entityManager){
        $this->_entityManager            = $_entityManager;
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options){
        // Adds a custom block prefix
        array_splice(
            $view->vars['block_prefixes'],
            array_search($this->getName(), $view->vars['block_prefixes']),
            0
        );
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver){
        $resolver
            ->setDefaults(array(
                'choices'                   => $this->buildProducts(),
                'empty_value'               => null,
                'required'                  => false,
                'attr'                      => array(
                    'data-width'                => "auto",
                    'class'                     => 'show-menu-arrow entity_product',
                    'placeholder'               => 'Choisir un produit',
                ),
                'label'                     => 'Produit',
            ));

    }

    private function buildProducts(){
        $data = $this->_entityManager->getRepository('AnnualSaleBundle:Category')->getAllProduct();
        foreach ($data as $item) {
            if ($item->getChildrens()) {
               foreach ($item->getChildrens() as $childrenItem){
                   foreach ($childrenItem->getProduct() as $product ){
                       $results[$item->getToken().'#'.$item->getName()][$childrenItem->getToken().'##'.$childrenItem->getName()][$product->getToken()] = $product->getName();
                   }
               }
            }
        }
        return $results;
    }

    public function getParent(){
        return 'select_checkbox';
    }

    public function getName(){
        return 'select_checkbox_products';
    }
}

