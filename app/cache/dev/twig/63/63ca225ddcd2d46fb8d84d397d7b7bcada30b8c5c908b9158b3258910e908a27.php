<?php

/* @Main/Admin/book/unpublished.book.html.twig */
class __TwigTemplate_b43828d0e24d2faa0da11dae936093c2975b8d2004305ff6aebe783e7248f9db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/book/unpublished.book.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Main/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea8b7dd0714d5e6a1b717729fd0db9b5852c8e777c80f61a58f457bf342c8b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8b7dd0714d5e6a1b717729fd0db9b5852c8e777c80f61a58f457bf342c8b50->enter($__internal_ea8b7dd0714d5e6a1b717729fd0db9b5852c8e777c80f61a58f457bf342c8b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/book/unpublished.book.html.twig"));

        $__internal_757cc961074acc7aea61157f6bfaacfaa20cc3d4c66233a1bbf6d2cf3a238203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757cc961074acc7aea61157f6bfaacfaa20cc3d4c66233a1bbf6d2cf3a238203->enter($__internal_757cc961074acc7aea61157f6bfaacfaa20cc3d4c66233a1bbf6d2cf3a238203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/book/unpublished.book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea8b7dd0714d5e6a1b717729fd0db9b5852c8e777c80f61a58f457bf342c8b50->leave($__internal_ea8b7dd0714d5e6a1b717729fd0db9b5852c8e777c80f61a58f457bf342c8b50_prof);

        
        $__internal_757cc961074acc7aea61157f6bfaacfaa20cc3d4c66233a1bbf6d2cf3a238203->leave($__internal_757cc961074acc7aea61157f6bfaacfaa20cc3d4c66233a1bbf6d2cf3a238203_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a397a2cdcac7e3dd1f3188bc6faef7375d6f7ef45c3aebf8458781a358ed6311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a397a2cdcac7e3dd1f3188bc6faef7375d6f7ef45c3aebf8458781a358ed6311->enter($__internal_a397a2cdcac7e3dd1f3188bc6faef7375d6f7ef45c3aebf8458781a358ed6311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80d6bd2a0705994a6ca2ce2415ae861dd5ec4b354501f4ad3c6828962b7094e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d6bd2a0705994a6ca2ce2415ae861dd5ec4b354501f4ad3c6828962b7094e0->enter($__internal_80d6bd2a0705994a6ca2ce2415ae861dd5ec4b354501f4ad3c6828962b7094e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Livres en cours de préparation
";
        
        $__internal_80d6bd2a0705994a6ca2ce2415ae861dd5ec4b354501f4ad3c6828962b7094e0->leave($__internal_80d6bd2a0705994a6ca2ce2415ae861dd5ec4b354501f4ad3c6828962b7094e0_prof);

        
        $__internal_a397a2cdcac7e3dd1f3188bc6faef7375d6f7ef45c3aebf8458781a358ed6311->leave($__internal_a397a2cdcac7e3dd1f3188bc6faef7375d6f7ef45c3aebf8458781a358ed6311_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_27818f07c5c69e6649fde612fef9dca9e6f09fdaa1d58b6c4ab901b0b67ee9c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27818f07c5c69e6649fde612fef9dca9e6f09fdaa1d58b6c4ab901b0b67ee9c1->enter($__internal_27818f07c5c69e6649fde612fef9dca9e6f09fdaa1d58b6c4ab901b0b67ee9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_908fc674df116cd78944459f1a58778d3b07e4570422d2d57bc03a9c492ffa10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908fc674df116cd78944459f1a58778d3b07e4570422d2d57bc03a9c492ffa10->enter($__internal_908fc674df116cd78944459f1a58778d3b07e4570422d2d57bc03a9c492ffa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Livres Livres en cours de préparation</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\" fa fa-clock-o\"></span> &nbsp;Livres en cours de préparation</h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box red\">
                <div class=\"portlet-title\">
                    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_new_book");
        echo "\" style=\"margin-top: 5px\" class=\"btn btn-sm blue\"><i class=\"fa fa-plus\"></i>Nouveau livre</a>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" data-placement=\"bottom\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-placement=\"bottom\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body \">
                    <table class=\"table table-striped table-bordered minimisedDataTable\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th class=\"text-center\">Date Creation</th>
                            <th>Titre</th>
                            <th class=\"text-center\">Publiée (à venir)</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 46
            echo "                            <tr>
                                <td class=\"text-center col-md-2\">";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["book"], "createdAt", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo "</td>

                                <td class=\"text-center col-md-2\">
                                    <input data-book=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\" class=\"upcoming\" ";
            if ($this->getAttribute($context["book"], "publishedPreview", array())) {
                echo "checked";
            }
            echo ">
                                </td>
                                <td class=\"text-center col-md-1\">
                                    <a data-toggle=\"tooltip\" data-title=\"Détails du livre\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_edit_book", array("token" => $this->getAttribute($context["book"], "token", array()))), "html", null, true);
            echo "\"
                                       class=\"btn green btn-icon-only \"><i class=\"fa fa-eye\"></i></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-book-unpublished\">
";
        
        $__internal_908fc674df116cd78944459f1a58778d3b07e4570422d2d57bc03a9c492ffa10->leave($__internal_908fc674df116cd78944459f1a58778d3b07e4570422d2d57bc03a9c492ffa10_prof);

        
        $__internal_27818f07c5c69e6649fde612fef9dca9e6f09fdaa1d58b6c4ab901b0b67ee9c1->leave($__internal_27818f07c5c69e6649fde612fef9dca9e6f09fdaa1d58b6c4ab901b0b67ee9c1_prof);

    }

    // line 67
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6b076b14790c39a175194a6862d914d37ba9de35481d185a8b2c2729d0788c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b076b14790c39a175194a6862d914d37ba9de35481d185a8b2c2729d0788c6->enter($__internal_b6b076b14790c39a175194a6862d914d37ba9de35481d185a8b2c2729d0788c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_409c7a7bfead30eb615aa617c82d05f3116ffc0ae7228fd2cf678adf65c49a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409c7a7bfead30eb615aa617c82d05f3116ffc0ae7228fd2cf678adf65c49a78->enter($__internal_409c7a7bfead30eb615aa617c82d05f3116ffc0ae7228fd2cf678adf65c49a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 68
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\">
    <style>
        .dataTables_scrollHead {
            overflow: visible !important;
        }
        table.minimisedDataTable tbody td {
            vertical-align: middle;
        }
    </style>
";
        
        $__internal_409c7a7bfead30eb615aa617c82d05f3116ffc0ae7228fd2cf678adf65c49a78->leave($__internal_409c7a7bfead30eb615aa617c82d05f3116ffc0ae7228fd2cf678adf65c49a78_prof);

        
        $__internal_b6b076b14790c39a175194a6862d914d37ba9de35481d185a8b2c2729d0788c6->leave($__internal_b6b076b14790c39a175194a6862d914d37ba9de35481d185a8b2c2729d0788c6_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a3d0caa81d5581d6fd25a5350e45c627784dccd791fef1bfbada1a841905064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3d0caa81d5581d6fd25a5350e45c627784dccd791fef1bfbada1a841905064->enter($__internal_1a3d0caa81d5581d6fd25a5350e45c627784dccd791fef1bfbada1a841905064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b64d49709398d4daf56d4fac7964696bec83e439d179436d10a08738fffedebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64d49709398d4daf56d4fac7964696bec83e439d179436d10a08738fffedebf->enter($__internal_b64d49709398d4daf56d4fac7964696bec83e439d179436d10a08738fffedebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$('.upcoming').bootstrapSwitch(
                {
                    size:'small',
                    onText:'Oui',
                    offText:'Non',
                    offColor:'danger'
                }
            );
            \$('.minimisedDataTable').on('switchChange.bootstrapSwitch', '.upcoming', function(event, state) {
               var book=\$(this).data('book');
                \$.ajax({
                  url:Routing.generate('administrator_switch_book_upcoming_state',{id:book}),
                  method:'POST'
               });
            });
        })
    </script>
";
        
        $__internal_b64d49709398d4daf56d4fac7964696bec83e439d179436d10a08738fffedebf->leave($__internal_b64d49709398d4daf56d4fac7964696bec83e439d179436d10a08738fffedebf_prof);

        
        $__internal_1a3d0caa81d5581d6fd25a5350e45c627784dccd791fef1bfbada1a841905064->leave($__internal_1a3d0caa81d5581d6fd25a5350e45c627784dccd791fef1bfbada1a841905064_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Admin/book/unpublished.book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 79,  203 => 78,  182 => 68,  173 => 67,  156 => 59,  145 => 54,  135 => 51,  129 => 48,  125 => 47,  122 => 46,  118 => 45,  98 => 28,  79 => 12,  72 => 7,  63 => 6,  52 => 4,  43 => 3,  11 => 1,);
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
    Livres en cours de préparation
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
                <span class=\"active\">Livres Livres en cours de préparation</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\" fa fa-clock-o\"></span> &nbsp;Livres en cours de préparation</h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box red\">
                <div class=\"portlet-title\">
                    <a href=\"{{ url('administrator_new_book') }}\" style=\"margin-top: 5px\" class=\"btn btn-sm blue\"><i class=\"fa fa-plus\"></i>Nouveau livre</a>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" data-placement=\"bottom\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-placement=\"bottom\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body \">
                    <table class=\"table table-striped table-bordered minimisedDataTable\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th class=\"text-center\">Date Creation</th>
                            <th>Titre</th>
                            <th class=\"text-center\">Publiée (à venir)</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for book in books %}
                            <tr>
                                <td class=\"text-center col-md-2\">{{ book.createdAt|date('d-m-Y') }}</td>
                                <td>{{ book.title }}</td>

                                <td class=\"text-center col-md-2\">
                                    <input data-book=\"{{ book.id }}\" type=\"checkbox\" class=\"upcoming\" {% if book.publishedPreview %}checked{% endif %}>
                                </td>
                                <td class=\"text-center col-md-1\">
                                    <a data-toggle=\"tooltip\" data-title=\"Détails du livre\" href=\"{{ url('administrator_edit_book',{token:book.token}) }}\"
                                       class=\"btn green btn-icon-only \"><i class=\"fa fa-eye\"></i></a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-book-unpublished\">
{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}\">
    <style>
        .dataTables_scrollHead {
            overflow: visible !important;
        }
        table.minimisedDataTable tbody td {
            vertical-align: middle;
        }
    </style>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            \$('.upcoming').bootstrapSwitch(
                {
                    size:'small',
                    onText:'Oui',
                    offText:'Non',
                    offColor:'danger'
                }
            );
            \$('.minimisedDataTable').on('switchChange.bootstrapSwitch', '.upcoming', function(event, state) {
               var book=\$(this).data('book');
                \$.ajax({
                  url:Routing.generate('administrator_switch_book_upcoming_state',{id:book}),
                  method:'POST'
               });
            });
        })
    </script>
{% endblock %}", "@Main/Admin/book/unpublished.book.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\book\\unpublished.book.html.twig");
    }
}
