<?php

namespace Core\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName',null,['label'=>'Prénom'])
                ->add('lastName',null,['label'=>'Nom'])
                ->add('civility',null,['label'=>'Civilité'])
                ->add('phone',null,['label'=>'Téléphone'])
                ->add('address',null,['label'=>'Adresse'])
                ->add('country')
                ->add('city')
                ->add('zipCode')
                ->add('birthday',DateType::class, array(
                    'widget' => 'single_text',
                    'html5' => false
                ,'label'=>'Date naissance'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Core\UserBundle\Entity\Profile'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'core_userbundle_profile';
    }


}
