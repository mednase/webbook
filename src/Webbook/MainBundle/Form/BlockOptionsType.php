<?php

namespace Webbook\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BlockOptionsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('showTitle',null,array("label"=>false,'attr'=>array("class"=>'form-control')))
            ->add('indexed',null,array("label"=>false,'attr'=>array("class"=>'form-control')))
            ->add('paginated',null,array("label"=>false,'attr'=>array("class"=>'form-control')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Webbook\MainBundle\Entity\BlockOptions'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'Webbook_mainbundle_blockoptions';
    }


}
