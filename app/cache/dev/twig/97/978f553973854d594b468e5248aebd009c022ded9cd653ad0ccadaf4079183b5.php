<?php

/* ::menu/menu.validator.html.twig */
class __TwigTemplate_83ad1bc6c401556fea188b91cdcffdc0ce64e07e6aabffbfca18746f8cebea02 extends Twig_Template
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
        $__internal_0608c2ae2669b6ba6f9d885d32a3da1c9acd2d6fce24bdbc6528c87fb842782b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0608c2ae2669b6ba6f9d885d32a3da1c9acd2d6fce24bdbc6528c87fb842782b->enter($__internal_0608c2ae2669b6ba6f9d885d32a3da1c9acd2d6fce24bdbc6528c87fb842782b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu/menu.validator.html.twig"));

        $__internal_16986784ef8cf93a0cd31e69cb08bb180095839011fdb48c56b7342ca41f4e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16986784ef8cf93a0cd31e69cb08bb180095839011fdb48c56b7342ca41f4e93->enter($__internal_16986784ef8cf93a0cd31e69cb08bb180095839011fdb48c56b7342ca41f4e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu/menu.validator.html.twig"));

        // line 1
        echo "<!-- BEGIN SIDEBAR -->
<div class=\"page-sidebar-wrapper\" >
    <div class=\"page-sidebar navbar-collapse collapse\">
        <ul class=\"page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu  \"
            data-keep-expanded=\"false\"
            data-auto-scroll=\"true\" data-slide-speed=\"200\">
            <li class=\"nav-item nav-profile\">
                <div class=\"profile\">
                    <div class=\"profile-image\">
                        <img src=\"";
        // line 10
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "picture", array()))) {
            // line 11
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "picture", array()), "mediaFile"), "html", null, true);
            echo "
                        ";
        } else {
            // line 13
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/no-avatar.png"), "html", null, true);
            echo "
                        ";
        }
        // line 14
        echo "\" alt=\"John Doe\">
                    </div>
                    <div class=\"profile-data\">
                        <div class=\"profile-data-name\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "fullName", array()), "html", null, true);
        echo "</div>
                        <div class=\"profile-data-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "jobTitle", array()), "html", null, true);
        echo "</div>
                    </div>
                </div>
            </li>
            <li class=\"nav-item start page-index\">
                <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validator_homepage");
        echo "\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-home\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">Tableau de bord</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item start page-inbox\">
                <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messaging_inbox", array("role" => "validator"));
        echo "\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-comments\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">Messages</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item start page-validation-requests\">
                <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validator_validation_requests");
        echo "\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-check-square-o\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">Demandes de validation</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>";
        
        $__internal_0608c2ae2669b6ba6f9d885d32a3da1c9acd2d6fce24bdbc6528c87fb842782b->leave($__internal_0608c2ae2669b6ba6f9d885d32a3da1c9acd2d6fce24bdbc6528c87fb842782b_prof);

        
        $__internal_16986784ef8cf93a0cd31e69cb08bb180095839011fdb48c56b7342ca41f4e93->leave($__internal_16986784ef8cf93a0cd31e69cb08bb180095839011fdb48c56b7342ca41f4e93_prof);

    }

    public function getTemplateName()
    {
        return "::menu/menu.validator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 37,  77 => 30,  67 => 23,  59 => 18,  55 => 17,  50 => 14,  44 => 13,  38 => 11,  36 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- BEGIN SIDEBAR -->
<div class=\"page-sidebar-wrapper\" >
    <div class=\"page-sidebar navbar-collapse collapse\">
        <ul class=\"page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu  \"
            data-keep-expanded=\"false\"
            data-auto-scroll=\"true\" data-slide-speed=\"200\">
            <li class=\"nav-item nav-profile\">
                <div class=\"profile\">
                    <div class=\"profile-image\">
                        <img src=\"{% if app.user.picture is not null %}
                        {{ vich_uploader_asset(app.user.picture,'mediaFile') }}
                        {% else %}
                        {{ asset('assets/img/avatar/no-avatar.png') }}
                        {% endif %}\" alt=\"John Doe\">
                    </div>
                    <div class=\"profile-data\">
                        <div class=\"profile-data-name\">{{ app.user.fullName }}</div>
                        <div class=\"profile-data-title\">{{ app.user.jobTitle }}</div>
                    </div>
                </div>
            </li>
            <li class=\"nav-item start page-index\">
                <a href=\"{{ path('validator_homepage') }}\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-home\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">Tableau de bord</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item start page-inbox\">
                <a href=\"{{ path('messaging_inbox',{role:'validator'}) }}\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-comments\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">Messages</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item start page-validation-requests\">
                <a href=\"{{ path('validator_validation_requests') }}\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-check-square-o\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">Demandes de validation</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>", "::menu/menu.validator.html.twig", "D:\\PFE\\webbook\\app/Resources\\views/menu/menu.validator.html.twig");
    }
}
