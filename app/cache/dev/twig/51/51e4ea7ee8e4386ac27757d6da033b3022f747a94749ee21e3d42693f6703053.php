<?php

/* ::menu/menu.administrator.html.twig */
class __TwigTemplate_4ed0fc5bd3c39fce736b7404564e100476f2768c2cffa7b76f387caa5cc8bc12 extends Twig_Template
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
        $__internal_536706ef8fc899c2f98461f9273bf84834a5fdd6969c466d55a5d3f5a517c97b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536706ef8fc899c2f98461f9273bf84834a5fdd6969c466d55a5d3f5a517c97b->enter($__internal_536706ef8fc899c2f98461f9273bf84834a5fdd6969c466d55a5d3f5a517c97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu/menu.administrator.html.twig"));

        $__internal_83a3c2562082b4d943c5b65f12ec095299153cf3eb4efa67f4eab1fa54acb410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a3c2562082b4d943c5b65f12ec095299153cf3eb4efa67f4eab1fa54acb410->enter($__internal_83a3c2562082b4d943c5b65f12ec095299153cf3eb4efa67f4eab1fa54acb410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu/menu.administrator.html.twig"));

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
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profile", array()), "fullName", array()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"profile-data\">
                        <div class=\"profile-data-name\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profile", array()), "fullName", array()), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_homepage");
        echo "\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-area-chart\" style=\"font-size: 32px\" aria-hidden=\"true\"></i>
                    <span class=\"title\">Tableau de bord</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item start page-inbox\">
                <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messaging_inbox", array("role" => "administrator"));
        echo "\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-comments\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">Messages</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item  page-book-search\">
                <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_search_book");
        echo "\" class=\"nav-link nav-toggle\">
                    <i class=\"icon-c-search-book\"></i>
                    <span class=\"title\">Chercher un livre</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            ";
        // line 43
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMINISTRATOR")) {
            // line 44
            echo "            <li class=\"nav-item start page-users page-new-user page-switch-role\">
                <a class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-users\"></i>
                    <span class=\"title\">Gestion des utilisateurs</span>
                    <span class=\"arrow\"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li class=\"nav-item page-users page-user\">
                        <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_users");
            echo "\" class=\"nav-link \">
                            <i class=\"fa fa-list\"></i>
                            <span class=\"title\">Liste des utilisateurs</span>
                        </a>
                    </li>
                    <li class=\"nav-item page-new-user\">
                        <a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_new_user");
            echo "\" class=\"nav-link \">
                            <i class=\"fa fa-user-plus\"></i>
                            <span class=\"title\">Ajouter un utilisateur</span>
                        </a>
                    </li>
                    <li class=\"nav-item page-switch-role\">
                        <a href=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_manage_roles");
            echo "\" class=\"nav-link \">
                            <i class=\"fa fa-wrench\"></i>
                            <span class=\"title\">Gérer les roles</span>
                        </a>
                    </li>
                </ul>
            </li>
            ";
        }
        // line 72
        echo "            <li class=\"nav-item start page-authors page-new-author page-author\">
                <a class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-pencil-square-o \"></i>
                    <span class=\"title\">Gestion des auteurs</span>
                    <span class=\"arrow\"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li class=\"nav-item page-authors \">
                        <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_authors");
        echo "\" class=\"nav-link \">
                            <i class=\"fa fa-list\"></i>
                            <span class=\"title\">Liste des auteurs</span>
                        </a>
                    </li>
                    <li class=\"nav-item page-new-author\">
                        <a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_new_author");
        echo "\" class=\"nav-link \">
                            <i class=\"fa fa-user-plus\"></i>
                            <span class=\"title\">Ajouter un auteur</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-item page-book page-new-book page-books page-book-published page-book-unpublished\">
                <a class=\"nav-link nav-toggle\">
                    <i class=\"icon-c-books\"></i>
                    <span class=\"title\">Gestion des Livres</span>
                    <span class=\"arrow\"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li class=\"nav-item  page-books\">
                        <a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_books");
        echo "\" class=\"nav-link \">
                            <i class=\"fa fa-list\"></i>
                            <span class=\"title\">Liste des livres</span>
                        </a>
                    </li>
                    <li class=\"nav-item page-new-book\">
                        <a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_new_book");
        echo "\" class=\"nav-link \">
                            <i class=\"fa fa-edit\"></i>
                            <span class=\"title\">Creation d'un nouveau livre</span>
                        </a>
                    </li>
                    <li class=\"nav-item page-book-unpublished\">
                        <a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_unpublished_books");
        echo "\" class=\"nav-link \">
                            <i class=\"fa fa-clock-o\"></i>
                            <span class=\"title\">Livres en cours de préparation</span>
                        </a>
                    </li>
                    <li class=\"nav-item page-book-published\">
                        <a href=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_published_books");
        echo "\" class=\"nav-link \">
                            <i class=\"fa fa-check-square-o\"></i>
                            <span class=\"title\">Livres publiés</span>
                        </a>
                    </li>
                </ul>
            </li>
            ";
        // line 126
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMINISTRATOR")) {
            // line 127
            echo "            <li class=\"nav-item start page-clients page-subscriptions page-purchases\">
                <a class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-briefcase\"></i>
                    <span class=\"title\">Gestion des Clients</span>
                    <span class=\"arrow\"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li class=\"nav-item  page-clients\">
                        <a href=\"";
            // line 135
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_clients");
            echo "\" class=\"nav-link \">
                            <i class=\"fa fa-users\"></i>
                            <span class=\"title\">Liste des clients</span>
                        </a>
                    </li>
                    <li class=\"nav-item  page-subscriptions\">
                        <a href=\"";
            // line 141
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_subscriptions");
            echo "\" class=\"nav-link \">
                            <i class=\"fa fa-id-card-o\"></i>
                            <span class=\"title\">Les abonnements</span>
                        </a>
                    </li>
                    <li class=\"nav-item  page-purchases\">
                        <a href=\"";
            // line 147
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_purchases");
            echo "\" class=\"nav-link \">
                            <i class=\"fa fa-cart-arrow-down\"></i>
                            <span class=\"title\">Les Achats</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-item start page-newsletter  page-list-newsletter page-send-newsletter page-add-newsletter\">
                <a class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-envelope-o\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">NewsLetters</span>
                    <span class=\"arrow\"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li class=\"nav-item  page-add-newsletter\">
                        <a href=\"";
            // line 162
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("newsletter_new");
            echo "\" class=\"nav-link \">
                            <i class=\"fa fa-file-text-o\"></i>
                            <span class=\"title\">Composer newsletter</span>
                        </a>
                    </li>
                    <li class=\"nav-item  page-send-newsletter\">
                        <a href=\"";
            // line 168
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("newsletter_send");
            echo "\" class=\"nav-link \">
                            <i class=\"fa fa-send-o\"></i>
                            <span class=\"title\">Envoyer newsletter</span>
                        </a>
                    </li>
                    <li class=\"nav-item  page-list-newsletter\">
                        <a href=\"";
            // line 174
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("newsletter_list");
            echo "\" class=\"nav-link \">
                            <i class=\"fa fa-files-o\"></i>
                            <span class=\"title\">Liste des newsletter</span>
                        </a>
                    </li>
                </ul>
            </li>
                <li class=\"nav-item start page-categories page-new-category\">
                    <a  class=\"nav-link nav-toggle\">
                        <i class=\"fa fa-tags\" style=\"font-size: 32px\"></i>
                        <span class=\"title\">Catégories</span>
                        <span class=\"arrow\"></span>
                    </a>
                    <ul class=\"sub-menu\">
                        <li class=\"nav-item  page-new-category\">
                            <a href=\"";
            // line 189
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_new_category");
            echo "\" class=\"nav-link \">
                                <i class=\"fa fa-plus\"></i>
                                <span class=\"title\">Ajouter une catégorie</span>
                            </a>
                        </li>
                        <li class=\"nav-item start page-categories\">
                            <a href=\"";
            // line 195
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_category_list");
            echo "\" class=\"nav-link \">
                                <i class=\"fa fa-tags\"></i>
                                <span class=\"title\">Liste des catégories</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <li class=\"nav-item start page-parameters-subscription page-parameters-general\">
                <a  class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-cogs\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">Paramètres</span>
                    <span class=\"arrow\"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li class=\"nav-item  page-parameters-general\">
                        <a href=\"";
            // line 210
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_parameters_general");
            echo "\" class=\"nav-link \">
                            <i class=\"fa fa-cog\"></i>
                            <span class=\"title\">Paramètres généraux</span>
                        </a>
                    </li>
                    <li class=\"nav-item page-parameters-subscription\">
                        <a href=\"";
            // line 216
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_parameters_subscription");
            echo "\" class=\"nav-link \">
                            <i class=\"fa fa-id-card\"></i>
                            <span class=\"title\">Paramètres d'abonnement</span>
                        </a>
                    </li>
                </ul>
            </li>
            ";
        }
        // line 224
        echo "
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
";
        
        $__internal_536706ef8fc899c2f98461f9273bf84834a5fdd6969c466d55a5d3f5a517c97b->leave($__internal_536706ef8fc899c2f98461f9273bf84834a5fdd6969c466d55a5d3f5a517c97b_prof);

        
        $__internal_83a3c2562082b4d943c5b65f12ec095299153cf3eb4efa67f4eab1fa54acb410->leave($__internal_83a3c2562082b4d943c5b65f12ec095299153cf3eb4efa67f4eab1fa54acb410_prof);

    }

    public function getTemplateName()
    {
        return "::menu/menu.administrator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 224,  333 => 216,  324 => 210,  306 => 195,  297 => 189,  279 => 174,  270 => 168,  261 => 162,  243 => 147,  234 => 141,  225 => 135,  215 => 127,  213 => 126,  203 => 119,  194 => 113,  185 => 107,  176 => 101,  158 => 86,  149 => 80,  139 => 72,  128 => 64,  119 => 58,  110 => 52,  100 => 44,  98 => 43,  89 => 37,  79 => 30,  69 => 23,  61 => 18,  57 => 17,  50 => 14,  44 => 13,  38 => 11,  36 => 10,  25 => 1,);
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
                        {% endif %}\" alt=\"{{ app.user.profile.fullName }}\">
                    </div>
                    <div class=\"profile-data\">
                        <div class=\"profile-data-name\">{{ app.user.profile.fullName }}</div>
                        <div class=\"profile-data-title\">{{ app.user.jobTitle }}</div>
                    </div>
                </div>
            </li>
            <li class=\"nav-item start page-index\">
                <a href=\"{{ path('administrator_homepage') }}\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-area-chart\" style=\"font-size: 32px\" aria-hidden=\"true\"></i>
                    <span class=\"title\">Tableau de bord</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item start page-inbox\">
                <a href=\"{{ path('messaging_inbox',{role:'administrator'}) }}\" class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-comments\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">Messages</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            <li class=\"nav-item  page-book-search\">
                <a href=\"{{ url('administrator_search_book') }}\" class=\"nav-link nav-toggle\">
                    <i class=\"icon-c-search-book\"></i>
                    <span class=\"title\">Chercher un livre</span>
                    <span class=\"arrow\"></span>
                </a>
            </li>
            {% if is_granted('ROLE_SUPER_ADMINISTRATOR') %}
            <li class=\"nav-item start page-users page-new-user page-switch-role\">
                <a class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-users\"></i>
                    <span class=\"title\">Gestion des utilisateurs</span>
                    <span class=\"arrow\"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li class=\"nav-item page-users page-user\">
                        <a href=\"{{ url('administrator_users') }}\" class=\"nav-link \">
                            <i class=\"fa fa-list\"></i>
                            <span class=\"title\">Liste des utilisateurs</span>
                        </a>
                    </li>
                    <li class=\"nav-item page-new-user\">
                        <a href=\"{{ url('administrator_new_user') }}\" class=\"nav-link \">
                            <i class=\"fa fa-user-plus\"></i>
                            <span class=\"title\">Ajouter un utilisateur</span>
                        </a>
                    </li>
                    <li class=\"nav-item page-switch-role\">
                        <a href=\"{{ url('administrator_manage_roles') }}\" class=\"nav-link \">
                            <i class=\"fa fa-wrench\"></i>
                            <span class=\"title\">Gérer les roles</span>
                        </a>
                    </li>
                </ul>
            </li>
            {% endif %}
            <li class=\"nav-item start page-authors page-new-author page-author\">
                <a class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-pencil-square-o \"></i>
                    <span class=\"title\">Gestion des auteurs</span>
                    <span class=\"arrow\"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li class=\"nav-item page-authors \">
                        <a href=\"{{ url('administrator_authors') }}\" class=\"nav-link \">
                            <i class=\"fa fa-list\"></i>
                            <span class=\"title\">Liste des auteurs</span>
                        </a>
                    </li>
                    <li class=\"nav-item page-new-author\">
                        <a href=\"{{ url('administrator_new_author') }}\" class=\"nav-link \">
                            <i class=\"fa fa-user-plus\"></i>
                            <span class=\"title\">Ajouter un auteur</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-item page-book page-new-book page-books page-book-published page-book-unpublished\">
                <a class=\"nav-link nav-toggle\">
                    <i class=\"icon-c-books\"></i>
                    <span class=\"title\">Gestion des Livres</span>
                    <span class=\"arrow\"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li class=\"nav-item  page-books\">
                        <a href=\"{{ url('administrator_books') }}\" class=\"nav-link \">
                            <i class=\"fa fa-list\"></i>
                            <span class=\"title\">Liste des livres</span>
                        </a>
                    </li>
                    <li class=\"nav-item page-new-book\">
                        <a href=\"{{ url('administrator_new_book') }}\" class=\"nav-link \">
                            <i class=\"fa fa-edit\"></i>
                            <span class=\"title\">Creation d'un nouveau livre</span>
                        </a>
                    </li>
                    <li class=\"nav-item page-book-unpublished\">
                        <a href=\"{{ url('administrator_unpublished_books') }}\" class=\"nav-link \">
                            <i class=\"fa fa-clock-o\"></i>
                            <span class=\"title\">Livres en cours de préparation</span>
                        </a>
                    </li>
                    <li class=\"nav-item page-book-published\">
                        <a href=\"{{ url('administrator_published_books') }}\" class=\"nav-link \">
                            <i class=\"fa fa-check-square-o\"></i>
                            <span class=\"title\">Livres publiés</span>
                        </a>
                    </li>
                </ul>
            </li>
            {% if is_granted('ROLE_SUPER_ADMINISTRATOR') %}
            <li class=\"nav-item start page-clients page-subscriptions page-purchases\">
                <a class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-briefcase\"></i>
                    <span class=\"title\">Gestion des Clients</span>
                    <span class=\"arrow\"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li class=\"nav-item  page-clients\">
                        <a href=\"{{ url('administrator_clients') }}\" class=\"nav-link \">
                            <i class=\"fa fa-users\"></i>
                            <span class=\"title\">Liste des clients</span>
                        </a>
                    </li>
                    <li class=\"nav-item  page-subscriptions\">
                        <a href=\"{{ url('administrator_subscriptions') }}\" class=\"nav-link \">
                            <i class=\"fa fa-id-card-o\"></i>
                            <span class=\"title\">Les abonnements</span>
                        </a>
                    </li>
                    <li class=\"nav-item  page-purchases\">
                        <a href=\"{{ url('administrator_purchases') }}\" class=\"nav-link \">
                            <i class=\"fa fa-cart-arrow-down\"></i>
                            <span class=\"title\">Les Achats</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"nav-item start page-newsletter  page-list-newsletter page-send-newsletter page-add-newsletter\">
                <a class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-envelope-o\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">NewsLetters</span>
                    <span class=\"arrow\"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li class=\"nav-item  page-add-newsletter\">
                        <a href=\"{{ url('newsletter_new') }}\" class=\"nav-link \">
                            <i class=\"fa fa-file-text-o\"></i>
                            <span class=\"title\">Composer newsletter</span>
                        </a>
                    </li>
                    <li class=\"nav-item  page-send-newsletter\">
                        <a href=\"{{ url('newsletter_send') }}\" class=\"nav-link \">
                            <i class=\"fa fa-send-o\"></i>
                            <span class=\"title\">Envoyer newsletter</span>
                        </a>
                    </li>
                    <li class=\"nav-item  page-list-newsletter\">
                        <a href=\"{{ url('newsletter_list') }}\" class=\"nav-link \">
                            <i class=\"fa fa-files-o\"></i>
                            <span class=\"title\">Liste des newsletter</span>
                        </a>
                    </li>
                </ul>
            </li>
                <li class=\"nav-item start page-categories page-new-category\">
                    <a  class=\"nav-link nav-toggle\">
                        <i class=\"fa fa-tags\" style=\"font-size: 32px\"></i>
                        <span class=\"title\">Catégories</span>
                        <span class=\"arrow\"></span>
                    </a>
                    <ul class=\"sub-menu\">
                        <li class=\"nav-item  page-new-category\">
                            <a href=\"{{ path('administrator_new_category') }}\" class=\"nav-link \">
                                <i class=\"fa fa-plus\"></i>
                                <span class=\"title\">Ajouter une catégorie</span>
                            </a>
                        </li>
                        <li class=\"nav-item start page-categories\">
                            <a href=\"{{ path('administrator_category_list') }}\" class=\"nav-link \">
                                <i class=\"fa fa-tags\"></i>
                                <span class=\"title\">Liste des catégories</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <li class=\"nav-item start page-parameters-subscription page-parameters-general\">
                <a  class=\"nav-link nav-toggle\">
                    <i class=\"fa fa-cogs\" style=\"font-size: 32px\"></i>
                    <span class=\"title\">Paramètres</span>
                    <span class=\"arrow\"></span>
                </a>
                <ul class=\"sub-menu\">
                    <li class=\"nav-item  page-parameters-general\">
                        <a href=\"{{ path('administrator_parameters_general') }}\" class=\"nav-link \">
                            <i class=\"fa fa-cog\"></i>
                            <span class=\"title\">Paramètres généraux</span>
                        </a>
                    </li>
                    <li class=\"nav-item page-parameters-subscription\">
                        <a href=\"{{ path('administrator_parameters_subscription') }}\" class=\"nav-link \">
                            <i class=\"fa fa-id-card\"></i>
                            <span class=\"title\">Paramètres d'abonnement</span>
                        </a>
                    </li>
                </ul>
            </li>
            {% endif %}

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
", "::menu/menu.administrator.html.twig", "D:\\PFE\\webbook\\app/Resources\\views/menu/menu.administrator.html.twig");
    }
}
