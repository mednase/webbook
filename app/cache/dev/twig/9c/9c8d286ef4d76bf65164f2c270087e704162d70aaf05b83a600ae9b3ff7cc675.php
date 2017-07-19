<?php

/* @Main/Author/workflow.html.twig */
class __TwigTemplate_92721c0180e000abb591b7d0e9f907830a0484a1d4b342047012977b6d64341d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Author/workflow.html.twig", 1);
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
        $__internal_f646c091c893820bdaddbb1b9a18af0c6a84fcc293a4988b14d486439abff5c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f646c091c893820bdaddbb1b9a18af0c6a84fcc293a4988b14d486439abff5c8->enter($__internal_f646c091c893820bdaddbb1b9a18af0c6a84fcc293a4988b14d486439abff5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Author/workflow.html.twig"));

        $__internal_3a15f8b123e620e29f2542f9abb8a4be71c0e0805ff13a08cc676b62b16481b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a15f8b123e620e29f2542f9abb8a4be71c0e0805ff13a08cc676b62b16481b6->enter($__internal_3a15f8b123e620e29f2542f9abb8a4be71c0e0805ff13a08cc676b62b16481b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Author/workflow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f646c091c893820bdaddbb1b9a18af0c6a84fcc293a4988b14d486439abff5c8->leave($__internal_f646c091c893820bdaddbb1b9a18af0c6a84fcc293a4988b14d486439abff5c8_prof);

        
        $__internal_3a15f8b123e620e29f2542f9abb8a4be71c0e0805ff13a08cc676b62b16481b6->leave($__internal_3a15f8b123e620e29f2542f9abb8a4be71c0e0805ff13a08cc676b62b16481b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_409f05fbdbd362fedcab406c8f69170eaa9d0d647f18c2c98ae98a4a662113a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_409f05fbdbd362fedcab406c8f69170eaa9d0d647f18c2c98ae98a4a662113a8->enter($__internal_409f05fbdbd362fedcab406c8f69170eaa9d0d647f18c2c98ae98a4a662113a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2941ce11dc1a3dc1930a15757d10ab1b4bdc13d8cb9822109f582cd5086136e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2941ce11dc1a3dc1930a15757d10ab1b4bdc13d8cb9822109f582cd5086136e8->enter($__internal_2941ce11dc1a3dc1930a15757d10ab1b4bdc13d8cb9822109f582cd5086136e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Version en cours d'édition
";
        
        $__internal_2941ce11dc1a3dc1930a15757d10ab1b4bdc13d8cb9822109f582cd5086136e8->leave($__internal_2941ce11dc1a3dc1930a15757d10ab1b4bdc13d8cb9822109f582cd5086136e8_prof);

        
        $__internal_409f05fbdbd362fedcab406c8f69170eaa9d0d647f18c2c98ae98a4a662113a8->leave($__internal_409f05fbdbd362fedcab406c8f69170eaa9d0d647f18c2c98ae98a4a662113a8_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_359633fcdf8a705c98e20e520a32716a03d582d77315dfb3365ca9cac4d172b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359633fcdf8a705c98e20e520a32716a03d582d77315dfb3365ca9cac4d172b7->enter($__internal_359633fcdf8a705c98e20e520a32716a03d582d77315dfb3365ca9cac4d172b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_746ee8881cff03cd746a5a0ca1f00256542fcd3b1c513af35375c49236cf7ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746ee8881cff03cd746a5a0ca1f00256542fcd3b1c513af35375c49236cf7ada->enter($__internal_746ee8881cff03cd746a5a0ca1f00256542fcd3b1c513af35375c49236cf7ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"fa fa-home\"></i>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Version en cours d'édition</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><i class=\"fa fa-pencil-square-o\"></i> Version en cours d'édition </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box red\">
                <div class=\"portlet-body \">
                    <table class=\"table table-striped table-bordered datatable \" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th class=\"text-center\"> Livre </th>
                            <th class=\"text-center\">Titre du bloc</th>
                            <th class=\"text-center\">Numéro de version</th>
                            <th class=\"text-center\">Progression</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : $this->getContext($context, "versions")));
        foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
            // line 40
            echo "                            <tr class=\"text-center\">
                                <td> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["version"], "bookBlock", array()), "book", array()), "title", array()), "html", null, true);
            echo " </td>
                                <td> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["version"], "bookBlock", array()), "title", array()), "html", null, true);
            echo "</td>
                                <td><div class=\"label label-success\">";
            // line 43
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["version"], "number", array()), 1, ".", ","), "html", null, true);
            echo "</div> </td>
                                <td>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                             style=\"width: ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "progress", array()), "html", null, true);
            echo "%\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "progress", array()), "html", null, true);
            echo "%</div>
                                    </div>
                                </td>
                                <td >
                                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_block_version_edit", array("token" => $this->getAttribute($context["version"], "token", array()))), "html", null, true);
            echo "\" class=\"btn blue \">
                                        Continuer l'edition
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-workflow\">

