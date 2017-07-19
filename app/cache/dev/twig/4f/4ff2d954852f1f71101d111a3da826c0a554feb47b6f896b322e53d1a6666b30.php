<?php

/* @Main/shared/navbar.html.twig */
class __TwigTemplate_ba6f2f0106bf3ac92cbffb1ad865136581d0a3426a69df47c9d4204157dc9332 extends Twig_Template
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
        $__internal_86e906ad5b66aaf393b93ec0efc0f58f0322a1c3f773d521e41a0c060f3dbd5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e906ad5b66aaf393b93ec0efc0f58f0322a1c3f773d521e41a0c060f3dbd5e->enter($__internal_86e906ad5b66aaf393b93ec0efc0f58f0322a1c3f773d521e41a0c060f3dbd5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/shared/navbar.html.twig"));

        $__internal_7b9d0651b0f36e3068883469ab867cc54cdde42e436f84594e2b8a228d6ca44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9d0651b0f36e3068883469ab867cc54cdde42e436f84594e2b8a228d6ca44b->enter($__internal_7b9d0651b0f36e3068883469ab867cc54cdde42e436f84594e2b8a228d6ca44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/shared/navbar.html.twig"));

        // line 1
        echo "<div class=\"page-header navbar navbar-fixed-top\" style=\"z-index: 10\">
    <div class=\"page-header-inner\">
        <!-- BEGIN LOGO -->
        <div class=\"page-logo\">
            <a>
                <img class=\"hidden-minimized\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/webbook-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                <img class=\"hidden-maximized\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/mini-logo.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>

            <div class=\"menu-toggler sidebar-toggler\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>

        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->

        <!-- END LOGO -->
        <!-- BEGIN PAGE TOP -->
        <div class=\"page-top\">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class=\"top-menu\">
                <ul class=\"nav navbar-nav pull-right\">
                    <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle msg-list unseen\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                            <i class=\"icon-envelope-open\"></i>
                            ";
        // line 28
        if (($this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->countNewMessages() > 0)) {
            // line 29
            echo "                            <span class=\"badge badge-default msg-nb\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->countNewMessages(), "html", null, true);
            echo " </span>
                            ";
        }
        // line 31
        echo "                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"external\">
                                <h3>Vous avez
                                    <span class=\"bold\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->countNewMessages(), "html", null, true);
        echo " Nouveau</span> Messages</h3>
                                <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("messaging_inbox", array("role" => $this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->getRole())), "html", null, true);
        echo "\">voir tous</a>
                            </li>
                            <li>
                                <ul id=\"message-list\" class=\"dropdown-menu-list scroller\" style=\"height: 275px\" >
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!-- DOC: Apply \"dropdown-dark\" class below \"dropdown-extended\" to change the dropdown styte -->
                    <!-- DOC: Apply \"dropdown-hoverable\" class after below \"dropdown\" and remove data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to enable hover dropdown mode -->
                    <!-- DOC: Remove \"dropdown-hoverable\" and add data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to the below A element with dropdown-toggle class -->
                    <li class=\"dropdown dropdown-extended dropdown-notification \" id=\"header_notification_bar\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle notif unseen\" data-toggle=\"dropdown\"
                           data-hover=\"dropdown\" style=\"padding: 28px 16px 19px;height: 100%;\"
                           data-close-others=\"true\" id=\"bell-notif\">
                            <i class=\"icon-bell\"  ></i>
                            ";
        // line 53
        if (($this->env->getExtension('Webbook\NotificationBundle\Extension\CountNotificationExtension')->countNotification() > 0)) {
            // line 54
            echo "                                <span class=\"badge badge-default\" id=\"bade-notification\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Webbook\NotificationBundle\Extension\CountNotificationExtension')->countNotification(), "html", null, true);
            echo " </span>
                            ";
        }
        // line 56
        echo "                        </a>
                        <ul class=\"dropdown-menu\" >
                            <li class=\"external\">
                                <h3>Vous avez
                                    <span class=\"bold\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->countNewMessages(), "html", null, true);
        echo " Nouveau</span> Notification</h3>
                            </li>
                            <li>
                                <ul id=\"notificatin-list\" class=\"dropdown-menu-list scroller\" style=\"height: 275px\">

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                    <li class=\"dropdown dropdown-user\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                           data-hover=\"dropdown\" data-close-others=\"true\">
                            <img alt=\"\" class=\"img-circle\"
                                 src=\"";
        // line 76
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "picture", array()))) {
            // line 77
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "picture", array()), "mediaFile"), "html", null, true);
            echo "
                        ";
        } else {
            // line 79
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/no-avatar.png"), "html", null, true);
            echo "
                        ";
        }
        // line 80
        echo "\"/>
                            <span class=\"username username-hide-on-mobile\">
                                        ";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profile", array()), "fullName", array()), "html", null, true);
        echo "
                            </span>

                            <i  class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-default\">
                            <li>
                                <a href=\"";
        // line 89
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMINISTRATOR")) {
            // line 90
            echo "                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_profile");
            echo "
                                         ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTHOR")) {
            // line 92
            echo "                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_profile");
            echo "
                                            ";
        } else {
            // line 94
            echo "                                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("validator_profile");
            echo "
                                            ";
        }
        // line 96
        echo "                                    \">
                                    <i class=\"icon-user\"></i>Mon profil </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("messaging_inbox", array("role" => $this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->getRole())), "html", null, true);
        echo "\">
                                    <i class=\"fa fa-envelope-o\"></i>Mes messages</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_logout");
        echo "\">
                                    <i class=\"icon-key\"></i>";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            ";
        // line 112
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMINISTRATOR")) {
            // line 113
            echo "                <div class=\"page-actions\">
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-circle btn-outline red dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-plus\"></i>&nbsp;
                        <span class=\"hidden-sm hidden-xs\">Nouveau&nbsp;</span>&nbsp;
                        <i class=\"fa fa-angle-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"";
            // line 122
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_new_book");
            echo "\">
                                <i class=\"icon-c-book-plus\"></i> Nouveau Livre</a>
                        </li>
                        ";
            // line 125
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMINISTRATOR")) {
                // line 126
                echo "                        <li>
                            <a href=\"";
                // line 127
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_new_user");
                echo "\">
                                <i class=\"fa fa-user-plus\"></i> Nouveau Utilisateur</a>
                        </li>
                        ";
            }
            // line 131
            echo "                        <li>
                            <a href=\"";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_new_author");
            echo "\">
                                <i class=\"fa fa-user-plus\"></i> Nouveau Auteur </a>
                        </li>
                        <li class=\"divider\"> </li>
                        <li>
                            <a href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messaging_compose", array("role" => $this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->getRole())), "html", null, true);
            echo "\">
                                <i class=\"fa fa-comment\"></i> Nouveau Message
                            </a>
                        </li>
                        ";
            // line 141
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMINISTRATOR")) {
                // line 142
                echo "                        <li>
                            <a href=\"";
                // line 143
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletter_new");
                echo "\">
                                <i class=\"fa fa-envelope-o\"></i> Nouveau Newsletter
                            </a>
                        </li>
                        ";
            }
            // line 148
            echo "                    </ul>
                </div>
            </div>
            ";
        }
        // line 152
        echo "            <!-- END TOP NAVIGATION MENU -->
            <!-- END TOP NAVIGATION MENU -->
        </div>

        <!-- END PAGE TOP -->
    </div>
