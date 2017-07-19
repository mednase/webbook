<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_0bac755ed9695e7dddcfe524b5d1d21d0357e3e1e6a5f9d5519971a224234065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f941fd3dabb3d1331793bce9d36ef0cc7afcd8e8c18e30f9f038ce318ef99a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f941fd3dabb3d1331793bce9d36ef0cc7afcd8e8c18e30f9f038ce318ef99a12->enter($__internal_f941fd3dabb3d1331793bce9d36ef0cc7afcd8e8c18e30f9f038ce318ef99a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_fee7e1113be37dc149da6e1f7ff180cb7aad7bf04f1e6f1bf31de8ba5e594af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee7e1113be37dc149da6e1f7ff180cb7aad7bf04f1e6f1bf31de8ba5e594af6->enter($__internal_fee7e1113be37dc149da6e1f7ff180cb7aad7bf04f1e6f1bf31de8ba5e594af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f941fd3dabb3d1331793bce9d36ef0cc7afcd8e8c18e30f9f038ce318ef99a12->leave($__internal_f941fd3dabb3d1331793bce9d36ef0cc7afcd8e8c18e30f9f038ce318ef99a12_prof);

        
        $__internal_fee7e1113be37dc149da6e1f7ff180cb7aad7bf04f1e6f1bf31de8ba5e594af6->leave($__internal_fee7e1113be37dc149da6e1f7ff180cb7aad7bf04f1e6f1bf31de8ba5e594af6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d19bd2cfcf4f623a94e93096a684b1588c75ceee6e1ac37b5c7190ddcf5881e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d19bd2cfcf4f623a94e93096a684b1588c75ceee6e1ac37b5c7190ddcf5881e->enter($__internal_6d19bd2cfcf4f623a94e93096a684b1588c75ceee6e1ac37b5c7190ddcf5881e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a3d7203632ffa0d5aeeaa2ec009c45db935aeec0df9ae438eb57dc49520a7d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d7203632ffa0d5aeeaa2ec009c45db935aeec0df9ae438eb57dc49520a7d6b->enter($__internal_a3d7203632ffa0d5aeeaa2ec009c45db935aeec0df9ae438eb57dc49520a7d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class=\"content\">
        ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 12
        echo "        <!-- BEGIN LOGIN FORM -->
        <form class=\"login-form\"  action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 14
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 15
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 17
        echo "            <div class=\"form-title\">
                <span class=\"form-title\">Bienvenue.</span>
                <span class=\"form-subtitle\">Identifiez-vous.</span>
            </div>
            <div class=\"alert alert-danger display-hide\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span>Entrez votre nom d'utilisateur et votre mot de passe.</span>
            </div>
            <div class=\"form-group\">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label for=\"username\" class=\"control-label visible-ie8 visible-ie9\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" autocomplete=\"off\"
                       placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\"
                       id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/></div>
            <div class=\"form-group\">
                <label class=\"control-label visible-ie8 visible-ie9\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\"
                       placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" name=\"_password\"/></div>
            <div class=\"form-actions\">
                <input type=\"submit\" class=\"btn blue btn-block uppercase\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-actions\">
                <div class=\"pull-left\">
                    <label class=\"rememberme mt-checkbox mt-checkbox-outline\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/> ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                        <span></span>
                    </label>
                </div>
                <div class=\"pull-right forget-password-block\">
                    <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_resetting_request");
        echo "\" id=\"forget-password\" class=\"forget-password\">Mot de passe oublié ?</a>
                </div>
            </div>
        </form>
    </div>
";
        
        $__internal_a3d7203632ffa0d5aeeaa2ec009c45db935aeec0df9ae438eb57dc49520a7d6b->leave($__internal_a3d7203632ffa0d5aeeaa2ec009c45db935aeec0df9ae438eb57dc49520a7d6b_prof);

        
        $__internal_6d19bd2cfcf4f623a94e93096a684b1588c75ceee6e1ac37b5c7190ddcf5881e->leave($__internal_6d19bd2cfcf4f623a94e93096a684b1588c75ceee6e1ac37b5c7190ddcf5881e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 46,  121 => 41,  113 => 36,  108 => 34,  103 => 32,  98 => 30,  94 => 29,  89 => 27,  77 => 17,  71 => 15,  69 => 14,  65 => 13,  62 => 12,  56 => 10,  54 => 9,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class=\"content\">
        {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
        <!-- BEGIN LOGIN FORM -->
        <form class=\"login-form\"  action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}
            <div class=\"form-title\">
                <span class=\"form-title\">Bienvenue.</span>
                <span class=\"form-subtitle\">Identifiez-vous.</span>
            </div>
            <div class=\"alert alert-danger display-hide\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span>Entrez votre nom d'utilisateur et votre mot de passe.</span>
            </div>
            <div class=\"form-group\">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label for=\"username\" class=\"control-label visible-ie8 visible-ie9\">{{ 'security.login.username'|trans }}</label>
                <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" autocomplete=\"off\"
                       placeholder=\"{{ 'security.login.username'|trans }}\"
                       id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"/></div>
            <div class=\"form-group\">
                <label class=\"control-label visible-ie8 visible-ie9\">{{ 'security.login.password'|trans }}</label>
                <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\"
                       placeholder=\"{{ 'security.login.password'|trans }}\" name=\"_password\"/></div>
            <div class=\"form-actions\">
                <input type=\"submit\" class=\"btn blue btn-block uppercase\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\">
            </div>
            <div class=\"form-actions\">
                <div class=\"pull-left\">
                    <label class=\"rememberme mt-checkbox mt-checkbox-outline\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/> {{ 'security.login.remember_me'|trans }}
                        <span></span>
                    </label>
                </div>
                <div class=\"pull-right forget-password-block\">
                    <a href=\"{{ url('fos_user_resetting_request') }}\" id=\"forget-password\" class=\"forget-password\">Mot de passe oublié ?</a>
                </div>
            </div>
        </form>
    </div>
{% endblock %}


", "@FOSUser/Security/login.html.twig", "D:\\PFE\\webbook\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
