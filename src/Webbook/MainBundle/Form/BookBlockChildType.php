<?php
/**
 * Created by PhpStorm.
 * User: medna
 * Date: 03/04/2017
 * Time: 10:33
 */

namespace Webbook\MainBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookBlockChildType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('blocks',CollectionType::class,array('entry_type'=>BookBlockType::class,
              'allow_add'=>true,
              'by_reference'=>false,
              'prototype_name' => '__num-block__'
          ));

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Webbook\MainBundle\Entity\Book',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'book_block_child_widget';
    }



}