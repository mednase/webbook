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
 * Class YearType
 * @author Mobelite <contact@mobelite.fr>
 */
class YearType extends AbstractType
{
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
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound'  => false,
            'choices' => $this->getYears(),
            'label' => 'Année',
        ));
    }

    public function getName(){
        return 'years';
    }

    public function getParent(){
        return 'select_checkbox';
    }

    public function getYears(){
        $date = new \DateTime();
        $year = intval($date->format('Y'));
        $years = array();
        for ($i = $year - 10; $i < $year + 1; $i++) {
            $years[$i] = $i;
        }

        return $years;
    }
}
