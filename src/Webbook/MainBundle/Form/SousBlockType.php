<?php
/**
 * Created by PhpStorm.
 * User: medna
 * Date: 03/04/2017
 * Time: 11:37
 */

namespace Webbook\MainBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SousBlockType extends AbstractType
{
    private $identifier=null;
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if($builder->getData()){
            $this->identifier=$builder->getData()->getId();
        }

        $builder->add('title')
            ->add('token')
            ->add('parent')
            ->add('level')
            ->add('position')
            ->add('authorizations', CollectionType::class, array('attr' => ['class' => 'hidden'],
                'entry_type' => AuthorizationType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'prototype' => true,
                'prototype_name' => '__auth_name__'
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
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return $this->identifier? 'sousbookblock_widget_'.$this->identifier:'sousbookblock_widget';
    }
}