";
        
        $__internal_746ee8881cff03cd746a5a0ca1f00256542fcd3b1c513af35375c49236cf7ada->leave($__internal_746ee8881cff03cd746a5a0ca1f00256542fcd3b1c513af35375c49236cf7ada_prof);

        
        $__internal_359633fcdf8a705c98e20e520a32716a03d582d77315dfb3365ca9cac4d172b7->leave($__internal_359633fcdf8a705c98e20e520a32716a03d582d77315dfb3365ca9cac4d172b7_prof);

    }

    // line 66
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f2eda7086ab9afeec62fc91b704e8e385c6a29adf6546e9feb8a3c7b90de2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2eda7086ab9afeec62fc91b704e8e385c6a29adf6546e9feb8a3c7b90de2a3->enter($__internal_1f2eda7086ab9afeec62fc91b704e8e385c6a29adf6546e9feb8a3c7b90de2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4d9905bf035dfbfe39e6fad55f8a161838ac87fc1b2ffb41efa7dee64ae5932a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9905bf035dfbfe39e6fad55f8a161838ac87fc1b2ffb41efa7dee64ae5932a->enter($__internal_4d9905bf035dfbfe39e6fad55f8a161838ac87fc1b2ffb41efa7dee64ae5932a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 67
        echo "    <style>
        .progress{
            height: 20px;
            margin-bottom: 0px;
        }
    </style>
";
        
        $__internal_4d9905bf035dfbfe39e6fad55f8a161838ac87fc1b2ffb41efa7dee64ae5932a->leave($__internal_4d9905bf035dfbfe39e6fad55f8a161838ac87fc1b2ffb41efa7dee64ae5932a_prof);

        
        $__internal_1f2eda7086ab9afeec62fc91b704e8e385c6a29adf6546e9feb8a3c7b90de2a3->leave($__internal_1f2eda7086ab9afeec62fc91b704e8e385c6a29adf6546e9feb8a3c7b90de2a3_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f09ca755bba925e0db429c79c082d74c866a9a55257ed5d6a59dbe69381425c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09ca755bba925e0db429c79c082d74c866a9a55257ed5d6a59dbe69381425c9->enter($__internal_f09ca755bba925e0db429c79c082d74c866a9a55257ed5d6a59dbe69381425c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5e91f0793e90bf6896854eb04d944178c14662065d475239e2528763f8271367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e91f0793e90bf6896854eb04d944178c14662065d475239e2528763f8271367->enter($__internal_5e91f0793e90bf6896854eb04d944178c14662065d475239e2528763f8271367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5e91f0793e90bf6896854eb04d944178c14662065d475239e2528763f8271367->leave($__internal_5e91f0793e90bf6896854eb04d944178c14662065d475239e2528763f8271367_prof);

        
        $__internal_f09ca755bba925e0db429c79c082d74c866a9a55257ed5d6a59dbe69381425c9->leave($__internal_f09ca755bba925e0db429c79c082d74c866a9a55257ed5d6a59dbe69381425c9_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Author/workflow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 74,  179 => 67,  170 => 66,  152 => 57,  140 => 51,  131 => 47,  124 => 43,  120 => 42,  116 => 41,  113 => 40,  109 => 39,  79 => 12,  72 => 7,  63 => 6,  52 => 4,  43 => 3,  11 => 1,);
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
    Version en cours d'édition
{% endblock %}
{% block body %}
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"fa fa-home\"></i>
                <a href=\"{{ url('author_homepage') }}\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Version en cours d'édition</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><i class=\"fa fa-pencil-square-o\"></i> Version en cours d'édition </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box red\">
                <div class=\"portlet-body \">
                    <table class=\"table table-striped table-bordered datatable \" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th class=\"text-center\"> Livre </th>
                            <th class=\"text-center\">Titre du bloc</th>
                            <th class=\"text-center\">Numéro de version</th>
                            <th class=\"text-center\">Progression</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for version in versions %}
                            <tr class=\"text-center\">
                                <td> {{ version.bookBlock.book.title }} </td>
                                <td> {{ version.bookBlock.title }}</td>
                                <td><div class=\"label label-success\">{{ version.number|number_format(1,'.',',') }}</div> </td>
                                <td>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                             style=\"width: {{ version.progress }}%\">{{ version.progress }}%</div>
                                    </div>
                                </td>
                                <td >
                                    <a href=\"{{ url('author_block_version_edit',{token:version.token}) }}\" class=\"btn blue \">
                                        Continuer l'edition
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-workflow\">

{% endblock %}
{% block stylesheets %}
    <style>
        .progress{
            height: 20px;
            margin-bottom: 0px;
        }
    </style>
{% endblock %}
{% block javascripts %}
{% endblock %}", "@Main/Author/workflow.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Author\\workflow.html.twig");
    }
}
