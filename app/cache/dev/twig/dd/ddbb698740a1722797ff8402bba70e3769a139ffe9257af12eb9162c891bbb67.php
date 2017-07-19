<?php

/* @Main/Validator/verify.version.html.twig */
class __TwigTemplate_fbdbeb2fdd932e41717b3e9026d90b77baf62b0d71f7ec9eb6488b29ef5f5c87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Validator/verify.version.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_05ae63e4ca5af7ef25964d15b230df54ac995b2a7114e9699d16393bb417b100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ae63e4ca5af7ef25964d15b230df54ac995b2a7114e9699d16393bb417b100->enter($__internal_05ae63e4ca5af7ef25964d15b230df54ac995b2a7114e9699d16393bb417b100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Validator/verify.version.html.twig"));

        $__internal_fb6c4d64d72b063f17c458d0c0f85a0f1e057f7cc871c5162154d7cd11566e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6c4d64d72b063f17c458d0c0f85a0f1e057f7cc871c5162154d7cd11566e1b->enter($__internal_fb6c4d64d72b063f17c458d0c0f85a0f1e057f7cc871c5162154d7cd11566e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Validator/verify.version.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05ae63e4ca5af7ef25964d15b230df54ac995b2a7114e9699d16393bb417b100->leave($__internal_05ae63e4ca5af7ef25964d15b230df54ac995b2a7114e9699d16393bb417b100_prof);

        
        $__internal_fb6c4d64d72b063f17c458d0c0f85a0f1e057f7cc871c5162154d7cd11566e1b->leave($__internal_fb6c4d64d72b063f17c458d0c0f85a0f1e057f7cc871c5162154d7cd11566e1b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b40dfec32bebee72908693faeb92766f7640b84abca465fe8e28f9b1c76c075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b40dfec32bebee72908693faeb92766f7640b84abca465fe8e28f9b1c76c075->enter($__internal_7b40dfec32bebee72908693faeb92766f7640b84abca465fe8e28f9b1c76c075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e67513d79cb79fa83bdad07d678df8f60304c6cb62226129c22107908d4c107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e67513d79cb79fa83bdad07d678df8f60304c6cb62226129c22107908d4c107->enter($__internal_8e67513d79cb79fa83bdad07d678df8f60304c6cb62226129c22107908d4c107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "title", array()), "html", null, true);
        echo " - v ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["validationRequest"]) ? $context["validationRequest"] : $this->getContext($context, "validationRequest")), "version", array()), "number", array()), "html", null, true);
        echo " - verification
";
        
        $__internal_8e67513d79cb79fa83bdad07d678df8f60304c6cb62226129c22107908d4c107->leave($__internal_8e67513d79cb79fa83bdad07d678df8f60304c6cb62226129c22107908d4c107_prof);

        
        $__internal_7b40dfec32bebee72908693faeb92766f7640b84abca465fe8e28f9b1c76c075->leave($__internal_7b40dfec32bebee72908693faeb92766f7640b84abca465fe8e28f9b1c76c075_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3436512fc2ff30c81600bb1f85e94e6713036c62f2952317568dad16a8a14c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3436512fc2ff30c81600bb1f85e94e6713036c62f2952317568dad16a8a14c37->enter($__internal_3436512fc2ff30c81600bb1f85e94e6713036c62f2952317568dad16a8a14c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3483159bf0b5fb4afd868c004943ce3402d4ae4b60c16bed9e8eb896a757064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3483159bf0b5fb4afd868c004943ce3402d4ae4b60c16bed9e8eb896a757064->enter($__internal_e3483159bf0b5fb4afd868c004943ce3402d4ae4b60c16bed9e8eb896a757064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("validator_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <i class=\"fa fa-check-square-o\"></i>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("validator_validation_requests");
        echo "\">Demandes de validation</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "title", array()), "html", null, true);
        echo " - v ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["validationRequest"]) ? $context["validationRequest"] : $this->getContext($context, "validationRequest")), "version", array()), "number", array()), "html", null, true);
        echo " - verification </span>
            </li>
        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><i class=\"fa fa-check-square-o\"></i> &nbsp; ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "title", array()), "html", null, true);
        echo " - version ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["validationRequest"]) ? $context["validationRequest"] : $this->getContext($context, "validationRequest")), "version", array()), "number", array()), 1, ".", ","), "html", null, true);
        echo " -
            verification </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green\">
                <div class=\"portlet-title\">
                    <div class=\"pull-left\" style=\"padding-top: 5px\">
                        <button href=\"#animatedModal\" type=\"button\"  class=\"btn btn-sm blue btn-cmp-version\" ><i class=\"fa fa-exchange\"></i> Modification</button>
                    </div>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body col-md-12\">

                    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"col-md-12\">
                        <div class=\"slidershell\">
                            <div class=\"sliderfill progress-bar progress-bar-striped active\"></div>
                            <div class=\"slidertrack text-center\"><strong id=\"ps-txt\"> Progression </strong></div>
                            <div class=\"sliderthumb\"></div>
                            <div class=\"slidervalue\">0</div>
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "progress", array()), 'widget', array("attr" => array("class" => "progress-slider", "data-min" => $this->getAttribute((isset($context["validationRequest"]) ? $context["validationRequest"] : $this->getContext($context, "validationRequest")), "progress", array()))));
        echo "
                        </div>
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "version", array()), "content", array()), 'widget', array("attr" => array("class" => "tinyMince")));
        echo "
                    </div>

                    <div class=\"col-md-12 text-center\" style=\"margin-top: 10px\">
                            <button class=\"btn blue \" id=\"saveModification\">
                                <i class=\"fa fa-download\"></i>Enregistrer Modification
                            </button>
                    </div>
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
                </div>
            </div>
        </div>
    </div>

    <!--DEMO01-->
    <div id=\"animatedModal\" style=\"z-index: 99999\">
        <div id=\"closebt-container\" class=\"close-animatedModal\">
            <img class=\"closebt\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/closebt.svg"), "html", null, true);
        echo "\">
        </div>
        <div  id=\"animatedModal-content\" class=\"modal-content\">
            <h2 class=\"text-center bold font-green\"> Comparaison de version </h2>
            <div class=\"col-md-12\">
                <h4 class=\"col-md-6 text-center\" style=\"color: grey\">
                    <span class=\"col-md-5\">Numéro version : <strong>";
        // line 75
        if ( !(null === $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()))) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()), "number", array()), 1, ".", ","), "html", null, true);
        }
        echo "</strong></span>
                    <span class=\"col-md-7\">&nbsp;&nbsp;- &nbsp; Crée par : <strong>";
        // line 76
        if ( !(null === $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()), "createdBy", array()), "fullName", array()), "html", null, true);
            echo " ";
        }
        echo "</strong></span>
                </h4>
                <h4 class=\"col-md-6 text-center\" style=\"color: grey\">
                    <span class=\"col-md-5\">Numéro version : <strong>";
        // line 79
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["validationRequest"]) ? $context["validationRequest"] : $this->getContext($context, "validationRequest")), "version", array()), "number", array()), 1, ".", ","), "html", null, true);
        echo "</strong></span>
                    <span class=\"col-md-7\">&nbsp;&nbsp;- &nbsp; Crée par : <strong>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["validationRequest"]) ? $context["validationRequest"] : $this->getContext($context, "validationRequest")), "version", array()), "createdBy", array()), "fullName", array()), "html", null, true);
        echo "</strong></span>
                </h4>
            </div>
            <div class=\"col-md-12\" id=\"compare\">

            </div>
        </div>
    </div>


    <div id=\"currentVersion\" class=\"hidden\">";
        // line 90
        if ( !(null === $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()))) {
            ob_start();
            echo twig_escape_filter($this->env, twig_convert_encoding($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()), "content", array()), "UTF-8", "HTML-ENTITIES"), "html", null, true);
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        echo "</div>
    <div id=\"newVersion\" class=\"hidden\">";
        // line 91
        ob_start();
        echo twig_escape_filter($this->env, twig_convert_encoding($this->getAttribute($this->getAttribute((isset($context["validationRequest"]) ? $context["validationRequest"] : $this->getContext($context, "validationRequest")), "version", array()), "content", array()), "UTF-8", "HTML-ENTITIES"), "html", null, true);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "</div>
    <div id=\"fm-token\" data-token=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["validationRequest"]) ? $context["validationRequest"] : $this->getContext($context, "validationRequest")), "version", array()), "token", array()), "html", null, true);
        echo "\"></div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-books\">

