<?php

/* @Main/layout.html.twig */
class __TwigTemplate_9a3516dc465c69aa32d2b52c891902e9ddd4f35d9d232f1c38b6cbe12ecd95c5 extends Twig_Template
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
        $__internal_06dc3e0076451b50ded1ac36515da132da5ceacc8c39f5c01d23cb7b8ed387e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06dc3e0076451b50ded1ac36515da132da5ceacc8c39f5c01d23cb7b8ed387e5->enter($__internal_06dc3e0076451b50ded1ac36515da132da5ceacc8c39f5c01d23cb7b8ed387e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/layout.html.twig"));

        $__internal_4796facbb016b2718842d10ce8885b26e449ea8fdceb0018e23271d957a8dae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4796facbb016b2718842d10ce8885b26e449ea8fdceb0018e23271d957a8dae1->enter($__internal_4796facbb016b2718842d10ce8885b26e449ea8fdceb0018e23271d957a8dae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/layout.html.twig"));

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
        $this->loadTemplate("@Main/shared/navbar.html.twig", "@Main/layout.html.twig", 43)->display($context);
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
        $this->loadTemplate("::menu/toaster.html.twig", "@Main/layout.html.twig", 133)->display($context);
        // line 134
        $this->loadTemplate("::menu/socket.html.twig", "@Main/layout.html.twig", 134)->display($context);
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
        
        $__internal_06dc3e0076451b50ded1ac36515da132da5ceacc8c39f5c01d23cb7b8ed387e5->leave($__internal_06dc3e0076451b50ded1ac36515da132da5ceacc8c39f5c01d23cb7b8ed387e5_prof);

        
        $__internal_4796facbb016b2718842d10ce8885b26e449ea8fdceb0018e23271d957a8dae1->leave($__internal_4796facbb016b2718842d10ce8885b26e449ea8fdceb0018e23271d957a8dae1_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b86c3f8be9646ce70e8354946f4acd3c4b58a55fe9481ddea8961d15447d021a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86c3f8be9646ce70e8354946f4acd3c4b58a55fe9481ddea8961d15447d021a->enter($__internal_b86c3f8be9646ce70e8354946f4acd3c4b58a55fe9481ddea8961d15447d021a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5821464cc5153b453edfcafae059c764bf992fbbc97a21eebc5a7895277ef323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5821464cc5153b453edfcafae059c764bf992fbbc97a21eebc5a7895277ef323->enter($__internal_5821464cc5153b453edfcafae059c764bf992fbbc97a21eebc5a7895277ef323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5821464cc5153b453edfcafae059c764bf992fbbc97a21eebc5a7895277ef323->leave($__internal_5821464cc5153b453edfcafae059c764bf992fbbc97a21eebc5a7895277ef323_prof);

        
        $__internal_b86c3f8be9646ce70e8354946f4acd3c4b58a55fe9481ddea8961d15447d021a->leave($__internal_b86c3f8be9646ce70e8354946f4acd3c4b58a55fe9481ddea8961d15447d021a_prof);

    }

    // line 36
    public function block_title($context, array $blocks = array())
    {
        $__internal_409105f3c4db8be46dd3f15e58eea995e8f1123654172eb83a7232d86d34e845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_409105f3c4db8be46dd3f15e58eea995e8f1123654172eb83a7232d86d34e845->enter($__internal_409105f3c4db8be46dd3f15e58eea995e8f1123654172eb83a7232d86d34e845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e0f899a2a29954d46e03c7ea99ed42da799ff1ba250378c505cd0c929a309c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0f899a2a29954d46e03c7ea99ed42da799ff1ba250378c505cd0c929a309c8->enter($__internal_5e0f899a2a29954d46e03c7ea99ed42da799ff1ba250378c505cd0c929a309c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_5e0f899a2a29954d46e03c7ea99ed42da799ff1ba250378c505cd0c929a309c8->leave($__internal_5e0f899a2a29954d46e03c7ea99ed42da799ff1ba250378c505cd0c929a309c8_prof);

        
        $__internal_409105f3c4db8be46dd3f15e58eea995e8f1123654172eb83a7232d86d34e845->leave($__internal_409105f3c4db8be46dd3f15e58eea995e8f1123654172eb83a7232d86d34e845_prof);

    }

    // line 38
    public function block_classBody($context, array $blocks = array())
    {
        $__internal_9e1aeb5b36af13f87679fdab423881571ecb1975fdf7e81d53da35667c29dea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1aeb5b36af13f87679fdab423881571ecb1975fdf7e81d53da35667c29dea3->enter($__internal_9e1aeb5b36af13f87679fdab423881571ecb1975fdf7e81d53da35667c29dea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        $__internal_a5b14d9cc283a76ff7d0d031fd94adf1f9f33498d7c5686cbf5abdf48bb9c11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b14d9cc283a76ff7d0d031fd94adf1f9f33498d7c5686cbf5abdf48bb9c11c->enter($__internal_a5b14d9cc283a76ff7d0d031fd94adf1f9f33498d7c5686cbf5abdf48bb9c11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classBody"));

        
        $__internal_a5b14d9cc283a76ff7d0d031fd94adf1f9f33498d7c5686cbf5abdf48bb9c11c->leave($__internal_a5b14d9cc283a76ff7d0d031fd94adf1f9f33498d7c5686cbf5abdf48bb9c11c_prof);

        
        $__internal_9e1aeb5b36af13f87679fdab423881571ecb1975fdf7e81d53da35667c29dea3->leave($__internal_9e1aeb5b36af13f87679fdab423881571ecb1975fdf7e81d53da35667c29dea3_prof);

    }

    // line 51
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6bd432a3731f2d516365a0e1053b6762696e1ab2d8d31c80c20d60886de3142c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd432a3731f2d516365a0e1053b6762696e1ab2d8d31c80c20d60886de3142c->enter($__internal_6bd432a3731f2d516365a0e1053b6762696e1ab2d8d31c80c20d60886de3142c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1c6fa8767ae8eb98e01cc9e8ebd85ffdcf5182ec2f3c2dba19cb084934f17752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6fa8767ae8eb98e01cc9e8ebd85ffdcf5182ec2f3c2dba19cb084934f17752->enter($__internal_1c6fa8767ae8eb98e01cc9e8ebd85ffdcf5182ec2f3c2dba19cb084934f17752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 52
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMINISTRATOR")) {
            // line 53
            echo "                ";
            $this->loadTemplate("::menu/menu.administrator.html.twig", "@Main/layout.html.twig", 53)->display($context);
            // line 54
            echo "            ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTHOR")) {
            // line 55
            echo "                ";
            $this->loadTemplate("::menu/menu.author.html.twig", "@Main/layout.html.twig", 55)->display($context);
            // line 56
            echo "            ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VALIDATOR")) {
            // line 57
            echo "                ";
            $this->loadTemplate("::menu/menu.validator.html.twig", "@Main/layout.html.twig", 57)->display($context);
            // line 58
            echo "            ";
        }
        // line 59
        echo "        ";
        
        $__internal_1c6fa8767ae8eb98e01cc9e8ebd85ffdcf5182ec2f3c2dba19cb084934f17752->leave($__internal_1c6fa8767ae8eb98e01cc9e8ebd85ffdcf5182ec2f3c2dba19cb084934f17752_prof);

        
        $__internal_6bd432a3731f2d516365a0e1053b6762696e1ab2d8d31c80c20d60886de3142c->leave($__internal_6bd432a3731f2d516365a0e1053b6762696e1ab2d8d31c80c20d60886de3142c_prof);

    }

    // line 61
    public function block_contentStyle($context, array $blocks = array())
    {
        $__internal_6e4b28bee251ad763813479cc7e4446b5a75ca1f9687c6da83e56aabb85f573e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4b28bee251ad763813479cc7e4446b5a75ca1f9687c6da83e56aabb85f573e->enter($__internal_6e4b28bee251ad763813479cc7e4446b5a75ca1f9687c6da83e56aabb85f573e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentStyle"));

        $__internal_1d6d6dd89c900b2312586334485c2e5f753cc7d108eb2017ab4b33e166321c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6d6dd89c900b2312586334485c2e5f753cc7d108eb2017ab4b33e166321c3e->enter($__internal_1d6d6dd89c900b2312586334485c2e5f753cc7d108eb2017ab4b33e166321c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentStyle"));

        echo " ";
        
        $__internal_1d6d6dd89c900b2312586334485c2e5f753cc7d108eb2017ab4b33e166321c3e->leave($__internal_1d6d6dd89c900b2312586334485c2e5f753cc7d108eb2017ab4b33e166321c3e_prof);

        
        $__internal_6e4b28bee251ad763813479cc7e4446b5a75ca1f9687c6da83e56aabb85f573e->leave($__internal_6e4b28bee251ad763813479cc7e4446b5a75ca1f9687c6da83e56aabb85f573e_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e9422522e6a49edb014c9386f1a562da9f6868989154c55a55e54e6a530cbd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e9422522e6a49edb014c9386f1a562da9f6868989154c55a55e54e6a530cbd9->enter($__internal_5e9422522e6a49edb014c9386f1a562da9f6868989154c55a55e54e6a530cbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f2c63261121d620b4d7d97e4c24dede409240147a03fb3e52035411fe0cca14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2c63261121d620b4d7d97e4c24dede409240147a03fb3e52035411fe0cca14->enter($__internal_2f2c63261121d620b4d7d97e4c24dede409240147a03fb3e52035411fe0cca14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2f2c63261121d620b4d7d97e4c24dede409240147a03fb3e52035411fe0cca14->leave($__internal_2f2c63261121d620b4d7d97e4c24dede409240147a03fb3e52035411fe0cca14_prof);

        
        $__internal_5e9422522e6a49edb014c9386f1a562da9f6868989154c55a55e54e6a530cbd9->leave($__internal_5e9422522e6a49edb014c9386f1a562da9f6868989154c55a55e54e6a530cbd9_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b40970e5beeea6ec1be60de79f887b71b85b197fa457147112c90d81994eb73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b40970e5beeea6ec1be60de79f887b71b85b197fa457147112c90d81994eb73->enter($__internal_6b40970e5beeea6ec1be60de79f887b71b85b197fa457147112c90d81994eb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_73af9cc2583da023ec73f6c018b8c3f0f05758e2112dc3b424b8f323b94cca15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73af9cc2583da023ec73f6c018b8c3f0f05758e2112dc3b424b8f323b94cca15->enter($__internal_73af9cc2583da023ec73f6c018b8c3f0f05758e2112dc3b424b8f323b94cca15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_73af9cc2583da023ec73f6c018b8c3f0f05758e2112dc3b424b8f323b94cca15->leave($__internal_73af9cc2583da023ec73f6c018b8c3f0f05758e2112dc3b424b8f323b94cca15_prof);

        
        $__internal_6b40970e5beeea6ec1be60de79f887b71b85b197fa457147112c90d81994eb73->leave($__internal_6b40970e5beeea6ec1be60de79f887b71b85b197fa457147112c90d81994eb73_prof);

    }

    public function getTemplateName()
    {
        return "@Main/layout.html.twig";
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
", "@Main/layout.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\layout.html.twig");
    }
}
