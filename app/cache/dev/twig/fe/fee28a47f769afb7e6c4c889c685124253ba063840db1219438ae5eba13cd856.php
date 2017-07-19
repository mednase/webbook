<?php

/* MainBundle:Admin/book:books.html.twig */
class __TwigTemplate_e7b636cc08b9c97be6a41986cf6da82eaaac047b64f4463329836f45db82024b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "MainBundle:Admin/book:books.html.twig", 1);
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
        $__internal_700e1d3ebd28435e9e9e4ec32d9f6720bc7416505b63f7a02475bd3fd6d8e29a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700e1d3ebd28435e9e9e4ec32d9f6720bc7416505b63f7a02475bd3fd6d8e29a->enter($__internal_700e1d3ebd28435e9e9e4ec32d9f6720bc7416505b63f7a02475bd3fd6d8e29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Admin/book:books.html.twig"));

        $__internal_d67517c8eec56a4d0157e11c16a603275cbfe23596075b32793d80a1c4a1902c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67517c8eec56a4d0157e11c16a603275cbfe23596075b32793d80a1c4a1902c->enter($__internal_d67517c8eec56a4d0157e11c16a603275cbfe23596075b32793d80a1c4a1902c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Admin/book:books.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_700e1d3ebd28435e9e9e4ec32d9f6720bc7416505b63f7a02475bd3fd6d8e29a->leave($__internal_700e1d3ebd28435e9e9e4ec32d9f6720bc7416505b63f7a02475bd3fd6d8e29a_prof);

        
        $__internal_d67517c8eec56a4d0157e11c16a603275cbfe23596075b32793d80a1c4a1902c->leave($__internal_d67517c8eec56a4d0157e11c16a603275cbfe23596075b32793d80a1c4a1902c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f8d1ff552ef245f4365d8d446721533e050b27517797a260bdf6384f6575410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8d1ff552ef245f4365d8d446721533e050b27517797a260bdf6384f6575410->enter($__internal_6f8d1ff552ef245f4365d8d446721533e050b27517797a260bdf6384f6575410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b717d19d833911af6699b121e63e2910b53240747f76550f7b38f7187b6c87c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b717d19d833911af6699b121e63e2910b53240747f76550f7b38f7187b6c87c9->enter($__internal_b717d19d833911af6699b121e63e2910b53240747f76550f7b38f7187b6c87c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des  Livres
";
        
        $__internal_b717d19d833911af6699b121e63e2910b53240747f76550f7b38f7187b6c87c9->leave($__internal_b717d19d833911af6699b121e63e2910b53240747f76550f7b38f7187b6c87c9_prof);

        
        $__internal_6f8d1ff552ef245f4365d8d446721533e050b27517797a260bdf6384f6575410->leave($__internal_6f8d1ff552ef245f4365d8d446721533e050b27517797a260bdf6384f6575410_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_760aad64347273154f7c6cbf34891bc7755818d7e5cce8a34d48da660d4a9a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760aad64347273154f7c6cbf34891bc7755818d7e5cce8a34d48da660d4a9a3d->enter($__internal_760aad64347273154f7c6cbf34891bc7755818d7e5cce8a34d48da660d4a9a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1d35b2e26fe643bcdd1d4a86378e955463577800916ab2e125244f9068707c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d35b2e26fe643bcdd1d4a86378e955463577800916ab2e125244f9068707c2->enter($__internal_d1d35b2e26fe643bcdd1d4a86378e955463577800916ab2e125244f9068707c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"fa fa-home\"></i>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Liste des livres</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"icon-c-books\"></span> &nbsp; Liste des livres </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green\">
                <div class=\"portlet-title\">
                    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_new_book");
        echo "\" style=\"margin-top: 5px\" class=\"btn btn-sm blue\"><i class=\"fa fa-plus\"></i>Nouveau Livre</a>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" data-placement=\"bottom\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-placement=\"bottom\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body \">
                    <table class=\"table table-striped table-bordered minimisedDataTable\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th class=\"hidden-sm hidden-xs text-center\">Date Creation</th>
                            <th>Titre</th>
                            <th class=\"hidden-sm hidden-xs\">Categorie</th>
                            <th class=\"hidden-sm hidden-xs\">Auteurs Principaux</th>
                            <th class=\"text-center col-md-3 col-lg-2 col-sm-3 col-xs-5\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 47
            echo "                            <tr>
                                <td class=\"hidden-sm hidden-xs text-center\">";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["book"], "createdAt", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo "</td>
                                <td class=\"hidden-sm hidden-xs\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["book"], "category", array()), "name", array()), "html", null, true);
            echo "</td>
                                <td class=\"hidden-sm hidden-xs\">
                                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["book"], "mainAuthors", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["auth"]) {
                // line 53
                echo "                                        ";
                if (($this->getAttribute($context["loop"], "index", array()) > 1)) {
                    echo " , ";
                }
                // line 54
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["auth"], "profile", array()), "fullName", array()), "html", null, true);
                echo "
                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auth'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                                </td>
                                <td  class=\"text-center col-md-3 col-lg-2 col-sm-3 col-xs-5\">
                                    <a data-toggle=\"tooltip\" data-title=\"Détails du livre\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_edit_book", array("token" => $this->getAttribute($context["book"], "token", array()))), "html", null, true);
            echo "\"
                                        class=\"btn green btn-icon-only \"><i class=\"fa fa-eye\"></i></a>
                                    <button data-toggle=\"tooltip\" data-title=\"Supprimer\" data-url=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_book_delete", array("token" => $this->getAttribute($context["book"], "token", array()))), "html", null, true);
            echo "\"
                                                class=\"btn red btn-icon-only  btn-delete-book\"><i
                                                    class=\"fa fa-trash\"></i>
                                    </button>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-books\">

";
        
        $__internal_d1d35b2e26fe643bcdd1d4a86378e955463577800916ab2e125244f9068707c2->leave($__internal_d1d35b2e26fe643bcdd1d4a86378e955463577800916ab2e125244f9068707c2_prof);

        
        $__internal_760aad64347273154f7c6cbf34891bc7755818d7e5cce8a34d48da660d4a9a3d->leave($__internal_760aad64347273154f7c6cbf34891bc7755818d7e5cce8a34d48da660d4a9a3d_prof);

    }

    // line 76
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0d05d08565eb9ff695dce5b3d1abc8dfbe41118a67a291e9803e6a29eda445d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d05d08565eb9ff695dce5b3d1abc8dfbe41118a67a291e9803e6a29eda445d->enter($__internal_b0d05d08565eb9ff695dce5b3d1abc8dfbe41118a67a291e9803e6a29eda445d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1a3542776ec173ec9cd60504f4d346c4178df7e74926531a791166eb202c990c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3542776ec173ec9cd60504f4d346c4178df7e74926531a791166eb202c990c->enter($__internal_1a3542776ec173ec9cd60504f4d346c4178df7e74926531a791166eb202c990c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 77
        echo "    <style>

    </style>
";
        
        $__internal_1a3542776ec173ec9cd60504f4d346c4178df7e74926531a791166eb202c990c->leave($__internal_1a3542776ec173ec9cd60504f4d346c4178df7e74926531a791166eb202c990c_prof);

        
        $__internal_b0d05d08565eb9ff695dce5b3d1abc8dfbe41118a67a291e9803e6a29eda445d->leave($__internal_b0d05d08565eb9ff695dce5b3d1abc8dfbe41118a67a291e9803e6a29eda445d_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9415be02066f649f1d3a5ee1df910b04abbd48261dc9f2d4533d8dcf196d285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9415be02066f649f1d3a5ee1df910b04abbd48261dc9f2d4533d8dcf196d285->enter($__internal_c9415be02066f649f1d3a5ee1df910b04abbd48261dc9f2d4533d8dcf196d285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ceb07e62ed28b933ef5ba061baf743163e76484c20beffe331689f7d19e696d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb07e62ed28b933ef5ba061baf743163e76484c20beffe331689f7d19e696d0->enter($__internal_ceb07e62ed28b933ef5ba061baf743163e76484c20beffe331689f7d19e696d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "    <script>
        \$(document).ready(function () {
            \$(\".btn-delete-book\").click(function () {
                var ligne = \$(this).closest('tr');
                var url = \$(this).data('url');
                swal({
                    title: \"Êtes-vous sûr\",
                    text: \"Voulez vous vraiment supprimer ce livre\",
                    type: \"warning\",
                    showCancelButton: true,
                    cancelButtonText:\"Annuler\",
                    confirmButtonText:\"Confirmer\",
                    cancelButtonClass:'red',
                    confirmButtonClass:'blue',
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                    \$.ajax({
                        url: url,
                        method: \"POST\",
                        success: function () {
                            swal(\"Ce livre a été supprimer !\");
                            ligne.remove();
                        },
                        error: function () {
                            swal(\"Erreur !\");
                        }
                    })

                });
            })

        })
    </script>
";
        
        $__internal_ceb07e62ed28b933ef5ba061baf743163e76484c20beffe331689f7d19e696d0->leave($__internal_ceb07e62ed28b933ef5ba061baf743163e76484c20beffe331689f7d19e696d0_prof);

        
        $__internal_c9415be02066f649f1d3a5ee1df910b04abbd48261dc9f2d4533d8dcf196d285->leave($__internal_c9415be02066f649f1d3a5ee1df910b04abbd48261dc9f2d4533d8dcf196d285_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Admin/book:books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 82,  240 => 81,  227 => 77,  218 => 76,  200 => 67,  187 => 60,  182 => 58,  178 => 56,  161 => 54,  156 => 53,  139 => 52,  134 => 50,  130 => 49,  126 => 48,  123 => 47,  119 => 46,  98 => 28,  79 => 12,  72 => 7,  63 => 6,  52 => 4,  43 => 3,  11 => 1,);
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
    Liste des  Livres
{% endblock %}
{% block body %}
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"fa fa-home\"></i>
                <a href=\"{{ url('administrator_homepage') }}\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Liste des livres</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"icon-c-books\"></span> &nbsp; Liste des livres </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green\">
                <div class=\"portlet-title\">
                    <a href=\"{{ url('administrator_new_book') }}\" style=\"margin-top: 5px\" class=\"btn btn-sm blue\"><i class=\"fa fa-plus\"></i>Nouveau Livre</a>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" data-placement=\"bottom\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-placement=\"bottom\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body \">
                    <table class=\"table table-striped table-bordered minimisedDataTable\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th class=\"hidden-sm hidden-xs text-center\">Date Creation</th>
                            <th>Titre</th>
                            <th class=\"hidden-sm hidden-xs\">Categorie</th>
                            <th class=\"hidden-sm hidden-xs\">Auteurs Principaux</th>
                            <th class=\"text-center col-md-3 col-lg-2 col-sm-3 col-xs-5\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for book in books %}
                            <tr>
                                <td class=\"hidden-sm hidden-xs text-center\">{{ book.createdAt|date('d-m-Y') }}</td>
                                <td>{{ book.title }}</td>
                                <td class=\"hidden-sm hidden-xs\">{{ book.category.name }}</td>
                                <td class=\"hidden-sm hidden-xs\">
                                    {% for auth in book.mainAuthors %}
                                        {% if loop.index>1 %} , {% endif %}
                                        {{ auth.profile.fullName }}
                                    {% endfor %}
                                </td>
                                <td  class=\"text-center col-md-3 col-lg-2 col-sm-3 col-xs-5\">
                                    <a data-toggle=\"tooltip\" data-title=\"Détails du livre\" href=\"{{ url('administrator_edit_book',{token:book.token}) }}\"
                                        class=\"btn green btn-icon-only \"><i class=\"fa fa-eye\"></i></a>
                                    <button data-toggle=\"tooltip\" data-title=\"Supprimer\" data-url=\"{{ url('administrator_book_delete',{token:book.token}) }}\"
                                                class=\"btn red btn-icon-only  btn-delete-book\"><i
                                                    class=\"fa fa-trash\"></i>
                                    </button>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-books\">

{% endblock %}
{% block stylesheets %}
    <style>

    </style>
{% endblock %}
{% block javascripts %}
    <script>
        \$(document).ready(function () {
            \$(\".btn-delete-book\").click(function () {
                var ligne = \$(this).closest('tr');
                var url = \$(this).data('url');
                swal({
                    title: \"Êtes-vous sûr\",
                    text: \"Voulez vous vraiment supprimer ce livre\",
                    type: \"warning\",
                    showCancelButton: true,
                    cancelButtonText:\"Annuler\",
                    confirmButtonText:\"Confirmer\",
                    cancelButtonClass:'red',
                    confirmButtonClass:'blue',
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                    \$.ajax({
                        url: url,
                        method: \"POST\",
                        success: function () {
                            swal(\"Ce livre a été supprimer !\");
                            ligne.remove();
                        },
                        error: function () {
                            swal(\"Erreur !\");
                        }
                    })

                });
            })

        })
    </script>
{% endblock %}
", "MainBundle:Admin/book:books.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle/Resources/views/Admin/book/books.html.twig");
    }
}
