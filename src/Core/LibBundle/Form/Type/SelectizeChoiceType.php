<?php

namespace Core\LibBundle\Form\Type;

use Avocode\FormExtensionsBundle\Form\DataTransformer\ArrayToStringTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class SelectizeChoiceType
 */
class SelectizeChoiceType extends AbstractType
{
    private $widget;

    public function __construct($widget='choice')
    {
        $this->widget = $widget;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ('hidden' === $this->widget && !empty($options['configs']['multiple'])) {
            $builder->addViewTransformer(new ArrayToStringTransformer());
        } elseif ('hidden' === $this->widget && empty($options['configs']['multiple']) && null !== $options['transformer']) {
            $builder->addModelTransformer($options['transformer']);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['configs'] = $options['configs'];
        $view->vars['hidden'] = $options['hidden'];

        // Adds a custom block prefix
        array_splice(
            $view->vars['block_prefixes'],
            array_search($this->getName(), $view->vars['block_prefixes']),
            0
        );

        $view->vars = array_merge($view->vars, array(
            'create'                            => $options['create'],
            'maxItems'                          => $options['maxItems'],
            'plugins'                           => $options['plugins'],
            'optgroups'                         => $options['optgroups'],
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $defaults = array(
            'placeholder'        => 'Select a value',
        );

        $resolver
            ->setDefaults(array(
                'hidden'                => false,
                'configs'               => $defaults,
                'transformer'           => null,
                'required'              => false,
                'create'                => false,
                'empty_value'           => null,
                'maxItems'              => 0,
                'plugins'               => array(),
                'optgroups'             => array(),
            ))
            ->setNormalizers(array(
                'configs' => function (Options $options, $configs) use ($defaults) {
                    return array_merge($defaults, $configs);
                },
            ))
            ->setAllowedTypes(array(
                'maxItems'                              => array('integer'),
                'create'                                => array('bool'),
                'plugins'                               => array('array'),
                'optgroups'                             => array('array'),
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return $this->widget;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'selectize_choice';
    }
}
