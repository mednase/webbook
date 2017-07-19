<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_6d32f2c2f71ea084394c8650f1d1f63858bc39320fc597ed6d8c1fff09ae9ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a852c69f6bdf36c1dcdcb1e70e4f4952886a3cc3bd7739a0f56c78fae0b888fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a852c69f6bdf36c1dcdcb1e70e4f4952886a3cc3bd7739a0f56c78fae0b888fa->enter($__internal_a852c69f6bdf36c1dcdcb1e70e4f4952886a3cc3bd7739a0f56c78fae0b888fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_b5cdf4e262f9da846ba51fb5fa79a44d3cc70db82d801b4de020feadc2208a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5cdf4e262f9da846ba51fb5fa79a44d3cc70db82d801b4de020feadc2208a0b->enter($__internal_b5cdf4e262f9da846ba51fb5fa79a44d3cc70db82d801b4de020feadc2208a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/css/components-md.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/css/plugins-md.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/css/layout.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/css/themes/blue.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/css/custom.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/login.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\" />


    <title>";
        // line 23
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body class=\"login\">
<div class=\"login\">
    <div class=\"logo\">
        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/webbook-logo2.png"), "html", null, true);
        echo "\" height=\"150px\" alt=\"Webbook logo\"/>
    </div>
    ";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 34
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 35
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 36
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    <div class=\"alert alert-danger\" style=\"position: absolute\"> ";
                    // line 37
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "</div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "    ";
        }
        // line 42
        echo "    <div class=\"copyright\"> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "Y"), "html", null, true);
        echo " © Mobelite.Tous les droits sont réservés. </div>
</div>

";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "</body>
</html>";
        
        $__internal_a852c69f6bdf36c1dcdcb1e70e4f4952886a3cc3bd7739a0f56c78fae0b888fa->leave($__internal_a852c69f6bdf36c1dcdcb1e70e4f4952886a3cc3bd7739a0f56c78fae0b888fa_prof);

        
        $__internal_b5cdf4e262f9da846ba51fb5fa79a44d3cc70db82d801b4de020feadc2208a0b->leave($__internal_b5cdf4e262f9da846ba51fb5fa79a44d3cc70db82d801b4de020feadc2208a0b_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba273f58422083129f516e6488aaf69a0cc45d730cba0cce4ae3f0c63014f184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba273f58422083129f516e6488aaf69a0cc45d730cba0cce4ae3f0c63014f184->enter($__internal_ba273f58422083129f516e6488aaf69a0cc45d730cba0cce4ae3f0c63014f184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aed7d7985a947a52f11e64cc66c2ce1d7416b97ed013a9ac84f2783cdcbb9b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed7d7985a947a52f11e64cc66c2ce1d7416b97ed013a9ac84f2783cdcbb9b81->enter($__internal_aed7d7985a947a52f11e64cc66c2ce1d7416b97ed013a9ac84f2783cdcbb9b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_aed7d7985a947a52f11e64cc66c2ce1d7416b97ed013a9ac84f2783cdcbb9b81->leave($__internal_aed7d7985a947a52f11e64cc66c2ce1d7416b97ed013a9ac84f2783cdcbb9b81_prof);

        
        $__internal_ba273f58422083129f516e6488aaf69a0cc45d730cba0cce4ae3f0c63014f184->leave($__internal_ba273f58422083129f516e6488aaf69a0cc45d730cba0cce4ae3f0c63014f184_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b09277924f619fa8ea5f845c45cba797571de66b81cac6eb4016323956aab471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09277924f619fa8ea5f845c45cba797571de66b81cac6eb4016323956aab471->enter($__internal_b09277924f619fa8ea5f845c45cba797571de66b81cac6eb4016323956aab471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_788a0c6c921c0bbe8ca9bf8bfccb483ffad3f596f94fecf8728b80e649914aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788a0c6c921c0bbe8ca9bf8bfccb483ffad3f596f94fecf8728b80e649914aa1->enter($__internal_788a0c6c921c0bbe8ca9bf8bfccb483ffad3f596f94fecf8728b80e649914aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "    ";
        
        $__internal_788a0c6c921c0bbe8ca9bf8bfccb483ffad3f596f94fecf8728b80e649914aa1->leave($__internal_788a0c6c921c0bbe8ca9bf8bfccb483ffad3f596f94fecf8728b80e649914aa1_prof);

        
        $__internal_b09277924f619fa8ea5f845c45cba797571de66b81cac6eb4016323956aab471->leave($__internal_b09277924f619fa8ea5f845c45cba797571de66b81cac6eb4016323956aab471_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20388f277d08bb5ca4cd557a2d2cb222d41683c8b3c6554bf5362d135bdbf9dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20388f277d08bb5ca4cd557a2d2cb222d41683c8b3c6554bf5362d135bdbf9dc->enter($__internal_20388f277d08bb5ca4cd557a2d2cb222d41683c8b3c6554bf5362d135bdbf9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c68b2e664b9ed72358f1aee4bb28a5ea2f1fce75857a9d383e2a066997b7f3d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68b2e664b9ed72358f1aee4bb28a5ea2f1fce75857a9d383e2a066997b7f3d5->enter($__internal_c68b2e664b9ed72358f1aee4bb28a5ea2f1fce75857a9d383e2a066997b7f3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c68b2e664b9ed72358f1aee4bb28a5ea2f1fce75857a9d383e2a066997b7f3d5->leave($__internal_c68b2e664b9ed72358f1aee4bb28a5ea2f1fce75857a9d383e2a066997b7f3d5_prof);

        
        $__internal_20388f277d08bb5ca4cd557a2d2cb222d41683c8b3c6554bf5362d135bdbf9dc->leave($__internal_20388f277d08bb5ca4cd557a2d2cb222d41683c8b3c6554bf5362d135bdbf9dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 45,  182 => 31,  173 => 30,  155 => 23,  144 => 47,  142 => 45,  135 => 42,  132 => 41,  126 => 40,  117 => 37,  112 => 36,  107 => 35,  102 => 34,  100 => 33,  97 => 32,  95 => 30,  90 => 28,  82 => 23,  76 => 20,  72 => 19,  68 => 18,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link href=\"{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/layout/css/components-md.min.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/layout/css/plugins-md.min.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/layout/css/layout.min.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/layout/css/themes/blue.min.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/layout/css/custom.min.css') }}\"/>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/pages/css/login.css')}}\"  rel=\"stylesheet\" type=\"text/css\" />


    <title>{%  block title %} {% endblock  title%}</title>
</head>
<body class=\"login\">
<div class=\"login\">
    <div class=\"logo\">
        <img src=\"{{ asset('assets/img/webbook-logo2.png') }}\" height=\"150px\" alt=\"Webbook logo\"/>
    </div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}

    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    <div class=\"alert alert-danger\" style=\"position: absolute\"> {{ message }}</div>
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}
    <div class=\"copyright\"> {{ date()|date(\"Y\") }} © Mobelite.Tous les droits sont réservés. </div>
</div>

{% block javascripts %}
{% endblock javascripts %}
</body>
</html>", "@FOSUser/layout.html.twig", "D:\\PFE\\webbook\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
