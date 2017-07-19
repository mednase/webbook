<?php

namespace Core\LibBundle\Form\Model;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\File;

class PictureUploader extends AbstractType
{

    private $data_class;
    private $name;

    public function __construct($data_class, $name){
        $this->data_class   = $data_class;
        $this->name         = $name;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', 'afe_single_upload',array(
                   'constraints' => array(
                         new File( array('maxSize' => 2048000)),
                    ),
                    'required' => false,
                    'attr'       => array(
                        'accept' => 'application/*,image/*',
                    ),
                    'label'     => null,
              ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->data_class,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
