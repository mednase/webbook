<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Core\LibBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

/**
 * Class YearsSelector
 * @author Mobelite <contact@mobelite.fr>
 */
class YearsSelector extends AbstractType
{
    private $_choices;
    public function __construct(){
        $now = new \DateTime();
        $now = intval($now->format('Y'));
        $limit = $now-11;
        for ($i = $now; $i >= $limit; $i--) {
            $_choices[$i] = $i;
        }
        $this->_choices = $_choices;
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        // Adds a custom block prefix
        array_splice(
            $view->vars['block_prefixes'],
            array_search($this->getName(), $view->vars['block_prefixes']),
            0
        );
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver){
        $resolver
            ->setDefaults(array(
                'choices'                   => $this->_choices,
                'empty_value'               => null,
                'required'                  => false,
                'attr'                      => array(
                    'data-max-options'          => 5,
                    'data-width'                => "auto",
                    'class'                     => 'show-menu-arrow',
                ),
                'label'                     => 'Année',
                'multiple'                  => false,
            ));
    }

    public function getParent(){
        return 'select_checkbox';
    }

    public function getName(){
        return 'years_selector';
    }
}
