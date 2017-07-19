<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_280f4c37e7a6a7ad71ea6e73e86fba305cc07825534d2ee2d1364f4528ab6515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_449cb4beaa17f846fe2198bc0dcfffa69a7b410d3af973686ff08d55846b0fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449cb4beaa17f846fe2198bc0dcfffa69a7b410d3af973686ff08d55846b0fd6->enter($__internal_449cb4beaa17f846fe2198bc0dcfffa69a7b410d3af973686ff08d55846b0fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_d90cbe88d0ac68db988a3a01156ab80264e8f7c792b517716a06d4d49e9cab31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90cbe88d0ac68db988a3a01156ab80264e8f7c792b517716a06d4d49e9cab31->enter($__internal_d90cbe88d0ac68db988a3a01156ab80264e8f7c792b517716a06d4d49e9cab31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_449cb4beaa17f846fe2198bc0dcfffa69a7b410d3af973686ff08d55846b0fd6->leave($__internal_449cb4beaa17f846fe2198bc0dcfffa69a7b410d3af973686ff08d55846b0fd6_prof);

        
        $__internal_d90cbe88d0ac68db988a3a01156ab80264e8f7c792b517716a06d4d49e9cab31->leave($__internal_d90cbe88d0ac68db988a3a01156ab80264e8f7c792b517716a06d4d49e9cab31_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "D:\\PFE\\webbook\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
