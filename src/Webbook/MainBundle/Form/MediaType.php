<?php

namespace Webbook\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;

class MediaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('mediaFile', VichFileType::class, ['label'=>false,
            'attr'=>['class'=>'input-avatar'],
            'required' => false,
            'allow_delete' => true,
            'download_link' => true, // optional, default is true
        ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Webbook\MainBundle\Entity\Media',
            'allow_extra_fields' => true,

        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'Webbook_mainbundle_media';
    }


}
