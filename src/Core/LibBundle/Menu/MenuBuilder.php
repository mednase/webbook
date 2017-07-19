<?php

namespace Core\LibBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\HttpFoundation\Request;

/**
 * MenuBuilder
 */
class MenuBuilder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function leftSide(FactoryInterface $factory, array $options)
    {
        $this->em = $this->container->get('doctrine')->getManager();
        $menu = $factory->createItem('root');
        $date = new \DateTime();
        $this->year = intval($date->format('Y'));
        $request = $this->container->get('request');
        $session = $request->getSession();
        $routeName = $request->get('_route');
        if (in_array(
            $routeName,
            array(
                'fdc_enter_data',
                'pp_enter_data',
                'as_enter_data',
                'ce_enter_data',
                'comm_enter_data',
            )
        )) {
            if ($session->has('permissions')) {
                $permissions = $session->get('permissions');
                if (in_array('fdc_enter_data', $permissions)) {
                    $menu->addChild('Feuille de choux', array('route' => 'fdc_enter_data'));
                }
                if (in_array('pp_enter_data', $permissions)) {
                    $menu->addChild('Prix des produits', array('route' => 'pp_enter_data'));
                }
                if (in_array('as_enter_data', $permissions)) {
                    $menu->addChild('Ventes annuelles', array('route' => 'as_enter_data'));
                }
                if (in_array('ce_enter_data', $permissions)) {
                    $menu->addChild('Compte d\'Exploitation', array('route' => 'ce_enter_data'));
                }
                if (in_array('comm_enter_data', $permissions)) {
                    $menu->addChild('Communication', array('route' => 'comm_enter_data'));
                }
            } else {
                $menu->addChild('Feuille de choux', array('route' => 'fdc_enter_data'));
                $menu->addChild('Prix des produits', array('route' => 'pp_enter_data'));
                $menu->addChild('Ventes annuelles', array('route' => 'as_enter_data'));
                $routeCeEnterData = array('route' => 'ce_enter_data');
                $menu->addChild('Compte d\'Exploitation', $routeCeEnterData);
                $menu->addChild('Communication', array('route' => 'comm_enter_data'));
            }
        }

        $stats = array(
            // fdc routes
            'fdc_analyzer_synthesis',
            'fdc_analyzer_graphical',
            'fdc_analyzer_evolution',
            'fdc_analyzer_comparative',
            'fdc_analyzer_evolution_gie',
            'fdc_analyzer_evolution_region',

            // products prices routes
            'pp_analyzer_stats_index',
            'pp_analyzer_stats_history',
            'pp_analyzer_stats_comparative',
            'pp_analyzer_stats_product',

            // annual_sales routes
            'as_analyzer_stats_manipulator_my_favori',
            'as_analyzer_stats_manipulator_gie',
            'as_analyzer_stats_manipulator_chronologique',
            'as_analyzer_stats_area',
            'as_analyzer_stats_manipulator',
            'as_analyzer_stats_graphic',
            'as_analyzer_stats_frequentation',

            // account exploitation routers
            'ce_analyzer_stats_manipulator',

            // Area routes
            'analyzer_area',
            'ce_analyzer_stats_manipulator_chronologique',

            // account exploitation routers
            'comm-favoris',
            'ce_analyzer_stats_manipulator_gie',
            'ce_analyzer_stats_manipulator_chronologique',

            // communication
            'comm_analyzer_stats_data',
        );
        if (in_array($routeName, $stats)) {
            if ($session->has('permissions')) {
                $permissions = $session->get('permissions');
                if (in_array('fdc_analyzer', $permissions)) {
                    $this->fdcStats($menu);
                }
                if (in_array('pp_analyzer_stats', $permissions)) {
                    $this->ppStats($menu, $routeName);
                }
                if (in_array('as_analyzer_stats', $permissions)) {
                    $this->annualSales($menu, $routeName);
                }
                if (in_array('ce_analyzer_stats', $permissions)) {
                    $this->accountExploitation($menu, $routeName);
                }
                if (in_array('comm_analyzer_stats', $permissions)) {
                    $this->communication($menu, $routeName);
                }
            } else {
                $this->fdcStats($menu);
                $this->ppStats($menu, $routeName);
                $this->annualSales($menu, $routeName);
                $this->accountExploitation($menu, $routeName);
                $this->communication($menu, $routeName);
            }
            $menu->addChild('Surfaces', array('route' => 'analyzer_area'));
        }

        return $menu;
    }

    public function mainSection(FactoryInterface $factory, array $option)
    {
        $menu = $factory->createItem('root');
        $menu->addChild('Feuille de choux', array('route' => 'fdc_enter_data'));

        $menu['Feuille de choux']->addChild('Synthése', array('route' => 'fdc_enter_data'));

        return $menu;
    }

    public function profile(FactoryInterface $factory, array $option)
    {
        $menu = $factory->createItem('root');
        $this->settings($menu);

        return $menu;
    }

    public function administration(FactoryInterface $factory, array $options)
    {
        $request = $this->container->get('request');
        $session = $request->getSession();

        $menu = $factory->createItem('root');
        $this->accounts($menu, $request);
        if ($session->has('permissions')) {
            $permissions = $session->get('permissions');
            if (in_array('central_purchasing_administration', $permissions)) {
                $this->centralPurchasingAdmin($menu, $request);
            }
        } else {
            $this->centralPurchasingAdmin($menu, $request);
        }
        if ($this->container->get('security.context')->isGranted('ROLE_GENERAL')) {
            $this->products($menu, $request);
        }

        if ($this->container->get('security.context')->isGranted('ROLE_SUPPORT')) {
            // $this->support($menu, $request);
        }

        return $menu;
    }

    private function accounts($menu, $request)
    {
        $show = false;
        if ($hasPermission = $request->getSession()->has('permissions')) {
        }
        $mode = 'admin';
        if (!$hasPermission) {
            $mode = 'super-admin';
        }
        if ($hasPermission)
        {
            $permissions = $request->getSession()->get('permissions');
            if(in_array('administration_', $permissions)){
                $show = true;
            }
        }

        if ($show || !$hasPermission)
        {
            $menu->addChild('Comptes', array(
                'route' => 'administration_intranet_utilisateurs',
                'routeParameters' => array(
                    'mode' => $mode,
                ),
            ));

            $menu['Comptes']->addChild(
                'Utilisateurs',
                array(
                    'route' => 'administration_intranet_utilisateurs',
                    'routeParameters' => array(
                        'mode' => $mode,
                    ),
                )
            );
            if (!$this->container->get('security.context')->isGranted('ROLE_ADMIN')) {
                $token = '';
                $cueillette = $this->container->get('cueillettes.manager')->getMainCueillette();
                if (is_object($cueillette)) {
                    $token = $cueillette->getToken();
                }
                $menu['Comptes']->addChild(
                    'Cueillettes',
                    array(
                        'route' => 'administration_cueillettes_edit',
                        'routeParameters' => array(
                            'mode' => $mode,
                            'token' => $token
                        ),
                    )
                );
            } else {
                $menu['Comptes']->addChild(
                    'Gestion des accés',
                    array(
                        'route' => 'administration_groups',
                        'routeParameters' => array(),
                    )
                );
                $menu['Comptes']->addChild(
                    'Cueillettes',
                    array(
                        'route' => 'administration_cueillettes',
                        'routeParameters' => array(
                            'mode' => $mode,
                        ),
                    )
                );
            }
        }
        $this->verfiyOrigin($menu['Comptes']);
    }

    private function support($menu)
    {
        $menu->addChild('Support', array('route' => 'administration_groups'));
        $menu['Support']->addChild('Groupes', array('route' => 'administration_groups'));
        $menu['Support']->addChild('Routers', array('route' => 'administration_routers'));
    }

    private function settings($menu)
    {
        $menu->addChild('Profil', array('route' => 'admin_profile_edit'));
        $menu->addChild('Préférences', array('route' => 'admin_profile_preferences'));
        $menu->addChild('Réinitialisation mot de passe', array('route' => 'admin_profile_change_password'));
    }

    private function centralPurchasingAdmin($menu)
    {
        if ($this->container->get('security.context')->isGranted('ROLE_GENERAL')) {
            $menu->addChild('Centrale d\'achat', array('route' => 'administration_year'));
            $menu['Centrale d\'achat']->addChild(
                'Création catalogues',
                array('route' => 'administration_catalogues_years')
            );
            $menu['Centrale d\'achat']->addChild(
                'Années',
                array('route' => 'administration_year')
            );
            $menu['Centrale d\'achat']->addChild(
                'Catalogues',
                array('route' => 'administration_catalogues_cata')
            );
            $menu['Centrale d\'achat']->addChild('Gestion des articles', array('route' => 'administration_family'));
            $menu['Centrale d\'achat']['Gestion des articles']->addChild(
                'Familles',
                array('route' => 'administration_family')
            );
            $menu['Centrale d\'achat']['Gestion des articles']->addChild(
                'Sous-familles',
                array('route' => 'administration_sub_family')
            );
            $menu['Centrale d\'achat']['Gestion des articles']->addChild(
                'Articles',
                array('route' => 'administration_articles')
            );
            $menu['Centrale d\'achat']->addChild(
                'Gestion des Fournisseurs',
                array('route' => 'administration_providers')
            );

            $this->verfiyOrigin($menu['Centrale d\'achat']);
            $this->verfiyOrigin($menu['Centrale d\'achat']['Gestion des articles']);
        }
    }

    public function products($menu)
    {
        $menu->addChild(
            'Gestion des Produits',
            array(
                'route' => 'intranet_administration_categories',
                'routeParameters' => array(
                    'mode' => 'famille',
                ),
            )
        );

        /**
         * prix des produits
         */
        $menu['Gestion des Produits']->addChild(
            'Prix des produits',
            array(
                'route' => 'intranet_administration_categories',
            )
        );
        $menu['Gestion des Produits']['Prix des produits']->addChild(
            'Familles',
            array(
                'route' => 'intranet_administration_categories',
            )
        );
        $menu['Gestion des Produits']['Prix des produits']->addChild(
            'Sous Familles',
            array(
                'route' => 'intranet_administration_sub_categories',
            )
        );
        $menu['Gestion des Produits']['Prix des produits']->addChild(
            'Produits',
            array(
                'route' => 'intranet_administration_produits',
            )
        );

        $this->verfiyOrigin($menu['Gestion des Produits']['Prix des produits']);

        /**
         * Vente annuelle
         */
        $menu['Gestion des Produits']->addChild(
            'Ventes annuelles',
            array(
                'route' => 'administration_vente_annuelle_category',
            )
        );
        $menu['Gestion des Produits']['Ventes annuelles']->addChild(
            'Familles',
            array(
                'route' => 'administration_vente_annuelle_category',
            )
        );
        $menu['Gestion des Produits']['Ventes annuelles']->addChild(
            'Sous Familles',
            array(
                'route' => 'administration_vente_annuelle_sub_category',
            )
        );
        $menu['Gestion des Produits']['Ventes annuelles']->addChild(
            'Produits',
            array(
                'route' => 'administration_annual_sales_products',
            )
        );

        $this->verfiyOrigin($menu['Gestion des Produits']['Ventes annuelles']);
    }

    public function centralPurchasing(FactoryInterface $factory, array $options)
    {
        $catalogues = null;
        $menu = $factory->createItem('root');
        $em = $this->container->get('doctrine')->getManager();
        $mode = 'standard';
        $request = $this->container->get('request');
        $modeRequest = $request->query->get('mode');
        if ($modeRequest) {
            $mode = $modeRequest;
        }

        $session = $request->getSession();
        if (!$session->has('permissions')) {
            $catalogues = $em->getRepository('CentralPurchasingBundle:CataloguesYears')->findMenu();
        } else {
            $parentsId = $this->container->get('central_purchasing.extension')->controlFamilies();
            if (count($parentsId)) {
                $catalogues = $em->getRepository('CentralPurchasingBundle:CataloguesYears')->findMenu($parentsId);
            }
        }

        if ($catalogues) {
            $data = array();
            foreach ($catalogues as $catalogue) {
                $title = $catalogue['catalogue'];
                $data[$title][$catalogue['family']] = $catalogue['token'];
            }
            if ($data) {
                $menu->addChild(
                    'Commandes Actuelles',
                    array(
                        'route' => 'central_purchasing',
                        'routeParameters' => array(
                            'token' => '#',
                            'mode' => $mode,
                        ),
                    )
                );
                foreach ($data as $name => $families) {

                    $menu['Commandes Actuelles']->addChild(
                        $name,
                        array(
                            'route' => 'central_purchasing',
                            'routeParameters' => array(
                                'token' => '#',
                                'mode' => $mode,
                            ),
                        )
                    );
                    foreach ($families as $family => $token) {
                        $menu['Commandes Actuelles'][$name]->addChild(
                            $family,
                            array(
                                'route' => 'central_purchasing',
                                'routeParameters' => array(
                                    'token' => $token,
                                    'mode' => $mode,
                                ),
                            )
                        );
                    }
                }
            } else {
                $menu->addChild('Commandes Actuelles', array('route' => 'central_purchasing_empty'));
            }
        }
        $data = array();
        $catalogues = $em->getRepository('CentralPurchasingBundle:CataloguesYears')->findOldMenu();
        foreach ($catalogues as $catalogue) {
            $title = $catalogue['catalogue'] . ' ' . $catalogue['year'];
            $data[$title][$catalogue['family']] = $catalogue['token'];
        }
        if (count($data)) {
            $menu->addChild(
                'Commandes Anciennes',
                array(
                    'route' => 'central_purchasing_show',
                    'routeParameters' => array(
                        'token' => '#',
                        'mode' => $mode,
                    ),
                )
            );
            foreach ($data as $name => $families) {
                $menu['Commandes Anciennes']->addChild(
                    $name,
                    array(
                        'route' => 'central_purchasing_show',
                        'routeParameters' => array(
                            'token' => '#',
                            'mode' => $mode,
                        ),
                    )
                );
                foreach ($families as $key => $token) {
                    $menu['Commandes Anciennes'][$name]->addChild(
                        $key,
                        array(
                            'route' => 'central_purchasing_show',
                            'routeParameters' => array(
                                'token' => $token,
                                'mode' => $mode,
                            ),
                        )
                    );
                }
            }
        }

        return $menu;
    }

    public function fosMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->addChild('Utilisateurs', array('uri' => '#'));
        $menu['Utilisateurs']->addChild('Profile', array('route' => 'fos_user_profile_show'));

        return $menu;
    }

    private function fdcStats($menu)
    {
        $request = $this->container->get('request');
        $menu->addChild('Feuille de choux', array('route' => 'fdc_analyzer_synthesis'));
        $cueillette = $this->container->get('cueillettes.manager')->getMainCueillette();
        $token = $cueillette->getToken();

        $menu['Feuille de choux']->addChild(
            'Synthèse',
            array(
                'route' => 'fdc_analyzer_synthesis',
            )
        );
        $parameters = array(
            'token' => $token,
        );
        if ($request->get('_route') == 'fdc_analyzer_evolution') {
            $parameters = array_merge($parameters, $request->get('_route_params'));
        }

        $menu['Feuille de choux']->addChild(
            'Evolution',
            array(
                'route' => 'fdc_analyzer_evolution',
                'routeParameters' => $parameters,
            )
        );

        $target = 'fdc_analyzer_graphical';
        if ($request->get('_route') == 'fdc_analyzer_comparative') {
            $target = 'fdc_analyzer_comparative';
        }
        $menu['Feuille de choux']->addChild(
            'Graphiques',
            array(
                'route' => $target,
            )
        );

        $this->verfiyOrigin($menu['Feuille de choux']);
    }

    private function ppStats($menu, $routeName)
    {
        $request = $this->container->get('request');
        $menu->addChild('Prix des produits', array('route' => 'pp_analyzer_stats_index'));
        if ($routeName == 'pp_analyzer_stats_product') {
            $menu['Prix des produits']->addChild(
                'Synthèse',
                array(
                    'route' => 'pp_analyzer_stats_product',
                )
            );
        } else {
            $menu['Prix des produits']->addChild(
                'Synthèse',
                array(
                    'route' => 'pp_analyzer_stats_index',
                )
            );
        }
        $em = $this->container->get('doctrine')->getManager();
        $entity = $em->getRepository('ProductPriceBundle:Product')->findOneBy(
            array(
                'name' => 'Fraises Saison',
            )
        );
        $ppRouteParams = array('token' => $entity->getToken());
        $targetRote = 'pp_analyzer_stats_history';
        if ($request->get('_route') == 'pp_analyzer_stats_comparative') {
            $targetRote = 'pp_analyzer_stats_comparative';
        }
        if ($request->get('_route_params')) {
            if (array_key_exists('token', $request->get('_route_params'))) {
                $ppRouteParams = $request->get('_route_params');
            }
        }
        if ($entity) {
            $menu['Prix des produits']->addChild(
                'Graphiques',
                array(
                    'route' => $targetRote,
                    'routeParameters' => $ppRouteParams,
                )
            );
        }

        $this->verfiyOrigin($menu['Prix des produits']);
    }

    private function annualSales($menu, $routeName)
    {
        if ($this->container->getParameter('annual_sale.stats')) {
            $routeAS = array(
                'route' => 'as_analyzer_stats_manipulator_my_favori',
                'routeParameters' => array(
                    'view' => 'surface',
                ),
            );
            $routeQty = array(
                'route' => 'as_analyzer_stats_manipulator_my_favori',
                'routeParameters' => array(
                    'view' => 'quantite',
                ),
            );
            $routePREQ = array(
                'route' => 'as_analyzer_stats_manipulator_my_favori',
                'routeParameters' => array(
                    'view' => 'preq',
                ),
            );
            $routeAVHQ = array(
                'route' => 'as_analyzer_stats_manipulator_my_favori',
                'routeParameters' => array(
                    'view' => 'avhq',
                ),
            );
            $routeCa = array(
                'route' => 'as_analyzer_stats_manipulator_my_favori',
                'routeParameters' => array(
                    'view' => 'ca',
                ),
            );
            $routePRECA = array(
                'route' => 'as_analyzer_stats_manipulator_my_favori',
                'routeParameters' => array(
                    'view' => 'preca',
                ),
            );
            $routeAVHCA = array(
                'route' => 'as_analyzer_stats_manipulator_my_favori',
                'routeParameters' => array(
                    'view' => 'avhca',
                ),
            );
            $routeCaT = array(
                'route' => 'as_analyzer_stats_manipulator_my_favori',
                'routeParameters' => array(
                    'view' => 'cat',
                ),
            );
            $routeF = array(
                'route' => 'as_analyzer_stats_frequentation',
                'routeParameters' => array(
                    'view' => 'mes-favoris',
                ),
            );

            foreach (array('my_favori', 'gie', 'chronologique') as $type) {
                if ($routeName == 'as_analyzer_stats_manipulator_' . $type) {
                    $routeAS = array(
                        'route' => 'as_analyzer_stats_manipulator_' . $type,
                        'routeParameters' => array(
                            'view' => 'surface',
                        ),
                    );
                    $routeQty = array(
                        'route' => 'as_analyzer_stats_manipulator_' . $type,
                        'routeParameters' => array(
                            'view' => 'quantite',
                        ),
                    );
                    $routePREQ = array(
                        'route' => 'as_analyzer_stats_manipulator_' . $type,
                        'routeParameters' => array(
                            'view' => 'preq',
                        ),
                    );
                    $routeAVHQ = array(
                        'route' => 'as_analyzer_stats_manipulator_' . $type,
                        'routeParameters' => array(
                            'view' => 'avhq',
                        ),
                    );
                    $routeCa = array(
                        'route' => 'as_analyzer_stats_manipulator_' . $type,
                        'routeParameters' => array(
                            'view' => 'ca',
                        ),
                    );
                    $routePRECA = array(
                        'route' => 'as_analyzer_stats_manipulator_' . $type,
                        'routeParameters' => array(
                            'view' => 'preca',
                        ),
                    );
                    $routeAVHCA = array(
                        'route' => 'as_analyzer_stats_manipulator_' . $type,
                        'routeParameters' => array(
                            'view' => 'avhca',
                        ),
                    );
                    $routeCaT = array(
                        'route' => 'as_analyzer_stats_manipulator_' . $type,
                        'routeParameters' => array(
                            'view' => 'cat',
                        ),
                    );
                }
                if ($routeName == 'as_analyzer_stats_frequentation') {
                    if ($this->container->get('request')->get('view') == 'GIE') {
                        $routeF = array(
                            'route' => 'as_analyzer_stats_frequentation',
                            'routeParameters' => array(
                                'view' => 'GIE',
                            )
                        );
                    } else {
                        $routeF = array(
                            'route' => 'as_analyzer_stats_frequentation',
                            'routeParameters' => array(
                                'view' => 'mes-favoris',
                            )
                        );
                    }
                }
            }
            $menu->addChild('Ventes annuelles', $routeCa);
            $menu['Ventes annuelles']->addChild('CA cueillette', $routeCa);
            $menu['Ventes annuelles']->addChild('CA additionnel', $routePRECA);
            $menu['Ventes annuelles']->addChild('CA achat-revente', $routeAVHCA);
            $menu['Ventes annuelles']->addChild('CA total', $routeCaT);
            $menu['Ventes annuelles']->addChild('Quantité cueillette', $routeQty);
            $menu['Ventes annuelles']->addChild('Quantité additionnelle', $routePREQ);
            $menu['Ventes annuelles']->addChild('Quantité achat-revente', $routeAVHQ);
            $menu['Ventes annuelles']->addChild('Surface', $routeAS);
            $menu['Ventes annuelles']->addChild('Fréquentation', $routeF);
            $menu['Ventes annuelles']->addChild('Graphiques', array('route' => 'as_analyzer_stats_graphic'));
            $this->verfiyOrigin($menu['Ventes annuelles']);
        }
    }

    private function communication($menu, $routeName)
    {
        $year = null;

        if($routeName == 'comm_analyzer_stats_data'){
            $request = $this->container->get('request');
            $year = $request->get('year');
        }

        if(!$year){
            $year = $this->year;
        }

        $menu->addChild('Communication', array('route' => 'comm_analyzer_stats_data'));
        $menu->addChild(
            'Communication',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'conquete-collectives',
                    'year' => $year
                ),
            )
        );
        $menu->addChild(
            'Communication',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'conquete-electronique',
                    'year' => $year
                ),
            )
        );
        $menu->addChild(
            'Communication',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'conquete-achat-espace',
                    'year' => $year
                ),
            )
        );
        $menu->addChild(
            'Communication',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'fidelisation-institutionnelle',
                    'year' => $year
                ),
            )
        );
        $menu->addChild(
            'Communication',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'cartes-fidelite',
                    'year' => $year
                ),
            )
        );
        $menu->addChild(
            'Communication',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'fidelisation-personnelle',
                    'year' => $year
                ),
            )
        );
        $menu->addChild(
            'Communication',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'argus-medias',
                    'year' => $year
                ),
            )
        );
        $menu->addChild(
            'Communication',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'conquete-papier',
                    'year' => $year
                ),
            )
        );
        $menu['Communication']->addChild(
            'Conquête papier ',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'conquete-papier',
                    'year' => $year
                ),
            )
        );
        $menu['Communication']->addChild(
            'Conquête Op collectives',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'conquete-collectives',
                    'year' => $year
                ),
            )
        );
        $menu['Communication']->addChild(
            'Conquête électronique',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'conquete-electronique',
                    'year' => $year
                ),
            )
        );
        $menu['Communication']->addChild(
            'Conquête en achat d\'espace',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'conquete-achat-espace',
                    'year' => $year
                ),
            )
        );
        $menu['Communication']->addChild(
            'Fidélisation institutionnelle',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'fidelisation-institutionnelle',
                    'year' => $year
                ),
            )
        );
        $menu['Communication']->addChild(
            'Cartes de fidèlité',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'cartes-fidelite',
                    'year' => $year
                ),
            )
        );
        $menu['Communication']->addChild(
            'Fidélisation personnelle',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'fidelisation-personnelle',
                    'year' => $year
                ),
            )
        );
        $menu['Communication']->addChild(
            'Argus des médias',
            array(
                'route' => 'comm_analyzer_stats_data',
                'routeParameters' => array(
                    'objective' => 'argus-medias',
                    'year' => $year
                ),
            )
        );

        $this->verfiyOrigin($menu['Communication']);
    }

    private function accountExploitation($menu, $routeName)
    {
        $parameters = array();

        if($routeName == 'ce_analyzer_stats_manipulator'){
            $request = $this->container->get('request');
            $parameters = $request->get('_route_params');
        }

        $types = array('mes-favoris', 'gie', 'chronologique');
        if ($this->container->getParameter('account_exploitation.stats')) {
            $targetRouteParams = array(
                'type' => 'mes-favoris',
                'view' => 'synthesis',
                'year' => $this->year,
            );
            if (count($parameters)) {
                $targetRouteParams = array_merge($targetRouteParams, $parameters);
            }
            $routeCe = array('route' => 'ce_analyzer_stats_manipulator', 'routeParameters' => $targetRouteParams);


            $menu->addChild('Compte d\'Exploitation', $routeCe);
            $routeCe['routeParameters']['view'] = 'synthesis';
            $menu['Compte d\'Exploitation']->addChild('Synthèse', $routeCe);
            $routeCe['routeParameters']['view'] = 'intrants-et-communication';
            $menu['Compte d\'Exploitation']->addChild('Intrants et Communication', $routeCe);
            $routeCe['routeParameters']['view'] = 'investissements';
            $menu['Compte d\'Exploitation']->addChild('Investissements', $routeCe);
            $routeCe['routeParameters']['view'] = 'main-oeuvre';
            $menu['Compte d\'Exploitation']->addChild('Main d\'oeuvre', $routeCe);

            $this->verfiyOrigin($menu['Compte d\'Exploitation']);
        }
    }

    private function verfiyOrigin($menu)
    {
        $request = $this->container->get('request');
        foreach ($menu as $key => $child) {
            if (isset($child->getExtras()['routes'])) {
                $routes = $child->getExtras()['routes'];
                if (count($routes)) {
                    $first = $routes[0];
                    if ($request->get('_route') == $first['route'] && $request->getRequestUri() == $child->getUri()) {
                        $child->setAttribute('class', 'current');
                    } elseif ((is_numeric(strpos($request->get('_route'), $first['route']))) && ($request->get('_route') != $first['route'])) {
                        $child->setAttribute('class', 'current');
                    }
                }
            }
        }
    }
}

