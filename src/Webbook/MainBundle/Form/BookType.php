<?php

namespace Webbook\MainBundle\Form;

use Core\LibBundle\Form\Type\PriceTextarea;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Webbook\MainBundle\Entity\Book;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',null,array("label"=>'Titre','attr'=>array('placeholder'=>'Titre du livre')))
            ->add('category',null,array("label"=>'Categorie'))
            ->add('mainAuthors',EntityType::class,array('label'=>'Auteurs Principaux','class'=>'Core\UserBundle\Entity\User',
                'query_builder'=>function(EntityRepository $er){
                    return $er->createQueryBuilder("u")->where("u.roles like :role")
                        ->setParameter("role","%ROLE_AUTHOR%");},
                'choice_value' => 'id',
                'choice_label' => 'profile.fullname',
                'placeholder'=>'Choisir un ou plusieurs auteurs',
                'multiple'=>true,
                'by_reference' => false))
            ->add('language',ChoiceType::class,array('label'=>'Langue',
                'choices'=>
                    ['Français'=>'Français',
                        'Anglais'=>'Anglais',
                        'Italien'=>'Italien',
                        'Allemand'=>'Allemand'],
                'preferred_choices'=>'Français'))
            ->add('iSBN',null,array('label'=>'ISBN','attr'=>array('placeholder'=>'ISBN')))
            ->add('price',null,array('label'=>'Prix','attr'=>array('placeholder'=>'Prix du livre')))
            ->add('description',TextareaType::class,array("label"=>"Description","attr"=>['rows'=>10]))
            ->add('publishedPreview',CheckboxType::class,['label'=>'Publier (à venir)'])
        ;


    }
    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Webbook\MainBundle\Entity\Book',
        ));
    }

    public function getName()
    {
        return 'Webbook_mainbundle_book';
    }
}
