<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_5837d46ee21bf3a6ffa004960ee0e25ceb338823326a166bbb734c396ce7e4ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5c77c7111f8f2fd1fab4597b0d4e531dc1dc9f9710190c40b6d07d17cec8a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c77c7111f8f2fd1fab4597b0d4e531dc1dc9f9710190c40b6d07d17cec8a01->enter($__internal_f5c77c7111f8f2fd1fab4597b0d4e531dc1dc9f9710190c40b6d07d17cec8a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_f27ad6998ca6924bc39e8b590dbd506d2d5790c2bd6d1795bb8d24f9d2338166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27ad6998ca6924bc39e8b590dbd506d2d5790c2bd6d1795bb8d24f9d2338166->enter($__internal_f27ad6998ca6924bc39e8b590dbd506d2d5790c2bd6d1795bb8d24f9d2338166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5c77c7111f8f2fd1fab4597b0d4e531dc1dc9f9710190c40b6d07d17cec8a01->leave($__internal_f5c77c7111f8f2fd1fab4597b0d4e531dc1dc9f9710190c40b6d07d17cec8a01_prof);

        
        $__internal_f27ad6998ca6924bc39e8b590dbd506d2d5790c2bd6d1795bb8d24f9d2338166->leave($__internal_f27ad6998ca6924bc39e8b590dbd506d2d5790c2bd6d1795bb8d24f9d2338166_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_876a6b55ca308949ab7205c5e8f72bbaff5ed1c8868de3dfbe3aabe4d8bf053e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876a6b55ca308949ab7205c5e8f72bbaff5ed1c8868de3dfbe3aabe4d8bf053e->enter($__internal_876a6b55ca308949ab7205c5e8f72bbaff5ed1c8868de3dfbe3aabe4d8bf053e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9336faf6a9e18579412a4bf546093210d4de8cfd3170cca0695b282d53460efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9336faf6a9e18579412a4bf546093210d4de8cfd3170cca0695b282d53460efd->enter($__internal_9336faf6a9e18579412a4bf546093210d4de8cfd3170cca0695b282d53460efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9336faf6a9e18579412a4bf546093210d4de8cfd3170cca0695b282d53460efd->leave($__internal_9336faf6a9e18579412a4bf546093210d4de8cfd3170cca0695b282d53460efd_prof);

        
        $__internal_876a6b55ca308949ab7205c5e8f72bbaff5ed1c8868de3dfbe3aabe4d8bf053e->leave($__internal_876a6b55ca308949ab7205c5e8f72bbaff5ed1c8868de3dfbe3aabe4d8bf053e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcf145b906cb97b1b432de711296e3666191f69e0bd740f6bcdc7e9e27cf91f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf145b906cb97b1b432de711296e3666191f69e0bd740f6bcdc7e9e27cf91f4->enter($__internal_dcf145b906cb97b1b432de711296e3666191f69e0bd740f6bcdc7e9e27cf91f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a76b24aef176c999b4cdd3f77fe736a8799daf86ab8c494cf85ed1b78d1aea7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76b24aef176c999b4cdd3f77fe736a8799daf86ab8c494cf85ed1b78d1aea7c->enter($__internal_a76b24aef176c999b4cdd3f77fe736a8799daf86ab8c494cf85ed1b78d1aea7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_a76b24aef176c999b4cdd3f77fe736a8799daf86ab8c494cf85ed1b78d1aea7c->leave($__internal_a76b24aef176c999b4cdd3f77fe736a8799daf86ab8c494cf85ed1b78d1aea7c_prof);

        
        $__internal_dcf145b906cb97b1b432de711296e3666191f69e0bd740f6bcdc7e9e27cf91f4->leave($__internal_dcf145b906cb97b1b432de711296e3666191f69e0bd740f6bcdc7e9e27cf91f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "D:\\PFE\\webbook\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
