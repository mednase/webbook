<?php

namespace Webbook\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookBlockType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder ->add('title')
            ->add('parent')
            ->add('authorizations',CollectionType::class,array('attr'=>['class'=>'hidden'],
                'entry_type'=>AuthorizationType::class,
                'allow_add'=>true,
                'allow_delete'=>true,
                'by_reference'=>false,
            ))
            ->add('options',BlockOptionsType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Webbook\MainBundle\Entity\BookBlock',
            'csrf_protection'=>false,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'block';
    }



}