";
        
        $__internal_e3483159bf0b5fb4afd868c004943ce3402d4ae4b60c16bed9e8eb896a757064->leave($__internal_e3483159bf0b5fb4afd868c004943ce3402d4ae4b60c16bed9e8eb896a757064_prof);

        
        $__internal_3436512fc2ff30c81600bb1f85e94e6713036c62f2952317568dad16a8a14c37->leave($__internal_3436512fc2ff30c81600bb1f85e94e6713036c62f2952317568dad16a8a14c37_prof);

    }

    // line 96
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f1e1e9031386f5c543a7b15361644af3855b92d793d2679057ba079f8dbc7343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e1e9031386f5c543a7b15361644af3855b92d793d2679057ba079f8dbc7343->enter($__internal_f1e1e9031386f5c543a7b15361644af3855b92d793d2679057ba079f8dbc7343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_03e0b6770fd7358a3419f067c6ff61f4997ba84a3ca309623cc158b9e1ec73bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e0b6770fd7358a3419f067c6ff61f4997ba84a3ca309623cc158b9e1ec73bb->enter($__internal_03e0b6770fd7358a3419f067c6ff61f4997ba84a3ca309623cc158b9e1ec73bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 97
        echo "    <style>
        .toastr-list{
            list-style: decimal;
            padding-left: 15px;
        }
        #animatedModal-content{
            min-height:100px;
            margin-top: 50px;
            margin-bottom: 50px
        }
        #closebt-container {
            position: relative;
            width: 100%;
            text-align: center;
            margin-top: 40px;
        }
        .closebt{
            webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -ms-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
            cursor: pointer;
        }
        .closebt:hover{
            transform: rotate(90deg);
        }
        .mergely-canvas ,.mergely-margin{
            display: none;!important;
        }
        .CodeMirror-scroll{
            height: 400px!important;
        }
        .CodeMirror{
            height: auto!important;
        }
        .mergely.a.rhs {
            background-color: #cfc!important;
            color: #399839!important;
            border-color:  #399839!important;
            border-radius: 4px 0 0 4px!important;;
        }
        .mergely.c.lhs.start, .mergely.c.rhs.start,
        .mergely.c.lhs.end, .mergely.c.rhs.end{
            border: none!important;
        }
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/author.block.version.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/book.structure.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/mergely-3.4.4/lib/mergely.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/mergely-3.4.4/lib/codemirror.css"), "html", null, true);
        echo "\">
