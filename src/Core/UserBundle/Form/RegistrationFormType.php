<?php
/**
 * Created by PhpStorm.
 * User: medna
 * Date: 02/05/2017
 * Time: 14:21
 */

namespace Core\UserBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Webbook\MainBundle\Form\SubscriptionType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        return $builder ->add('profile',ProfileType::class)
                        ->add('receiveNewsLetter');
    }


    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'intention'  => 'registration',
            'csrf_protection' => false, //this line does the trick ;)
        ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}