<?php

namespace Core\LibBundle\Form\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\ResolvedFormTypeInterface;

class MobeliteUploadSubscriber implements EventSubscriberInterface
{
    /**
     * @var string Single upload field configs
     */
    protected $configs = array();
    
    protected $files = array();

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SUBMIT => array('preSubmit', 0),
            FormEvents::SUBMIT => array('onSubmit', 0),
            FormEvents::POST_SUBMIT => array('postSubmit', 0),
            FormEvents::PRE_SET_DATA => array('preSetData', 0),
        );
    }
    
    public function preSetData(FormEvent $event)
    {
        $form = $event->getForm();
        $obj = $event->getData();

        //can be null if prototype in collection
        if($obj == null) {
            return;
        }

        foreach ($form->all() as $child) {
            if ($this->isFieldSingleUpload($child->getConfig()->getType())) {
                $name = $child->getName();
                $getterName = 'get'.ucfirst($name);
                $this->files[$name] = $obj->$getterName();
            }
        }
    }

    public function preSubmit(FormEvent $event)
    {
        $form = $event->getForm();
        $post = $event->getData();

        var_dump($post);die;

        foreach ($form->all() as $child) {
            if ($this->isFieldSingleUpload($child->getConfig()->getType())) {
                $childPost = $post[$child->getName()];
                $options = $child->getConfig()->getOptions();

                $this->configs[$child->getName()] = array(
                    'deleteable' => $options['deleteable'],
                );

                if ($childPost) {
                    if ($options['deleteable'] && array_key_exists('delete', $childPost)) {
                        // capture name and store it for onSubmit event
                        $this->configs[$child->getName()]['delete'] = $childPost['delete'];
                    }

                    // remove additional data to prevent errors
                    // by overwriting them with posted file
                    $post[$child->getName()] = $childPost['file'];   
                }
            }

            $event->setData($post);
        }
    }

    public function onSubmit(FormEvent $event)
    {
        $form = $event->getForm();
        $data = $form->getData();

        if ($data != null && count($this->configs) > 0) {
            foreach ($this->configs as $field => $config) {
                if ($config['deleteable'] && array_key_exists('delete', $config) && $config['delete']) {
                    $getterPath = 'get'.ucfirst($config['deleteable']);
                    $setterPath = 'set'.ucfirst($config['deleteable']);

                    // save original file for postSubmit event
                    $config['original_path'] = $data->$getterPath();

                    // remove file
                    $data->$setterPath(null);
                }
                if(!array_key_exists('delete', $config) || $config['delete'] == false){
                    $setter = 'set'.ucfirst($field);
                    $getter = 'get'.ucfirst($field);
                    if($data->$getter() === null)
                        $data->$setter($this->files[$field]);
                }
            }

            $event->setData($data);
        }
    }

    public function postSubmit(FormEvent $event)
    {
        if (count($this->configs) > 0) {
            $form = $event->getForm();
            $data = $event->getData();

            if (!$form->isValid()) {
                foreach ($this->configs as $field => $config) {
                    if ($config['deleteable'] && array_key_exists('original_path', $config)) {
                        $setterPath = 'set'.ucfirst($config['deleteable']);
                        // revert to original name
                        $data->$setterPath($config['original_path']);
                    }
                }

                $event->setData($data);
            }
        }
    }
    
    private function isFieldSingleUpload(ResolvedFormTypeInterface $formTypeInterface = null)
    {
        if($formTypeInterface == null) return false;
        if($formTypeInterface->getName() == 'mobelite_file') return true;

        return $this->isFieldSingleUpload($formTypeInterface->getParent());
    }
}
