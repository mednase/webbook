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
 * Class ArrayType
 * @author Mobelite <contact@mobelite.fr>
 */
class ArrayType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        // Adds a custom block prefix
        array_splice(
            $view->vars['block_prefixes'],
            array_search($this->getName(), $view->vars['block_prefixes']),
            0
        );

        $view->vars = array_merge($view->vars, array(
            'sub_label'                            => $options['sub_label'],
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'  => false,
        ));
        $resolver
            ->setDefaults(array(
                'sub_label'                => 'Sous-label',
            ))
            ->setAllowedTypes(array(
                'sub_label'                              => array('string'),
            ));
    }

    public function getName(){
        return 'array';
    }
}
