<?php

/* @Main/Admin/client/clients.html.twig */
class __TwigTemplate_69a387832fca5b221700071d3156ae25fa012f5212c070af6420cc8bd71500a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/client/clients.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'classBody' => array($this, 'block_classBody'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Main/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95ad197ac614e22aef4ec957aedad62225117ff5e988cca50f9c2dc7242af41f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ad197ac614e22aef4ec957aedad62225117ff5e988cca50f9c2dc7242af41f->enter($__internal_95ad197ac614e22aef4ec957aedad62225117ff5e988cca50f9c2dc7242af41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/client/clients.html.twig"));

        $__internal_f8f2c101a08f334ff5c17a7bcd0eee7a49b48279aea3fd11cf501ba1b8562a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f2c101a08f334ff5c17a7bcd0eee7a49b48279aea3fd11cf501ba1b8562a06->enter($__internal_f8f2c101a08f334ff5c17a7bcd0eee7a49b48279aea3fd11cf501ba1b8562a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/client/clients.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95ad197ac614e22aef4ec957aedad62225117ff5e988cca50f9c2dc7242af41f->leave($__internal_95ad197ac614e22aef4ec957aedad62225117ff5e988cca50f9c2dc7242af41f_prof);

        
        $__internal_f8f2c101a08f334ff5c17a7bcd0eee7a49b48279aea3fd11cf501ba1b8562a06->leave($__internal_f8f2c101a08f334ff5c17a7bcd0eee7a49b48279aea3fd11cf501ba1b8562a06_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b6ce0576e8223a6d6b4b9f4772df6262401fb2a9188c337cf65964cfc8bdda3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b6ce0576e8223a6d6b4b9f4772df6262401fb2a9188c337cf65964cfc8bdda3->enter($__internal_3b6ce0576e8223a6d6b4b9f4772df6262401fb2a9188c337cf65964cfc8bdda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f882efe1424b940eaab8de41944f94986a6f5fc91990adfe9db97837240a4b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f882efe1424b940eaab8de41944f94986a6f5fc91990adfe9db97837240a4b91->enter($__internal_f882efe1424b940eaab8de41944f94986a6f5fc91990adfe9db97837240a4b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Liste des clients
";
        
        $__internal_f882efe1424b940eaab8de41944f94986a6f5fc91990adfe9db97837240a4b91->leave($__internal_f882efe1424b940eaab8de41944f94986a6f5fc91990adfe9db97837240a4b91_prof);

        
        $__internal_3b6ce0576e8223a6d6b4b9f4772df6262401fb2a9188c337cf65964cfc8bdda3->leave($__internal_3b6ce0576e8223a6d6b4b9f4772df6262401fb2a9188c337cf65964cfc8bdda3_prof);

    }

    // line 6
    public function block_classBody($context, array $blocks = array())
    {
        $__internal_a4aebfe91ac35e79f5875f0b3783c8a69e699a5f2f66f7d2d0564c2b5ace3c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4aebfe91ac35e79f5875f0b3783c8a69e699a5f2f66f7d2d0564c2b5ace3c8c->enter($__internal_a4aebfe91ac35e79f5875f0b3783c8a69e699a5f2f66f7d2d0564c2b5ace3c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        $__internal_40e0d008e01233801c249e00daf98e1a9e462d4d63d9f4e4c82fa90fde849ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e0d008e01233801c249e00daf98e1a9e462d4d63d9f4e4c82fa90fde849ee5->enter($__internal_40e0d008e01233801c249e00daf98e1a9e462d4d63d9f4e4c82fa90fde849ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        // line 7
        echo "    page-container-bg-solid page-header-fixed
";
        
        $__internal_40e0d008e01233801c249e00daf98e1a9e462d4d63d9f4e4c82fa90fde849ee5->leave($__internal_40e0d008e01233801c249e00daf98e1a9e462d4d63d9f4e4c82fa90fde849ee5_prof);

        
        $__internal_a4aebfe91ac35e79f5875f0b3783c8a69e699a5f2f66f7d2d0564c2b5ace3c8c->leave($__internal_a4aebfe91ac35e79f5875f0b3783c8a69e699a5f2f66f7d2d0564c2b5ace3c8c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_26427f371301ff4ddc65c1957ae5f5f1e65a844ef94cd54f9e5d280d6f95416b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26427f371301ff4ddc65c1957ae5f5f1e65a844ef94cd54f9e5d280d6f95416b->enter($__internal_26427f371301ff4ddc65c1957ae5f5f1e65a844ef94cd54f9e5d280d6f95416b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9f2e1719d7120128544a91244e83ef98723255d60323b12b3ee9ce27c8996b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f2e1719d7120128544a91244e83ef98723255d60323b12b3ee9ce27c8996b5->enter($__internal_d9f2e1719d7120128544a91244e83ef98723255d60323b12b3ee9ce27c8996b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <span class=\"active\">Liste des clients</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-users\"></span> &nbsp; Liste des clients </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box red\">
                <div class=\"portlet-title\">
                    <div class=\"caption\"></div>
                </div>
                <div class=\"portlet-body \">
                    <table class=\"table table-striped table-bordered dtable\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th class=\"text-center\">Date d'Inscription</th>
                            <th>Nom complet</th>
                            <th>Email</th>
                            <th class=\"text-center\"><i class=\"fa fa-clock-o\"></i> Dernière connexion</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 47
            echo "                            <tr >
                                <td class=\"text-center\">";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "joinedAt", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "profile", array()), "fullName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["client"], "lastLogin", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">
                                    <input data-user=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\" class=\"disabledAccount\"
                                           ";
            // line 54
            if ($this->getAttribute($context["client"], "enabled", array())) {
                echo "checked";
            }
            echo ">
                                </td>
                                <td class=\"text-center\">
                                    <a data-toggle=\"tooltip\" data-title=\"Détails du client\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_show_client", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\"
                                       class=\"btn green btn-icon-only \"><i class=\"fa fa-eye\"></i></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-clients\">
";
        
        $__internal_d9f2e1719d7120128544a91244e83ef98723255d60323b12b3ee9ce27c8996b5->leave($__internal_d9f2e1719d7120128544a91244e83ef98723255d60323b12b3ee9ce27c8996b5_prof);

        
        $__internal_26427f371301ff4ddc65c1957ae5f5f1e65a844ef94cd54f9e5d280d6f95416b->leave($__internal_26427f371301ff4ddc65c1957ae5f5f1e65a844ef94cd54f9e5d280d6f95416b_prof);

    }

    // line 71
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8214851024eaae3fc793e7bca266fd4b8ab553ae011c27714e6edbff7510d484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8214851024eaae3fc793e7bca266fd4b8ab553ae011c27714e6edbff7510d484->enter($__internal_8214851024eaae3fc793e7bca266fd4b8ab553ae011c27714e6edbff7510d484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f63056ab4d04729112fb2807f87f55472be7066e071c05fbd76677933cedddc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63056ab4d04729112fb2807f87f55472be7066e071c05fbd76677933cedddc5->enter($__internal_f63056ab4d04729112fb2807f87f55472be7066e071c05fbd76677933cedddc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 72
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"), "html", null, true);
        echo "\">
    <style>
        table.dtable tbody td {
            vertical-align: middle;
        }
        .dataTables_filter{
            float: left!important;
        }
        .dataTables_filter input{
            width: 200px !important
        }
    </style>
";
        
        $__internal_f63056ab4d04729112fb2807f87f55472be7066e071c05fbd76677933cedddc5->leave($__internal_f63056ab4d04729112fb2807f87f55472be7066e071c05fbd76677933cedddc5_prof);

        
        $__internal_8214851024eaae3fc793e7bca266fd4b8ab553ae011c27714e6edbff7510d484->leave($__internal_8214851024eaae3fc793e7bca266fd4b8ab553ae011c27714e6edbff7510d484_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8cc04e71ffd6947cc8f07ad75b0eaab994258e9e9e790c5c7f277431f044205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8cc04e71ffd6947cc8f07ad75b0eaab994258e9e9e790c5c7f277431f044205->enter($__internal_c8cc04e71ffd6947cc8f07ad75b0eaab994258e9e9e790c5c7f277431f044205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cd9ca5f0988c0092aae0986f5f669e9f3b34115e81296d43223ed9778439f097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9ca5f0988c0092aae0986f5f669e9f3b34115e81296d43223ed9778439f097->enter($__internal_cd9ca5f0988c0092aae0986f5f669e9f3b34115e81296d43223ed9778439f097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$('.dtable').DataTable({
                language: {
                    \"sSearch\": \"Rechercher&nbsp;:\",
                    \"sInfo\": \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                    \"sInfoEmpty\": \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
                    \"sZeroRecords\": \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                    \"sEmptyTable\": \"Aucune donn&eacute;e disponible dans le tableau\",
                    buttons: {
                        copyHtml5: 'copier',
                        copyTitle: 'Ajouté au presse-papiers',
                        copyKeys: 'Appuyez sur <i>ctrl</i> ou <i>\\u2318</i> + <i>C</i> pour copier les données du tableau à votre presse-papiers. <br><br>Pour annuler, cliquez sur ce message ou appuyez sur Echap.',
                        copySuccess: {
                            _: '%d lignes copiées',
                            1: '1 ligne copiée'
                        }
                    }
                },
                \"bPaginate\": false,
                \"bInfo\": false,
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'copy',
                        text: 'Copier',
                        className: 'btn btn-default btn-sm'
                    }, {
                        extend: 'csvHtml5',
                        className: 'btn btn-default btn-sm',
                        extension: '.csv'
                    }, {
                        extend: 'pdf',
                        className: 'btn btn-default btn-sm',
                        extension: '.pdf'
                    }, {
                        extend: 'print',
                        text: 'Imprimer',
                        className: 'btn btn-default btn-sm'
                    }
                ]
            });
            \$('.disabledAccount').bootstrapSwitch(
                {
                    size:'small',
                    onText:'Oui',
                    offText:'Non',
                    offColor:'danger'
                }
            );
            \$('.dtable').on('switchChange.bootstrapSwitch', '.disabledAccount', function (event, state) {
                var user = \$(this).data('user');
                \$.ajax({
                    url: Routing.generate('administrator_switch_account_enabled', {id: user}),
                    method: 'POST'
                });
            });
        })
    </script>
";
        
        $__internal_cd9ca5f0988c0092aae0986f5f669e9f3b34115e81296d43223ed9778439f097->leave($__internal_cd9ca5f0988c0092aae0986f5f669e9f3b34115e81296d43223ed9778439f097_prof);

        
        $__internal_c8cc04e71ffd6947cc8f07ad75b0eaab994258e9e9e790c5c7f277431f044205->leave($__internal_c8cc04e71ffd6947cc8f07ad75b0eaab994258e9e9e790c5c7f277431f044205_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Admin/client/clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 86,  232 => 85,  208 => 72,  199 => 71,  181 => 62,  170 => 57,  162 => 54,  158 => 53,  153 => 51,  149 => 50,  145 => 49,  141 => 48,  138 => 47,  134 => 46,  100 => 15,  93 => 10,  84 => 9,  73 => 7,  64 => 6,  53 => 3,  44 => 2,  11 => 1,);
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
    Liste des clients
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
                <span class=\"active\">Liste des clients</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-users\"></span> &nbsp; Liste des clients </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box red\">
                <div class=\"portlet-title\">
                    <div class=\"caption\"></div>
                </div>
                <div class=\"portlet-body \">
                    <table class=\"table table-striped table-bordered dtable\" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th class=\"text-center\">Date d'Inscription</th>
                            <th>Nom complet</th>
                            <th>Email</th>
                            <th class=\"text-center\"><i class=\"fa fa-clock-o\"></i> Dernière connexion</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for client in clients %}
                            <tr >
                                <td class=\"text-center\">{{ client.joinedAt|date('d-m-Y') }}</td>
                                <td>{{ client.profile.fullName }}</td>
                                <td>{{ client.email }}</td>
                                <td class=\"text-center\">{{ client.lastLogin|date('d-m-Y H:i') }}</td>
                                <td class=\"text-center\">
                                    <input data-user=\"{{ client.id }}\" type=\"checkbox\" class=\"disabledAccount\"
                                           {% if client.enabled %}checked{% endif %}>
                                </td>
                                <td class=\"text-center\">
                                    <a data-toggle=\"tooltip\" data-title=\"Détails du client\" href=\"{{ url('administrator_show_client',{id:client.id}) }}\"
                                       class=\"btn green btn-icon-only \"><i class=\"fa fa-eye\"></i></a>
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
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-clients\">
{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}\">
    <style>
        table.dtable tbody td {
            vertical-align: middle;
        }
        .dataTables_filter{
            float: left!important;
        }
        .dataTables_filter input{
            width: 200px !important
        }
    </style>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            \$('.dtable').DataTable({
                language: {
                    \"sSearch\": \"Rechercher&nbsp;:\",
                    \"sInfo\": \"Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                    \"sInfoEmpty\": \"Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment\",
                    \"sZeroRecords\": \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                    \"sEmptyTable\": \"Aucune donn&eacute;e disponible dans le tableau\",
                    buttons: {
                        copyHtml5: 'copier',
                        copyTitle: 'Ajouté au presse-papiers',
                        copyKeys: 'Appuyez sur <i>ctrl</i> ou <i>\\u2318</i> + <i>C</i> pour copier les données du tableau à votre presse-papiers. <br><br>Pour annuler, cliquez sur ce message ou appuyez sur Echap.',
                        copySuccess: {
                            _: '%d lignes copiées',
                            1: '1 ligne copiée'
                        }
                    }
                },
                \"bPaginate\": false,
                \"bInfo\": false,
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'copy',
                        text: 'Copier',
                        className: 'btn btn-default btn-sm'
                    }, {
                        extend: 'csvHtml5',
                        className: 'btn btn-default btn-sm',
                        extension: '.csv'
                    }, {
                        extend: 'pdf',
                        className: 'btn btn-default btn-sm',
                        extension: '.pdf'
                    }, {
                        extend: 'print',
                        text: 'Imprimer',
                        className: 'btn btn-default btn-sm'
                    }
                ]
            });
            \$('.disabledAccount').bootstrapSwitch(
                {
                    size:'small',
                    onText:'Oui',
                    offText:'Non',
                    offColor:'danger'
                }
            );
            \$('.dtable').on('switchChange.bootstrapSwitch', '.disabledAccount', function (event, state) {
                var user = \$(this).data('user');
                \$.ajax({
                    url: Routing.generate('administrator_switch_account_enabled', {id: user}),
                    method: 'POST'
                });
            });
        })
    </script>
{% endblock %}", "@Main/Admin/client/clients.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\client\\clients.html.twig");
    }
}
