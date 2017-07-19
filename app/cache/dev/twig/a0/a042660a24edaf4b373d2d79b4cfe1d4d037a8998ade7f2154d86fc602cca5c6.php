<?php

/* @Main/Author/edit.block.html.twig */
class __TwigTemplate_d9e2e0b44275a8b3da98a672022ab5b30bd6d6bbd37e62b87322e1f228f70bd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Author/edit.block.html.twig", 1);
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
        $__internal_15c06fce32d21753001493bd3574663289206890f88fcb9f0529427378ff909c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c06fce32d21753001493bd3574663289206890f88fcb9f0529427378ff909c->enter($__internal_15c06fce32d21753001493bd3574663289206890f88fcb9f0529427378ff909c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Author/edit.block.html.twig"));

        $__internal_93ffef7f141a911f98dd9bd0f631d7c63391e19702c3f8e5b24ba30f6519144e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ffef7f141a911f98dd9bd0f631d7c63391e19702c3f8e5b24ba30f6519144e->enter($__internal_93ffef7f141a911f98dd9bd0f631d7c63391e19702c3f8e5b24ba30f6519144e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Author/edit.block.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15c06fce32d21753001493bd3574663289206890f88fcb9f0529427378ff909c->leave($__internal_15c06fce32d21753001493bd3574663289206890f88fcb9f0529427378ff909c_prof);

        
        $__internal_93ffef7f141a911f98dd9bd0f631d7c63391e19702c3f8e5b24ba30f6519144e->leave($__internal_93ffef7f141a911f98dd9bd0f631d7c63391e19702c3f8e5b24ba30f6519144e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e54458a2cda0fb292ec74c98af2220e455254f4831100e10895ea2d8fa2dff22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54458a2cda0fb292ec74c98af2220e455254f4831100e10895ea2d8fa2dff22->enter($__internal_e54458a2cda0fb292ec74c98af2220e455254f4831100e10895ea2d8fa2dff22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8dc205f5fb33797203459fd7a17dbdebb9d202da04ac3b8c294fb6388fb39674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc205f5fb33797203459fd7a17dbdebb9d202da04ac3b8c294fb6388fb39674->enter($__internal_8dc205f5fb33797203459fd7a17dbdebb9d202da04ac3b8c294fb6388fb39674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "bookBlock", array()), "book", array()), "title", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "bookBlock", array()), "title", array()), "html", null, true);
        echo " - v ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "number", array()), "html", null, true);
        echo "
