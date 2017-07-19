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
 * Class WeeksType
 * @author Mobelite <contact@mobelite.fr>
 */
class WeeksType extends AbstractType
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
            'choices' => $this->getWeeks(),
            'label' => 'Semaine',
        ));
    }

    public function getName(){
        return 'weeks';
    }

    public function getParent(){
        return 'choice';
    }

    public function getWeeks(){
        $weeks = array();
        for ($i = 1; $i < $this->numberOfWeeks() + 1; $i++) {
            $weeks[$i] = 'Semaine '.$i;
        }

        return $weeks;
    }

    private function numberOfWeeks() {
        $date = new \DateTime();
        $year = intval($date->format('Y'));
        $date->setISODate($year, 53);
        return ($date->format("W") === "53" ? 53 : 52);
    }
}
