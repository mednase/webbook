<?php

/* @Main/Admin/user/edit.html.twig */
class __TwigTemplate_7f922a27fd736ccdded7f77c4e9384a6eaf14e9c73c5926f4a3b3b61a72649ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/user/edit.html.twig", 1);
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
        $__internal_d96f93aaa4ab141e994d6c0586744868ede40aeb6f8cde755b301d0303bea092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96f93aaa4ab141e994d6c0586744868ede40aeb6f8cde755b301d0303bea092->enter($__internal_d96f93aaa4ab141e994d6c0586744868ede40aeb6f8cde755b301d0303bea092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/user/edit.html.twig"));

        $__internal_953cba29a35cf13c5956bf17397b534aaaf8f170db45c0df0eee80827edd0396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953cba29a35cf13c5956bf17397b534aaaf8f170db45c0df0eee80827edd0396->enter($__internal_953cba29a35cf13c5956bf17397b534aaaf8f170db45c0df0eee80827edd0396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d96f93aaa4ab141e994d6c0586744868ede40aeb6f8cde755b301d0303bea092->leave($__internal_d96f93aaa4ab141e994d6c0586744868ede40aeb6f8cde755b301d0303bea092_prof);

        
        $__internal_953cba29a35cf13c5956bf17397b534aaaf8f170db45c0df0eee80827edd0396->leave($__internal_953cba29a35cf13c5956bf17397b534aaaf8f170db45c0df0eee80827edd0396_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fb732ef732b456420c9dace97c86f2c5bdccc33f86411970efbb6b284397333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb732ef732b456420c9dace97c86f2c5bdccc33f86411970efbb6b284397333->enter($__internal_8fb732ef732b456420c9dace97c86f2c5bdccc33f86411970efbb6b284397333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99e50ee61a7540e81ecac566cf90cf02c8e1f21d2d8e95ab6afa2a6e18a79761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e50ee61a7540e81ecac566cf90cf02c8e1f21d2d8e95ab6afa2a6e18a79761->enter($__internal_99e50ee61a7540e81ecac566cf90cf02c8e1f21d2d8e95ab6afa2a6e18a79761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Modification des informations d'utilisateur
";
        
        $__internal_99e50ee61a7540e81ecac566cf90cf02c8e1f21d2d8e95ab6afa2a6e18a79761->leave($__internal_99e50ee61a7540e81ecac566cf90cf02c8e1f21d2d8e95ab6afa2a6e18a79761_prof);

        
        $__internal_8fb732ef732b456420c9dace97c86f2c5bdccc33f86411970efbb6b284397333->leave($__internal_8fb732ef732b456420c9dace97c86f2c5bdccc33f86411970efbb6b284397333_prof);

    }

    // line 8
    public function block_classBody($context, array $blocks = array())
    {
        $__internal_688c8a2936ed58b9a46653377f2b14491e05014c970b84202f797b7bd9efe080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688c8a2936ed58b9a46653377f2b14491e05014c970b84202f797b7bd9efe080->enter($__internal_688c8a2936ed58b9a46653377f2b14491e05014c970b84202f797b7bd9efe080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        $__internal_4b4abee42458d9f7cb5cb25463734a7f1f1f6b5413734e0094ab6a4f57c3bb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4abee42458d9f7cb5cb25463734a7f1f1f6b5413734e0094ab6a4f57c3bb00->enter($__internal_4b4abee42458d9f7cb5cb25463734a7f1f1f6b5413734e0094ab6a4f57c3bb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        // line 9
        echo "    page-container-bg-solid page-header-fixed
";
        
        $__internal_4b4abee42458d9f7cb5cb25463734a7f1f1f6b5413734e0094ab6a4f57c3bb00->leave($__internal_4b4abee42458d9f7cb5cb25463734a7f1f1f6b5413734e0094ab6a4f57c3bb00_prof);

        
        $__internal_688c8a2936ed58b9a46653377f2b14491e05014c970b84202f797b7bd9efe080->leave($__internal_688c8a2936ed58b9a46653377f2b14491e05014c970b84202f797b7bd9efe080_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c41ad4237af90caf346cd6f845f5d2e1b1a616a24befec9e4358993610941bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c41ad4237af90caf346cd6f845f5d2e1b1a616a24befec9e4358993610941bf->enter($__internal_3c41ad4237af90caf346cd6f845f5d2e1b1a616a24befec9e4358993610941bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b786648238c86c20ae66f7ff1761ae4de811c78e3f0143134b660c87ad04623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b786648238c86c20ae66f7ff1761ae4de811c78e3f0143134b660c87ad04623->enter($__internal_9b786648238c86c20ae66f7ff1761ae4de811c78e3f0143134b660c87ad04623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Modification des informations d'utilisateur</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-id-card\"></span> &nbsp; Modification des informations d'utilisateur </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box red\">
                <div class=\"portlet-title\">
                    <div class=\"caption\"></div>
                </div>
                <div class=\"portlet-body \">

                    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profile", array()), "lastName", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profile", array()), "lastName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profile", array()), "lastName", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profile", array()), "firstName", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profile", array()), "firstName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profile", array()), "firstName", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>

                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>

                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        <label class=\"custom-lb col-md-3 col-md-offset-1\" for=\"role\">Choisir un role :</label>
                        <div class=\"col-md-6\">
                            <select name=\"role\" id=\"role\" class=\"form-control\">
                                <option ";
        // line 98
        if (twig_in_filter("ROLE_ADMINISTRATEUR", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "vars", array()), "value", array()), "roles", array()))) {
            echo "  selected ";
        }
        echo " value=\"ROLE_ADMINISTRATEUR\">Role Administrateur</option>
                                <option  ";
        // line 99
        if (twig_in_filter("ROLE_VALIDATEUR", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "vars", array()), "value", array()), "roles", array()))) {
            echo "  selected ";
        }
        echo " value=\"ROLE_VALIDATEUR\">Role Validateur </option>
                            </select>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input  class=\"btn btn-lg btn-primary\" type=\"submit\" value=\"Edit\"/>
                    </div>
                    ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end', array("render_rest" => false));
        echo "
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-user\">

