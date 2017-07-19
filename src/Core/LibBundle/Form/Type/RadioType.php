<?php

/*
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core\LibBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class RadioType
 * @author Mobelite <contact@mobelite.fr>
 */
class RadioType extends AbstractType
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
            'format'                                      => $options['format'],
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'format'           => 'inline',
        ))
        ->setAllowedTypes(array(
            'format'                               => array('string'),
        ))
        ->setAllowedValues(array(
            'format'                            => array('inline', 'list'),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'mobelite_radio';
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'choice';
    }
}
