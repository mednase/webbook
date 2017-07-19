<?php

/* @Main/Admin/client/show.client.html.twig */
class __TwigTemplate_5aa6f2b710fac1d00bfa861b9943ad826e5db8acb612c5891e5d20de2527f80d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/client/show.client.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Main/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99ccb5fcf795d439fce809bfd00be1cfba7d59a069181ec0290e9a5b558591bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ccb5fcf795d439fce809bfd00be1cfba7d59a069181ec0290e9a5b558591bd->enter($__internal_99ccb5fcf795d439fce809bfd00be1cfba7d59a069181ec0290e9a5b558591bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/client/show.client.html.twig"));

        $__internal_713342560ed469448487b4fd43988ae001fc4f1a4a6c0977b07578a20d552600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713342560ed469448487b4fd43988ae001fc4f1a4a6c0977b07578a20d552600->enter($__internal_713342560ed469448487b4fd43988ae001fc4f1a4a6c0977b07578a20d552600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/client/show.client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99ccb5fcf795d439fce809bfd00be1cfba7d59a069181ec0290e9a5b558591bd->leave($__internal_99ccb5fcf795d439fce809bfd00be1cfba7d59a069181ec0290e9a5b558591bd_prof);

        
        $__internal_713342560ed469448487b4fd43988ae001fc4f1a4a6c0977b07578a20d552600->leave($__internal_713342560ed469448487b4fd43988ae001fc4f1a4a6c0977b07578a20d552600_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1977622fcc41132ba63ac91f8c739c4953f9d7a65c575b8f85c0862a74cfb353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1977622fcc41132ba63ac91f8c739c4953f9d7a65c575b8f85c0862a74cfb353->enter($__internal_1977622fcc41132ba63ac91f8c739c4953f9d7a65c575b8f85c0862a74cfb353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3aaa79749aa67bdab6d055f726d7b9cf9912475d2273be2ac5251178e4523f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aaa79749aa67bdab6d055f726d7b9cf9912475d2273be2ac5251178e4523f70->enter($__internal_3aaa79749aa67bdab6d055f726d7b9cf9912475d2273be2ac5251178e4523f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Client - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "fullName", array()), "html", null, true);
        echo "
";
        
        $__internal_3aaa79749aa67bdab6d055f726d7b9cf9912475d2273be2ac5251178e4523f70->leave($__internal_3aaa79749aa67bdab6d055f726d7b9cf9912475d2273be2ac5251178e4523f70_prof);

        
        $__internal_1977622fcc41132ba63ac91f8c739c4953f9d7a65c575b8f85c0862a74cfb353->leave($__internal_1977622fcc41132ba63ac91f8c739c4953f9d7a65c575b8f85c0862a74cfb353_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8203591bbbfe6ed3784b57bb78eaa1e7bc2f55cdefdacfdf610491d9097444f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8203591bbbfe6ed3784b57bb78eaa1e7bc2f55cdefdacfdf610491d9097444f->enter($__internal_e8203591bbbfe6ed3784b57bb78eaa1e7bc2f55cdefdacfdf610491d9097444f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_911cfa73541bd30311047312d25db35cd6c472363f6f0664dae9f9c229061426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911cfa73541bd30311047312d25db35cd6c472363f6f0664dae9f9c229061426->enter($__internal_911cfa73541bd30311047312d25db35cd6c472363f6f0664dae9f9c229061426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Client - ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "fullName", array()), "html", null, true);
        echo "</span>
            </li>

        </ul>
    </div>
    <div class=\"col-md-12 light-box\">
        <div class=\"col-md-3\">
            <img src=\"";
        // line 24
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "picture", array())) {
            // line 25
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "picture", array()), "mediaFile"), "html", null, true);
            echo "
                       ";
        } else {
            // line 27
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default-client.png"), "html", null, true);
            echo "
                        ";
        }
        // line 28
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "fullName", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-md-9\">
            <div class=\"page-subtitle margin-bottom-0\">
                <h3>Détails de compte</h3>
                <p>Les information du compte</p>
            </div>
            <div class=\"form-group-one-unit margin-bottom-40\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label>Nom d'utilisateur</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"johnny\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label>Date d'inscription:</label>
                            <input readonly type=\"text\" class=\"form-control\"
                                   value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "joinedAt", array()), "d-m-Y"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label>Dérnier activité:</label>
                            <input readonly type=\"text\" class=\"form-control\"
                                   value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "lastLogin", array()), "d-m-Y"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label>Numéro de téléphone</label>
                            <input readonly type=\"text\" class=\"form-control\"
                                   value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "lastLogin", array()), "d-m-Y"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group form-group-custom\">
                            <label>Adresse Email</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "email", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label> Nom</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "profile", array()), "lastName", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label> Prénom</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "profile", array()), "firstName", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"page-subtitle margin-bottom-0\">
                <h3>Personal information</h3>
                <p>Les informations personnel</p>
            </div>
            <div class=\"form-group-one-unit margin-bottom-40\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label>Pays</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "profile", array()), "country", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label>Ville</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "profile", array()), "city", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group form-group-custom\">
                            <label>Adresse</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "profile", array()), "address", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"form-group form-group-custom\">
                            <label>Code Postal</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "profile", array()), "zipCode", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group form-group-custom\">
                            <label>Date naisance</label>
                            <div class=\"form-select-wrapper\">
                                <select class=\"form-control\">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option selected=\"selected\">14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group form-group-custom\">
                            <label>Mois</label>
                            <div class=\"form-select-wrapper\">
                                <select class=\"form-control\">
                                    <option>01</option>
                                    <option selected=\"selected\">02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group form-group-custom\">
                            <label>Année</label>
                            <div class=\"form-select-wrapper\">
                                <select class=\"form-control\">
                                    <option>2000</option>
                                    <option>1999</option>
                                    <option>1998</option>
                                    <option>1997</option>
                                    <option>1996</option>
                                    <option>1995</option>
                                    <option>1994</option>
                                    <option>1993</option>
                                    <option>1992</option>
                                    <option>1991</option>
                                    <option>1990</option>
                                    <option selected=\"selected\">1989</option>
                                    <option>1988</option>
                                    <option>1987</option>
                                    <option>1986</option>
                                    <option>1985</option>
                                    <option>1984</option>
                                    <option>1983</option>
                                    <option>1982</option>
                                    <option>1981</option>
                                    <option>1980</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"page-subtitle margin-bottom-0\">
                <h3>Les Achats</h3>
                <p>Les livres achetés par ce client</p>
            </div>
            <table class=\"table  table-hover\">
                <thead>
                <tr>
                    <th>Date d'achat</th>
                    <th>Titre du livre</th>
                    <th>Prix</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 228
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "purchases", array())) == 0)) {
            // line 229
            echo "                    <tr class=\"text-center\">
                        <td colspan=\"3\" class=\"font-gray\"><h2>Pas d'achats effectuer</h2></td>
                    </tr>
                ";
        }
        // line 233
        echo "                <tr>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_911cfa73541bd30311047312d25db35cd6c472363f6f0664dae9f9c229061426->leave($__internal_911cfa73541bd30311047312d25db35cd6c472363f6f0664dae9f9c229061426_prof);

        
        $__internal_e8203591bbbfe6ed3784b57bb78eaa1e7bc2f55cdefdacfdf610491d9097444f->leave($__internal_e8203591bbbfe6ed3784b57bb78eaa1e7bc2f55cdefdacfdf610491d9097444f_prof);

    }

    // line 241
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9a85e925235262e48fdea29c32db44588743b06abf655677189e15189939567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a85e925235262e48fdea29c32db44588743b06abf655677189e15189939567->enter($__internal_b9a85e925235262e48fdea29c32db44588743b06abf655677189e15189939567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_73e6edb57d9daddb8e65d02f6115ea722064aecf5023ae89bb440ccd64fb8591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e6edb57d9daddb8e65d02f6115ea722064aecf5023ae89bb440ccd64fb8591->enter($__internal_73e6edb57d9daddb8e65d02f6115ea722064aecf5023ae89bb440ccd64fb8591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 242
        echo "    <style>
        table tr th {
            background-color: #01b070;
            color: white;
        }

        .light-box {
            background-color: white;
            padding: 20px 10px;
        }

        .page-subtitle h3, label {
            color: #49bdbc;
            font-weight: 600;
        }

        .page-subtitle p {
            color: #86889a
        }

        /* ./form group states */
        /* form group one unit */
        .form-group-one-unit {
            float: left;
            width: 100%;
            margin-bottom: 15px;
            background: #fafafa;
            border: 1px solid #e7ebf1;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }

        .form-group-one-unit .row {
            margin: 0px;
        }

        .form-group-one-unit .row div[class^=\"col-\"] {
            padding: 0px;
        }

        .form-group-one-unit .row div[class^=\"col-\"] .form-group.form-group-custom {
            margin-bottom: 0px;
            border: 0px;
            padding: 10px;
            border-bottom: 1px solid #e7ebf1;
            border-right: 1px solid #e7ebf1;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;
        }

        /* ./form group one unit */
        .input-group-addon {
            background: #fafafa;
            border-color: #e7ebf1;
            color: #454545;
        }
    </style>
";
        
        $__internal_73e6edb57d9daddb8e65d02f6115ea722064aecf5023ae89bb440ccd64fb8591->leave($__internal_73e6edb57d9daddb8e65d02f6115ea722064aecf5023ae89bb440ccd64fb8591_prof);

        
        $__internal_b9a85e925235262e48fdea29c32db44588743b06abf655677189e15189939567->leave($__internal_b9a85e925235262e48fdea29c32db44588743b06abf655677189e15189939567_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Admin/client/show.client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 242,  370 => 241,  353 => 233,  347 => 229,  345 => 228,  229 => 115,  220 => 109,  211 => 103,  202 => 97,  183 => 81,  174 => 75,  165 => 69,  154 => 61,  144 => 54,  134 => 47,  111 => 28,  105 => 27,  99 => 25,  97 => 24,  87 => 17,  80 => 13,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Main/layout.html.twig' %}

{% block title %}
    Client - {{ client.fullName }}
{% endblock %}

{% block body %}
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"{{ url('administrator_homepage') }}\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Client - {{ client.fullName }}</span>
            </li>

        </ul>
    </div>
    <div class=\"col-md-12 light-box\">
        <div class=\"col-md-3\">
            <img src=\"{% if client.picture %}
                        {{ vich_uploader_asset(client.picture,'mediaFile') }}
                       {% else %}
                        {{ asset('assets/img/default-client.png') }}
                        {% endif %}\" alt=\"{{ client.fullName }}\">
        </div>
        <div class=\"col-md-9\">
            <div class=\"page-subtitle margin-bottom-0\">
                <h3>Détails de compte</h3>
                <p>Les information du compte</p>
            </div>
            <div class=\"form-group-one-unit margin-bottom-40\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label>Nom d'utilisateur</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"johnny\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label>Date d'inscription:</label>
                            <input readonly type=\"text\" class=\"form-control\"
                                   value=\"{{ client.joinedAt|date('d-m-Y') }}\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label>Dérnier activité:</label>
                            <input readonly type=\"text\" class=\"form-control\"
                                   value=\"{{ client.lastLogin|date('d-m-Y') }}\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label>Numéro de téléphone</label>
                            <input readonly type=\"text\" class=\"form-control\"
                                   value=\"{{ client.lastLogin|date('d-m-Y') }}\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group form-group-custom\">
                            <label>Adresse Email</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"{{ client.email }}\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label> Nom</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"{{ client.profile.lastName }}\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label> Prénom</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"{{ client.profile.firstName }}\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"page-subtitle margin-bottom-0\">
                <h3>Personal information</h3>
                <p>Les informations personnel</p>
            </div>
            <div class=\"form-group-one-unit margin-bottom-40\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label>Pays</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"{{ client.profile.country }}\">
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"form-group form-group-custom\">
                            <label>Ville</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"{{ client.profile.city }}\">
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group form-group-custom\">
                            <label>Adresse</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"{{ client.profile.address }}\">
                        </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"form-group form-group-custom\">
                            <label>Code Postal</label>
                            <input readonly type=\"text\" class=\"form-control\" value=\"{{ client.profile.zipCode }}\">
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group form-group-custom\">
                            <label>Date naisance</label>
                            <div class=\"form-select-wrapper\">
                                <select class=\"form-control\">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option selected=\"selected\">14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group form-group-custom\">
                            <label>Mois</label>
                            <div class=\"form-select-wrapper\">
                                <select class=\"form-control\">
                                    <option>01</option>
                                    <option selected=\"selected\">02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group form-group-custom\">
                            <label>Année</label>
                            <div class=\"form-select-wrapper\">
                                <select class=\"form-control\">
                                    <option>2000</option>
                                    <option>1999</option>
                                    <option>1998</option>
                                    <option>1997</option>
                                    <option>1996</option>
                                    <option>1995</option>
                                    <option>1994</option>
                                    <option>1993</option>
                                    <option>1992</option>
                                    <option>1991</option>
                                    <option>1990</option>
                                    <option selected=\"selected\">1989</option>
                                    <option>1988</option>
                                    <option>1987</option>
                                    <option>1986</option>
                                    <option>1985</option>
                                    <option>1984</option>
                                    <option>1983</option>
                                    <option>1982</option>
                                    <option>1981</option>
                                    <option>1980</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"page-subtitle margin-bottom-0\">
                <h3>Les Achats</h3>
                <p>Les livres achetés par ce client</p>
            </div>
            <table class=\"table  table-hover\">
                <thead>
                <tr>
                    <th>Date d'achat</th>
                    <th>Titre du livre</th>
                    <th>Prix</th>
                </tr>
                </thead>
                <tbody>
                {% if client.purchases|length==0 %}
                    <tr class=\"text-center\">
                        <td colspan=\"3\" class=\"font-gray\"><h2>Pas d'achats effectuer</h2></td>
                    </tr>
                {% endif %}
                <tr>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
{% block stylesheets %}
    <style>
        table tr th {
            background-color: #01b070;
            color: white;
        }

        .light-box {
            background-color: white;
            padding: 20px 10px;
        }

        .page-subtitle h3, label {
            color: #49bdbc;
            font-weight: 600;
        }

        .page-subtitle p {
            color: #86889a
        }

        /* ./form group states */
        /* form group one unit */
        .form-group-one-unit {
            float: left;
            width: 100%;
            margin-bottom: 15px;
            background: #fafafa;
            border: 1px solid #e7ebf1;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }

        .form-group-one-unit .row {
            margin: 0px;
        }

        .form-group-one-unit .row div[class^=\"col-\"] {
            padding: 0px;
        }

        .form-group-one-unit .row div[class^=\"col-\"] .form-group.form-group-custom {
            margin-bottom: 0px;
            border: 0px;
            padding: 10px;
            border-bottom: 1px solid #e7ebf1;
            border-right: 1px solid #e7ebf1;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            -moz-border-radius: 0px;
            -webkit-border-radius: 0px;
            border-radius: 0px;
        }

        /* ./form group one unit */
        .input-group-addon {
            background: #fafafa;
            border-color: #e7ebf1;
            color: #454545;
        }
    </style>
{% endblock %}", "@Main/Admin/client/show.client.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\client\\show.client.html.twig");
    }
}