";
        
        $__internal_8dc205f5fb33797203459fd7a17dbdebb9d202da04ac3b8c294fb6388fb39674->leave($__internal_8dc205f5fb33797203459fd7a17dbdebb9d202da04ac3b8c294fb6388fb39674_prof);

        
        $__internal_e54458a2cda0fb292ec74c98af2220e455254f4831100e10895ea2d8fa2dff22->leave($__internal_e54458a2cda0fb292ec74c98af2220e455254f4831100e10895ea2d8fa2dff22_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4e2945d3160637bdb08af0e6ac90279adf39e260bfa28b1b5b53d055261021b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e2945d3160637bdb08af0e6ac90279adf39e260bfa28b1b5b53d055261021b->enter($__internal_c4e2945d3160637bdb08af0e6ac90279adf39e260bfa28b1b5b53d055261021b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7209915dfbf36c781c6a37a3d285f14f251ea78172fc5e60fee60b4ff3b0c1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7209915dfbf36c781c6a37a3d285f14f251ea78172fc5e60fee60b4ff3b0c1c7->enter($__internal_7209915dfbf36c781c6a37a3d285f14f251ea78172fc5e60fee60b4ff3b0c1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <i class=\"material-icons dp48\">library_books</i>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_my_books");
        echo "\">Mes livres</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_show_book", array("token" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "bookBlock", array()), "book", array()), "token", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "bookBlock", array()), "book", array()), "title", array()), "html", null, true);
        echo "</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "bookBlock", array()), "book", array()), "title", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "bookBlock", array()), "title", array()), "html", null, true);
        echo " - v ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "number", array()), "html", null, true);
        echo " </span>
            </li>
        </ul>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "blockForm")));
        echo "
            <div class=\"portlet box green-meadow col-md-12\" style=\"margin-bottom: 15px\">
                <div class=\"portlet-title\">
                    <h4 class=\"pull-left\">Contenu du bloc</h4>
                    <div class=\"tools\">
                        <a data-placement=\"bottom\" href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\"
                           title=\"\"> </a>
                        <a data-placement=\"bottom\" href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\"
                           title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body col-md-12\">
                    <div class=\"col-md-12\" style=\"display: block;\">

                        <div class=\"slidershell\">
                            <div class=\"sliderfill progress-bar progress-bar-striped active\"></div>
                            <div class=\"slidertrack text-center\"><strong id=\"ps-txt\"> Progression </strong></div>
                            <div class=\"sliderthumb\"></div>
                            <div class=\"slidervalue\">0</div>
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "progress", array()), 'widget', array("attr" => array("class" => "progress-slider", "data-min" => $this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "progress", array()))));
        echo "
                        </div>
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "tinyMince")));
        echo "
                    </div>

                    <div class=\"col-md-12 text-center\" style=\"margin-top: 15px;\">
                        <button type=\"submit\" class=\"btn  blue \"></i>Enregistrer Modification</button>
                        <button class=\"btn red \"
                                data-url=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_block_version_cancel", array("token" => $this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "token", array()))), "html", null, true);
        echo "\"
                                type=\"button\" id=\"cancelVersionCreation\">Annuler la version
                        </button>
                    </div>
                </div>
            </div>
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
        </div>
    </div>
    <div id=\"fm-token\" data-token=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "token", array()), "html", null, true);
        echo "\"></div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-books\">