";
        
        $__internal_9b786648238c86c20ae66f7ff1761ae4de811c78e3f0143134b660c87ad04623->leave($__internal_9b786648238c86c20ae66f7ff1761ae4de811c78e3f0143134b660c87ad04623_prof);

        
        $__internal_3c41ad4237af90caf346cd6f845f5d2e1b1a616a24befec9e4358993610941bf->leave($__internal_3c41ad4237af90caf346cd6f845f5d2e1b1a616a24befec9e4358993610941bf_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Admin/user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 106,  245 => 99,  239 => 98,  228 => 90,  223 => 88,  218 => 86,  210 => 81,  205 => 79,  200 => 77,  191 => 71,  186 => 69,  181 => 67,  172 => 61,  167 => 59,  162 => 57,  154 => 52,  149 => 50,  144 => 48,  136 => 43,  131 => 41,  126 => 39,  121 => 37,  98 => 17,  91 => 12,  82 => 11,  71 => 9,  62 => 8,  51 => 5,  42 => 4,  11 => 1,);
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
    Modification des informations d'utilisateur
{% endblock %}

{% block classBody %}
    page-container-bg-solid page-header-fixed
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
                <span class=\"active\">Modification des informations d'utilisateur</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-id-card\"></span> &nbsp; Modification des informations d'utilisateur </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box red\">
                <div class=\"portlet-title\">
                    <div class=\"caption\"></div>
                </div>
                <div class=\"portlet-body \">

                    {{ form_start(edit_form) }}
                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(edit_form.profile.lastName, null,{ 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(edit_form.profile.lastName,{'attr':{'class':'form-control'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(edit_form.profile.lastName) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(edit_form.profile.firstName, null,{ 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(edit_form.profile.firstName,{'attr':{'class':'form-control'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(edit_form.profile.firstName) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(edit_form.username, null,{ 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(edit_form.username,{'attr':{'class':'form-control'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(edit_form.username) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(edit_form.email,null, { 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(edit_form.email,{'attr':{'class':'form-control'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(edit_form.email) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(edit_form.plainPassword.first,null, { 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(edit_form.plainPassword.first,{'attr':{'class':'form-control'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(edit_form.plainPassword.first) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(edit_form.plainPassword.second,null, { 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(edit_form.plainPassword.second,{'attr':{'class':'form-control'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(edit_form.plainPassword.second) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        <label class=\"custom-lb col-md-3 col-md-offset-1\" for=\"role\">Choisir un role :</label>
                        <div class=\"col-md-6\">
                            <select name=\"role\" id=\"role\" class=\"form-control\">
                                <option {% if 'ROLE_ADMINISTRATEUR' in edit_form.vars.value.roles %}  selected {% endif %} value=\"ROLE_ADMINISTRATEUR\">Role Administrateur</option>
                                <option  {% if 'ROLE_VALIDATEUR' in edit_form.vars.value.roles %}  selected {% endif %} value=\"ROLE_VALIDATEUR\">Role Validateur </option>
                            </select>
                        </div>
                    </div>
                    <div class=\"text-center\">
                        <input  class=\"btn btn-lg btn-primary\" type=\"submit\" value=\"Edit\"/>
                    </div>
                    {{ form_end(edit_form, {'render_rest': false}) }}
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-user\">

{% endblock %}
", "@Main/Admin/user/edit.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\user\\edit.html.twig");
    }
}
