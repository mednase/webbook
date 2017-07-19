<?php

/* @Main/Admin/book/show.book.html.twig */
class __TwigTemplate_b276e51a875ed0c1358cb5912b78aefdf884ef3484a4358343c0cbe0079a7c8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/book/show.book.html.twig", 1);
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
        $__internal_bf854e7615b07f513969bcac7849c0d6fd3f60a0697d946f1bac96588ed92e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf854e7615b07f513969bcac7849c0d6fd3f60a0697d946f1bac96588ed92e14->enter($__internal_bf854e7615b07f513969bcac7849c0d6fd3f60a0697d946f1bac96588ed92e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/book/show.book.html.twig"));

        $__internal_42dc4deaeba811b417727496d76baa42c100dd74dca3d2c0f7cf8039dea0a878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42dc4deaeba811b417727496d76baa42c100dd74dca3d2c0f7cf8039dea0a878->enter($__internal_42dc4deaeba811b417727496d76baa42c100dd74dca3d2c0f7cf8039dea0a878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/book/show.book.html.twig"));

        // line 2
        $context["macros"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf854e7615b07f513969bcac7849c0d6fd3f60a0697d946f1bac96588ed92e14->leave($__internal_bf854e7615b07f513969bcac7849c0d6fd3f60a0697d946f1bac96588ed92e14_prof);

        
        $__internal_42dc4deaeba811b417727496d76baa42c100dd74dca3d2c0f7cf8039dea0a878->leave($__internal_42dc4deaeba811b417727496d76baa42c100dd74dca3d2c0f7cf8039dea0a878_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ae7f4c5a492da20bcd6b88905171270aac00342c09d0f377f16a85fa72fd9a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae7f4c5a492da20bcd6b88905171270aac00342c09d0f377f16a85fa72fd9a5->enter($__internal_5ae7f4c5a492da20bcd6b88905171270aac00342c09d0f377f16a85fa72fd9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7cc9a3406682581d51cdf077c86cf5048a19da0a8b1ebc48ec13357d2884876c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc9a3406682581d51cdf077c86cf5048a19da0a8b1ebc48ec13357d2884876c->enter($__internal_7cc9a3406682581d51cdf077c86cf5048a19da0a8b1ebc48ec13357d2884876c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo " - Détails
";
        
        $__internal_7cc9a3406682581d51cdf077c86cf5048a19da0a8b1ebc48ec13357d2884876c->leave($__internal_7cc9a3406682581d51cdf077c86cf5048a19da0a8b1ebc48ec13357d2884876c_prof);

        
        $__internal_5ae7f4c5a492da20bcd6b88905171270aac00342c09d0f377f16a85fa72fd9a5->leave($__internal_5ae7f4c5a492da20bcd6b88905171270aac00342c09d0f377f16a85fa72fd9a5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_db4d2221092b3f83c84bbbe89bf6e9e3bee764ca72e74ff67a6b33b5b856323c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4d2221092b3f83c84bbbe89bf6e9e3bee764ca72e74ff67a6b33b5b856323c->enter($__internal_db4d2221092b3f83c84bbbe89bf6e9e3bee764ca72e74ff67a6b33b5b856323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19bb28a6d672bea44c03c0862534a42cab90fc1a7558abbf5179277205896466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19bb28a6d672bea44c03c0862534a42cab90fc1a7558abbf5179277205896466->enter($__internal_19bb28a6d672bea44c03c0862534a42cab90fc1a7558abbf5179277205896466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"fa fa-home\"></i>
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <i class=\"fa fa-book\"></i>
                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_books");
        echo "\">Liste des livres</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo "</span>
            </li>


        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-book\"></span> &nbsp; ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo " - Détails</h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green-meadow\">
                <div class=\"portlet-title\">
                    <div class=\"caption col-md-4\">
                        Information du livre
                    </div>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body col-md-12\" style=\"display: block;margin-bottom: 15px\">
                     <table class=\"table table-bordered table-hover\">
                        <tbody>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\">Titre </label></td>
                            <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\" >Catégorie</label></td>
                            <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "category", array()), "name", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\">Auteurs</label> </td>
                            <td>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "mainAuthors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["autheur"]) {
            // line 58
            echo "                                     - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["autheur"], "profile", array()), "fullName", array()), "html", null, true);
            echo "<br>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autheur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                            </td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\">Description</label></td>
                            <td>";
        // line 64
        echo $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "description", array());
        echo "</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class=\"col-md-12 images center\" >
                        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 70
            echo "                                <img width=\"100%\" style=\"padding: 10px\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["img"], "mediaFile"), "html", null, true);
            echo "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green-meadow\">
                <div class=\"portlet-title\">
                    <div class=\"col-md-4 caption\">
                        Structure du livre
                    </div>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>

                </div>
                <div class=\"portlet-body col-md-12\" style=\"display: block;\">
                    <div class=\" fakeTable\" id=\"blockTree\">
                        <table class=\"table table-bordered \" style=\"margin-bottom: 0px\">
                            <thead>
                            <tr>
                                <th class=\"col-md-2\">Date Creation</th>
                                <th class=\"col-md-4\">Titre</th>
                                <th class=\"col-md-1 text-center\">Version Pulieé</th>
                                <th class=\"col-md-5 text-center\">Action</th>
                            </tr>
                            </thead>
                        </table>
                        ";
        // line 252
        echo "                        <ol>
                            ";
        // line 253
        echo $context["macros"]->getdisplayVersionBlock($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "underBlock", array()));
        echo "
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-books\">
";
        
        $__internal_19bb28a6d672bea44c03c0862534a42cab90fc1a7558abbf5179277205896466->leave($__internal_19bb28a6d672bea44c03c0862534a42cab90fc1a7558abbf5179277205896466_prof);

        
        $__internal_db4d2221092b3f83c84bbbe89bf6e9e3bee764ca72e74ff67a6b33b5b856323c->leave($__internal_db4d2221092b3f83c84bbbe89bf6e9e3bee764ca72e74ff67a6b33b5b856323c_prof);

    }

    // line 263
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2488693fbff4e3b95632f221214e7135ee0687e858904e705c6ede565a74fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2488693fbff4e3b95632f221214e7135ee0687e858904e705c6ede565a74fe0->enter($__internal_b2488693fbff4e3b95632f221214e7135ee0687e858904e705c6ede565a74fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bdd09a1d9a49941f2b51f75b2b84dbec6602e13d296008fa00d2a422965d2ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd09a1d9a49941f2b51f75b2b84dbec6602e13d296008fa00d2a422965d2ba5->enter($__internal_bdd09a1d9a49941f2b51f75b2b84dbec6602e13d296008fa00d2a422965d2ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 264
        echo "    <style>
        .sortable {
            width: 100% !important;
        }
        .fakeTable li:nth-of-type(odd) {
            background-color: #fbfcfd;
        }

        .fakeTable ol {
            padding: 0px;
            width: 100% !important;
        }

        .fakeTable ol > li > div {
            display: -webkit-box;
        }

        .fakeTable li {
            width: 100%;
            vertical-align: inherit;
            border-color: inherit;
        }

        .fakeTable .fake-column {
            padding: 8px;
            line-height: 1.42857;
            vertical-align: top;
            border: 1px solid #e7ecf1;
        }

        tr.showed {
            background-color: rgba(34, 255, 201, 0.28) !important;
        }

        .padding-left-30 {
            padding-left: 30px !important;;
        }

        .padding-left-60 {
            padding-left: 60px !important;;
        }

        .padding-left-90 {
            padding-left: 90px !important;;
        }

        .padding-left-120 {
            padding-left: 120px !important;
        }

        a.disabled-link {
            opacity: 0.5 !important;
        }

        .cl-btn > button {
            padding-left: 2px !important;
            padding-right: 2px !important;
            margin-bottom: 3px !important;
            margin-right: -10px !important;
        }

        .cl-btn > input {
            width: 80%;
            display: inline-flex;
        }


    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/book.structure.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/viewer/viewer.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/slick/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/slick/slick-theme.css"), "html", null, true);
        echo "\">
";
        
        $__internal_bdd09a1d9a49941f2b51f75b2b84dbec6602e13d296008fa00d2a422965d2ba5->leave($__internal_bdd09a1d9a49941f2b51f75b2b84dbec6602e13d296008fa00d2a422965d2ba5_prof);

        
        $__internal_b2488693fbff4e3b95632f221214e7135ee0687e858904e705c6ede565a74fe0->leave($__internal_b2488693fbff4e3b95632f221214e7135ee0687e858904e705c6ede565a74fe0_prof);

    }

    // line 337
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aae3d13958c34797a2d6cfa044ba91098ea51789a09cdaf11a7d982f4c6eedd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae3d13958c34797a2d6cfa044ba91098ea51789a09cdaf11a7d982f4c6eedd1->enter($__internal_aae3d13958c34797a2d6cfa044ba91098ea51789a09cdaf11a7d982f4c6eedd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_355b85579c52ec8479e002c0ce463379aef22483eff5e4bdfae851ccd3254568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355b85579c52ec8479e002c0ce463379aef22483eff5e4bdfae851ccd3254568->enter($__internal_355b85579c52ec8479e002c0ce463379aef22483eff5e4bdfae851ccd3254568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 338
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery.mjs.nestedSortable.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/js/admin_edit_book.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/viewer/viewer.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$(document).ready(function () {
                \$('[data-toggle=\"popover\"]').popover({html: true});
            });
            \$('.images').viewer();
            \$('.images').slick({
                centerPadding: '80px',
                slidesToShow: 4,
                responsive: [
                    {
                        breakpoint: 1250,
                        settings: {
                            arrows: true,
                            centerPadding: '80px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 900,
                        settings: {
                            arrows: false,
                            centerPadding: '40px',
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 550,
                        settings: {
                            arrows: false,
                            centerPadding: '80px',
                            slidesToShow: 1
                        }
                    }
                ]
            });


        })
    </script>
";
        
        $__internal_355b85579c52ec8479e002c0ce463379aef22483eff5e4bdfae851ccd3254568->leave($__internal_355b85579c52ec8479e002c0ce463379aef22483eff5e4bdfae851ccd3254568_prof);

        
        $__internal_aae3d13958c34797a2d6cfa044ba91098ea51789a09cdaf11a7d982f4c6eedd1->leave($__internal_aae3d13958c34797a2d6cfa044ba91098ea51789a09cdaf11a7d982f4c6eedd1_prof);

    }

    // line 102
    public function getdisplayVersionBlock($__blocks__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "blocks" => $__blocks__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_fd90455888930d5a891781132b29972438c676121baaaf0fa9a10d2785e563a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_fd90455888930d5a891781132b29972438c676121baaaf0fa9a10d2785e563a7->enter($__internal_fd90455888930d5a891781132b29972438c676121baaaf0fa9a10d2785e563a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "displayVersionBlock"));

            $__internal_c8b9ca0e9e5f9d719af89cf36ca773f902a2fc6332f986cc8f819ba39834de57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c8b9ca0e9e5f9d719af89cf36ca773f902a2fc6332f986cc8f819ba39834de57->enter($__internal_c8b9ca0e9e5f9d719af89cf36ca773f902a2fc6332f986cc8f819ba39834de57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "displayVersionBlock"));

            // line 103
            echo "                            ";
            $context["macros"] = $this;
            // line 104
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Webbook\MainBundle\Twig\Extension\BlockOptions')->sortByPosition((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks"))));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 105
                echo "                                <li class=\"block-branch ";
                if ( !(null === $this->getAttribute($context["block"], "parent", array()))) {
                    echo " hidden ";
                }
                echo "\"
                                    data-id=";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
                echo "
                                    data-parent=";
                // line 107
                if ( !(null === $this->getAttribute($context["block"], "parent", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "parent", array()), "id", array()), "html", null, true);
                } else {
                    echo "null";
                }
                // line 108
                echo "                                    data-level=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "level", array()), "html", null, true);
                echo "
                                    data-position=";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "position", array()), "html", null, true);
                echo ">
                                    <div>
                                        <div class=\"fake-column col-md-2\">";
                // line 111
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["block"], "createdAt", array()), "d-m-Y"), "html", null, true);
                echo "</div>
                                        <div class=\"cl-btn fake-column col-md-4 padding-left-";
                // line 112
                echo twig_escape_filter($this->env, ($this->getAttribute($context["block"], "level", array()) * 30), "html", null, true);
                echo "\">
                                            ";
                // line 113
                if ((twig_length_filter($this->env, $this->getAttribute($context["block"], "childrens", array())) > 0)) {
                    // line 114
                    echo "                                                <button role=\"button\" class=\"btn green  btn-show-children\"><i
                                                            class=\" fa fa-plus\"></i></button>
                                            ";
                }
                // line 117
                echo "                                            <span style=\"margin-left: 10px\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "title", array()), "html", null, true);
                echo "</span>
                                        </div>
                                        <div class=\"fake-column text-center col-md-1\">
                                            ";
                // line 120
                if ( !(null === $this->getAttribute($context["block"], "publishedVersion", array()))) {
                    // line 121
                    echo "                                            <div class=\"label label-success\"> ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "publishedVersion", array()), "number", array()), 1, ".", ","), "html", null, true);
                    echo "</div>
                                                ";
                } else {
                    // line 123
                    echo "                                            <div class=\"label label-success\">pas de version</div>
                                            ";
                }
                // line 125
                echo "                                        </div>
                                        <div class=\"fake-column col-md-5 text-center\">
                                            <a href=\"#option-modal-";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
                echo "\" data-toggle=\"modal\"
                                               class=\"btn blue btn-sm\"><i class=\"fa fa-cog\"></i> Options</a>
                                            <a data-toggle=\"modal\"
                                               href=\"#auth-modal-";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
                echo "\" class=\"btn  btn-sm green\"><i
                                                        class=\"fa fa-users\"></i> Permission </a>
                                        </div>
                                    </div>
                                    ";
                // line 134
                if ((twig_length_filter($this->env, $this->getAttribute($context["block"], "childrens", array())) > 0)) {
                    // line 135
                    echo "                                        <ol>
                                            ";
                    // line 136
                    echo $context["macros"]->getdisplayVersionBlock($this->getAttribute($context["block"], "childrens", array()));
                    echo "
                                        </ol>
                                    ";
                }
                // line 139
                echo "                                </li>
                                <div style=\"top:-150px;position:fixed;\" class=\"modal fade\"
                                     id=\"option-modal-";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"basic\"
                                     aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\" style=\"background-color: #17C4BB\">
                                                <h4 class=\"modal-title font-white bold font col-md-9\">Propriété du
                                                    bloc</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <table class=\"table table-striped table-bordered table-hover  \"
                                                       cellspacing=\"0\" width=\"100%\">
                                                    <thead>
                                                    <tr>
                                                        <td class=\"text-center\">Ajout au table des matières</td>
                                                        <td class=\"text-center\">Affichage du Titre</td>
                                                        <td class=\"text-center\">Pagination</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class=\"text-center\">
                                                        <td><input type=\"checkbox\" disabled class=\"form-control\" value=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "options", array()), "showTitle", array()), "html", null, true);
                echo "\"></td>
                                                        <td><input type=\"checkbox\" disabled class=\"form-control\" value=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "options", array()), "indexed", array()), "html", null, true);
                echo "\"></td>
                                                        <td><input type=\"checkbox\" disabled class=\"form-control\" value=\"";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "options", array()), "paginated", array()), "html", null, true);
                echo "\"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn dark btn-outline\"
                                                        data-dismiss=\"modal\">Fermer
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

                                <div style=\"top:-150px;position:fixed;\" class=\"modal fade\"
                                     id=\"auth-modal-";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"basic\"
                                     aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\" style=\"background-color: #17C4BB\">
                                                <h4 class=\"modal-title font-white bold font col-md-8\">Gérer Les
                                                    permission pour ce block</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <table class=\"table table-striped table-bordered table-hover auth-tb-author  \"
                                                       cellspacing=\"0\" width=\"100%\">
                                                    <thead>
                                                    <tr style=\"overflow: visible\">
                                                        <td>Auteur</td>
                                                        <td>Lecture</td>
                                                        <td>Ecriture</td>
                                                        <td>Supression</td>
                                                        <td><span data-toggle=\"tooltip\" data-placement=\"bottom\"
                                                                  title=\"Limiter l'autorisation seulement a ce bloc\">Strict</span>
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
                // line 203
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "authorizations", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["authorization"]) {
                    // line 204
                    echo "                                                        ";
                    if (twig_in_filter("ROLE_AUTHOR", $this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "roles", array()))) {
                        // line 205
                        echo "                                                            <tr>
                                                                <td>";
                        // line 206
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "profile", array()), "fullName", array()), "html", null, true);
                        echo "</td>
                                                                <td><input type=\"checkbox\" disabled class=\"form-control\" ";
                        // line 207
                        if ($this->getAttribute($context["authorization"], "canRead", array())) {
                            echo " checked ";
                        }
                        echo "></td>
                                                                <td><input type=\"checkbox\" disabled class=\"form-control\" ";
                        // line 208
                        if ($this->getAttribute($context["authorization"], "canWrite", array())) {
                            echo " checked ";
                        }
                        echo "></td>
                                                                <td><input type=\"checkbox\" disabled class=\"form-control\" ";
                        // line 209
                        if ($this->getAttribute($context["authorization"], "canDelete", array())) {
                            echo " checked ";
                        }
                        echo " ></td>
                                                                <td><input type=\"checkbox\" disabled class=\"form-control\" ";
                        // line 210
                        if ($this->getAttribute($context["authorization"], "limited", array())) {
                            echo " checked ";
                        }
                        echo " ></td>
                                                            </tr>
                                                        ";
                    }
                    // line 213
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authorization'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 214
                echo "                                                    </tbody>
                                                </table>
                                                <table class=\"table table-striped table-bordered table-hover auth-tb-validator  \"
                                                       cellspacing=\"0\" width=\"100%\">
                                                    <thead>
                                                    <tr style=\"overflow: visible\">
                                                        <td>Validateur</td>
                                                        <td class=\"text-center\">
                                                                <span data-toggle=\"tooltip\" data-placement=\"bottom\"
                                                                      title=\"Limiter l'autorisation seulement a ce bloc\">Strict</span>
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
                // line 228
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "authorizations", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["authorization"]) {
                    // line 229
                    echo "                                                        ";
                    if (twig_in_filter("ROLE_VALIDATOR", $this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "roles", array()))) {
                        // line 230
                        echo "                                                            <tr>
                                                                <td>";
                        // line 231
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "profile", array()), "fullName", array()), "html", null, true);
                        echo "</td>
                                                                <td><input type=\"checkbox\" disabled class=\"form-control\" ";
                        // line 232
                        if ($this->getAttribute($context["authorization"], "limited", array())) {
                            echo " checked ";
                        }
                        echo "></td>
                                                            </tr>
                                                        ";
                    }
                    // line 235
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authorization'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 236
                echo "                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn dark btn-outline\"
                                                        data-dismiss=\"modal\">Fermer
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "
                        ";
            
            $__internal_c8b9ca0e9e5f9d719af89cf36ca773f902a2fc6332f986cc8f819ba39834de57->leave($__internal_c8b9ca0e9e5f9d719af89cf36ca773f902a2fc6332f986cc8f819ba39834de57_prof);

            
            $__internal_fd90455888930d5a891781132b29972438c676121baaaf0fa9a10d2785e563a7->leave($__internal_fd90455888930d5a891781132b29972438c676121baaaf0fa9a10d2785e563a7_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@Main/Admin/book/show.book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 250,  704 => 236,  698 => 235,  690 => 232,  686 => 231,  683 => 230,  680 => 229,  676 => 228,  660 => 214,  654 => 213,  646 => 210,  640 => 209,  634 => 208,  628 => 207,  624 => 206,  621 => 205,  618 => 204,  614 => 203,  588 => 180,  568 => 163,  564 => 162,  560 => 161,  537 => 141,  533 => 139,  527 => 136,  524 => 135,  522 => 134,  515 => 130,  509 => 127,  505 => 125,  501 => 123,  495 => 121,  493 => 120,  486 => 117,  481 => 114,  479 => 113,  475 => 112,  471 => 111,  466 => 109,  461 => 108,  455 => 107,  451 => 106,  444 => 105,  439 => 104,  436 => 103,  418 => 102,  366 => 341,  362 => 340,  358 => 339,  353 => 338,  344 => 337,  332 => 335,  328 => 334,  324 => 333,  320 => 332,  250 => 264,  241 => 263,  221 => 253,  218 => 252,  186 => 72,  177 => 70,  173 => 69,  165 => 64,  159 => 60,  150 => 58,  146 => 57,  138 => 52,  131 => 48,  109 => 29,  99 => 22,  92 => 18,  84 => 13,  77 => 8,  68 => 7,  55 => 5,  46 => 4,  36 => 1,  34 => 2,  11 => 1,);
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
{% import _self as macros %}