";
        
        $__internal_7209915dfbf36c781c6a37a3d285f14f251ea78172fc5e60fee60b4ff3b0c1c7->leave($__internal_7209915dfbf36c781c6a37a3d285f14f251ea78172fc5e60fee60b4ff3b0c1c7_prof);

        
        $__internal_c4e2945d3160637bdb08af0e6ac90279adf39e260bfa28b1b5b53d055261021b->leave($__internal_c4e2945d3160637bdb08af0e6ac90279adf39e260bfa28b1b5b53d055261021b_prof);

    }

    // line 71
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20ad514ca31bbea97f17078647556a30611d9943947dfecf3a6c96174bb9d4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ad514ca31bbea97f17078647556a30611d9943947dfecf3a6c96174bb9d4d4->enter($__internal_20ad514ca31bbea97f17078647556a30611d9943947dfecf3a6c96174bb9d4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1b4a88b34d27742a5076e70929093b8a4c30223c00d163b0fad6113d40d7dcd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4a88b34d27742a5076e70929093b8a4c30223c00d163b0fad6113d40d7dcd4->enter($__internal_1b4a88b34d27742a5076e70929093b8a4c30223c00d163b0fad6113d40d7dcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 72
        echo "    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tinymce/js/tinymce/skins/lightgray/skin.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_1b4a88b34d27742a5076e70929093b8a4c30223c00d163b0fad6113d40d7dcd4->leave($__internal_1b4a88b34d27742a5076e70929093b8a4c30223c00d163b0fad6113d40d7dcd4_prof);

        
        $__internal_20ad514ca31bbea97f17078647556a30611d9943947dfecf3a6c96174bb9d4d4->leave($__internal_20ad514ca31bbea97f17078647556a30611d9943947dfecf3a6c96174bb9d4d4_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ac0a46ec286df4cf5ba74ef4db2e0165c8c01bd3ca8012d08f6d52c17e9ee34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac0a46ec286df4cf5ba74ef4db2e0165c8c01bd3ca8012d08f6d52c17e9ee34->enter($__internal_6ac0a46ec286df4cf5ba74ef4db2e0165c8c01bd3ca8012d08f6d52c17e9ee34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_543449b8693aa1c1d6bb360da7000a725bf00ac322fe17f0e0e1b3b808a91e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543449b8693aa1c1d6bb360da7000a725bf00ac322fe17f0e0e1b3b808a91e68->enter($__internal_543449b8693aa1c1d6bb360da7000a725bf00ac322fe17f0e0e1b3b808a91e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "    <script type=\"text/javascript\"
            src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/tinymce/js/tinymce/langs/fr_FR.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/js/author_edit_block.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_543449b8693aa1c1d6bb360da7000a725bf00ac322fe17f0e0e1b3b808a91e68->leave($__internal_543449b8693aa1c1d6bb360da7000a725bf00ac322fe17f0e0e1b3b808a91e68_prof);

        
        $__internal_6ac0a46ec286df4cf5ba74ef4db2e0165c8c01bd3ca8012d08f6d52c17e9ee34->leave($__internal_6ac0a46ec286df4cf5ba74ef4db2e0165c8c01bd3ca8012d08f6d52c17e9ee34_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Author/edit.block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 79,  230 => 78,  225 => 76,  222 => 75,  213 => 74,  200 => 72,  191 => 71,  177 => 67,  171 => 64,  167 => 63,  158 => 57,  149 => 51,  144 => 49,  122 => 30,  109 => 24,  100 => 20,  93 => 16,  85 => 11,  78 => 6,  69 => 5,  52 => 3,  43 => 2,  11 => 1,);
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
    {{ version.bookBlock.book.title }} - {{ version.bookBlock.title }} - v {{ version.number }}
{% endblock %}
{% block body %}
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"{{ url('author_homepage') }}\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <i class=\"material-icons dp48\">library_books</i>
                <a href=\"{{ url('author_my_books') }}\">Mes livres</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <a href=\"{{ url('author_show_book',{token:version.bookBlock.book.token}) }}\">{{ version.bookBlock.book.title }}</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">{{ version.bookBlock.book.title }} - {{ version.bookBlock.title }} - v {{ version.number }} </span>
            </li>
        </ul>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            {{ form_start(form,{'attr':{'class':'blockForm'}} ) }}
            <div class=\"portlet box green-meadow col-md-12\" style=\"margin-bottom: 15px\">
                <div class=\"portlet-title\">
                    <h4 class=\"pull-left\">Contenu du bloc</h4>
                    <div class=\"tools\">
                        <a data-placement=\"bottom\" href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\"
                           title=\"\"> </a>
                        <a data-placement=\"bottom\" href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\"
                           title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body col-md-12\">
                    <div class=\"col-md-12\" style=\"display: block;\">

                        <div class=\"slidershell\">
                            <div class=\"sliderfill progress-bar progress-bar-striped active\"></div>
                            <div class=\"slidertrack text-center\"><strong id=\"ps-txt\"> Progression </strong></div>
                            <div class=\"sliderthumb\"></div>
                            <div class=\"slidervalue\">0</div>
                            {{ form_widget(form.progress,{\"attr\":{\"class\":\"progress-slider\",\"data-min\":version.progress}}) }}
                        </div>
                        {{ form_widget(form.content,{\"attr\":{\"class\":\"tinyMince\"}}) }}
                    </div>

                    <div class=\"col-md-12 text-center\" style=\"margin-top: 15px;\">
                        <button type=\"submit\" class=\"btn  blue \"></i>Enregistrer Modification</button>
                        <button class=\"btn red \"
                                data-url=\"{{ url('author_block_version_cancel',{token:version.token}) }}\"
                                type=\"button\" id=\"cancelVersionCreation\">Annuler la version
                        </button>
                    </div>
                </div>
            </div>
            {{ form_widget(form._token) }}
            {{ form_end(form, {'render_rest': false}) }}
        </div>
    </div>
    <div id=\"fm-token\" data-token=\"{{ version.token }}\"></div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-books\">

{% endblock %}
{% block stylesheets %}
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/tinymce/js/tinymce/skins/lightgray/skin.min.css') }}\">
{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/tinymce/js/tinymce/tinymce.min.js') }}\"></script>
    <script type=\"text/javascript\"
            src=\"{{ asset('assets/global/plugins/tinymce/js/tinymce/langs/fr_FR.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/pages/js/author_edit_block.js') }}\"></script>
{% endblock %}", "@Main/Author/edit.block.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Author\\edit.block.html.twig");
    }
}
