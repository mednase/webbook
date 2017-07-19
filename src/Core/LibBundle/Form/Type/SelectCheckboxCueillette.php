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
 * Class SelectCheckboxCueillette
 * @author Mobelite <contact@mobelite.fr>
 */
class SelectCheckboxCueillette extends AbstractType
{
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
                'class'                     => 'CueillettesBundle:Cueillettes',
                'empty_value'               => null,
                'required'                  => false,
                'attr'                      => array(
                    'data-width'                => "auto",
                    'class'                     => 'show-menu-arrow',
                    'placeholder'               => 'Choisir une entitée',
                ),
                'label'                     => 'Entité',
                'group_by'                  => 'region',
                'choice_value'              => 'token',
                'choice_label'              => 'code',
                'query_builder'             => function($em){
                    return $em->createQueryBuilder('e')
                    ->where('e.isActive = :isActive')
                    ->setParameters(array(
                        'isActive' => true,
                    ))
                    ->orderBy('e.rank');
                },
            ))
        ;
    }

    public function getParent(){
        return 'select_checkbox_entity';
    }

    public function getName(){
        return 'select_checkbox_cueillette';
    }
}
