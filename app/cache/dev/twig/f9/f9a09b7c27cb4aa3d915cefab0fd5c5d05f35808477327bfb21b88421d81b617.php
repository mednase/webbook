<?php

/* @Main/Admin/user/users.html.twig */
class __TwigTemplate_ee70538c7d64ba901d38980f6391a02cfe79089709226b28c4407f9ebe83bd47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/user/users.html.twig", 1);
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
        $__internal_3249201ceb6d5af73ca17b55bb403924a86b220c7b608121c7960adaee6107f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3249201ceb6d5af73ca17b55bb403924a86b220c7b608121c7960adaee6107f1->enter($__internal_3249201ceb6d5af73ca17b55bb403924a86b220c7b608121c7960adaee6107f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/user/users.html.twig"));

        $__internal_f819076767214421b8923b52a0c217ccafd729536f0d67229c7c0599ec398f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f819076767214421b8923b52a0c217ccafd729536f0d67229c7c0599ec398f9c->enter($__internal_f819076767214421b8923b52a0c217ccafd729536f0d67229c7c0599ec398f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/user/users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3249201ceb6d5af73ca17b55bb403924a86b220c7b608121c7960adaee6107f1->leave($__internal_3249201ceb6d5af73ca17b55bb403924a86b220c7b608121c7960adaee6107f1_prof);

        
        $__internal_f819076767214421b8923b52a0c217ccafd729536f0d67229c7c0599ec398f9c->leave($__internal_f819076767214421b8923b52a0c217ccafd729536f0d67229c7c0599ec398f9c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2f63c347bc800bae66675ab1321faa2581eb3e73fcb34582691b7ec55e06f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f63c347bc800bae66675ab1321faa2581eb3e73fcb34582691b7ec55e06f56->enter($__internal_a2f63c347bc800bae66675ab1321faa2581eb3e73fcb34582691b7ec55e06f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cbbdf63d638973a947550183eede1de18a6379b24cb0add217eb2815d79baf6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbdf63d638973a947550183eede1de18a6379b24cb0add217eb2815d79baf6e->enter($__internal_cbbdf63d638973a947550183eede1de18a6379b24cb0add217eb2815d79baf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "   Liste des utilisateurs
";
        
        $__internal_cbbdf63d638973a947550183eede1de18a6379b24cb0add217eb2815d79baf6e->leave($__internal_cbbdf63d638973a947550183eede1de18a6379b24cb0add217eb2815d79baf6e_prof);

        
        $__internal_a2f63c347bc800bae66675ab1321faa2581eb3e73fcb34582691b7ec55e06f56->leave($__internal_a2f63c347bc800bae66675ab1321faa2581eb3e73fcb34582691b7ec55e06f56_prof);

    }

    // line 6
    public function block_classBody($context, array $blocks = array())
    {
        $__internal_8b15448c4935e76d292c35282022990f683667b5c7331290c7f3c9630d300ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b15448c4935e76d292c35282022990f683667b5c7331290c7f3c9630d300ddb->enter($__internal_8b15448c4935e76d292c35282022990f683667b5c7331290c7f3c9630d300ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        $__internal_c433216b7e71c6098f846d162ccf65ec4f0b05d325ca1bea8dd76126374ddeb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c433216b7e71c6098f846d162ccf65ec4f0b05d325ca1bea8dd76126374ddeb1->enter($__internal_c433216b7e71c6098f846d162ccf65ec4f0b05d325ca1bea8dd76126374ddeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        // line 7
        echo "    page-container-bg-solid page-header-fixed
";
        
        $__internal_c433216b7e71c6098f846d162ccf65ec4f0b05d325ca1bea8dd76126374ddeb1->leave($__internal_c433216b7e71c6098f846d162ccf65ec4f0b05d325ca1bea8dd76126374ddeb1_prof);

        
        $__internal_8b15448c4935e76d292c35282022990f683667b5c7331290c7f3c9630d300ddb->leave($__internal_8b15448c4935e76d292c35282022990f683667b5c7331290c7f3c9630d300ddb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea6357c2bbfc889abc197d268887c5ebc76855f7b04dc2f274942dda8b23e4aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6357c2bbfc889abc197d268887c5ebc76855f7b04dc2f274942dda8b23e4aa->enter($__internal_ea6357c2bbfc889abc197d268887c5ebc76855f7b04dc2f274942dda8b23e4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_488d5d42c291bf0d2bf9b1fdfad61a72a7b0cc48d842b25b60fd3b9685d03899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488d5d42c291bf0d2bf9b1fdfad61a72a7b0cc48d842b25b60fd3b9685d03899->enter($__internal_488d5d42c291bf0d2bf9b1fdfad61a72a7b0cc48d842b25b60fd3b9685d03899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Liste des utilisateurs</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2>     <span class=\"fa fa-users\"></span>    &nbsp; Liste des utilisateurs </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box red\">
                <div class=\"portlet-title\">
                    <div class=\"caption\"></div>
                </div>
                <div class=\"portlet-body \">
                    <table  class=\"table table-striped table-bordered datatable\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>Nom d'utilisateur</th>
                            <th>Nom complet</th>
                            <th>Email</th>
                            <th>Dernière activité</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "                            <tr>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "fullName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_edit_user", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn blue\">Edit</a>
                                    <a data-url=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_delete_user");
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn red btn-dlt\">Supprimer</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-users\">
";
        
        $__internal_488d5d42c291bf0d2bf9b1fdfad61a72a7b0cc48d842b25b60fd3b9685d03899->leave($__internal_488d5d42c291bf0d2bf9b1fdfad61a72a7b0cc48d842b25b60fd3b9685d03899_prof);

        
        $__internal_ea6357c2bbfc889abc197d268887c5ebc76855f7b04dc2f274942dda8b23e4aa->leave($__internal_ea6357c2bbfc889abc197d268887c5ebc76855f7b04dc2f274942dda8b23e4aa_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f1989db5d382303828e82acfb1313f0d204aa45d97fbc11aa1c9c9c512c1055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1989db5d382303828e82acfb1313f0d204aa45d97fbc11aa1c9c9c512c1055->enter($__internal_1f1989db5d382303828e82acfb1313f0d204aa45d97fbc11aa1c9c9c512c1055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2f9b1769815a4fe3a567cbf585d4509dd653e8f4d7c4c59aea39952e3e6fcc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9b1769815a4fe3a567cbf585d4509dd653e8f4d7c4c59aea39952e3e6fcc07->enter($__internal_2f9b1769815a4fe3a567cbf585d4509dd653e8f4d7c4c59aea39952e3e6fcc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "        <script>
            \$(document).ready(function () {
                \$(\".btn-dlt\").click(function () {
                    var ligne=\$(this).closest('tr');
                    var id=\$(this).data('user');
                    var url=\$(this).data('url');
                    swal({
                        title: \"Supression d'utilistateur\",
                        text: \"Voulez vous vraiment supprimer cette utilisateur\",
                        type: \"info\",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true
                    }, function () {
                        \$.ajax({
                            url:url,
                            method:\"POST\",
                            data:{user_id:id},
                            success:function () {
                                swal(\"Cette utilisateur a été supprimer !\");
                                ligne.remove();
                            },
                            error:function () {
                                swal(\"Erreur !\");
                            }
                        })

                    });
                })
            })

        </script>
    ";
        
        $__internal_2f9b1769815a4fe3a567cbf585d4509dd653e8f4d7c4c59aea39952e3e6fcc07->leave($__internal_2f9b1769815a4fe3a567cbf585d4509dd653e8f4d7c4c59aea39952e3e6fcc07_prof);

        
        $__internal_1f1989db5d382303828e82acfb1313f0d204aa45d97fbc11aa1c9c9c512c1055->leave($__internal_1f1989db5d382303828e82acfb1313f0d204aa45d97fbc11aa1c9c9c512c1055_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Admin/user/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 68,  192 => 67,  174 => 57,  162 => 53,  156 => 52,  151 => 50,  147 => 49,  143 => 48,  139 => 47,  136 => 46,  132 => 45,  99 => 15,  92 => 10,  83 => 9,  72 => 7,  63 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
   Liste des utilisateurs
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
                <span class=\"active\">Liste des utilisateurs</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2>     <span class=\"fa fa-users\"></span>    &nbsp; Liste des utilisateurs </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box red\">
                <div class=\"portlet-title\">
                    <div class=\"caption\"></div>
                </div>
                <div class=\"portlet-body \">
                    <table  class=\"table table-striped table-bordered datatable\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th>Nom d'utilisateur</th>
                            <th>Nom complet</th>
                            <th>Email</th>
                            <th>Dernière activité</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for user in users %}
                            <tr>
                                <td>{{ user.username }}</td>
                                <td>{{ user.profile.fullName }}</td>
                                <td>{{ user.email}}</td>
                                <td>{{ user.lastLogin|date('d-m-Y H:i') }}</td>
                                <td>
                                    <a href=\"{{ url('administrator_edit_user',{id:user.id}) }}\" data-user=\"{{ user.id }}\" class=\"btn btn blue\">Edit</a>
                                    <a data-url=\"{{ url('administrator_delete_user') }}\" data-user=\"{{ user.id }}\" class=\"btn btn red btn-dlt\">Supprimer</a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-users\">
{% endblock %}

    {% block javascripts %}
        <script>
            \$(document).ready(function () {
                \$(\".btn-dlt\").click(function () {
                    var ligne=\$(this).closest('tr');
                    var id=\$(this).data('user');
                    var url=\$(this).data('url');
                    swal({
                        title: \"Supression d'utilistateur\",
                        text: \"Voulez vous vraiment supprimer cette utilisateur\",
                        type: \"info\",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true
                    }, function () {
                        \$.ajax({
                            url:url,
                            method:\"POST\",
                            data:{user_id:id},
                            success:function () {
                                swal(\"Cette utilisateur a été supprimer !\");
                                ligne.remove();
                            },
                            error:function () {
                                swal(\"Erreur !\");
                            }
                        })

                    });
                })
            })

        </script>
    {% endblock %}", "@Main/Admin/user/users.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\user\\users.html.twig");
    }
}