{% block title %}
    {{ book.title }} - Détails
{% endblock %}
{% block body %}
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"fa fa-home\"></i>
                <a href=\"{{ url('administrator_homepage') }}\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <i class=\"fa fa-book\"></i>
                <a href=\"{{ url('administrator_books') }}\">Liste des livres</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">{{ book.title }}</span>
            </li>


        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-book\"></span> &nbsp; {{ book.title }} - Détails</h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green-meadow\">
                <div class=\"portlet-title\">
                    <div class=\"caption col-md-4\">
                        Information du livre
                    </div>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body col-md-12\" style=\"display: block;margin-bottom: 15px\">
                     <table class=\"table table-bordered table-hover\">
                        <tbody>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\">Titre </label></td>
                            <td>{{ book.title }}</td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\" >Catégorie</label></td>
                            <td>{{ book.category.name }}</td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\">Auteurs</label> </td>
                            <td>
                                {% for autheur in book.mainAuthors %}
                                     - {{ autheur.profile.fullName }}<br>
                                {% endfor %}
                            </td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\">Description</label></td>
                            <td>{{ book.description|raw }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class=\"col-md-12 images center\" >
                        {% for img in book.images %}
                                <img width=\"100%\" style=\"padding: 10px\" src=\"{{ vich_uploader_asset(img,'mediaFile') }}\">
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green-meadow\">
                <div class=\"portlet-title\">
                    <div class=\"col-md-4 caption\">
                        Structure du livre
                    </div>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>

                </div>
                <div class=\"portlet-body col-md-12\" style=\"display: block;\">
                    <div class=\" fakeTable\" id=\"blockTree\">
                        <table class=\"table table-bordered \" style=\"margin-bottom: 0px\">
                            <thead>
                            <tr>
                                <th class=\"col-md-2\">Date Creation</th>
                                <th class=\"col-md-4\">Titre</th>
                                <th class=\"col-md-1 text-center\">Version Pulieé</th>
                                <th class=\"col-md-5 text-center\">Action</th>
                            </tr>
                            </thead>
                        </table>
                        {% macro displayVersionBlock(blocks) %}
                            {% import _self as macros %}
                            {% for block in blocks| sortByPosition() %}
                                <li class=\"block-branch {% if block.parent is not null %} hidden {% endif %}\"
                                    data-id={{ block.id }}
                                    data-parent={% if block.parent is not null %}{{ block.parent.id }}{% else %}null{% endif %}
                                    data-level={{ block.level }}
                                    data-position={{ block.position }}>
                                    <div>
                                        <div class=\"fake-column col-md-2\">{{ block.createdAt|date('d-m-Y') }}</div>
                                        <div class=\"cl-btn fake-column col-md-4 padding-left-{{ block.level*30 }}\">
                                            {% if block.childrens|length>0 %}
                                                <button role=\"button\" class=\"btn green  btn-show-children\"><i
                                                            class=\" fa fa-plus\"></i></button>
                                            {% endif %}
                                            <span style=\"margin-left: 10px\">{{ block.title }}</span>
                                        </div>
                                        <div class=\"fake-column text-center col-md-1\">
                                            {% if block.publishedVersion is not null %}
                                            <div class=\"label label-success\"> {{ block.publishedVersion.number|number_format(1,'.',',') }}</div>
                                                {% else %}
                                            <div class=\"label label-success\">pas de version</div>
                                            {% endif %}
                                        </div>
                                        <div class=\"fake-column col-md-5 text-center\">
                                            <a href=\"#option-modal-{{ block.id }}\" data-toggle=\"modal\"
                                               class=\"btn blue btn-sm\"><i class=\"fa fa-cog\"></i> Options</a>
                                            <a data-toggle=\"modal\"
                                               href=\"#auth-modal-{{ block.id }}\" class=\"btn  btn-sm green\"><i
                                                        class=\"fa fa-users\"></i> Permission </a>
                                        </div>
                                    </div>
                                    {% if block.childrens|length>0 %}
                                        <ol>
                                            {{ macros.displayVersionBlock(block.childrens) }}
                                        </ol>
                                    {% endif %}
                                </li>
                                <div style=\"top:-150px;position:fixed;\" class=\"modal fade\"
                                     id=\"option-modal-{{ block.id }}\" tabindex=\"-1\" role=\"basic\"
                                     aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\" style=\"background-color: #17C4BB\">
                                                <h4 class=\"modal-title font-white bold font col-md-9\">Propriété du
                                                    bloc</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <table class=\"table table-striped table-bordered table-hover  \"
                                                       cellspacing=\"0\" width=\"100%\">
                                                    <thead>
                                                    <tr>
                                                        <td class=\"text-center\">Ajout au table des matières</td>
                                                        <td class=\"text-center\">Affichage du Titre</td>
                                                        <td class=\"text-center\">Pagination</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class=\"text-center\">
                                                        <td><input type=\"checkbox\" disabled class=\"form-control\" value=\"{{ block.options.showTitle}}\"></td>
                                                        <td><input type=\"checkbox\" disabled class=\"form-control\" value=\"{{ block.options.indexed}}\"></td>
                                                        <td><input type=\"checkbox\" disabled class=\"form-control\" value=\"{{ block.options.paginated}}\"></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn dark btn-outline\"
                                                        data-dismiss=\"modal\">Fermer
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

                                <div style=\"top:-150px;position:fixed;\" class=\"modal fade\"
                                     id=\"auth-modal-{{ block.id }}\" tabindex=\"-1\" role=\"basic\"
                                     aria-hidden=\"true\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\" style=\"background-color: #17C4BB\">
                                                <h4 class=\"modal-title font-white bold font col-md-8\">Gérer Les
                                                    permission pour ce block</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <table class=\"table table-striped table-bordered table-hover auth-tb-author  \"
                                                       cellspacing=\"0\" width=\"100%\">
                                                    <thead>
                                                    <tr style=\"overflow: visible\">
                                                        <td>Auteur</td>
                                                        <td>Lecture</td>
                                                        <td>Ecriture</td>
                                                        <td>Supression</td>
                                                        <td><span data-toggle=\"tooltip\" data-placement=\"bottom\"
                                                                  title=\"Limiter l'autorisation seulement a ce bloc\">Strict</span>
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for authorization in block.authorizations %}
                                                        {% if 'ROLE_AUTHOR' in authorization.user.roles %}
                                                            <tr>
                                                                <td>{{ authorization.user.profile.fullName }}</td>
                                                                <td><input type=\"checkbox\" disabled class=\"form-control\" {% if authorization.canRead %} checked {% endif %}></td>
                                                                <td><input type=\"checkbox\" disabled class=\"form-control\" {% if authorization.canWrite %} checked {% endif %}></td>
                                                                <td><input type=\"checkbox\" disabled class=\"form-control\" {% if authorization.canDelete %} checked {% endif %} ></td>
                                                                <td><input type=\"checkbox\" disabled class=\"form-control\" {% if authorization.limited %} checked {% endif %} ></td>
                                                            </tr>
                                                        {% endif %}
                                                    {% endfor %}
                                                    </tbody>
                                                </table>
                                                <table class=\"table table-striped table-bordered table-hover auth-tb-validator  \"
                                                       cellspacing=\"0\" width=\"100%\">
                                                    <thead>
                                                    <tr style=\"overflow: visible\">
                                                        <td>Validateur</td>
                                                        <td class=\"text-center\">
                                                                <span data-toggle=\"tooltip\" data-placement=\"bottom\"
                                                                      title=\"Limiter l'autorisation seulement a ce bloc\">Strict</span>
                                                        </td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for authorization in block.authorizations %}
                                                        {% if 'ROLE_VALIDATOR' in authorization.user.roles %}
                                                            <tr>
                                                                <td>{{ authorization.user.profile.fullName }}</td>
                                                                <td><input type=\"checkbox\" disabled class=\"form-control\" {% if authorization.limited %} checked {% endif %}></td>
                                                            </tr>
                                                        {% endif %}
                                                    {% endfor %}
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn dark btn-outline\"
                                                        data-dismiss=\"modal\">Fermer
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            {% endfor %}

                        {% endmacro %}
                        <ol>
                            {{ macros.displayVersionBlock(book.underBlock) }}
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-books\">
{% endblock %}
{% block stylesheets %}
    <style>
        .sortable {
            width: 100% !important;
        }
        .fakeTable li:nth-of-type(odd) {
            background-color: #fbfcfd;
        }

        .fakeTable ol {
            padding: 0px;
            width: 100% !important;
        }

        .fakeTable ol > li > div {
            display: -webkit-box;
        }

        .fakeTable li {
            width: 100%;
            vertical-align: inherit;
            border-color: inherit;
        }

        .fakeTable .fake-column {
            padding: 8px;
            line-height: 1.42857;
            vertical-align: top;
            border: 1px solid #e7ecf1;
        }

        tr.showed {
            background-color: rgba(34, 255, 201, 0.28) !important;
        }

        .padding-left-30 {
            padding-left: 30px !important;;
        }

        .padding-left-60 {
            padding-left: 60px !important;;
        }

        .padding-left-90 {
            padding-left: 90px !important;;
        }

        .padding-left-120 {
            padding-left: 120px !important;
        }

        a.disabled-link {
            opacity: 0.5 !important;
        }

        .cl-btn > button {
            padding-left: 2px !important;
            padding-right: 2px !important;
            margin-bottom: 3px !important;
            margin-right: -10px !important;
        }

        .cl-btn > input {
            width: 80%;
            display: inline-flex;
        }


    </style>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/pages/css/book.structure.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/viewer/viewer.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/slick/slick.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/slick/slick-theme.css') }}\">
{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery.mjs.nestedSortable.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/pages/js/admin_edit_book.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/slick/slick.min.js') }}\"></script>
    <script src=\"{{ asset('assets/global/plugins/viewer/viewer.min.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            \$(document).ready(function () {
                \$('[data-toggle=\"popover\"]').popover({html: true});
            });
            \$('.images').viewer();
            \$('.images').slick({
                centerPadding: '80px',
                slidesToShow: 4,
                responsive: [
                    {
                        breakpoint: 1250,
                        settings: {
                            arrows: true,
                            centerPadding: '80px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 900,
                        settings: {
                            arrows: false,
                            centerPadding: '40px',
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 550,
                        settings: {
                            arrows: false,
                            centerPadding: '80px',
                            slidesToShow: 1
                        }
                    }
                ]
            });


        })
    </script>
{% endblock %}", "@Main/Admin/book/show.book.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\book\\show.book.html.twig");
    }
}
