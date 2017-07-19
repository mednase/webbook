<?php

/* MainBundle::layout.html.twig */
class __TwigTemplate_c6937f1dff743dc4652bccce905632bfb7f0d1d3128eb6748815c448811dd17a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'classBody' => array($this, 'block_classBody'),
            'menu' => array($this, 'block_menu'),
            'contentStyle' => array($this, 'block_contentStyle'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a542f977c4657f12db3682766e5ff599549164f694091019994fe9414ef22f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a542f977c4657f12db3682766e5ff599549164f694091019994fe9414ef22f3->enter($__internal_1a542f977c4657f12db3682766e5ff599549164f694091019994fe9414ef22f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::layout.html.twig"));

        $__internal_c29d808905be3b44358431d05816468cdd1ab3329aed2d72fac40da491883a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29d808905be3b44358431d05816468cdd1ab3329aed2d72fac40da491883a38->enter($__internal_c29d808905be3b44358431d05816468cdd1ab3329aed2d72fac40da491883a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/css/layout.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/css/themes/blue.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/css/custom.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/mini-logo.png"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/datatables.min.css"), "html", null, true);
        echo "\" />
    <link  rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-table/bootstrap-table.min.css"), "html", null, true);
        echo "\"/>
    <link  rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/css/annimation.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/login.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-sweetalert/sweetalert.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-toastr/toastr.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/css/main.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-summernote/summernote.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/css/plugins-md.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/material-icons/material.icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-ui-1.12.1/jquery-ui.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/css/fileinput.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/css/font/custom.font.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/nav-bar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/custom-compo.css"), "html", null, true);
        echo "\">
    ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body class=\"page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid ";
        // line 38
        $this->displayBlock('classBody', $context, $blocks);
        echo "\">
<div id=\"page-loader\" class=\"fade in\">
    <span class=\"spinner\"></span>
</div>
<!-- navbar-->
";
        // line 43
        $this->loadTemplate("@Main/shared/navbar.html.twig", "MainBundle::layout.html.twig", 43)->display($context);
        // line 44
        echo "<!-- end navbar-->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class=\"clearfix\"></div>
<!-- END HEADER & CONTENT DIVIDER -->

<!-- BEGIN CONTAINER -->
<div class=\"page-container\">
        ";
        // line 51
        $this->displayBlock('menu', $context, $blocks);
        // line 60
        echo "    <div class=\"page-content-wrapper\" >
        <div class=\"page-content ";
        // line 61
        $this->displayBlock('contentStyle', $context, $blocks);
        echo "\"  style=\"overflow: hidden!important; \">
            ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "        </div>
    </div>
</div>

<div class=\"page-footer\">
    <div class=\"page-footer-inner\"> ";
        // line 68
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "Y"), "html", null, true);
        echo " © Mobilite.Tous les droits sont réservés.</div>
    <div class=\"scroll-to-top\">
        <i class=\"icon-arrow-up\"></i>
    </div>
</div>

<!-- socket lib-->
<script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/js/autobahn.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/js/gos_web_socket_client.js"), "html", null, true);
        echo "\"></script>

<!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/ie8.fix.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->

<script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-ui-1.12.1/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

<script>
    // handle jQuery plugin naming conflict between jQuery UI and Bootstrap
    \$.widget.bridge('uibutton', \$.ui.button);
    \$.widget.bridge('uitooltip', \$.ui.tooltip);
</script>
<script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-toastr/toastr.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/blockUI/blockUI.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/app.js"), "html", null, true);
        echo "\"></script>

<!-- FOS js routing -->
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-daterange/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-daterange/moment.local.fr.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/scripts/layout.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/scripts/demo.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/scripts/quick-nav.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/js/select2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/select2/js/i18n/fr.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/js/main.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-summernote/summernote.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-summernote/lang/summernote-fr-FR.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/js/plugins/piexif.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/js/plugins/sortable.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/js/plugins/purify.min.js"), "html", null, true);
        echo "\"> </script>
<script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/js/fileinput.js"), "html", null, true);
        echo "\"> </script>
<script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/js/locales/fr.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tinymce/js/tinymce/langs/fr_FR.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>

