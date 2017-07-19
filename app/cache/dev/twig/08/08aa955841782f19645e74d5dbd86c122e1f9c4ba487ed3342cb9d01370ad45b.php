<?php

/* @Main/Admin/book/published.book.html.twig */
class __TwigTemplate_5dbdb8b0aa7e706ae53327fabfa85eeb99ef1b11c18fc25624ab59bc0dfff806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/book/published.book.html.twig", 1);
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
        $__internal_3a01a1c345262123b131226dbac2a5eb039c2adf4c86061fbb64b2091e2ab737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a01a1c345262123b131226dbac2a5eb039c2adf4c86061fbb64b2091e2ab737->enter($__internal_3a01a1c345262123b131226dbac2a5eb039c2adf4c86061fbb64b2091e2ab737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/book/published.book.html.twig"));

        $__internal_fef37e6966743215b9406bac53c7dcc672cc334f7ce630f372527083d10750f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef37e6966743215b9406bac53c7dcc672cc334f7ce630f372527083d10750f3->enter($__internal_fef37e6966743215b9406bac53c7dcc672cc334f7ce630f372527083d10750f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/book/published.book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a01a1c345262123b131226dbac2a5eb039c2adf4c86061fbb64b2091e2ab737->leave($__internal_3a01a1c345262123b131226dbac2a5eb039c2adf4c86061fbb64b2091e2ab737_prof);

        
        $__internal_fef37e6966743215b9406bac53c7dcc672cc334f7ce630f372527083d10750f3->leave($__internal_fef37e6966743215b9406bac53c7dcc672cc334f7ce630f372527083d10750f3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80831e8cef88982727abfd7ef86aef657333822bc9e18a606b0f34b6ac7e2b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80831e8cef88982727abfd7ef86aef657333822bc9e18a606b0f34b6ac7e2b9b->enter($__internal_80831e8cef88982727abfd7ef86aef657333822bc9e18a606b0f34b6ac7e2b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b1230de5ff20a1c005c29c44814004b8d80049253b0a7648bf01729e951f99b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1230de5ff20a1c005c29c44814004b8d80049253b0a7648bf01729e951f99b9->enter($__internal_b1230de5ff20a1c005c29c44814004b8d80049253b0a7648bf01729e951f99b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Livres publiées
";
        
        $__internal_b1230de5ff20a1c005c29c44814004b8d80049253b0a7648bf01729e951f99b9->leave($__internal_b1230de5ff20a1c005c29c44814004b8d80049253b0a7648bf01729e951f99b9_prof);

        
        $__internal_80831e8cef88982727abfd7ef86aef657333822bc9e18a606b0f34b6ac7e2b9b->leave($__internal_80831e8cef88982727abfd7ef86aef657333822bc9e18a606b0f34b6ac7e2b9b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_79fcb787006644a2471100c3f0d1fed1fb7983469d7a746e35d54a5044f19d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79fcb787006644a2471100c3f0d1fed1fb7983469d7a746e35d54a5044f19d64->enter($__internal_79fcb787006644a2471100c3f0d1fed1fb7983469d7a746e35d54a5044f19d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cdebd1d444f20e24b8c56feddada7c459aae9dd7d832e5b14021b46d6c2627b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cdebd1d444f20e24b8c56feddada7c459aae9dd7d832e5b14021b46d6c2627b->enter($__internal_9cdebd1d444f20e24b8c56feddada7c459aae9dd7d832e5b14021b46d6c2627b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <span class=\"active\">Livres publiées</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\" fa fa-check-square-o\"></span> &nbsp; Livres publiées </h2>
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
                            <th class=\"text-center\">Date Publication</th>
                            <th>Titre</th>
                            <th class=\"text-center\">Edition publié</th>
                            <th class=\"text-center\">Numéro d'édition</th>
                            <th class=\"text-center\">Actions</th>
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
                                <td class=\"text-center col-md-2\">";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["book"], "publishDate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo "</td>
                                <td class=\"text-center col-md-2\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["book"], "publishedEdition", array()), "title", array()), "html", null, true);
            echo "</td>
                                <td class=\"text-center col-md-2\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["book"], "publishedEdition", array()), "number", array()), "html", null, true);
            echo "</td>
                                <td class=\"text-center col-md-1\">
                                    <a data-toggle=\"tooltip\" data-title=\"Détails du livre\" href=\"";
            // line 53
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
        // line 58
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-book-published\">
";
        
        $__internal_9cdebd1d444f20e24b8c56feddada7c459aae9dd7d832e5b14021b46d6c2627b->leave($__internal_9cdebd1d444f20e24b8c56feddada7c459aae9dd7d832e5b14021b46d6c2627b_prof);

        
        $__internal_79fcb787006644a2471100c3f0d1fed1fb7983469d7a746e35d54a5044f19d64->leave($__internal_79fcb787006644a2471100c3f0d1fed1fb7983469d7a746e35d54a5044f19d64_prof);

    }

    // line 66
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1ca64c9bf5af65c9960ab65e43a59421cec9b37645e1994e9b68330512b8147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ca64c9bf5af65c9960ab65e43a59421cec9b37645e1994e9b68330512b8147->enter($__internal_c1ca64c9bf5af65c9960ab65e43a59421cec9b37645e1994e9b68330512b8147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3b83e2251e41d8cebaea1e048d01495b017bb3dff1bc6539a4296ca784794bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b83e2251e41d8cebaea1e048d01495b017bb3dff1bc6539a4296ca784794bad->enter($__internal_3b83e2251e41d8cebaea1e048d01495b017bb3dff1bc6539a4296ca784794bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 67
        echo "    <style>
        .dataTables_scrollHead {
            overflow: visible !important;
        }
    </style>
";
        
        $__internal_3b83e2251e41d8cebaea1e048d01495b017bb3dff1bc6539a4296ca784794bad->leave($__internal_3b83e2251e41d8cebaea1e048d01495b017bb3dff1bc6539a4296ca784794bad_prof);

        
        $__internal_c1ca64c9bf5af65c9960ab65e43a59421cec9b37645e1994e9b68330512b8147->leave($__internal_c1ca64c9bf5af65c9960ab65e43a59421cec9b37645e1994e9b68330512b8147_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_85da21a9c21ecbee45b4d0574c0c0d574d8216cb2100654f3be23a595a19969e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85da21a9c21ecbee45b4d0574c0c0d574d8216cb2100654f3be23a595a19969e->enter($__internal_85da21a9c21ecbee45b4d0574c0c0d574d8216cb2100654f3be23a595a19969e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d2f49fe0c22f6a6c0c6e1d65ea448634e2263bb17987efdb0dc582fe31372d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f49fe0c22f6a6c0c6e1d65ea448634e2263bb17987efdb0dc582fe31372d9c->enter($__internal_d2f49fe0c22f6a6c0c6e1d65ea448634e2263bb17987efdb0dc582fe31372d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    <script>
        \$(document).ready(function () {
        })
    </script>
";
        
        $__internal_d2f49fe0c22f6a6c0c6e1d65ea448634e2263bb17987efdb0dc582fe31372d9c->leave($__internal_d2f49fe0c22f6a6c0c6e1d65ea448634e2263bb17987efdb0dc582fe31372d9c_prof);

        
        $__internal_85da21a9c21ecbee45b4d0574c0c0d574d8216cb2100654f3be23a595a19969e->leave($__internal_85da21a9c21ecbee45b4d0574c0c0d574d8216cb2100654f3be23a595a19969e_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Admin/book/published.book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 74,  195 => 73,  180 => 67,  171 => 66,  154 => 58,  143 => 53,  138 => 51,  134 => 50,  130 => 49,  126 => 48,  123 => 47,  119 => 46,  98 => 28,  79 => 12,  72 => 7,  63 => 6,  52 => 4,  43 => 3,  11 => 1,);
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
    Livres publiées
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
                <span class=\"active\">Livres publiées</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\" fa fa-check-square-o\"></span> &nbsp; Livres publiées </h2>
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
                            <th class=\"text-center\">Date Publication</th>
                            <th>Titre</th>
                            <th class=\"text-center\">Edition publié</th>
                            <th class=\"text-center\">Numéro d'édition</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for book in books %}
                            <tr>
                                <td class=\"text-center col-md-2\">{{ book.publishDate|date('d-m-Y') }}</td>
                                <td>{{ book.title }}</td>
                                <td class=\"text-center col-md-2\">{{ book.publishedEdition.title }}</td>
                                <td class=\"text-center col-md-2\">{{ book.publishedEdition.number }}</td>
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
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-book-published\">
{% endblock %}
{% block stylesheets %}
    <style>
        .dataTables_scrollHead {
            overflow: visible !important;
        }
    </style>
{% endblock %}
{% block javascripts %}
    <script>
        \$(document).ready(function () {
        })
    </script>
{% endblock %}", "@Main/Admin/book/published.book.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\book\\published.book.html.twig");
    }
}
