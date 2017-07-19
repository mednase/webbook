<?php

/* @Main/Admin/index.html.twig */
class __TwigTemplate_dbd4c9706fc2eefe3cfb2edf249708e265820bcda467a0483bc98dfe64ecf8a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "@Main/Admin/index.html.twig", 1);
        $this->blocks = array(
            'classBody' => array($this, 'block_classBody'),
            'menu' => array($this, 'block_menu'),
            'contentStyle' => array($this, 'block_contentStyle'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c648b10e0e9c95db622e284b576998728050373b23e6caca021cf2e45eef2f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c648b10e0e9c95db622e284b576998728050373b23e6caca021cf2e45eef2f2e->enter($__internal_c648b10e0e9c95db622e284b576998728050373b23e6caca021cf2e45eef2f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/index.html.twig"));

        $__internal_477366000468afd2ee8ffb6963c6654e1a5303d2659458e91a708f5ee9a091b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477366000468afd2ee8ffb6963c6654e1a5303d2659458e91a708f5ee9a091b5->enter($__internal_477366000468afd2ee8ffb6963c6654e1a5303d2659458e91a708f5ee9a091b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c648b10e0e9c95db622e284b576998728050373b23e6caca021cf2e45eef2f2e->leave($__internal_c648b10e0e9c95db622e284b576998728050373b23e6caca021cf2e45eef2f2e_prof);

        
        $__internal_477366000468afd2ee8ffb6963c6654e1a5303d2659458e91a708f5ee9a091b5->leave($__internal_477366000468afd2ee8ffb6963c6654e1a5303d2659458e91a708f5ee9a091b5_prof);

    }

    // line 2
    public function block_classBody($context, array $blocks = array())
    {
        $__internal_492e6e45d6e9549df1dee8193ed0a8c79d8b60fd69ba0b18833fbd0e3833745e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492e6e45d6e9549df1dee8193ed0a8c79d8b60fd69ba0b18833fbd0e3833745e->enter($__internal_492e6e45d6e9549df1dee8193ed0a8c79d8b60fd69ba0b18833fbd0e3833745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        $__internal_e488e1f007c325c6fc62cfb8c5c8cee60f564082c5ee980121b02c557ef7bdd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e488e1f007c325c6fc62cfb8c5c8cee60f564082c5ee980121b02c557ef7bdd5->enter($__internal_e488e1f007c325c6fc62cfb8c5c8cee60f564082c5ee980121b02c557ef7bdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        echo "page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo";
        
        $__internal_e488e1f007c325c6fc62cfb8c5c8cee60f564082c5ee980121b02c557ef7bdd5->leave($__internal_e488e1f007c325c6fc62cfb8c5c8cee60f564082c5ee980121b02c557ef7bdd5_prof);

        
        $__internal_492e6e45d6e9549df1dee8193ed0a8c79d8b60fd69ba0b18833fbd0e3833745e->leave($__internal_492e6e45d6e9549df1dee8193ed0a8c79d8b60fd69ba0b18833fbd0e3833745e_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b70b728acbe211fe658728cafe0d8dac091f93cbb8ace15a43ff65d3f007acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b70b728acbe211fe658728cafe0d8dac091f93cbb8ace15a43ff65d3f007acd->enter($__internal_0b70b728acbe211fe658728cafe0d8dac091f93cbb8ace15a43ff65d3f007acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_90039a92e2bb701aefff8f4637cd370b3e5ff829bbc57da9c2e2f24f7931d9e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90039a92e2bb701aefff8f4637cd370b3e5ff829bbc57da9c2e2f24f7931d9e7->enter($__internal_90039a92e2bb701aefff8f4637cd370b3e5ff829bbc57da9c2e2f24f7931d9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
";
        
        $__internal_90039a92e2bb701aefff8f4637cd370b3e5ff829bbc57da9c2e2f24f7931d9e7->leave($__internal_90039a92e2bb701aefff8f4637cd370b3e5ff829bbc57da9c2e2f24f7931d9e7_prof);

        
        $__internal_0b70b728acbe211fe658728cafe0d8dac091f93cbb8ace15a43ff65d3f007acd->leave($__internal_0b70b728acbe211fe658728cafe0d8dac091f93cbb8ace15a43ff65d3f007acd_prof);

    }

    // line 6
    public function block_contentStyle($context, array $blocks = array())
    {
        $__internal_ae0e444a82da525f81348bd1cf1351b487bac61c6a3e148b4f6711b4f892bca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0e444a82da525f81348bd1cf1351b487bac61c6a3e148b4f6711b4f892bca4->enter($__internal_ae0e444a82da525f81348bd1cf1351b487bac61c6a3e148b4f6711b4f892bca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentStyle"));

        $__internal_790f80f4925ab7be110dfe4525bc13436a8c339f72f2b3f9da3c71e7e4ef8c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790f80f4925ab7be110dfe4525bc13436a8c339f72f2b3f9da3c71e7e4ef8c4d->enter($__internal_790f80f4925ab7be110dfe4525bc13436a8c339f72f2b3f9da3c71e7e4ef8c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentStyle"));

        echo "custom-style";
        
        $__internal_790f80f4925ab7be110dfe4525bc13436a8c339f72f2b3f9da3c71e7e4ef8c4d->leave($__internal_790f80f4925ab7be110dfe4525bc13436a8c339f72f2b3f9da3c71e7e4ef8c4d_prof);

        
        $__internal_ae0e444a82da525f81348bd1cf1351b487bac61c6a3e148b4f6711b4f892bca4->leave($__internal_ae0e444a82da525f81348bd1cf1351b487bac61c6a3e148b4f6711b4f892bca4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_722695bd42b561c13eefca40142ba01ceead61e644c5d1c395f5ea1a10e83388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722695bd42b561c13eefca40142ba01ceead61e644c5d1c395f5ea1a10e83388->enter($__internal_722695bd42b561c13eefca40142ba01ceead61e644c5d1c395f5ea1a10e83388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3ba6205eb5b494ada2499a68166719c5f788a59cb3aa9329dd7750b8964a8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ba6205eb5b494ada2499a68166719c5f788a59cb3aa9329dd7750b8964a8f6->enter($__internal_f3ba6205eb5b494ada2499a68166719c5f788a59cb3aa9329dd7750b8964a8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"row tile_count\">
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Totale Abonnées</span>
                <div class=\"count\">2500</div>
                <span class=\"count_bottom\"><i class=\"green\">4% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-clock-o\"></i> Average Time</span>
                <div class=\"count\">123.50</div>
                <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>3% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Totale Auteurs</span>
                <div class=\"count green\">2,500</div>
                <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Totale Validateurs</span>
                <div class=\"count\">4,567</div>
                <span class=\"count_bottom\"><i class=\"red\"><i class=\"fa fa-sort-desc\"></i>12% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-book\"></i> Totale Livres</span>
                <div class=\"count\">2,315</div>
                <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-users\"></i> Totale Visiteurs</span>
                <div class=\"count\">7,325</div>
                <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
        </div>
    <div class=\"row\">

        <div class=\"col-md-7\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading ui-draggable-handle\">
                    <div class=\"panel-title-box\">
                        <h3>Activité</h3>
                        <span>Activité des utilisateurs</span>
                    </div>
                </div>
                <div class=\"panel-body panel-body-table\">

                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                            <tr>
                                <th width=\"20%\">Auteur</th>
                                <th>Bloc</th>
                                <th width=\"10%\">Version</th>
                                <th class=\"text-center\" width=\"10%\">Mode</th>
                                <th width=\"20%\">Progression</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : $this->getContext($context, "versions")));
        foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
            // line 65
            echo "                            <tr>
                                <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["version"], "createdBy", array()), "profile", array()), "fullName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["version"], "bookblock", array()), "title", array()), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "number", array()), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 70
            if (($this->getAttribute($context["version"], "status", array()) == 0)) {
                // line 71
                echo "                                        <span class=\"label label-info\">Edition</span>
                                    ";
            } else {
                // line 73
                echo "                                        <span class=\"label label-warning\">Validation</span>
                                    ";
            }
            // line 75
            echo "                                </td>
                                <td>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                             style=\"width: ";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Webbook\MainBundle\Twig\Extension\BlockOptions')->versionActivityProgress($context["version"]), "html", null, true);
            echo "%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Webbook\MainBundle\Twig\Extension\BlockOptions')->versionActivityProgress($context["version"]), "html", null, true);
            echo "%</div>
                                    </div>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-md-3\">

            <!-- START WIDGET CLOCK -->
            <div class=\"widget widget-info widget-padding-sm\">
                <div class=\"widget-big-int plugin-clock\"><b class=\"hour\">";
        // line 95
        echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, twig_date_converter($this->env), "H") + 1), "html", null, true);
        echo "</b><span>:</span><b class=\"minute\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "i"), "html", null, true);
        echo "</b><span>:</span><b class=\"seconde\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "s"), "html", null, true);
        echo "</b></div>
                <div class=\"widget-subtitle plugin-date\">";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "D,M,j,Y"), "html", null, true);
        echo "</div>
                <div class=\"widget-controls\">
                    <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                </div>
                <div class=\"widget-buttons widget-c3\">
                    <div class=\"col\">
                        <a href=\"#\"><span class=\"fa fa-clock-o\"></span></a>
                    </div>
                    <div class=\"col\">
                        <a href=\"#\"><span class=\"fa fa-bell\"></span></a>
                    </div>
                    <div class=\"col\">
                        <a href=\"#\"><span class=\"fa fa-calendar\"></span></a>
                    </div>
                </div>
            </div>
            <!-- END WIDGET CLOCK -->

        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-index\">

";
        
        $__internal_f3ba6205eb5b494ada2499a68166719c5f788a59cb3aa9329dd7750b8964a8f6->leave($__internal_f3ba6205eb5b494ada2499a68166719c5f788a59cb3aa9329dd7750b8964a8f6_prof);

        
        $__internal_722695bd42b561c13eefca40142ba01ceead61e644c5d1c395f5ea1a10e83388->leave($__internal_722695bd42b561c13eefca40142ba01ceead61e644c5d1c395f5ea1a10e83388_prof);

    }

    // line 119
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ccce1397c3270472c0f47d70af5c902373066400cee14bd6fbef45566ff1d831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccce1397c3270472c0f47d70af5c902373066400cee14bd6fbef45566ff1d831->enter($__internal_ccce1397c3270472c0f47d70af5c902373066400cee14bd6fbef45566ff1d831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_366eb019d4b32dccb663d9fda4cbb235df9f3444cdbc7a76c9a592ab4499b88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366eb019d4b32dccb663d9fda4cbb235df9f3444cdbc7a76c9a592ab4499b88e->enter($__internal_366eb019d4b32dccb663d9fda4cbb235df9f3444cdbc7a76c9a592ab4499b88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 120
        echo "<style>
    .tile_count {
        margin-bottom: 20px;
        margin-top: 20px;
    }
    @media (min-width: 992px){
        .tile_count .tile_stats_count {
            margin-bottom: 10px;
            border-bottom: 0;
            padding-bottom: 10px;
        }
    }
    .tile_count .tile_stats_count span {
        font-size: 12px;
    }
        .tile_count .tile_stats_count {
            border-bottom: 1px solid #D9DEE4;
            padding: 0 10px 0 20px;
            position: relative;
        }
        .tile_count .tile_stats_count, ul.quick-list li {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    .tile_count .tile_stats_count .count {
        font-size: 30px;
        line-height: 47px;
        font-weight: 600;
    }
    .custom-style{
        color:#73879C;
        background-color: #EDEDED;
        padding-top: 5px!important;
    }
    .progress{
        height: 20px;
        margin-bottom: 0px;
    }
    .panel .panel-heading .panel-title-box h3 {
        font-size: 14px;
        font-weight: 600;
        line-height: 18px;
        color: #1b1e24;
        padding: 0px;
        margin: 0px;
    }
    .panel .panel-heading .panel-title-box span {
        font-size: 12px;
        color: #586377;
        font-weight: 400;
        line-height: 12px;
    }
    .widget {
        width: 100%;
        float: left;
        margin: 0px;
        list-style: none;
        text-decoration: none;
        -moz-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
        -webkit-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
        box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
        color: #FFF;
        -moz-border-radius: 0px;
        -webkit-border-radius: 0px;
        border-radius: 0px;
        padding: 15px 10px;
        margin-bottom: 20px;
        min-height: 120px;
        position: relative;
    }
    .widget.widget-padding-sm,
    .widget.widget-item-icon {
        padding: 10px 0px 5px;
    }
    .widget.widget-np {
        padding: 0px;
    }
    .widget.widget-no-subtitle {
        padding-top: 25px;
    }
    .widget.widget-carousel {
        padding-bottom: 0px;
        padding-top: 10px;
    }
    .widget.widget-default {
        background: #ffffff;

    }

    .widget.widget-success {
        background: #95b75d;
        background: -moz-linear-gradient(top, #95b75d 0%, #89ad4d 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #95b75d), color-stop(100%, #89ad4d));
        background: -webkit-linear-gradient(top, #95b75d 0%, #89ad4d 100%);
        background: -o-linear-gradient(top, #95b75d 0%, #89ad4d 100%);
        background: -ms-linear-gradient(top, #95b75d 0%, #89ad4d 100%);
        background: linear-gradient(to bottom, #95b75d 0%, #89ad4d 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#95b75d, endColorstr=#89ad4d, GradientType=0);
    }
    .widget.widget-info {
        background: #1caf9a !important;
    }
    .widget.widget-warning {
        background: #1caf9a;
        background: -moz-linear-gradient(top, #1caf9a 0%, #fe970a 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1caf9a), color-stop(100%, #fe970a));
        background: -webkit-linear-gradient(top, #1caf9a 0%, #fe970a 100%);
        background: -o-linear-gradient(top, #1caf9a 0%, #fe970a 100%);
        background: -ms-linear-gradient(top, #1caf9a 0%, #fe970a 100%);
        background: linear-gradient(to bottom, #1caf9a 0%, #fe970a 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#1caf9a, endColorstr=#fe970a, GradientType=0);
    }
    .widget.widget-danger {
        background: #E04B4A;
        background: -moz-linear-gradient(top, #E04B4A 0%, #a43f3e 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #E04B4A), color-stop(100%, #a43f3e));
        background: -webkit-linear-gradient(top, #E04B4A 0%, #a43f3e 100%);
        background: -o-linear-gradient(top, #E04B4A 0%, #a43f3e 100%);
        background: -ms-linear-gradient(top, #E04B4A 0%, #a43f3e 100%);
        background: linear-gradient(to bottom, #E04B4A 0%, #a43f3e 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E04B4A, endColorstr=#a43f3e, GradientType=0);
    }
    .widget .widget-title,
    .widget .widget-subtitle,
    .widget .widget-int,
    .widget .widget-big-int {
        width: 100%;
        float: left;
        text-align: center;
    }
    .widget .widget-title {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 5px;
        line-height: 20px;
        text-transform: uppercase;
    }
    .widget .widget-subtitle {
        font-size: 12px;
        font-weight: 400;
        margin-bottom: 5px;
        line-height: 15px;
        color: #EEE;
    }
    .widget .widget-int {
        font-size: 32px;
        line-height: 40px;
        font-weight: bold;
        font-family: arial;
    }
    .widget .widget-big-int {
        font-size: 42px;
        line-height: 45px;
        font-weight: 300;
    }
    .widget .widget-item-left {
        margin-left: 10px;
        float: left;
        width: 100px;
    }
    .widget .widget-item-right {
        margin-right: 10px;
        float: right;
        width: 100px;
    }
    .widget.widget-item-icon .widget-item-left,
    .widget.widget-item-icon .widget-item-right {
        width: 70px;
        padding: 20px 0px;
        text-align: center;
    }
    .widget.widget-item-icon .widget-item-left {
        border-right: 1px solid rgba(0, 0, 0, 0.1);
        margin-right: 10px;
        padding-right: 10px;
    }
    .widget.widget-item-icon .widget-item-right {
        border-left: 1px solid rgba(0, 0, 0, 0.1);
        margin-left: 10px;
        padding-left: 10px;
    }
    .widget .widget-item-left .fa,
    .widget .widget-item-right .fa,
    .widget .widget-item-left .glyphicon,
    .widget .widget-item-right .glyphicon {
        font-size: 60px;
    }
    .widget .widget-data {
        padding-left: 120px;
    }
    .widget .widget-data-left {
        padding-right: 120px;
    }
    .widget.widget-item-icon .widget-data {
        padding-left: 90px;
    }
    .widget.widget-item-icon .widget-data-left {
        padding-right: 90px;
        padding-left: 10px;
    }
    .widget .widget-data .widget-title,
    .widget .widget-data-left .widget-title,
    .widget .widget-data .widget-subtitle,
    .widget .widget-data-left .widget-subtitle,
    .widget .widget-data .widget-int,
    .widget .widget-data-left .widget-int,
    .widget .widget-data .widget-big-int,
    .widget .widget-data-left .widget-big-int {
        text-align: left;
    }
    .widget .widget-controls a {
        position: absolute;
        width: 20px;
        height: 20px;
        text-align: center;
        line-height: 17px;
        color: #FFF;
        border: 1px solid #FFF;
        -moz-border-radius: 20%;
        -webkit-border-radius: 20%;
        border-radius: 20%;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
        opacity: 0.4;
        filter: alpha(opacity = 40);
    }

    .widget .widget-controls a.widget-control-left {
        left: 10px;
        top: 10px;
    }
    .widget .widget-controls a.widget-control-right {
        right: 10px;
        top: 10px;
    }
    .widget .widget-controls a:hover {
        opacity: 1;
        filter: alpha(opacity = 100);
    }
    .widget .widget-buttons {
        float: left;
        width: 100%;
        text-align: center;
        padding-top: 3px;
        margin-top: 5px;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }
    .widget .widget-buttons a {
        position: relative;
        display: inline-block;
        line-height: 30px;
        font-size: 21px;
    }
    .widget .widget-buttons .col {
        width: 100%;
        float: left;
    }
    .widget .widget-buttons.widget-c2 .col {
        width: 50%;
    }
    .widget .widget-buttons.widget-c3 .col {
        width: 33.333333%;
    }
    .widget .widget-buttons.widget-c4 .col {
        width: 25%;
    }
    .widget .widget-buttons.widget-c5 .col {
        width: 20%;
    }
    .widget.widget-primary .widget-buttons a {
        color: #000000;
        border-color: #000000;
    }
    .widget.widget-primary .widget-buttons a:hover {
        color: #000000;
    }
    .widget.widget-success .widget-buttons a {
        color: #51672e;
        border-color: #51672e;
    }
    .widge.widget-success .widget-buttons a:hover {
        color: #435526;
    }
    .widget.widget-info .widget-buttons a {
        color: #eee;
        border-color: #eee;
    }
    .widget.widget-info .widget-buttons a:hover {
        color: #fff;
    }
    .widget.widget-warning .widget-buttons a {
        color: #a15e01;
        border-color: #a15e01;
    }
    .widget.widget-warning .widget-buttons a:hover {
        color: #874f01;
    }
    .widget.widget-danger .widget-buttons a {
        color: #5a2222;
        border-color: #5a2222;
    }
    .widget.widget-danger .widget-buttons a:hover {
        color: #471b1b;
    }
    .plugin-clock span {
        -webkit-animation: pulsate 1s ease-out;
        -webkit-animation-iteration-count: infinite;
        -moz-animation: pulsate 1s ease-out;
        -moz-animation-iteration-count: infinite;
        animation: pulsate 1s ease-out;
        animation-iteration-count: infinite;
        opacity: 0.0;
        margin-right: 2px;
    }
    .widget.widget-default {
        color: #1b1e24;
    }
    .widget.widget-default .widget-subtitle {
        color: #1b1e24;
    }
    .widget.widget-default .widget-controls a {
        color: #1b1e24;
        border-color: #1b1e24;
    }
    .plugin-clock span {
        -webkit-animation: pulse 1s ease-out infinite;
        -webkit-animation-iteration-count: infinite;
        -moz-animation: pulse 1s ease-out infinite;
        -moz-animation-iteration-count: infinite;
        animation: pulse 1s ease-out infinite;
    }
    @keyframes pulse {
        0%{
            opacity: 1;
        }
        100%{
            opacity: 0;
        }
    }
    /* END WIDGETS */
</style>
";
        
        $__internal_366eb019d4b32dccb663d9fda4cbb235df9f3444cdbc7a76c9a592ab4499b88e->leave($__internal_366eb019d4b32dccb663d9fda4cbb235df9f3444cdbc7a76c9a592ab4499b88e_prof);

        
        $__internal_ccce1397c3270472c0f47d70af5c902373066400cee14bd6fbef45566ff1d831->leave($__internal_ccce1397c3270472c0f47d70af5c902373066400cee14bd6fbef45566ff1d831_prof);

    }

    // line 466
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4466d65b841eaf1e271437b534076f1b9f8749850e0d1d0f8d965f9b50d3da49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4466d65b841eaf1e271437b534076f1b9f8749850e0d1d0f8d965f9b50d3da49->enter($__internal_4466d65b841eaf1e271437b534076f1b9f8749850e0d1d0f8d965f9b50d3da49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e9068f4672b3fac0669bac4d402eada30dc87ec04b65b3656f26fb0df54c5265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9068f4672b3fac0669bac4d402eada30dc87ec04b65b3656f26fb0df54c5265->enter($__internal_e9068f4672b3fac0669bac4d402eada30dc87ec04b65b3656f26fb0df54c5265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 467
        echo "<script>
    (function() {
        var hour, minute,second,updateClock;


        hour = \$('.hour');
        minute = \$('.minute');
        second= \$('.seconde');

        updateClock = function() {
            var d, h, m,s;
            d = new Date();
            h = d.getHours();
            m = d.getMinutes();
            s = d.getSeconds();

            if(m<10)
                m=\"0\"+m;
            if(s<10)
                s=\"0\"+s;
            if(h<10)
                h=\"0\"
            hour.text(h);
            minute.text(m);
            second.text(s);
        };

        updateClock();

        setInterval(updateClock, 250);

    }).call(this);

</script>
";
        
        $__internal_e9068f4672b3fac0669bac4d402eada30dc87ec04b65b3656f26fb0df54c5265->leave($__internal_e9068f4672b3fac0669bac4d402eada30dc87ec04b65b3656f26fb0df54c5265_prof);

        
        $__internal_4466d65b841eaf1e271437b534076f1b9f8749850e0d1d0f8d965f9b50d3da49->leave($__internal_4466d65b841eaf1e271437b534076f1b9f8749850e0d1d0f8d965f9b50d3da49_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  646 => 467,  637 => 466,  282 => 120,  273 => 119,  240 => 96,  232 => 95,  219 => 84,  206 => 79,  200 => 75,  196 => 73,  192 => 71,  190 => 70,  185 => 68,  181 => 67,  177 => 66,  174 => 65,  170 => 64,  112 => 8,  103 => 7,  85 => 6,  72 => 4,  63 => 3,  45 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MainBundle::layout.html.twig\" %}
{% block classBody %}page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo{% endblock %}
{% block menu %}
    {{ parent() }}
{% endblock %}
{% block contentStyle %}custom-style{% endblock %}
{% block body %}
    <div class=\"row tile_count\">
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Totale Abonnées</span>
                <div class=\"count\">2500</div>
                <span class=\"count_bottom\"><i class=\"green\">4% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-clock-o\"></i> Average Time</span>
                <div class=\"count\">123.50</div>
                <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>3% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Totale Auteurs</span>
                <div class=\"count green\">2,500</div>
                <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-user\"></i> Totale Validateurs</span>
                <div class=\"count\">4,567</div>
                <span class=\"count_bottom\"><i class=\"red\"><i class=\"fa fa-sort-desc\"></i>12% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-book\"></i> Totale Livres</span>
                <div class=\"count\">2,315</div>
                <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
                <span class=\"count_top\"><i class=\"fa fa-users\"></i> Totale Visiteurs</span>
                <div class=\"count\">7,325</div>
                <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
        </div>
    <div class=\"row\">

        <div class=\"col-md-7\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading ui-draggable-handle\">
                    <div class=\"panel-title-box\">
                        <h3>Activité</h3>
                        <span>Activité des utilisateurs</span>
                    </div>
                </div>
                <div class=\"panel-body panel-body-table\">

                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead>
                            <tr>
                                <th width=\"20%\">Auteur</th>
                                <th>Bloc</th>
                                <th width=\"10%\">Version</th>
                                <th class=\"text-center\" width=\"10%\">Mode</th>
                                <th width=\"20%\">Progression</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for version in versions %}
                            <tr>
                                <td>{{ version.createdBy.profile.fullName }}</td>
                                <td>{{ version.bookblock.title }}</td>
                                <td class=\"text-center\">{{ version.number }}</td>
                                <td>
                                    {% if version.status==0 %}
                                        <span class=\"label label-info\">Edition</span>
                                    {% else %}
                                        <span class=\"label label-warning\">Validation</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <div class=\"progress progress-small progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\"
                                             style=\"width: {{ version_activity_progress(version) }}%\">{{ version_activity_progress(version) }}%</div>
                                    </div>
                                </td>
                            </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"col-md-3\">

            <!-- START WIDGET CLOCK -->
            <div class=\"widget widget-info widget-padding-sm\">
                <div class=\"widget-big-int plugin-clock\"><b class=\"hour\">{{ date()|date('H')+1 }}</b><span>:</span><b class=\"minute\">{{ date()|date('i') }}</b><span>:</span><b class=\"seconde\">{{ date()|date('s') }}</b></div>
                <div class=\"widget-subtitle plugin-date\">{{ date()|date(\"D,M,j,Y\") }}</div>
                <div class=\"widget-controls\">
                    <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                </div>
                <div class=\"widget-buttons widget-c3\">
                    <div class=\"col\">
                        <a href=\"#\"><span class=\"fa fa-clock-o\"></span></a>
                    </div>
                    <div class=\"col\">
                        <a href=\"#\"><span class=\"fa fa-bell\"></span></a>
                    </div>
                    <div class=\"col\">
                        <a href=\"#\"><span class=\"fa fa-calendar\"></span></a>
                    </div>
                </div>
            </div>
            <!-- END WIDGET CLOCK -->

        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-index\">

{% endblock %}
{% block stylesheets %}
<style>
    .tile_count {
        margin-bottom: 20px;
        margin-top: 20px;
    }
    @media (min-width: 992px){
        .tile_count .tile_stats_count {
            margin-bottom: 10px;
            border-bottom: 0;
            padding-bottom: 10px;
        }
    }
    .tile_count .tile_stats_count span {
        font-size: 12px;
    }
        .tile_count .tile_stats_count {
            border-bottom: 1px solid #D9DEE4;
            padding: 0 10px 0 20px;
            position: relative;
        }
        .tile_count .tile_stats_count, ul.quick-list li {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    .tile_count .tile_stats_count .count {
        font-size: 30px;
        line-height: 47px;
        font-weight: 600;
    }
    .custom-style{
        color:#73879C;
        background-color: #EDEDED;
        padding-top: 5px!important;
    }
    .progress{
        height: 20px;
        margin-bottom: 0px;
    }
    .panel .panel-heading .panel-title-box h3 {
        font-size: 14px;
        font-weight: 600;
        line-height: 18px;
        color: #1b1e24;
        padding: 0px;
        margin: 0px;
    }
    .panel .panel-heading .panel-title-box span {
        font-size: 12px;
        color: #586377;
        font-weight: 400;
        line-height: 12px;
    }
    .widget {
        width: 100%;
        float: left;
        margin: 0px;
        list-style: none;
        text-decoration: none;
        -moz-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
        -webkit-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
        box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
        color: #FFF;
        -moz-border-radius: 0px;
        -webkit-border-radius: 0px;
        border-radius: 0px;
        padding: 15px 10px;
        margin-bottom: 20px;
        min-height: 120px;
        position: relative;
    }
    .widget.widget-padding-sm,
    .widget.widget-item-icon {
        padding: 10px 0px 5px;
    }
    .widget.widget-np {
        padding: 0px;
    }
    .widget.widget-no-subtitle {
        padding-top: 25px;
    }
    .widget.widget-carousel {
        padding-bottom: 0px;
        padding-top: 10px;
    }
    .widget.widget-default {
        background: #ffffff;

    }

    .widget.widget-success {
        background: #95b75d;
        background: -moz-linear-gradient(top, #95b75d 0%, #89ad4d 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #95b75d), color-stop(100%, #89ad4d));
        background: -webkit-linear-gradient(top, #95b75d 0%, #89ad4d 100%);
        background: -o-linear-gradient(top, #95b75d 0%, #89ad4d 100%);
        background: -ms-linear-gradient(top, #95b75d 0%, #89ad4d 100%);
        background: linear-gradient(to bottom, #95b75d 0%, #89ad4d 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#95b75d, endColorstr=#89ad4d, GradientType=0);
    }
    .widget.widget-info {
        background: #1caf9a !important;
    }
    .widget.widget-warning {
        background: #1caf9a;
        background: -moz-linear-gradient(top, #1caf9a 0%, #fe970a 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1caf9a), color-stop(100%, #fe970a));
        background: -webkit-linear-gradient(top, #1caf9a 0%, #fe970a 100%);
        background: -o-linear-gradient(top, #1caf9a 0%, #fe970a 100%);
        background: -ms-linear-gradient(top, #1caf9a 0%, #fe970a 100%);
        background: linear-gradient(to bottom, #1caf9a 0%, #fe970a 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#1caf9a, endColorstr=#fe970a, GradientType=0);
    }
    .widget.widget-danger {
        background: #E04B4A;
        background: -moz-linear-gradient(top, #E04B4A 0%, #a43f3e 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #E04B4A), color-stop(100%, #a43f3e));
        background: -webkit-linear-gradient(top, #E04B4A 0%, #a43f3e 100%);
        background: -o-linear-gradient(top, #E04B4A 0%, #a43f3e 100%);
        background: -ms-linear-gradient(top, #E04B4A 0%, #a43f3e 100%);
        background: linear-gradient(to bottom, #E04B4A 0%, #a43f3e 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E04B4A, endColorstr=#a43f3e, GradientType=0);
    }
    .widget .widget-title,
    .widget .widget-subtitle,
    .widget .widget-int,
    .widget .widget-big-int {
        width: 100%;
        float: left;
        text-align: center;
    }
    .widget .widget-title {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 5px;
        line-height: 20px;
        text-transform: uppercase;
    }
    .widget .widget-subtitle {
        font-size: 12px;
        font-weight: 400;
        margin-bottom: 5px;
        line-height: 15px;
        color: #EEE;
    }
    .widget .widget-int {
        font-size: 32px;
        line-height: 40px;
        font-weight: bold;
        font-family: arial;
    }
    .widget .widget-big-int {
        font-size: 42px;
        line-height: 45px;
        font-weight: 300;
    }
    .widget .widget-item-left {
        margin-left: 10px;
        float: left;
        width: 100px;
    }
    .widget .widget-item-right {
        margin-right: 10px;
        float: right;
        width: 100px;
    }
    .widget.widget-item-icon .widget-item-left,
    .widget.widget-item-icon .widget-item-right {
        width: 70px;
        padding: 20px 0px;
        text-align: center;
    }
    .widget.widget-item-icon .widget-item-left {
        border-right: 1px solid rgba(0, 0, 0, 0.1);
        margin-right: 10px;
        padding-right: 10px;
    }
    .widget.widget-item-icon .widget-item-right {
        border-left: 1px solid rgba(0, 0, 0, 0.1);
        margin-left: 10px;
        padding-left: 10px;
    }
    .widget .widget-item-left .fa,
    .widget .widget-item-right .fa,
    .widget .widget-item-left .glyphicon,
    .widget .widget-item-right .glyphicon {
        font-size: 60px;
    }
    .widget .widget-data {
        padding-left: 120px;
    }
    .widget .widget-data-left {
        padding-right: 120px;
    }
    .widget.widget-item-icon .widget-data {
        padding-left: 90px;
    }
    .widget.widget-item-icon .widget-data-left {
        padding-right: 90px;
        padding-left: 10px;
    }
    .widget .widget-data .widget-title,
    .widget .widget-data-left .widget-title,
    .widget .widget-data .widget-subtitle,
    .widget .widget-data-left .widget-subtitle,
    .widget .widget-data .widget-int,
    .widget .widget-data-left .widget-int,
    .widget .widget-data .widget-big-int,
    .widget .widget-data-left .widget-big-int {
        text-align: left;
    }
    .widget .widget-controls a {
        position: absolute;
        width: 20px;
        height: 20px;
        text-align: center;
        line-height: 17px;
        color: #FFF;
        border: 1px solid #FFF;
        -moz-border-radius: 20%;
        -webkit-border-radius: 20%;
        border-radius: 20%;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
        opacity: 0.4;
        filter: alpha(opacity = 40);
    }

    .widget .widget-controls a.widget-control-left {
        left: 10px;
        top: 10px;
    }
    .widget .widget-controls a.widget-control-right {
        right: 10px;
        top: 10px;
    }
    .widget .widget-controls a:hover {
        opacity: 1;
        filter: alpha(opacity = 100);
    }
    .widget .widget-buttons {
        float: left;
        width: 100%;
        text-align: center;
        padding-top: 3px;
        margin-top: 5px;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }
    .widget .widget-buttons a {
        position: relative;
        display: inline-block;
        line-height: 30px;
        font-size: 21px;
    }
    .widget .widget-buttons .col {
        width: 100%;
        float: left;
    }
    .widget .widget-buttons.widget-c2 .col {
        width: 50%;
    }
    .widget .widget-buttons.widget-c3 .col {
        width: 33.333333%;
    }
    .widget .widget-buttons.widget-c4 .col {
        width: 25%;
    }
    .widget .widget-buttons.widget-c5 .col {
        width: 20%;
    }
    .widget.widget-primary .widget-buttons a {
        color: #000000;
        border-color: #000000;
    }
    .widget.widget-primary .widget-buttons a:hover {
        color: #000000;
    }
    .widget.widget-success .widget-buttons a {
        color: #51672e;
        border-color: #51672e;
    }
    .widge.widget-success .widget-buttons a:hover {
        color: #435526;
    }
    .widget.widget-info .widget-buttons a {
        color: #eee;
        border-color: #eee;
    }
    .widget.widget-info .widget-buttons a:hover {
        color: #fff;
    }
    .widget.widget-warning .widget-buttons a {
        color: #a15e01;
        border-color: #a15e01;
    }
    .widget.widget-warning .widget-buttons a:hover {
        color: #874f01;
    }
    .widget.widget-danger .widget-buttons a {
        color: #5a2222;
        border-color: #5a2222;
    }
    .widget.widget-danger .widget-buttons a:hover {
        color: #471b1b;
    }
    .plugin-clock span {
        -webkit-animation: pulsate 1s ease-out;
        -webkit-animation-iteration-count: infinite;
        -moz-animation: pulsate 1s ease-out;
        -moz-animation-iteration-count: infinite;
        animation: pulsate 1s ease-out;
        animation-iteration-count: infinite;
        opacity: 0.0;
        margin-right: 2px;
    }
    .widget.widget-default {
        color: #1b1e24;
    }
    .widget.widget-default .widget-subtitle {
        color: #1b1e24;
    }
    .widget.widget-default .widget-controls a {
        color: #1b1e24;
        border-color: #1b1e24;
    }
    .plugin-clock span {
        -webkit-animation: pulse 1s ease-out infinite;
        -webkit-animation-iteration-count: infinite;
        -moz-animation: pulse 1s ease-out infinite;
        -moz-animation-iteration-count: infinite;
        animation: pulse 1s ease-out infinite;
    }
    @keyframes pulse {
        0%{
            opacity: 1;
        }
        100%{
            opacity: 0;
        }
    }
    /* END WIDGETS */
</style>
{% endblock %}
{% block javascripts %}
<script>
    (function() {
        var hour, minute,second,updateClock;


        hour = \$('.hour');
        minute = \$('.minute');
        second= \$('.seconde');

        updateClock = function() {
            var d, h, m,s;
            d = new Date();
            h = d.getHours();
            m = d.getMinutes();
            s = d.getSeconds();

            if(m<10)
                m=\"0\"+m;
            if(s<10)
                s=\"0\"+s;
            if(h<10)
                h=\"0\"
            hour.text(h);
            minute.text(m);
            second.text(s);
        };

        updateClock();

        setInterval(updateClock, 250);

    }).call(this);

</script>
{% endblock %}", "@Main/Admin/index.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\index.html.twig");
    }
}
