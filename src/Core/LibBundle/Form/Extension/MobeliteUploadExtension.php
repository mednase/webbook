<?php

namespace Core\LibBundle\Form\Extension;

use Core\LibBundle\Form\EventListener\MobeliteUploadSubscriber;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

class MobeliteUploadExtension extends AbstractTypeExtension
{
    /**
     * Adds a single upload subscriber to all compound forms
     *
     * @param FormBuilderInterface $builder The form builder
     * @param array                $options The options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($options['compound']) {
            $builder->addEventSubscriber(new MobeliteUploadSubscriber());
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getExtendedType()
    {
        return 'form';
    }
}

