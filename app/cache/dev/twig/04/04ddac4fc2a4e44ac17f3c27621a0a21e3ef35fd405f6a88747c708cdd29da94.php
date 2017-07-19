<?php

/* ::menu/menu.author.html.twig */
class __TwigTemplate_31efb000f925e18b2a417ad9125a957f3c731f9f42baa0564f164c4da5d85a70 extends Twig_Template
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
        $__internal_22d8fd4762204716e707b299d235718d299f932216343e48e091b7b666091bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d8fd4762204716e707b299d235718d299f932216343e48e091b7b666091bcd->enter($__internal_22d8fd4762204716e707b299d235718d299f932216343e48e091b7b666091bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu/menu.author.html.twig"));

        $__internal_87acc9c7e1fb847de8c5d811eefae51149810f014d8db3574a84bd6f5947af76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87acc9c7e1fb847de8c5d811eefae51149810f014d8db3574a84bd6f5947af76->enter($__internal_87acc9c7e1fb847de8c5d811eefae51149810f014d8db3574a84bd6f5947af76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu/menu.author.html.twig"));

        // line 1
        echo "<!-- BEGIN SIDEBAR -->
<div class=\"page-sidebar-wrapper\">
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_homepage");
        echo "\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-home\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">Tableau de bord</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item start page-inbox\">
                <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messaging_inbox", array("role" => "author"));
        echo "\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-comments\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">Messages</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item start page-my-books\">
                <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_my_books");
        echo "\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-book\"></i>
                    <span class=\"title\">Mes Livres</span>
                </a>
            </li>
            <li class=\"nav-item start page-workflow\">
                <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_current_edition");
        echo "\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-pencil-square-o\"></i>
                    <span class=\"title\">Edition en cours</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item start page-book-search\">
                <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_search_book");
        echo "\" class=\"nav-link nav-toggle\">
                    <i class=\"icon-c-search-book\"></i>
                    <span class=\"title\">Rechercher un livre</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item start  page-all-books \">
                <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_all_books");
        echo "\" class=\"nav-link nav-toggle\">
                    <i class=\"icon-c-books\"></i>
                    <span class=\"title\">Liste des  Livres</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>";
        
        $__internal_22d8fd4762204716e707b299d235718d299f932216343e48e091b7b666091bcd->leave($__internal_22d8fd4762204716e707b299d235718d299f932216343e48e091b7b666091bcd_prof);

        
        $__internal_87acc9c7e1fb847de8c5d811eefae51149810f014d8db3574a84bd6f5947af76->leave($__internal_87acc9c7e1fb847de8c5d811eefae51149810f014d8db3574a84bd6f5947af76_prof);

    }

    public function getTemplateName()
    {
        return "::menu/menu.author.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 57,  106 => 50,  96 => 43,  87 => 37,  77 => 30,  67 => 23,  59 => 18,  55 => 17,  50 => 14,  44 => 13,  38 => 11,  36 => 10,  25 => 1,);
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
<div class=\"page-sidebar-wrapper\">
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
                <a href=\"{{ path('author_homepage') }}\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-home\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">Tableau de bord</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item start page-inbox\">
                <a href=\"{{ path('messaging_inbox',{role:'author'}) }}\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-comments\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">Messages</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item start page-my-books\">
                <a href=\"{{ url('author_my_books') }}\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-book\"></i>
                    <span class=\"title\">Mes Livres</span>
                </a>
            </li>
            <li class=\"nav-item start page-workflow\">
                <a href=\"{{ path('author_current_edition') }}\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-pencil-square-o\"></i>
                    <span class=\"title\">Edition en cours</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item start page-book-search\">
                <a href=\"{{ path('author_search_book') }}\" class=\"nav-link nav-toggle\">
                    <i class=\"icon-c-search-book\"></i>
                    <span class=\"title\">Rechercher un livre</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item start  page-all-books \">
                <a href=\"{{ url('author_all_books') }}\" class=\"nav-link nav-toggle\">
                    <i class=\"icon-c-books\"></i>
                    <span class=\"title\">Liste des  Livres</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>", "::menu/menu.author.html.twig", "D:\\PFE\\webbook\\app/Resources\\views/menu/menu.author.html.twig");
    }
}
