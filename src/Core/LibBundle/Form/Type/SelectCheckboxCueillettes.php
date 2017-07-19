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
 * Class SelectCheckboxCueillettes
 * @author Mobelite <contact@mobelite.fr>
 */
class SelectCheckboxCueillettes extends AbstractType
{
    private $_entityManager, $_choices;

    public function __construct(\Doctrine\ORM\EntityManager $_entityManager){
        $this->_entityManager            = $_entityManager;
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options){
        // Adds a custom block prefix
        array_splice(
            $view->vars['block_prefixes'],
            array_search($this->getName(), $view->vars['block_prefixes']),
            0
        );

        $view->vars = array_merge($view->vars, array(
            'with-favourites'                            => $options['with-favourites'],
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver){
        $resolver
            ->setDefaults(array(
                'choices'                   => $this->buildCueillettes(),
                'empty_value'               => null,
                'required'                  => false,
                'attr'                      => array(
                    'data-width'                => "auto",
                    'class'                     => 'show-menu-arrow',
                    'placeholder'               => 'Choisir une entitée',
                ),
                'label'                     => 'Entité',
                'with-favourites'           => false,
            ))
            ->setAllowedTypes(array(
                'with-favourites'           => array('bool'),
            ));
    }

    private function buildCueillettes(){
        $data = $this->_entityManager->getRepository('CueillettesBundle:Cueillettes')->findActive();
        $gie = $this->_entityManager->getRepository('CueillettesBundle:Cueillettes')->findOneBy(array('code' => 'GIE'));
        $results = array();
        if ($gie) {
            $results[$gie->getToken()] = 'GIE';
        }
        $results['favourites'] = 'Mes favoris';
        foreach ($data as $item) {
            if ($item->getCode() != 'GIE') {
                if (is_object($item->getRegion())) {
                    $results[$item->getRegion()->getSlug()][$item->getToken()] = $item->getCode();
                }else{
                    $results[$item->getToken()] = $item->getCode();
                }
            }
        }
        return $results;
    }

    public function getParent(){
        return 'select_checkbox';
    }

    public function getName(){
        return 'select_checkbox_cueillettes';
    }
}

