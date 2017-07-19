<?php

namespace Webbook\MainBundle\Form;

use Doctrine\ORM\EntityRepository;
use Webbook\MainBundle\Entity\Authorization;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuthorizationType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('user')
                ->add('canRead',null,array("label"=>false,'attr'=>array("class"=>'form-control')))
                ->add('canWrite',null,array("label"=>false,'attr'=>array("class"=>'form-control')))
                ->add('canDelete',null,array("label"=>false,'attr'=>array("class"=>'form-control')))
                ->add('limited',null,array("label"=>false,'attr'=>array("class"=>'form-control')));

        $builder->setData(new Authorization());

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Webbook\MainBundle\Entity\Authorization'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'Webbook_mainbundle_authorization';
    }


}
