<?php

/* @Main/Author/index.html.twig */
class __TwigTemplate_7d77f9284f026b2313185151723848aef01ec006e088be4ad45e8519e8091a4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "@Main/Author/index.html.twig", 1);
        $this->blocks = array(
            'classBody' => array($this, 'block_classBody'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c99b4aeca77ce5386d3e365886d5d543286a1d89afb62af3041ab6b72d7a2f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99b4aeca77ce5386d3e365886d5d543286a1d89afb62af3041ab6b72d7a2f6f->enter($__internal_c99b4aeca77ce5386d3e365886d5d543286a1d89afb62af3041ab6b72d7a2f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Author/index.html.twig"));

        $__internal_a4367739eb0899b39abc3ecddb39ad0f58b114c440f18d8aeb9ed44238787bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4367739eb0899b39abc3ecddb39ad0f58b114c440f18d8aeb9ed44238787bf5->enter($__internal_a4367739eb0899b39abc3ecddb39ad0f58b114c440f18d8aeb9ed44238787bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Author/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c99b4aeca77ce5386d3e365886d5d543286a1d89afb62af3041ab6b72d7a2f6f->leave($__internal_c99b4aeca77ce5386d3e365886d5d543286a1d89afb62af3041ab6b72d7a2f6f_prof);

        
        $__internal_a4367739eb0899b39abc3ecddb39ad0f58b114c440f18d8aeb9ed44238787bf5->leave($__internal_a4367739eb0899b39abc3ecddb39ad0f58b114c440f18d8aeb9ed44238787bf5_prof);

    }

    // line 2
    public function block_classBody($context, array $blocks = array())
    {
        $__internal_3fada11a252fae6875c7ff66c83b6c69f589c30c48e96f6c493101eb0f728472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fada11a252fae6875c7ff66c83b6c69f589c30c48e96f6c493101eb0f728472->enter($__internal_3fada11a252fae6875c7ff66c83b6c69f589c30c48e96f6c493101eb0f728472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        $__internal_572eb908958a362020917da27d26e686b6f7cf873fd674877ff2a48c578b575b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572eb908958a362020917da27d26e686b6f7cf873fd674877ff2a48c578b575b->enter($__internal_572eb908958a362020917da27d26e686b6f7cf873fd674877ff2a48c578b575b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        echo "page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo";
        
        $__internal_572eb908958a362020917da27d26e686b6f7cf873fd674877ff2a48c578b575b->leave($__internal_572eb908958a362020917da27d26e686b6f7cf873fd674877ff2a48c578b575b_prof);

        
        $__internal_3fada11a252fae6875c7ff66c83b6c69f589c30c48e96f6c493101eb0f728472->leave($__internal_3fada11a252fae6875c7ff66c83b6c69f589c30c48e96f6c493101eb0f728472_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de2ad1b6f3d8c7715740c441166dac78e33a58fe28d4e089b9d2fc8da837dd68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2ad1b6f3d8c7715740c441166dac78e33a58fe28d4e089b9d2fc8da837dd68->enter($__internal_de2ad1b6f3d8c7715740c441166dac78e33a58fe28d4e089b9d2fc8da837dd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_759f9bcc111fc224bb8c35c48f7ec134086e0c5ba984df5a55266985f1e280e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759f9bcc111fc224bb8c35c48f7ec134086e0c5ba984df5a55266985f1e280e1->enter($__internal_759f9bcc111fc224bb8c35c48f7ec134086e0c5ba984df5a55266985f1e280e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
";
        
        $__internal_759f9bcc111fc224bb8c35c48f7ec134086e0c5ba984df5a55266985f1e280e1->leave($__internal_759f9bcc111fc224bb8c35c48f7ec134086e0c5ba984df5a55266985f1e280e1_prof);

        
        $__internal_de2ad1b6f3d8c7715740c441166dac78e33a58fe28d4e089b9d2fc8da837dd68->leave($__internal_de2ad1b6f3d8c7715740c441166dac78e33a58fe28d4e089b9d2fc8da837dd68_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_68fe0061aa5a97ac52ef6f33cedee29e095ef9e8a52874bbfc460945b93e161a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68fe0061aa5a97ac52ef6f33cedee29e095ef9e8a52874bbfc460945b93e161a->enter($__internal_68fe0061aa5a97ac52ef6f33cedee29e095ef9e8a52874bbfc460945b93e161a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d6aaef177b3a8f1e6159113f1c1853245635bea7128511deace28e08ff3537e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6aaef177b3a8f1e6159113f1c1853245635bea7128511deace28e08ff3537e->enter($__internal_2d6aaef177b3a8f1e6159113f1c1853245635bea7128511deace28e08ff3537e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a >Tableau de bord</a>
            </li>
        </ul>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet light\">
                <div class=\"portlet-body\">
                    <h1>Auteur Tableau de bord !</h1>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-index\">

";
        
        $__internal_2d6aaef177b3a8f1e6159113f1c1853245635bea7128511deace28e08ff3537e->leave($__internal_2d6aaef177b3a8f1e6159113f1c1853245635bea7128511deace28e08ff3537e_prof);

        
        $__internal_68fe0061aa5a97ac52ef6f33cedee29e095ef9e8a52874bbfc460945b93e161a->leave($__internal_68fe0061aa5a97ac52ef6f33cedee29e095ef9e8a52874bbfc460945b93e161a_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Author/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 7,  82 => 6,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MainBundle::layout.html.twig\" %}
{% block classBody %}page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo{% endblock %}
{% block menu %}
    {{ parent() }}
{% endblock %}
{% block body %}
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a >Tableau de bord</a>
            </li>
        </ul>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet light\">
                <div class=\"portlet-body\">
                    <h1>Auteur Tableau de bord !</h1>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-index\">

{% endblock %}", "@Main/Author/index.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Author\\index.html.twig");
    }
}
