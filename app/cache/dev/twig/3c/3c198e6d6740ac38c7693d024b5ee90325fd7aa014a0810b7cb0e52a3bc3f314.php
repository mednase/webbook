<?php

/* @Main/Admin/category/list.category.html.twig */
class __TwigTemplate_9cf40d37b343397bba78052aee76871a1a209e88c0f6f7f8797d5e4431cc300e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/category/list.category.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'classBody' => array($this, 'block_classBody'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Main/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c331047de624b47a67d78bdfa426ea89795383b03df02ce4279b1cb9c3e9858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c331047de624b47a67d78bdfa426ea89795383b03df02ce4279b1cb9c3e9858->enter($__internal_6c331047de624b47a67d78bdfa426ea89795383b03df02ce4279b1cb9c3e9858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/category/list.category.html.twig"));

        $__internal_7e2e755e1d15df1e5e06e364cf6ad0aa89d1d33d3375f3fd36ae046cec1f3f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2e755e1d15df1e5e06e364cf6ad0aa89d1d33d3375f3fd36ae046cec1f3f73->enter($__internal_7e2e755e1d15df1e5e06e364cf6ad0aa89d1d33d3375f3fd36ae046cec1f3f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/category/list.category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c331047de624b47a67d78bdfa426ea89795383b03df02ce4279b1cb9c3e9858->leave($__internal_6c331047de624b47a67d78bdfa426ea89795383b03df02ce4279b1cb9c3e9858_prof);

        
        $__internal_7e2e755e1d15df1e5e06e364cf6ad0aa89d1d33d3375f3fd36ae046cec1f3f73->leave($__internal_7e2e755e1d15df1e5e06e364cf6ad0aa89d1d33d3375f3fd36ae046cec1f3f73_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bc61e98b34c25b6c9a3a012db5a01345a4eb7c0bf32f22f31d507cfd18f3641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc61e98b34c25b6c9a3a012db5a01345a4eb7c0bf32f22f31d507cfd18f3641->enter($__internal_1bc61e98b34c25b6c9a3a012db5a01345a4eb7c0bf32f22f31d507cfd18f3641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6797a37af8ce8dc82701ab4c7dabbd2bd88c5ebbd7fb04e05d887084d477e3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6797a37af8ce8dc82701ab4c7dabbd2bd88c5ebbd7fb04e05d887084d477e3f8->enter($__internal_6797a37af8ce8dc82701ab4c7dabbd2bd88c5ebbd7fb04e05d887084d477e3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Liste des categories
";
        
        $__internal_6797a37af8ce8dc82701ab4c7dabbd2bd88c5ebbd7fb04e05d887084d477e3f8->leave($__internal_6797a37af8ce8dc82701ab4c7dabbd2bd88c5ebbd7fb04e05d887084d477e3f8_prof);

        
        $__internal_1bc61e98b34c25b6c9a3a012db5a01345a4eb7c0bf32f22f31d507cfd18f3641->leave($__internal_1bc61e98b34c25b6c9a3a012db5a01345a4eb7c0bf32f22f31d507cfd18f3641_prof);

    }

    // line 8
    public function block_classBody($context, array $blocks = array())
    {
        $__internal_b52c132b7b9c9c054f559378ee436dfcbade9953c19f810413c142c13e09f172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52c132b7b9c9c054f559378ee436dfcbade9953c19f810413c142c13e09f172->enter($__internal_b52c132b7b9c9c054f559378ee436dfcbade9953c19f810413c142c13e09f172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        $__internal_913475df0a9de7b6043021b03c18416dadbbcc395659555ed1b7cd1c560bae74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913475df0a9de7b6043021b03c18416dadbbcc395659555ed1b7cd1c560bae74->enter($__internal_913475df0a9de7b6043021b03c18416dadbbcc395659555ed1b7cd1c560bae74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        // line 9
        echo "    page-container-bg-solid page-header-fixed
";
        
        $__internal_913475df0a9de7b6043021b03c18416dadbbcc395659555ed1b7cd1c560bae74->leave($__internal_913475df0a9de7b6043021b03c18416dadbbcc395659555ed1b7cd1c560bae74_prof);

        
        $__internal_b52c132b7b9c9c054f559378ee436dfcbade9953c19f810413c142c13e09f172->leave($__internal_b52c132b7b9c9c054f559378ee436dfcbade9953c19f810413c142c13e09f172_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ced462b72d4895a3c694986f74fc4875f2b0af6ed58db9be5c9791fe863981e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced462b72d4895a3c694986f74fc4875f2b0af6ed58db9be5c9791fe863981e8->enter($__internal_ced462b72d4895a3c694986f74fc4875f2b0af6ed58db9be5c9791fe863981e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80f2166737dbc6e0b5a0f66075808c52b2a6afaa452af5740914a6a6d0a761cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f2166737dbc6e0b5a0f66075808c52b2a6afaa452af5740914a6a6d0a761cc->enter($__internal_80f2166737dbc6e0b5a0f66075808c52b2a6afaa452af5740914a6a6d0a761cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"fa fa-home\"></i>
                <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Liste des categories</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-tags\"></span> &nbsp; Liste des categories </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green\">
                <div class=\"portlet-title\">
                    <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_new_category");
        echo "\" style=\"margin-top: 5px\" class=\"btn btn-sm blue\"><i class=\"fa fa-plus\"></i>Nouvelle category</a>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" data-placement=\"bottom\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-placement=\"bottom\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body \">
                    <table class=\"table table-striped table-bordered datatable\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th class=\"text-center\">Livres</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 50
            echo "                            <tr>
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">";
            // line 52
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["category"], "books", array())), "html", null, true);
            echo "</td>
                                <td  class=\"text-center\">
                                    <form method=\"post\" action=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_delete_category", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">
                                        <button class=\"btn red\">
                                            Supprimer
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-categories\">

";
        
        $__internal_80f2166737dbc6e0b5a0f66075808c52b2a6afaa452af5740914a6a6d0a761cc->leave($__internal_80f2166737dbc6e0b5a0f66075808c52b2a6afaa452af5740914a6a6d0a761cc_prof);

        
        $__internal_ced462b72d4895a3c694986f74fc4875f2b0af6ed58db9be5c9791fe863981e8->leave($__internal_ced462b72d4895a3c694986f74fc4875f2b0af6ed58db9be5c9791fe863981e8_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Admin/category/list.category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 63,  152 => 54,  147 => 52,  143 => 51,  140 => 50,  136 => 49,  117 => 33,  98 => 17,  91 => 12,  82 => 11,  71 => 9,  62 => 8,  51 => 5,  42 => 4,  11 => 1,);
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
{% trans_default_domain 'FOSUserBundle' %}

{% block title %}
    Liste des categories
{% endblock %}

{% block classBody %}
    page-container-bg-solid page-header-fixed
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
                <span class=\"active\">Liste des categories</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-tags\"></span> &nbsp; Liste des categories </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green\">
                <div class=\"portlet-title\">
                    <a href=\"{{ url('administrator_new_category') }}\" style=\"margin-top: 5px\" class=\"btn btn-sm blue\"><i class=\"fa fa-plus\"></i>Nouvelle category</a>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" data-placement=\"bottom\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-placement=\"bottom\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body \">
                    <table class=\"table table-striped table-bordered datatable\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th class=\"text-center\">Livres</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for category in categories %}
                            <tr>
                                <td>{{ category.name }}</td>
                                <td class=\"text-center\">{{ category.books|length}}</td>
                                <td  class=\"text-center\">
                                    <form method=\"post\" action=\"{{ path('administrator_delete_category',{'id':category.id }) }}\">
                                        <button class=\"btn red\">
                                            Supprimer
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-categories\">

{% endblock %}", "@Main/Admin/category/list.category.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\category\\list.category.html.twig");
    }
}
