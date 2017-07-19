<?php

namespace Core\LibBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class MobeliteFile extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $data = array_key_exists('data', $view->vars) ? $view->vars['data'] : null;

        if($data instanceof UploadedFile && $form->getRoot()->getErrors()) {
            $view->vars['data'] = $data = null;
        }

        $view->vars = array_replace($view->vars, array(
            'type'  => 'file',
            'value' => '',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars = array_merge(
            $view->vars,
            array(
                'defaultImage'    => $options['defaultImage'],
                'fileType'    => $options['fileType'],
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults(array(
            'defaultImage'      => 'assets/img/logo-nav-76.png',
            'fileType'      => 'image',
        ));

        $resolver->setAllowedTypes(array(
            'defaultImage'      => array('string'),
            'fileType'      => array('string'),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'afe_single_upload';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'mobelite_file';
    }
}
