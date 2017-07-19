<?php

/* @Main/Admin/user/show.html.twig */
class __TwigTemplate_d7bd4aa9fe001a6a4f66c707d455e7e8edcab5d509cf63ffd87ca44888640e5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/user/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'classBody' => array($this, 'block_classBody'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Main/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da2776a962b913008eb9563d68c64420812026daafa3b11af6b50ddc07d8902d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2776a962b913008eb9563d68c64420812026daafa3b11af6b50ddc07d8902d->enter($__internal_da2776a962b913008eb9563d68c64420812026daafa3b11af6b50ddc07d8902d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/user/show.html.twig"));

        $__internal_8cb83862cf23b9af268105097f76cdb022c244a9bcce698297d2933cb78ec157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb83862cf23b9af268105097f76cdb022c244a9bcce698297d2933cb78ec157->enter($__internal_8cb83862cf23b9af268105097f76cdb022c244a9bcce698297d2933cb78ec157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da2776a962b913008eb9563d68c64420812026daafa3b11af6b50ddc07d8902d->leave($__internal_da2776a962b913008eb9563d68c64420812026daafa3b11af6b50ddc07d8902d_prof);

        
        $__internal_8cb83862cf23b9af268105097f76cdb022c244a9bcce698297d2933cb78ec157->leave($__internal_8cb83862cf23b9af268105097f76cdb022c244a9bcce698297d2933cb78ec157_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_18319d1584a9d6dd195ddf9f05871d73004c506a0556f7ee2cb3dc8a2f83499b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18319d1584a9d6dd195ddf9f05871d73004c506a0556f7ee2cb3dc8a2f83499b->enter($__internal_18319d1584a9d6dd195ddf9f05871d73004c506a0556f7ee2cb3dc8a2f83499b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96cc7bdceb2595d31b6cb1ec7e793329dab88ded0afb803b34fb35566081cee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cc7bdceb2595d31b6cb1ec7e793329dab88ded0afb803b34fb35566081cee8->enter($__internal_96cc7bdceb2595d31b6cb1ec7e793329dab88ded0afb803b34fb35566081cee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Information d'utilisateur
";
        
        $__internal_96cc7bdceb2595d31b6cb1ec7e793329dab88ded0afb803b34fb35566081cee8->leave($__internal_96cc7bdceb2595d31b6cb1ec7e793329dab88ded0afb803b34fb35566081cee8_prof);

        
        $__internal_18319d1584a9d6dd195ddf9f05871d73004c506a0556f7ee2cb3dc8a2f83499b->leave($__internal_18319d1584a9d6dd195ddf9f05871d73004c506a0556f7ee2cb3dc8a2f83499b_prof);

    }

    // line 8
    public function block_classBody($context, array $blocks = array())
    {
        $__internal_fded8c81b2742dd6e8d8f88b55f1814acb6b44fa696e1a26f33b99c9418ce327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fded8c81b2742dd6e8d8f88b55f1814acb6b44fa696e1a26f33b99c9418ce327->enter($__internal_fded8c81b2742dd6e8d8f88b55f1814acb6b44fa696e1a26f33b99c9418ce327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        $__internal_bd81abb059e3a0df2ba2d34ad325dafcbbb7549cbca546b56385ec61a7e15116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd81abb059e3a0df2ba2d34ad325dafcbbb7549cbca546b56385ec61a7e15116->enter($__internal_bd81abb059e3a0df2ba2d34ad325dafcbbb7549cbca546b56385ec61a7e15116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        // line 9
        echo "    page-container-bg-solid page-header-fixed
";
        
        $__internal_bd81abb059e3a0df2ba2d34ad325dafcbbb7549cbca546b56385ec61a7e15116->leave($__internal_bd81abb059e3a0df2ba2d34ad325dafcbbb7549cbca546b56385ec61a7e15116_prof);

        
        $__internal_fded8c81b2742dd6e8d8f88b55f1814acb6b44fa696e1a26f33b99c9418ce327->leave($__internal_fded8c81b2742dd6e8d8f88b55f1814acb6b44fa696e1a26f33b99c9418ce327_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_070ee16adeb7ceb0bf66c3dec97c40186f53637c00b0c5fe049b7aca077dcf89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070ee16adeb7ceb0bf66c3dec97c40186f53637c00b0c5fe049b7aca077dcf89->enter($__internal_070ee16adeb7ceb0bf66c3dec97c40186f53637c00b0c5fe049b7aca077dcf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29d60a63df34ec280a6b99fcb79aeb21c5608f18c0acd96c5845b4de3ae0e048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d60a63df34ec280a6b99fcb79aeb21c5608f18c0acd96c5845b4de3ae0e048->enter($__internal_29d60a63df34ec280a6b99fcb79aeb21c5608f18c0acd96c5845b4de3ae0e048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <span class=\"active\">Information d'utilisateur</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-id-card\"></span> &nbsp; Information d'utilisateur </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box red\">
                <div class=\"portlet-title\">
                    <div class=\"caption\"></div>
                </div>
                <div class=\"portlet-body \">

                    <table>
                        <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
                        </tr>
                        </tbody>
                    </table>

                    <ul>
                        <li>
                            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_users");
        echo "\">Back to the list</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_edit_user", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_29d60a63df34ec280a6b99fcb79aeb21c5608f18c0acd96c5845b4de3ae0e048->leave($__internal_29d60a63df34ec280a6b99fcb79aeb21c5608f18c0acd96c5845b4de3ae0e048_prof);

        
        $__internal_070ee16adeb7ceb0bf66c3dec97c40186f53637c00b0c5fe049b7aca077dcf89->leave($__internal_070ee16adeb7ceb0bf66c3dec97c40186f53637c00b0c5fe049b7aca077dcf89_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b43189c681279476eeec34f1a9b4a4ecd93141618b34b1b48e4842b0384ba8b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43189c681279476eeec34f1a9b4a4ecd93141618b34b1b48e4842b0384ba8b2->enter($__internal_b43189c681279476eeec34f1a9b4a4ecd93141618b34b1b48e4842b0384ba8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_234aef1626186f31d6991fc07773de63c611278e74c928e9e9f34c734117f77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234aef1626186f31d6991fc07773de63c611278e74c928e9e9f34c734117f77c->enter($__internal_234aef1626186f31d6991fc07773de63c611278e74c928e9e9f34c734117f77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "        <script>
            \$(document).ready(function () {
            })

        </script>
    ";
        
        $__internal_234aef1626186f31d6991fc07773de63c611278e74c928e9e9f34c734117f77c->leave($__internal_234aef1626186f31d6991fc07773de63c611278e74c928e9e9f34c734117f77c_prof);

        
        $__internal_b43189c681279476eeec34f1a9b4a4ecd93141618b34b1b48e4842b0384ba8b2->leave($__internal_b43189c681279476eeec34f1a9b4a4ecd93141618b34b1b48e4842b0384ba8b2_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Admin/user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 62,  161 => 61,  142 => 51,  136 => 48,  126 => 41,  99 => 17,  92 => 12,  83 => 11,  72 => 9,  63 => 8,  52 => 5,  43 => 4,  11 => 1,);
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
    Information d'utilisateur
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
                <span class=\"active\">Information d'utilisateur</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-id-card\"></span> &nbsp; Information d'utilisateur </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box red\">
                <div class=\"portlet-title\">
                    <div class=\"caption\"></div>
                </div>
                <div class=\"portlet-body \">

                    <table>
                        <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ user.id }}</td>
                        </tr>
                        </tbody>
                    </table>

                    <ul>
                        <li>
                            <a href=\"{{ path('administrator_users') }}\">Back to the list</a>
                        </li>
                        <li>
                            <a href=\"{{ path('administrator_edit_user', { 'id': user.id }) }}\">Edit</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

    {% block javascripts %}
        <script>
            \$(document).ready(function () {
            })

        </script>
    {% endblock %}
", "@Main/Admin/user/show.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\user\\show.html.twig");
    }
}
