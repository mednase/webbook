<?php

/**
 * @Mobelite: Test
 */
namespace Core\LibBundle\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;

class Parameters extends \Twig_Extension
{
    private $container, $translator, $route;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->translator = $this->container->get('translator');
    }

    /**
     * List of available functions
     *
     * @return array
     */
    public function getFilters()
    {
        return array();
    }

    /**
     * List of available functions
     *
     * @return array
     */
    public function getFunctions()
    {
        return array(
            'get_params' => new \Twig_Function_Method($this, 'getParameters'),
            'session_params' => new \Twig_Function_Method($this, 'sessionParams'),
            'is_prod' => new \Twig_Function_Method($this, 'isProd'),
            'get_slug' => new \Twig_Function_Method($this, 'getSlug'),
            'hash' => new \Twig_Function_Method($this, 'getHash'),
            'isCheked' => new \Twig_Function_Method($this, 'isChekedFilter'),
            'isNotNull' => new \Twig_Function_Method($this, 'isNotNullFilter'),
            'division' => new \Twig_Function_Method($this, 'division'),
            'checkbox_segment' => new \Twig_Function_Method($this, 'checkbox_segment'),
            'get_path_enter_data' => new \Twig_Function_Method($this, 'getPathEnterData'),
            'menu_status' => new \Twig_Function_Method($this, 'menu_status'),
            'first_target_bundle' => new \Twig_Function_Method($this, 'first_target_bundle'),
            'render_li_textarea' => new \Twig_Function_Method($this, 'render_li_textarea'),
            'file_exists' => new \Twig_Function_Method($this, 'file_exists'),
            'basename' => new \Twig_Function_Method($this, 'basename'),
            'filesize' => new \Twig_Function_Method($this, 'filesize'),
        );
    }

    public function filesize($path)
    {
        return filesize($path);
    }

    public function basename($path)
    {
        return basename($path);
    }

    public function file_exists($path)
    {
        return file_exists($path);
    }

    public function render_li_textarea($details)
    {
        $output = '<ul>';
        $details = explode('-', $details);
        foreach ($details as $detail) {
            if (strlen($output) > 1) $output .= '<li>' . $detail . '</li>';
        }
        return $output . '</ul>';
    }

    public function menu_status($prefix)
    {
        $token = $this->container->get('security.context')->getToken();
        if ($token) {
            $user = $token->getUser();
            if ($user) {
                if ($user->hasRole('ROLE_SUPER_ADMIN')) return true;

                $session = $this->container->get('session');

                if ($session->has('permissions')) {
                    if (count($session->get('permissions'))) return is_numeric(strpos(implode(',', $session->get('permissions')), $prefix));
                }
            }
        }

        return false;
    }

    public function first_target_bundle($target)
    {
        $default = $target;
        if (!$this->container->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
            $session = $this->container->get('session');
            if ($session->has('permissions')) {
                $targets = array();
                $permissions = $session->get('permissions');
                foreach ($permissions as $permission) {
                    if (is_numeric(strpos($permission, $target))) $targets[] = $permission;
                }
                ksort($targets);
                if (count($targets)) {
                    $target = $targets[0];
                    $target = $this->target($target);
                }
            }
        } else {
            $target = $this->target($target);
        }
        if ($default != $target) {
            switch ($target) {
                case 'as_analyzer_stats_manipulator_my_favori':
                    $url = $this->container->get('router')->generate($target, array(
                        'view' => 'ca'
                    ));
                    break;
                default:
                    $url = $this->container->get('router')->generate($target);
                    break;
            }
            return $url;
        }

        return false;
    }

    private function target($target)
    {
        $definedRouters = $this->container->get('router')->getRouteCollection();
        foreach ($definedRouters as $key => $route) {
            if (is_numeric(strpos($key, $target))) {
                return $key;
            }
        }
    }

    public function checkbox_segment($token, $isActive, $column, $url)
    {
        $output = '<select class="segment-select" data-token="' . $token . '" data-column="' . $column . '" data-url="' . $url . '">';
        $output .= '<option value="0"';
        if ($isActive) $output .= ' selected';
        $output .= '>Non</option>';
        $output .= '<option value="1"';
        if ($isActive) $output .= ' selected';
        $output .= '>Oui</option>';
        return $output;
    }

    /**
     * @param $a
     * @param $b
     * @return string
     */
    public function division($a, $b)
    {
        if (isset($a) && isset($b) && $b != 0) {
            return number_format($a / $b, 2, '.', ',');
        } else return "-";
    }

    public function getPathEnterData()
    {
        $cueillette = $this->container->get('cueillettes.manager')->getMainCueillette();
        return $this->container->get('translator')->generate(($cueillette->getCode() == 'GIE') ? 'comm_enter_data' : 'fdc_enter_data');
    }

    /**
     * @param $data
     * @return string
     */
    public
    function isChekedFilter($data)
    {
        if (!isset($data)) {
            $outpout = '-';
        } else if ($data == 1) {
            $outpout = 'Oui';
        } else {
            $outpout = 'Non';
        }
        return $outpout;
    }

    /**
     * @param $data
     * @return string
     */
    public
    function isNotNullFilter($data)
    {
        if (!isset($data)) {
            return '-';
        } else  return $data;
    }

    /**
     * @param  [string] $param ['Parameter key to search']
     * @return [string]        [Return the parameter value if exist]
     * @Mobelite: Search a parameter by key in the file "app/config/parameters.yml"
     */
    public
    function getParameters($param)
    {
        $value = $this->container->getParameter($param);

        return $value;
    }

    public
    function sessionParams($params)
    {
        if ($this->container->get('session')->has($params)) {
            return $this->container->get('session')->get($params);
        }

        return false;
    }

    /**
     * @return [boolean]        [Test if the environnement is prod ?]
     * @Mobelite: [This function called in Twig Layout, return true if the environment isProd, else return false]
     */
    public
    function isProd()
    {
        $environnment = $this->container->get('kernel')->getEnvironment();
        if ($environnment === 'prod') {
            return true;
        }
        return false;
    }

    public function getHash()
    {
        return sha1(rand(11111, 99999) . date('d-m-Y') . time());
    }

    public function getSlug($str)
    {
        # special accents
        $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'Ð', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', '?', '?', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', '?', '?', 'L', 'l', 'N', 'n', 'N', 'n', 'N', 'n', '?', 'O', 'o', 'O', 'o', 'O', 'o', 'Œ', 'œ', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'Š', 'š', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Ÿ', 'Z', 'z', 'Z', 'z', 'Ž', 'ž', '?', 'ƒ', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', '?', '?', '?', '?', '?', '?');
        $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
        return strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), str_replace($a, $b, $str)));

    }

    public function getYear()
    {
        $now = new \DateTime();
        $month = intval($now->format('m'));
        $year = intval($now->format('Y'));
        if ($month < 4) {
            $year--;
        }
        return $year;
    }

    public
    function getName()
    {
        return 'parameters';
    }
}