";
        // line 133
        $this->loadTemplate("::menu/toaster.html.twig", "MainBundle::layout.html.twig", 133)->display($context);
        // line 134
        $this->loadTemplate("::menu/socket.html.twig", "MainBundle::layout.html.twig", 134)->display($context);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('javascripts', $context, $blocks);
        // line 138
        echo "<script>
    \$(window).load(function () {
        \$('#page-loader').addClass('hidden');

        var typingTimer;                //timer identifier
        var doneTypingInterval = 500;  //time in ms, 5 second for example
        var elem = \$('#searchModalInput');
        //on keyup, start the countdown
        elem.on('keyup', function () {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        });
        //user is \"finished typing,\" do something
        function doneTyping () {
            console.log(\"aaaa\");
            var search=elem.val();
            \$.ajax({
                url:Routing.generate('navbar_search'),
                data:{search:search},
                dataType:'JSON',
                success:function (data) {
                    var authorContainer=\$('#author-search-result');
                    authorContainer.html(\"\");
                    var bookContainer=\$('#books-search-result');
                    bookContainer.html(\"\");
                    \$.each(data.authors,function (i,user) {
                        var picture =authorContainer.data('noimg');
                        if(user.picture)
                            picture=user.picture.path;
                        authorContainer.append(' <div class=\"foundAuthor  animated fadeIn col-md-2\">'+
                            '<div><img class=\"img-circle\" src=\"'+picture+'\" alt=\"'+user.fullName+'\"></div>'+
                            '<span>'+user.fullName+'</span></div>')
                    });
                    \$.each(data.books,function (i,b) {
                        var picture =bookContainer.data('noimg');
                        if(b.images.length){
                            picture=b.images[0].path;
                        }
                        var authors=\"\";
                        for(var i=0; i<b.main_authors.length;i++)
                            i===0? authors+=\",\"+b.main_authors[i].fullName :authors+=b.main_authors[i].fullName;

                        bookContainer.append('<div class=\"foundBook animated fadeIn col-md-3\">'+
                            '<div class=\"image\">'+
                            '<img class=\"img-responsive\"  src=\"'+picture+'\" alt=\"'+b.title+'\"></div>'+
                            '<div class=\"details\"> <h5><a href=\"#\">'+b.title+'</a></h5> <h6>Auteurs : '+authors+'</h6>'+
                            '</div> </div>')
                    });
                }
            })
        }
    })
</script>
</body>
</html>
";
        
        $__internal_1a542f977c4657f12db3682766e5ff599549164f694091019994fe9414ef22f3->leave($__internal_1a542f977c4657f12db3682766e5ff599549164f694091019994fe9414ef22f3_prof);

        
        $__internal_c29d808905be3b44358431d05816468cdd1ab3329aed2d72fac40da491883a38->leave($__internal_c29d808905be3b44358431d05816468cdd1ab3329aed2d72fac40da491883a38_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41cd38b6f8c1b2ab1a23da094aeca8cf667e58614898ec32f8f040e3d7daad35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41cd38b6f8c1b2ab1a23da094aeca8cf667e58614898ec32f8f040e3d7daad35->enter($__internal_41cd38b6f8c1b2ab1a23da094aeca8cf667e58614898ec32f8f040e3d7daad35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_14272d07689a3782b08917e73e66bbe19d3a12aa6538b27c10142cfd594fa39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14272d07689a3782b08917e73e66bbe19d3a12aa6538b27c10142cfd594fa39e->enter($__internal_14272d07689a3782b08917e73e66bbe19d3a12aa6538b27c10142cfd594fa39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_14272d07689a3782b08917e73e66bbe19d3a12aa6538b27c10142cfd594fa39e->leave($__internal_14272d07689a3782b08917e73e66bbe19d3a12aa6538b27c10142cfd594fa39e_prof);

        
        $__internal_41cd38b6f8c1b2ab1a23da094aeca8cf667e58614898ec32f8f040e3d7daad35->leave($__internal_41cd38b6f8c1b2ab1a23da094aeca8cf667e58614898ec32f8f040e3d7daad35_prof);

    }

    // line 36
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cc40f43d08bd2abe6a6b23f942731598c8e5b1ca0a87fc9b50b823f2b6f6522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc40f43d08bd2abe6a6b23f942731598c8e5b1ca0a87fc9b50b823f2b6f6522->enter($__internal_1cc40f43d08bd2abe6a6b23f942731598c8e5b1ca0a87fc9b50b823f2b6f6522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c5a226418f40f2d2c056d6a6cc13fff70e21aedd90e783ec27ae8a8ebdfdb53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5a226418f40f2d2c056d6a6cc13fff70e21aedd90e783ec27ae8a8ebdfdb53->enter($__internal_8c5a226418f40f2d2c056d6a6cc13fff70e21aedd90e783ec27ae8a8ebdfdb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_8c5a226418f40f2d2c056d6a6cc13fff70e21aedd90e783ec27ae8a8ebdfdb53->leave($__internal_8c5a226418f40f2d2c056d6a6cc13fff70e21aedd90e783ec27ae8a8ebdfdb53_prof);

        
        $__internal_1cc40f43d08bd2abe6a6b23f942731598c8e5b1ca0a87fc9b50b823f2b6f6522->leave($__internal_1cc40f43d08bd2abe6a6b23f942731598c8e5b1ca0a87fc9b50b823f2b6f6522_prof);

    }

    // line 38
    public function block_classBody($context, array $blocks = array())
    {
        $__internal_058abfc739626d0d17693cc0e9ae8830eea7faa05bfd69abfea8adca0b067661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058abfc739626d0d17693cc0e9ae8830eea7faa05bfd69abfea8adca0b067661->enter($__internal_058abfc739626d0d17693cc0e9ae8830eea7faa05bfd69abfea8adca0b067661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        $__internal_ca4cfc9144486421e60588c454a267109d7876909aad224b5759d839a7f3f04a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4cfc9144486421e60588c454a267109d7876909aad224b5759d839a7f3f04a->enter($__internal_ca4cfc9144486421e60588c454a267109d7876909aad224b5759d839a7f3f04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        
        $__internal_ca4cfc9144486421e60588c454a267109d7876909aad224b5759d839a7f3f04a->leave($__internal_ca4cfc9144486421e60588c454a267109d7876909aad224b5759d839a7f3f04a_prof);

        
        $__internal_058abfc739626d0d17693cc0e9ae8830eea7faa05bfd69abfea8adca0b067661->leave($__internal_058abfc739626d0d17693cc0e9ae8830eea7faa05bfd69abfea8adca0b067661_prof);

    }

    // line 51
    public function block_menu($context, array $blocks = array())
    {
        $__internal_12c651ed22b52f134c47b513a9969e136cb3ae01cc796fa014339711caabc961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c651ed22b52f134c47b513a9969e136cb3ae01cc796fa014339711caabc961->enter($__internal_12c651ed22b52f134c47b513a9969e136cb3ae01cc796fa014339711caabc961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ac5d7b6b4a54f44577263a047b2425dcfa32429377444609cfea47d2da3d55d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5d7b6b4a54f44577263a047b2425dcfa32429377444609cfea47d2da3d55d8->enter($__internal_ac5d7b6b4a54f44577263a047b2425dcfa32429377444609cfea47d2da3d55d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 52
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMINISTRATOR")) {
            // line 53
            echo "                ";
            $this->loadTemplate("::menu/menu.administrator.html.twig", "MainBundle::layout.html.twig", 53)->display($context);
            // line 54
            echo "            ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTHOR")) {
            // line 55
            echo "                ";
            $this->loadTemplate("::menu/menu.author.html.twig", "MainBundle::layout.html.twig", 55)->display($context);
            // line 56
            echo "            ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VALIDATOR")) {
            // line 57
            echo "                ";
            $this->loadTemplate("::menu/menu.validator.html.twig", "MainBundle::layout.html.twig", 57)->display($context);
            // line 58
            echo "            ";
        }
        // line 59
        echo "        ";
        
        $__internal_ac5d7b6b4a54f44577263a047b2425dcfa32429377444609cfea47d2da3d55d8->leave($__internal_ac5d7b6b4a54f44577263a047b2425dcfa32429377444609cfea47d2da3d55d8_prof);

        
        $__internal_12c651ed22b52f134c47b513a9969e136cb3ae01cc796fa014339711caabc961->leave($__internal_12c651ed22b52f134c47b513a9969e136cb3ae01cc796fa014339711caabc961_prof);

    }

    // line 61
    public function block_contentStyle($context, array $blocks = array())
    {
        $__internal_f540a86035b176e63219e031a38613e4a78d8c28ddf3c1e42452cf69b2f4e091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f540a86035b176e63219e031a38613e4a78d8c28ddf3c1e42452cf69b2f4e091->enter($__internal_f540a86035b176e63219e031a38613e4a78d8c28ddf3c1e42452cf69b2f4e091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentStyle"));

        $__internal_6c30e095c2b1c5ad4ffaa0fb3ea7a4b181db0bad2c5ec0d206d98d700659fd33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c30e095c2b1c5ad4ffaa0fb3ea7a4b181db0bad2c5ec0d206d98d700659fd33->enter($__internal_6c30e095c2b1c5ad4ffaa0fb3ea7a4b181db0bad2c5ec0d206d98d700659fd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentStyle"));

        echo " ";
        
        $__internal_6c30e095c2b1c5ad4ffaa0fb3ea7a4b181db0bad2c5ec0d206d98d700659fd33->leave($__internal_6c30e095c2b1c5ad4ffaa0fb3ea7a4b181db0bad2c5ec0d206d98d700659fd33_prof);

        
        $__internal_f540a86035b176e63219e031a38613e4a78d8c28ddf3c1e42452cf69b2f4e091->leave($__internal_f540a86035b176e63219e031a38613e4a78d8c28ddf3c1e42452cf69b2f4e091_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_14daccc20d3c5a2e4f2a57cf8e511379d764f02ac1aca115788a38bb11e04862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14daccc20d3c5a2e4f2a57cf8e511379d764f02ac1aca115788a38bb11e04862->enter($__internal_14daccc20d3c5a2e4f2a57cf8e511379d764f02ac1aca115788a38bb11e04862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06bfdfe9789fc5d8c8da6ef39737228fea64cd54dde846afa4092d980a845e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bfdfe9789fc5d8c8da6ef39737228fea64cd54dde846afa4092d980a845e2d->enter($__internal_06bfdfe9789fc5d8c8da6ef39737228fea64cd54dde846afa4092d980a845e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_06bfdfe9789fc5d8c8da6ef39737228fea64cd54dde846afa4092d980a845e2d->leave($__internal_06bfdfe9789fc5d8c8da6ef39737228fea64cd54dde846afa4092d980a845e2d_prof);

        
        $__internal_14daccc20d3c5a2e4f2a57cf8e511379d764f02ac1aca115788a38bb11e04862->leave($__internal_14daccc20d3c5a2e4f2a57cf8e511379d764f02ac1aca115788a38bb11e04862_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97ba8398f06467b91708fe69382553abb8837cd350aff1d32cb2bd585e2affdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ba8398f06467b91708fe69382553abb8837cd350aff1d32cb2bd585e2affdd->enter($__internal_97ba8398f06467b91708fe69382553abb8837cd350aff1d32cb2bd585e2affdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_251ff84b15566b60646bc4f5e9b4d6a75865b3247a039fd5c4baf997a48aff09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251ff84b15566b60646bc4f5e9b4d6a75865b3247a039fd5c4baf997a48aff09->enter($__internal_251ff84b15566b60646bc4f5e9b4d6a75865b3247a039fd5c4baf997a48aff09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_251ff84b15566b60646bc4f5e9b4d6a75865b3247a039fd5c4baf997a48aff09->leave($__internal_251ff84b15566b60646bc4f5e9b4d6a75865b3247a039fd5c4baf997a48aff09_prof);

        
        $__internal_97ba8398f06467b91708fe69382553abb8837cd350aff1d32cb2bd585e2affdd->leave($__internal_97ba8398f06467b91708fe69382553abb8837cd350aff1d32cb2bd585e2affdd_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 136,  569 => 62,  551 => 61,  541 => 59,  538 => 58,  535 => 57,  532 => 56,  529 => 55,  526 => 54,  523 => 53,  520 => 52,  511 => 51,  494 => 38,  476 => 36,  459 => 35,  394 => 138,  392 => 136,  389 => 135,  387 => 134,  385 => 133,  380 => 131,  376 => 130,  372 => 129,  368 => 128,  364 => 127,  360 => 126,  356 => 125,  352 => 124,  348 => 123,  344 => 122,  340 => 121,  336 => 120,  332 => 119,  328 => 118,  324 => 117,  320 => 116,  316 => 115,  312 => 114,  308 => 113,  304 => 112,  300 => 111,  296 => 110,  292 => 109,  286 => 106,  281 => 104,  276 => 102,  272 => 101,  266 => 98,  262 => 97,  258 => 96,  254 => 95,  250 => 94,  246 => 93,  242 => 92,  232 => 85,  228 => 84,  222 => 81,  218 => 80,  214 => 79,  208 => 76,  204 => 75,  194 => 68,  187 => 63,  185 => 62,  181 => 61,  178 => 60,  176 => 51,  167 => 44,  165 => 43,  157 => 38,  151 => 36,  149 => 35,  145 => 34,  141 => 33,  137 => 32,  133 => 31,  129 => 30,  125 => 29,  121 => 28,  117 => 27,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  32 => 1,);
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/layout/css/layout.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/layout/css/themes/blue.min.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/layout/css/custom.min.css') }}\"/>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/img/mini-logo.png') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/global/plugins/datatables/datatables.min.css') }}\" />
    <link  rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/global/plugins/bootstrap-table/bootstrap-table.min.css') }}\"/>
    <link  rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/layout/css/annimation.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/ionicons/css/ionicons.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/pages/css/login.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/global/plugins/bootstrap-toastr/toastr.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/global/plugins/select2/css/select2.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/layout/css/main.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/global/plugins/bootstrap-summernote/summernote.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/layout/css/plugins-md.min.css') }}\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/global/plugins/material-icons/material.icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/jquery-ui-1.12.1/jquery-ui.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/global/plugins/bootstrap-fileinput/css/fileinput.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/layout/css/font/custom.font.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/pages/css/nav-bar.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/pages/css/custom-compo.css') }}\">
    {% block stylesheets %}{% endblock %}
    <title>{% block title %} {% endblock  title %}</title>
</head>
<body class=\"page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid {% block classBody %}{% endblock %}\">
<div id=\"page-loader\" class=\"fade in\">
    <span class=\"spinner\"></span>
</div>
<!-- navbar-->
{% include '@Main/shared/navbar.html.twig' %}
<!-- end navbar-->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class=\"clearfix\"></div>
<!-- END HEADER & CONTENT DIVIDER -->

<!-- BEGIN CONTAINER -->
<div class=\"page-container\">
        {% block menu %}
            {% if is_granted('ROLE_ADMINISTRATOR') %}
                {% include '::menu/menu.administrator.html.twig' %}
            {% elseif is_granted('ROLE_AUTHOR') %}
                {% include '::menu/menu.author.html.twig' %}
            {% elseif is_granted('ROLE_VALIDATOR') %}
                {% include '::menu/menu.validator.html.twig' %}
            {% endif %}
        {% endblock %}
    <div class=\"page-content-wrapper\" >
        <div class=\"page-content {% block contentStyle %} {% endblock %}\"  style=\"overflow: hidden!important; \">
            {% block body %}{% endblock %}
        </div>
    </div>
</div>

<div class=\"page-footer\">
    <div class=\"page-footer-inner\"> {{ date()|date(\"Y\") }} © Mobilite.Tous les droits sont réservés.</div>
    <div class=\"scroll-to-top\">
        <i class=\"icon-arrow-up\"></i>
    </div>
</div>

<!-- socket lib-->
<script type=\"text/javascript\" src=\"{{ asset('assets/pages/js/autobahn.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/pages/js/gos_web_socket_client.js') }}\"></script>

<!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/respond.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/excanvas.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/ie8.fix.min.js') }}\"></script>
<![endif]-->

<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/global/plugins/jquery-ui-1.12.1/jquery-ui.min.js') }}\"></script>

<script>
    // handle jQuery plugin naming conflict between jQuery UI and Bootstrap
    \$.widget.bridge('uibutton', \$.ui.button);
    \$.widget.bridge('uitooltip', \$.ui.tooltip);
</script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/js.cookie.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-toastr/toastr.js') }}\"></script>
<script src=\"{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}\"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src=\"{{ asset('assets/global/plugins/datatables/datatables.min.js') }}\"></script>
<script src=\"{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}\"></script>

<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/blockUI/blockUI.js') }}\"></script>

<script src=\"{{ asset('assets/global/app.js') }}\"></script>

<!-- FOS js routing -->
<script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
<script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
<script src=\"{{ asset('assets/global/plugins/bootstrap-daterange/moment.min.js') }}\"></script>
<script src=\"{{ asset('assets/global/plugins/bootstrap-daterange/moment.local.fr.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/layout/scripts/layout.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/layout/scripts/demo.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/layout/scripts/quick-sidebar.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/layout/scripts/quick-nav.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/select2/js/select2.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/select2/js/i18n/fr.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/pages/js/main.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-summernote/summernote.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-summernote/lang/summernote-fr-FR.js') }}\"></script>
<script src=\"{{ asset('assets/global/plugins/bootstrap-fileinput/js/plugins/piexif.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-fileinput/js/plugins/sortable.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-fileinput/js/plugins/purify.min.js') }}\"> </script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-fileinput/js/fileinput.js') }}\"> </script>
<script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-fileinput/js/locales/fr.js') }}\"> </script>
<script src=\"{{ asset('assets/global/plugins/tinymce/js/tinymce/tinymce.min.js') }}\"></script>
<script src=\"{{ asset('assets/global/plugins/tinymce/js/tinymce/langs/fr_FR.js') }}\"></script>
<script src=\"{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}\"></script>

{% include '::menu/toaster.html.twig' %}
{% include '::menu/socket.html.twig' %}

{% block javascripts %}
{% endblock javascripts %}
<script>
    \$(window).load(function () {
        \$('#page-loader').addClass('hidden');

        var typingTimer;                //timer identifier
        var doneTypingInterval = 500;  //time in ms, 5 second for example
        var elem = \$('#searchModalInput');
        //on keyup, start the countdown
        elem.on('keyup', function () {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        });
        //user is \"finished typing,\" do something
        function doneTyping () {
            console.log(\"aaaa\");
            var search=elem.val();
            \$.ajax({
                url:Routing.generate('navbar_search'),
                data:{search:search},
                dataType:'JSON',
                success:function (data) {
                    var authorContainer=\$('#author-search-result');
                    authorContainer.html(\"\");
                    var bookContainer=\$('#books-search-result');
                    bookContainer.html(\"\");
                    \$.each(data.authors,function (i,user) {
                        var picture =authorContainer.data('noimg');
                        if(user.picture)
                            picture=user.picture.path;
                        authorContainer.append(' <div class=\"foundAuthor  animated fadeIn col-md-2\">'+
                            '<div><img class=\"img-circle\" src=\"'+picture+'\" alt=\"'+user.fullName+'\"></div>'+
                            '<span>'+user.fullName+'</span></div>')
                    });
                    \$.each(data.books,function (i,b) {
                        var picture =bookContainer.data('noimg');
                        if(b.images.length){
                            picture=b.images[0].path;
                        }
                        var authors=\"\";
                        for(var i=0; i<b.main_authors.length;i++)
                            i===0? authors+=\",\"+b.main_authors[i].fullName :authors+=b.main_authors[i].fullName;

                        bookContainer.append('<div class=\"foundBook animated fadeIn col-md-3\">'+
                            '<div class=\"image\">'+
                            '<img class=\"img-responsive\"  src=\"'+picture+'\" alt=\"'+b.title+'\"></div>'+
                            '<div class=\"details\"> <h5><a href=\"#\">'+b.title+'</a></h5> <h6>Auteurs : '+authors+'</h6>'+
                            '</div> </div>')
                    });
                }
            })
        }
    })
</script>
</body>
</html>
", "MainBundle::layout.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle/Resources/views/layout.html.twig");
    }
}
