<?php

/* @Main/Admin/author/authors.html.twig */
class __TwigTemplate_9c2659eabbce5f53123e97e0cf57d4d458ebb0757279f0bb310399046a0e2d42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/author/authors.html.twig", 1);
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
        $__internal_3fdd89eb6b8ac838812ff958e0c28d6df8539266393ff3385c26a6626fb6783e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdd89eb6b8ac838812ff958e0c28d6df8539266393ff3385c26a6626fb6783e->enter($__internal_3fdd89eb6b8ac838812ff958e0c28d6df8539266393ff3385c26a6626fb6783e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/author/authors.html.twig"));

        $__internal_6874d663991539e8bed3a26b82041582c8efc7047aafc4004fad8e4ba4dd7a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6874d663991539e8bed3a26b82041582c8efc7047aafc4004fad8e4ba4dd7a9e->enter($__internal_6874d663991539e8bed3a26b82041582c8efc7047aafc4004fad8e4ba4dd7a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/author/authors.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fdd89eb6b8ac838812ff958e0c28d6df8539266393ff3385c26a6626fb6783e->leave($__internal_3fdd89eb6b8ac838812ff958e0c28d6df8539266393ff3385c26a6626fb6783e_prof);

        
        $__internal_6874d663991539e8bed3a26b82041582c8efc7047aafc4004fad8e4ba4dd7a9e->leave($__internal_6874d663991539e8bed3a26b82041582c8efc7047aafc4004fad8e4ba4dd7a9e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_30fe66c0e180bdfa90ae5b7e7aceb524fcae8877b02a2f133120fa356274d413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30fe66c0e180bdfa90ae5b7e7aceb524fcae8877b02a2f133120fa356274d413->enter($__internal_30fe66c0e180bdfa90ae5b7e7aceb524fcae8877b02a2f133120fa356274d413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bdddacd8738878b2550767ec6aabfa6326d0ca9bd096ca06c90af030ac1a86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdddacd8738878b2550767ec6aabfa6326d0ca9bd096ca06c90af030ac1a86c->enter($__internal_4bdddacd8738878b2550767ec6aabfa6326d0ca9bd096ca06c90af030ac1a86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Liste des auteurs
";
        
        $__internal_4bdddacd8738878b2550767ec6aabfa6326d0ca9bd096ca06c90af030ac1a86c->leave($__internal_4bdddacd8738878b2550767ec6aabfa6326d0ca9bd096ca06c90af030ac1a86c_prof);

        
        $__internal_30fe66c0e180bdfa90ae5b7e7aceb524fcae8877b02a2f133120fa356274d413->leave($__internal_30fe66c0e180bdfa90ae5b7e7aceb524fcae8877b02a2f133120fa356274d413_prof);

    }

    // line 6
    public function block_classBody($context, array $blocks = array())
    {
        $__internal_8569660214cb9a40edbbedc7fc37692a6a92e42218a08e7cb4a0c8c8534bb1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8569660214cb9a40edbbedc7fc37692a6a92e42218a08e7cb4a0c8c8534bb1f7->enter($__internal_8569660214cb9a40edbbedc7fc37692a6a92e42218a08e7cb4a0c8c8534bb1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        $__internal_a741d7aff36e615dd9745ae79f17f186d8595289ca8250e33a6b6c2252ec98a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a741d7aff36e615dd9745ae79f17f186d8595289ca8250e33a6b6c2252ec98a3->enter($__internal_a741d7aff36e615dd9745ae79f17f186d8595289ca8250e33a6b6c2252ec98a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        // line 7
        echo "    page-container-bg-solid page-header-fixed
";
        
        $__internal_a741d7aff36e615dd9745ae79f17f186d8595289ca8250e33a6b6c2252ec98a3->leave($__internal_a741d7aff36e615dd9745ae79f17f186d8595289ca8250e33a6b6c2252ec98a3_prof);

        
        $__internal_8569660214cb9a40edbbedc7fc37692a6a92e42218a08e7cb4a0c8c8534bb1f7->leave($__internal_8569660214cb9a40edbbedc7fc37692a6a92e42218a08e7cb4a0c8c8534bb1f7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_125645ff307fd3303166a53c9db1b08c6eeca1b0f507a39a17777b4997c6bf99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125645ff307fd3303166a53c9db1b08c6eeca1b0f507a39a17777b4997c6bf99->enter($__internal_125645ff307fd3303166a53c9db1b08c6eeca1b0f507a39a17777b4997c6bf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0d617a15a6371484bfd3b57c4dbd71c7d0b1c6d570f41a394aaf9a6440696db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d617a15a6371484bfd3b57c4dbd71c7d0b1c6d570f41a394aaf9a6440696db->enter($__internal_c0d617a15a6371484bfd3b57c4dbd71c7d0b1c6d570f41a394aaf9a6440696db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <span class=\"active\">Liste des auteurs</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2>     <span class=\"fa fa-users\"></span>    &nbsp; Liste des auteurs </h2>
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
                            <th>Telephone</th>
                            <th>Dernière activité</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 47
            echo "                            <tr>
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "username", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["author"], "profile", array()), "fullName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "email", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["author"], "profile", array()), "phone", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["author"], "lastLogin", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_edit_author", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn blue\">Edit</a>
                                    <a data-url=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_delete_user");
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn red btn-dlt\">Supprimer</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-authors\">
";
        
        $__internal_c0d617a15a6371484bfd3b57c4dbd71c7d0b1c6d570f41a394aaf9a6440696db->leave($__internal_c0d617a15a6371484bfd3b57c4dbd71c7d0b1c6d570f41a394aaf9a6440696db_prof);

        
        $__internal_125645ff307fd3303166a53c9db1b08c6eeca1b0f507a39a17777b4997c6bf99->leave($__internal_125645ff307fd3303166a53c9db1b08c6eeca1b0f507a39a17777b4997c6bf99_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec8953ea105b74e941ba9b7bc1b01d8418e5d04d94edf7d5238ef3d6d465e2b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8953ea105b74e941ba9b7bc1b01d8418e5d04d94edf7d5238ef3d6d465e2b6->enter($__internal_ec8953ea105b74e941ba9b7bc1b01d8418e5d04d94edf7d5238ef3d6d465e2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a2afd1ef88916a81c391703905ea9841053f1a8e11b7c6a111621f748bf598ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2afd1ef88916a81c391703905ea9841053f1a8e11b7c6a111621f748bf598ba->enter($__internal_a2afd1ef88916a81c391703905ea9841053f1a8e11b7c6a111621f748bf598ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "        <script>
            \$(document).ready(function () {
                \$(\".btn-dlt\").click(function () {
                    var line=\$(this).closest('tr');
                    var id=\$(this).data('user');
                    var url=\$(this).data('url');
                    swal({
                        title: \"Suppression d'author\",
                        text: \"Voulez vous vraiment supprimer cet author\",
                        type: \"info\",
                        showCancelButton: true,
                        cancelButtonText:'Annuler',
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true
                    }, function () {
                        \$.ajax({
                            url:url,
                            method:\"POST\",
                            data:{user_id:id},
                            success:function () {
                                swal(\"Suppression\",\"Cet auteur a été supprimer !\",\"success\");
                                line.remove();
                            },
                            error:function () {
                                swal(\"Suppression\",\"Echec  ! La suppression na pas été effectuer \",\"error\");
                            }
                        })

                    });
                })
            })

        </script>
    ";
        
        $__internal_a2afd1ef88916a81c391703905ea9841053f1a8e11b7c6a111621f748bf598ba->leave($__internal_a2afd1ef88916a81c391703905ea9841053f1a8e11b7c6a111621f748bf598ba_prof);

        
        $__internal_ec8953ea105b74e941ba9b7bc1b01d8418e5d04d94edf7d5238ef3d6d465e2b6->leave($__internal_ec8953ea105b74e941ba9b7bc1b01d8418e5d04d94edf7d5238ef3d6d465e2b6_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Admin/author/authors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 70,  197 => 69,  179 => 59,  167 => 55,  161 => 54,  156 => 52,  152 => 51,  148 => 50,  144 => 49,  140 => 48,  137 => 47,  133 => 46,  99 => 15,  92 => 10,  83 => 9,  72 => 7,  63 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
    Liste des auteurs
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
                <span class=\"active\">Liste des auteurs</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2>     <span class=\"fa fa-users\"></span>    &nbsp; Liste des auteurs </h2>
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
                            <th>Telephone</th>
                            <th>Dernière activité</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for author in authors %}
                            <tr>
                                <td>{{ author.username }}</td>
                                <td>{{ author.profile.fullName }}</td>
                                <td>{{ author.email}}</td>
                                <td>{{ author.profile.phone }}</td>
                                <td>{{ author.lastLogin|date('d-m-Y H:i') }}</td>
                                <td>
                                    <a href=\"{{ url('administrator_edit_author',{id:author.id}) }}\" data-user=\"{{ author.id }}\" class=\"btn btn blue\">Edit</a>
                                    <a data-url=\"{{ url('administrator_delete_user') }}\" data-user=\"{{ author.id }}\" class=\"btn btn red btn-dlt\">Supprimer</a>
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
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-authors\">
{% endblock %}

    {% block javascripts %}
        <script>
            \$(document).ready(function () {
                \$(\".btn-dlt\").click(function () {
                    var line=\$(this).closest('tr');
                    var id=\$(this).data('user');
                    var url=\$(this).data('url');
                    swal({
                        title: \"Suppression d'author\",
                        text: \"Voulez vous vraiment supprimer cet author\",
                        type: \"info\",
                        showCancelButton: true,
                        cancelButtonText:'Annuler',
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true
                    }, function () {
                        \$.ajax({
                            url:url,
                            method:\"POST\",
                            data:{user_id:id},
                            success:function () {
                                swal(\"Suppression\",\"Cet auteur a été supprimer !\",\"success\");
                                line.remove();
                            },
                            error:function () {
                                swal(\"Suppression\",\"Echec  ! La suppression na pas été effectuer \",\"error\");
                            }
                        })

                    });
                })
            })

        </script>
    {% endblock %}", "@Main/Admin/author/authors.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\author\\authors.html.twig");
    }
}