";
        
        $__internal_03e0b6770fd7358a3419f067c6ff61f4997ba84a3ca309623cc158b9e1ec73bb->leave($__internal_03e0b6770fd7358a3419f067c6ff61f4997ba84a3ca309623cc158b9e1ec73bb_prof);

        
        $__internal_f1e1e9031386f5c543a7b15361644af3855b92d793d2679057ba079f8dbc7343->leave($__internal_f1e1e9031386f5c543a7b15361644af3855b92d793d2679057ba079f8dbc7343_prof);

    }

    // line 149
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c858ab67a00a83a49baf2310080fcdb814959de6f18ad297ca8b21f8a4f17c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c858ab67a00a83a49baf2310080fcdb814959de6f18ad297ca8b21f8a4f17c8->enter($__internal_5c858ab67a00a83a49baf2310080fcdb814959de6f18ad297ca8b21f8a4f17c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c1817aa604198c99310875e11a7a9e7bf5515e9a345cb05f578a92a262b78948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1817aa604198c99310875e11a7a9e7bf5515e9a345cb05f578a92a262b78948->enter($__internal_c1817aa604198c99310875e11a7a9e7bf5515e9a345cb05f578a92a262b78948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 150
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery.mjs.nestedSortable.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tinymce/js/tinymce/langs/fr_FR.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/annimatedModal/animatedModal.js-master/animatedModal.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/mergely-3.4.4/lib/codemirror.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/mergely-3.4.4/lib/mergely.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            tinymce.init({
                selector: '.tinyMince',  // change this value according to your HTML
                theme: 'modern',
                height: 400,
                table_default_attributes: {
                    cellspacing: '0',
                    width:200
                },
                setup:function (editor) {
                    editor.addButton('markF', {
                        tooltip: 'Marqueur de figures ( cliquer pour numéroté la figure) ',
                        image: '/assets/img/mark1.png',
                        onclick: function () {
                            editor.insertContent(\"Figure <small class='figureCaption' style='pointer-events: none'>&&figureNumber&&</small>&nbsp;:&nbsp;\");
                        }
                    });
                    editor.addButton('markT', {
                        tooltip: 'Marqueur de tableaux ( cliquer pour numéroté le tableau)',
                        image: '/assets/img/mark2.png',
                        onclick: function () {
                            editor.insertContent(\"Tableau <small class='tableCaption' style='pointer-events: none'>&&tableNumber&&</small>&nbsp;:&nbsp;\");
                        }
                    });
                },
                image_caption: true,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
                ],
                image_advtab: true,
                file_browser_callback_types: 'file image media',
                file_browser_callback: function (field_name, url, type, win) {
                    var token = \$('#fm-token').data('token');
                    tinymce.activeEditor.windowManager.open({
                        title: \"Selectionneur du fichier\",
                        url: Routing.generate('file_manager_load', {token: token, type: type}),
                        width: 320,
                        height: 240
                    }, {
                        window: win,
                        input: field_name,
                    });
                    return false;
                },
                toolbar1: \"insertfile undo redo | styleselect | forecolor backcolor | | bold italic | alignleft aligncenter alignright alignjustify | \" +
                \"bullist numlist outdent indent | link image | print preview fullscreen | markT markF\"
            });
            \$('.btn-cmp-version').animatedModal({afterOpen:function() {
                \$('#compare').mergely({
                    editor_width: 'calc(50% - 25px)',
                    editor_height: '100%',
                    sidebar:false,
                    ignorews:true,
                    cmsettings: {
                        readOnly: true,
                        lineNumbers: true ,
                        lineWrapping: true
                    },
                    lhs: function(setValue) {
                        setValue(\$('#currentVersion').text());
                    },
                    rhs: function(setValue) {
                        setValue(\$('#newVersion').text());
                    },
                    loaded:function () {
                        \$('#animatedModal-content').css('height',\$('.CodeMirror-scroll').height()+150)
                    }

                });
            }});
        })
    </script>
";
        
        $__internal_c1817aa604198c99310875e11a7a9e7bf5515e9a345cb05f578a92a262b78948->leave($__internal_c1817aa604198c99310875e11a7a9e7bf5515e9a345cb05f578a92a262b78948_prof);

        
        $__internal_5c858ab67a00a83a49baf2310080fcdb814959de6f18ad297ca8b21f8a4f17c8->leave($__internal_5c858ab67a00a83a49baf2310080fcdb814959de6f18ad297ca8b21f8a4f17c8_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Validator/verify.version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 157,  352 => 156,  348 => 155,  344 => 154,  339 => 152,  333 => 150,  324 => 149,  312 => 147,  308 => 146,  304 => 145,  300 => 144,  251 => 97,  242 => 96,  228 => 92,  222 => 91,  214 => 90,  201 => 80,  197 => 79,  187 => 76,  181 => 75,  172 => 69,  160 => 60,  156 => 59,  145 => 51,  140 => 49,  130 => 42,  108 => 25,  98 => 20,  91 => 16,  83 => 11,  76 => 6,  67 => 5,  52 => 3,  43 => 2,  11 => 1,);
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
    {{ block.title }} - v {{ validationRequest.version.number }} - verification
{% endblock %}
{% block body %}
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"{{ url('validator_homepage') }}\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <i class=\"fa fa-check-square-o\"></i>
                <a href=\"{{ url('validator_validation_requests') }}\">Demandes de validation</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">{{ block.title }} - v {{ validationRequest.version.number }} - verification </span>
            </li>
        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><i class=\"fa fa-check-square-o\"></i> &nbsp; {{ block.title }} - version {{ validationRequest.version.number|number_format(1,'.',',') }} -
            verification </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green\">
                <div class=\"portlet-title\">
                    <div class=\"pull-left\" style=\"padding-top: 5px\">
                        <button href=\"#animatedModal\" type=\"button\"  class=\"btn btn-sm blue btn-cmp-version\" ><i class=\"fa fa-exchange\"></i> Modification</button>
                    </div>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body col-md-12\">

                    {{ form_start(form) }}
                    <div class=\"col-md-12\">
                        <div class=\"slidershell\">
                            <div class=\"sliderfill progress-bar progress-bar-striped active\"></div>
                            <div class=\"slidertrack text-center\"><strong id=\"ps-txt\"> Progression </strong></div>
                            <div class=\"sliderthumb\"></div>
                            <div class=\"slidervalue\">0</div>
                            {{ form_widget(form.progress,{\"attr\":{\"class\":\"progress-slider\",\"data-min\":validationRequest.progress}}) }}
                        </div>
                        {{ form_widget(form.version.content,{\"attr\":{\"class\":\"tinyMince\"}}) }}
                    </div>

                    <div class=\"col-md-12 text-center\" style=\"margin-top: 10px\">
                            <button class=\"btn blue \" id=\"saveModification\">
                                <i class=\"fa fa-download\"></i>Enregistrer Modification
                            </button>
                    </div>
                    {{ form_widget(form._token) }}
                    {{ form_end(form, {'render_rest': false}) }}
                </div>
            </div>
        </div>
    </div>

    <!--DEMO01-->
    <div id=\"animatedModal\" style=\"z-index: 99999\">
        <div id=\"closebt-container\" class=\"close-animatedModal\">
            <img class=\"closebt\" src=\"{{ asset('assets/img/closebt.svg') }}\">
        </div>
        <div  id=\"animatedModal-content\" class=\"modal-content\">
            <h2 class=\"text-center bold font-green\"> Comparaison de version </h2>
            <div class=\"col-md-12\">
                <h4 class=\"col-md-6 text-center\" style=\"color: grey\">
                    <span class=\"col-md-5\">Numéro version : <strong>{% if block.publishedVersion is not null  %}{{ block.publishedVersion.number|number_format(1,'.',',')  }}{% endif %}</strong></span>
                    <span class=\"col-md-7\">&nbsp;&nbsp;- &nbsp; Crée par : <strong>{% if block.publishedVersion is not null  %} {{ block.publishedVersion.createdBy.fullName }} {% endif %}</strong></span>
                </h4>
                <h4 class=\"col-md-6 text-center\" style=\"color: grey\">
                    <span class=\"col-md-5\">Numéro version : <strong>{{  validationRequest.version.number|number_format(1,'.',',')  }}</strong></span>
                    <span class=\"col-md-7\">&nbsp;&nbsp;- &nbsp; Crée par : <strong>{{  validationRequest.version.createdBy.fullName }}</strong></span>
                </h4>
            </div>
            <div class=\"col-md-12\" id=\"compare\">

            </div>
        </div>
    </div>


    <div id=\"currentVersion\" class=\"hidden\">{% if block.publishedVersion is not null  %}{% spaceless %}{{ block.publishedVersion.content|convert_encoding('UTF-8', 'HTML-ENTITIES')}}{% endspaceless %}{% endif %}</div>
    <div id=\"newVersion\" class=\"hidden\">{% spaceless %}{{ validationRequest.version.content|convert_encoding('UTF-8', 'HTML-ENTITIES')}}{% endspaceless %}</div>
    <div id=\"fm-token\" data-token=\"{{ validationRequest.version.token }}\"></div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-books\">

{% endblock %}
{% block stylesheets %}
    <style>
        .toastr-list{
            list-style: decimal;
            padding-left: 15px;
        }
        #animatedModal-content{
            min-height:100px;
            margin-top: 50px;
            margin-bottom: 50px
        }
        #closebt-container {
            position: relative;
            width: 100%;
            text-align: center;
            margin-top: 40px;
        }
        .closebt{
            webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -ms-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
            cursor: pointer;
        }
        .closebt:hover{
            transform: rotate(90deg);
        }
        .mergely-canvas ,.mergely-margin{
            display: none;!important;
        }
        .CodeMirror-scroll{
            height: 400px!important;
        }
        .CodeMirror{
            height: auto!important;
        }
        .mergely.a.rhs {
            background-color: #cfc!important;
            color: #399839!important;
            border-color:  #399839!important;
            border-radius: 4px 0 0 4px!important;;
        }
        .mergely.c.lhs.start, .mergely.c.rhs.start,
        .mergely.c.lhs.end, .mergely.c.rhs.end{
            border: none!important;
        }
    </style>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/pages/css/author.block.version.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/pages/css/book.structure.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/mergely-3.4.4/lib/mergely.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/mergely-3.4.4/lib/codemirror.css') }}\">
{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery.mjs.nestedSortable.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/tinymce/js/tinymce/tinymce.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/tinymce/js/tinymce/langs/fr_FR.js') }}\"></script>
    <script src=\"{{ asset('assets/global/plugins/annimatedModal/animatedModal.js-master/animatedModal.min.js') }}\"></script>
    <script src=\"{{ asset('assets/global/plugins/mergely-3.4.4/lib/codemirror.js') }}\"></script>
    <script src=\"{{ asset('assets/global/plugins/mergely-3.4.4/lib/mergely.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            tinymce.init({
                selector: '.tinyMince',  // change this value according to your HTML
                theme: 'modern',
                height: 400,
                table_default_attributes: {
                    cellspacing: '0',
                    width:200
                },
                setup:function (editor) {
                    editor.addButton('markF', {
                        tooltip: 'Marqueur de figures ( cliquer pour numéroté la figure) ',
                        image: '/assets/img/mark1.png',
                        onclick: function () {
                            editor.insertContent(\"Figure <small class='figureCaption' style='pointer-events: none'>&&figureNumber&&</small>&nbsp;:&nbsp;\");
                        }
                    });
                    editor.addButton('markT', {
                        tooltip: 'Marqueur de tableaux ( cliquer pour numéroté le tableau)',
                        image: '/assets/img/mark2.png',
                        onclick: function () {
                            editor.insertContent(\"Tableau <small class='tableCaption' style='pointer-events: none'>&&tableNumber&&</small>&nbsp;:&nbsp;\");
                        }
                    });
                },
                image_caption: true,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
                ],
                image_advtab: true,
                file_browser_callback_types: 'file image media',
                file_browser_callback: function (field_name, url, type, win) {
                    var token = \$('#fm-token').data('token');
                    tinymce.activeEditor.windowManager.open({
                        title: \"Selectionneur du fichier\",
                        url: Routing.generate('file_manager_load', {token: token, type: type}),
                        width: 320,
                        height: 240
                    }, {
                        window: win,
                        input: field_name,
                    });
                    return false;
                },
                toolbar1: \"insertfile undo redo | styleselect | forecolor backcolor | | bold italic | alignleft aligncenter alignright alignjustify | \" +
                \"bullist numlist outdent indent | link image | print preview fullscreen | markT markF\"
            });
            \$('.btn-cmp-version').animatedModal({afterOpen:function() {
                \$('#compare').mergely({
                    editor_width: 'calc(50% - 25px)',
                    editor_height: '100%',
                    sidebar:false,
                    ignorews:true,
                    cmsettings: {
                        readOnly: true,
                        lineNumbers: true ,
                        lineWrapping: true
                    },
                    lhs: function(setValue) {
                        setValue(\$('#currentVersion').text());
                    },
                    rhs: function(setValue) {
                        setValue(\$('#newVersion').text());
                    },
                    loaded:function () {
                        \$('#animatedModal-content').css('height',\$('.CodeMirror-scroll').height()+150)
                    }

                });
            }});
        })
    </script>
{% endblock %}", "@Main/Validator/verify.version.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Validator\\verify.version.html.twig");
    }
}
