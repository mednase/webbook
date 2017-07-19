<?php

/* @Main/Admin/category/new.category.html.twig */
class __TwigTemplate_f7ad82841b96814cd5dd511416e8917cc5ccd642f0b7bf7b6c92ca344390bc78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/category/new.category.html.twig", 1);
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
        $__internal_2c9efc0244bb65be08b8c5854af2cdf07c6bb05360a720e686f3c5e4b932abae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9efc0244bb65be08b8c5854af2cdf07c6bb05360a720e686f3c5e4b932abae->enter($__internal_2c9efc0244bb65be08b8c5854af2cdf07c6bb05360a720e686f3c5e4b932abae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/category/new.category.html.twig"));

        $__internal_eb600eabac114701f6189d54db20c2884a3a5bd086c8d81f849900dc23669df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb600eabac114701f6189d54db20c2884a3a5bd086c8d81f849900dc23669df1->enter($__internal_eb600eabac114701f6189d54db20c2884a3a5bd086c8d81f849900dc23669df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/category/new.category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9efc0244bb65be08b8c5854af2cdf07c6bb05360a720e686f3c5e4b932abae->leave($__internal_2c9efc0244bb65be08b8c5854af2cdf07c6bb05360a720e686f3c5e4b932abae_prof);

        
        $__internal_eb600eabac114701f6189d54db20c2884a3a5bd086c8d81f849900dc23669df1->leave($__internal_eb600eabac114701f6189d54db20c2884a3a5bd086c8d81f849900dc23669df1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_772eac4c81e003962d846b3180140323124a826722343aefce88c377d2299eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772eac4c81e003962d846b3180140323124a826722343aefce88c377d2299eb1->enter($__internal_772eac4c81e003962d846b3180140323124a826722343aefce88c377d2299eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf31a2730d5abb5abc16f55d36c59ac67afe3f866ddaee031a14a69d2b2347dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf31a2730d5abb5abc16f55d36c59ac67afe3f866ddaee031a14a69d2b2347dc->enter($__internal_cf31a2730d5abb5abc16f55d36c59ac67afe3f866ddaee031a14a69d2b2347dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Ajouter une categorie
";
        
        $__internal_cf31a2730d5abb5abc16f55d36c59ac67afe3f866ddaee031a14a69d2b2347dc->leave($__internal_cf31a2730d5abb5abc16f55d36c59ac67afe3f866ddaee031a14a69d2b2347dc_prof);

        
        $__internal_772eac4c81e003962d846b3180140323124a826722343aefce88c377d2299eb1->leave($__internal_772eac4c81e003962d846b3180140323124a826722343aefce88c377d2299eb1_prof);

    }

    // line 8
    public function block_classBody($context, array $blocks = array())
    {
        $__internal_34da2ec123ec86f012ceda17ebed0cbf16aa131ac9f84c20153ab7ad39c92513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34da2ec123ec86f012ceda17ebed0cbf16aa131ac9f84c20153ab7ad39c92513->enter($__internal_34da2ec123ec86f012ceda17ebed0cbf16aa131ac9f84c20153ab7ad39c92513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        $__internal_999277e18cb63fc082305324a9bb89fd4bf032fcb791ea835cabdb6fe12b7d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999277e18cb63fc082305324a9bb89fd4bf032fcb791ea835cabdb6fe12b7d8f->enter($__internal_999277e18cb63fc082305324a9bb89fd4bf032fcb791ea835cabdb6fe12b7d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        // line 9
        echo "    page-container-bg-solid page-header-fixed
";
        
        $__internal_999277e18cb63fc082305324a9bb89fd4bf032fcb791ea835cabdb6fe12b7d8f->leave($__internal_999277e18cb63fc082305324a9bb89fd4bf032fcb791ea835cabdb6fe12b7d8f_prof);

        
        $__internal_34da2ec123ec86f012ceda17ebed0cbf16aa131ac9f84c20153ab7ad39c92513->leave($__internal_34da2ec123ec86f012ceda17ebed0cbf16aa131ac9f84c20153ab7ad39c92513_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_90583387a4c78f5c74ca19d6b8ee5609ec21212a449859be631a1f1642dce673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90583387a4c78f5c74ca19d6b8ee5609ec21212a449859be631a1f1642dce673->enter($__internal_90583387a4c78f5c74ca19d6b8ee5609ec21212a449859be631a1f1642dce673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1170dab0aae88ddad1fa647d7e6538a9ff57601a07470ed316b2b42462fbf430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1170dab0aae88ddad1fa647d7e6538a9ff57601a07470ed316b2b42462fbf430->enter($__internal_1170dab0aae88ddad1fa647d7e6538a9ff57601a07470ed316b2b42462fbf430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <span class=\"active\">Ajouter une categorie </span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-tag\"></span> &nbsp; Ajouter une categorie </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green\">
                <div class=\"portlet-title\">
                    <div class=\"tools\">
                        <a href=\"javascript:;\" data-placement=\"bottom\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-placement=\"bottom\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body \">
                    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
                    <div class=\"text-center\" style=\"margin-top: 15px\">
                        <button class=\"btn blue\">Enregistrer</button>
                    </div>
                    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-new-category\">

";
        
        $__internal_1170dab0aae88ddad1fa647d7e6538a9ff57601a07470ed316b2b42462fbf430->leave($__internal_1170dab0aae88ddad1fa647d7e6538a9ff57601a07470ed316b2b42462fbf430_prof);

        
        $__internal_90583387a4c78f5c74ca19d6b8ee5609ec21212a449859be631a1f1642dce673->leave($__internal_90583387a4c78f5c74ca19d6b8ee5609ec21212a449859be631a1f1642dce673_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Admin/category/new.category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 44,  127 => 40,  123 => 39,  98 => 17,  91 => 12,  82 => 11,  71 => 9,  62 => 8,  51 => 5,  42 => 4,  11 => 1,);
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
    Ajouter une categorie
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
                <span class=\"active\">Ajouter une categorie </span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-tag\"></span> &nbsp; Ajouter une categorie </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green\">
                <div class=\"portlet-title\">
                    <div class=\"tools\">
                        <a href=\"javascript:;\" data-placement=\"bottom\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-placement=\"bottom\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body \">
                    {{ form_start(form) }}
                    {{ form_row(form.name) }}
                    <div class=\"text-center\" style=\"margin-top: 15px\">
                        <button class=\"btn blue\">Enregistrer</button>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-new-category\">

{% endblock %}
", "@Main/Admin/category/new.category.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\category\\new.category.html.twig");
    }
}