</div>
";
        
        $__internal_86e906ad5b66aaf393b93ec0efc0f58f0322a1c3f773d521e41a0c060f3dbd5e->leave($__internal_86e906ad5b66aaf393b93ec0efc0f58f0322a1c3f773d521e41a0c060f3dbd5e_prof);

        
        $__internal_7b9d0651b0f36e3068883469ab867cc54cdde42e436f84594e2b8a228d6ca44b->leave($__internal_7b9d0651b0f36e3068883469ab867cc54cdde42e436f84594e2b8a228d6ca44b_prof);

    }

    public function getTemplateName()
    {
        return "@Main/shared/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 152,  268 => 148,  260 => 143,  257 => 142,  255 => 141,  248 => 137,  240 => 132,  237 => 131,  230 => 127,  227 => 126,  225 => 125,  219 => 122,  208 => 113,  206 => 112,  197 => 106,  193 => 105,  185 => 100,  179 => 96,  173 => 94,  167 => 92,  161 => 90,  159 => 89,  149 => 82,  145 => 80,  139 => 79,  133 => 77,  131 => 76,  112 => 60,  106 => 56,  100 => 54,  98 => 53,  78 => 36,  74 => 35,  68 => 31,  62 => 29,  60 => 28,  36 => 7,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-header navbar navbar-fixed-top\" style=\"z-index: 10\">
    <div class=\"page-header-inner\">
        <!-- BEGIN LOGO -->
        <div class=\"page-logo\">
            <a>
                <img class=\"hidden-minimized\" src=\"{{ asset('assets/img/webbook-logo.png') }}\" alt=\"\">
                <img class=\"hidden-maximized\" src=\"{{ asset('assets/img/mini-logo.png') }}\" alt=\"\">
            </a>

            <div class=\"menu-toggler sidebar-toggler\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>

        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->

        <!-- END LOGO -->
        <!-- BEGIN PAGE TOP -->
        <div class=\"page-top\">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class=\"top-menu\">
                <ul class=\"nav navbar-nav pull-right\">
                    <li class=\"dropdown dropdown-extended dropdown-inbox\" id=\"header_inbox_bar\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle msg-list unseen\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\">
                            <i class=\"icon-envelope-open\"></i>
                            {% if  countNewMessages()>0 %}
                            <span class=\"badge badge-default msg-nb\"> {{ countNewMessages() }} </span>
                            {% endif %}
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"external\">
                                <h3>Vous avez
                                    <span class=\"bold\">{{ countNewMessages() }} Nouveau</span> Messages</h3>
                                <a href=\"{{ url('messaging_inbox',{'role':getRole()}) }}\">voir tous</a>
                            </li>
                            <li>
                                <ul id=\"message-list\" class=\"dropdown-menu-list scroller\" style=\"height: 275px\" >
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!-- DOC: Apply \"dropdown-dark\" class below \"dropdown-extended\" to change the dropdown styte -->
                    <!-- DOC: Apply \"dropdown-hoverable\" class after below \"dropdown\" and remove data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to enable hover dropdown mode -->
                    <!-- DOC: Remove \"dropdown-hoverable\" and add data-toggle=\"dropdown\" data-hover=\"dropdown\" data-close-others=\"true\" attributes to the below A element with dropdown-toggle class -->
                    <li class=\"dropdown dropdown-extended dropdown-notification \" id=\"header_notification_bar\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle notif unseen\" data-toggle=\"dropdown\"
                           data-hover=\"dropdown\" style=\"padding: 28px 16px 19px;height: 100%;\"
                           data-close-others=\"true\" id=\"bell-notif\">
                            <i class=\"icon-bell\"  ></i>
                            {% if count_notification()>0 %}
                                <span class=\"badge badge-default\" id=\"bade-notification\"> {{ count_notification() }} </span>
                            {% endif %}
                        </a>
                        <ul class=\"dropdown-menu\" >
                            <li class=\"external\">
                                <h3>Vous avez
                                    <span class=\"bold\">{{ countNewMessages() }} Nouveau</span> Notification</h3>
                            </li>
                            <li>
                                <ul id=\"notificatin-list\" class=\"dropdown-menu-list scroller\" style=\"height: 275px\">

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply \"dropdown-dark\" class after below \"dropdown-extended\" to change the dropdown styte -->
                    <li class=\"dropdown dropdown-user\">
                        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                           data-hover=\"dropdown\" data-close-others=\"true\">
                            <img alt=\"\" class=\"img-circle\"
                                 src=\"{% if app.user.picture is not null %}
                        {{ vich_uploader_asset(app.user.picture,'mediaFile') }}
                        {% else %}
                        {{ asset('assets/img/avatar/no-avatar.png') }}
                        {% endif %}\"/>
                            <span class=\"username username-hide-on-mobile\">
                                        {{ app.user.profile.fullName }}
                            </span>

                            <i  class=\"fa fa-angle-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-default\">
                            <li>
                                <a href=\"{% if is_granted('ROLE_ADMINISTRATOR') %}
                                            {{ url('administrator_profile') }}
                                         {% elseif is_granted('ROLE_AUTHOR') %}
                                            {{ url('author_profile') }}
                                            {% else %}
                                            {{ url('validator_profile') }}
                                            {% endif %}
                                    \">
                                    <i class=\"icon-user\"></i>Mon profil </a>
                            </li>
                            <li>
                                <a href=\"{{ url('messaging_inbox',{role:getRole()}) }}\">
                                    <i class=\"fa fa-envelope-o\"></i>Mes messages</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"{{ url('fos_user_security_logout') }}\">
                                    <i class=\"icon-key\"></i>{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            {% if is_granted('ROLE_ADMINISTRATOR') %}
                <div class=\"page-actions\">
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-circle btn-outline red dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-plus\"></i>&nbsp;
                        <span class=\"hidden-sm hidden-xs\">Nouveau&nbsp;</span>&nbsp;
                        <i class=\"fa fa-angle-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"{{ path('administrator_new_book') }}\">
                                <i class=\"icon-c-book-plus\"></i> Nouveau Livre</a>
                        </li>
                        {% if is_granted('ROLE_SUPER_ADMINISTRATOR') %}
                        <li>
                            <a href=\"{{ path('administrator_new_user') }}\">
                                <i class=\"fa fa-user-plus\"></i> Nouveau Utilisateur</a>
                        </li>
                        {% endif %}
                        <li>
                            <a href=\"{{ path('administrator_new_author') }}\">
                                <i class=\"fa fa-user-plus\"></i> Nouveau Auteur </a>
                        </li>
                        <li class=\"divider\"> </li>
                        <li>
                            <a href=\"{{ path('messaging_compose',{role:getRole()}) }}\">
                                <i class=\"fa fa-comment\"></i> Nouveau Message
                            </a>
                        </li>
                        {% if is_granted('ROLE_SUPER_ADMINISTRATOR') %}
                        <li>
                            <a href=\"{{ path('newsletter_new') }}\">
                                <i class=\"fa fa-envelope-o\"></i> Nouveau Newsletter
                            </a>
                        </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
            {% endif %}
            <!-- END TOP NAVIGATION MENU -->
            <!-- END TOP NAVIGATION MENU -->
        </div>

        <!-- END PAGE TOP -->
    </div>
</div>
", "@Main/shared/navbar.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\shared\\navbar.html.twig");
    }
}
