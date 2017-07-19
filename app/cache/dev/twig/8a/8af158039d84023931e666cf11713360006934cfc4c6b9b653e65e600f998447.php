<?php

/* @Main/Admin/book/edit.book.html.twig */
class __TwigTemplate_2602bf4a6ebac3ed2cd9c018eeca5ea7eeb1109a3557f9a9d764a32e724a6ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/book/edit.book.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            '__internal_9a81c7c764711832499c4e166277ee77368e5068e2d8e541b94af3ddaf2f273c' => array($this, 'block___internal_9a81c7c764711832499c4e166277ee77368e5068e2d8e541b94af3ddaf2f273c'),
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
        $__internal_12f019dc00b6076f77533f128d9da62e870a7cdcc0835116bf9538b1a1ab04e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f019dc00b6076f77533f128d9da62e870a7cdcc0835116bf9538b1a1ab04e9->enter($__internal_12f019dc00b6076f77533f128d9da62e870a7cdcc0835116bf9538b1a1ab04e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/book/edit.book.html.twig"));

        $__internal_5a637da2494c2d0cba63cadf31370d980ef7b6c523cb123f682aa44f67bb717c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a637da2494c2d0cba63cadf31370d980ef7b6c523cb123f682aa44f67bb717c->enter($__internal_5a637da2494c2d0cba63cadf31370d980ef7b6c523cb123f682aa44f67bb717c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/book/edit.book.html.twig"));

        // line 2
        $context["macros"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12f019dc00b6076f77533f128d9da62e870a7cdcc0835116bf9538b1a1ab04e9->leave($__internal_12f019dc00b6076f77533f128d9da62e870a7cdcc0835116bf9538b1a1ab04e9_prof);

        
        $__internal_5a637da2494c2d0cba63cadf31370d980ef7b6c523cb123f682aa44f67bb717c->leave($__internal_5a637da2494c2d0cba63cadf31370d980ef7b6c523cb123f682aa44f67bb717c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e058759af403e8cf8be209e3797ca4c5822d3d2e3b6b2514b948e96428c18e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e058759af403e8cf8be209e3797ca4c5822d3d2e3b6b2514b948e96428c18e74->enter($__internal_e058759af403e8cf8be209e3797ca4c5822d3d2e3b6b2514b948e96428c18e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bbee4d5239fd9171b899b6288131abe9a61facfd6657b7c046f793ae4cc353f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbee4d5239fd9171b899b6288131abe9a61facfd6657b7c046f793ae4cc353f6->enter($__internal_bbee4d5239fd9171b899b6288131abe9a61facfd6657b7c046f793ae4cc353f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo " - Édit
";
        
        $__internal_bbee4d5239fd9171b899b6288131abe9a61facfd6657b7c046f793ae4cc353f6->leave($__internal_bbee4d5239fd9171b899b6288131abe9a61facfd6657b7c046f793ae4cc353f6_prof);

        
        $__internal_e058759af403e8cf8be209e3797ca4c5822d3d2e3b6b2514b948e96428c18e74->leave($__internal_e058759af403e8cf8be209e3797ca4c5822d3d2e3b6b2514b948e96428c18e74_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4563d44ffcf728dca2136dd9bbcfff6f6324d59f91420ce2b40138bd124fa945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4563d44ffcf728dca2136dd9bbcfff6f6324d59f91420ce2b40138bd124fa945->enter($__internal_4563d44ffcf728dca2136dd9bbcfff6f6324d59f91420ce2b40138bd124fa945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afab702ea8df3330a81d26b42c9a75bd65bf8849c3ecb472079cf756a6df1b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afab702ea8df3330a81d26b42c9a75bd65bf8849c3ecb472079cf756a6df1b11->enter($__internal_afab702ea8df3330a81d26b42c9a75bd65bf8849c3ecb472079cf756a6df1b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div id=\"prototypes\" data-block=\"null\" data-authorization-prototype=\"
        ";
        // line 9
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_9a81c7c764711832499c4e166277ee77368e5068e2d8e541b94af3ddaf2f273c", $context, $blocks));
        // line 11
        echo "\">
    </div>
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"fa fa-home\"></i>
                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <i class=\"fa fa-book\"></i>
                <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_books");
        echo "\">Liste des livres</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo "</span>
            </li>


        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-pencil-square-o\"></span> &nbsp; ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo " - Édit</h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "blockForm", "enctype" => "multipart/form-data")));
        echo "
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
                    <div class=\"row form-group \">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 col-sm-offset-1 control-label")));
        echo "
                        <div class=\"col-md-8\">
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control rq", "data-minLn" => 2)));
        echo "
                            <span id=\"fname-error\" class=\"help-block with-errors\">Vous devez entrer le titre de livre <small>( 2 caractéres au minimum )</small></span>
                        </div>
                    </div>
                    <div class=\"row form-group \">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'label', array("label_attr" => array("class" => "col-sm-2 col-sm-offset-1 control-label")));
        echo "
                        <div class=\"col-md-8\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "form-control rq")));
        echo "
                            <span id=\"fname-error\" class=\"help-block with-errors\">Vous devez choisir la catégorie du livre</span>
                        </div>
                    </div>
                    <div class=\"row form-group \">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iSBN", array()), 'label', array("label_attr" => array("class" => "col-sm-2 col-sm-offset-1 control-label")));
        echo "
                        <div class=\"col-md-8\">
                            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "iSBN", array()), 'widget', array("attr" => array("class" => "form-control rq")));
        echo "
                            <span id=\"fname-error\" class=\"help-block with-errors\">Ce champs est obligatoire.</span>
                        </div>
                    </div>
                    <div class=\"row form-group \">
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'label', array("label_attr" => array("class" => "col-sm-2 col-sm-offset-1 control-label")));
        echo "
                        <div class=\"col-md-8\">
                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"row form-group \">
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language", array()), 'label', array("label_attr" => array("class" => "col-sm-2 col-sm-offset-1 control-label")));
        echo "
                        <div class=\"col-md-8\">
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language", array()), 'widget', array("attr" => array("class" => "form-control rq")));
        echo "
                            <span id=\"fname-error\"
                                  class=\"help-block with-errors\">Vous devez choisir la langue du livre</span>
                        </div>
                    </div>
                    <div class=\"row form-group \">
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mainAuthors", array()), 'label', array("label_attr" => array("class" => "col-sm-2 col-sm-offset-1 control-label ")));
        echo "
                        <div class=\"col-md-8 select2-bootstrap-append\">
                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mainAuthors", array()), 'widget', array("attr" => array("class" => "form-control select2 rq")));
        echo "
                            <span id=\"fname-error\"
                                  class=\"help-block with-errors\">Vous devez choisir au moin un auteur.</span>
                        </div>
                    </div>
                    <div class=\"row form-group \">
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "col-sm-2 col-sm-offset-1 control-label  ")));
        echo "
                        <div class=\"col-md-8\">
                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control rq", "data-minln" => 20)));
        echo "
                            <span id=\"fname-error\" class=\"help-block with-errors\">Vous devez écrire la description du livre <small>( 20 caractéres au minimum )</small> .</span>
                        </div>
                    </div>
                    <div>
                        <h3 style=\"color: #626262;\" class=\"col-md-12 text-center\"> Les images</h3>
                        <div class=\"col-md-12 images\" style=\"padding: 10px\">
                            ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 104
            echo "                                <div class=\"col-lg-3 col-md-4 col-sm-2\">
                                    <input value=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["img"], "id", array()), "html", null, true);
            echo "\" class=\"hidden\" type=\"checkbox\" name=\"deleteImages[]\">
                                    <button style=\"position:absolute;z-index: 1 \" class=\"btn red dlt-img\"><i
                                                class=\"fa fa-trash-o\"></i> Supprimer
                                    </button>
                                    <img style=\"padding: 10px\" width=\"100%\"
                                         src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["img"], "mediaFile"), "html", null, true);
            echo "\">
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                        </div>
                        <div class=\"col-md-12\">
                            <input type=\"file\" name=\"images[]\" class=\"imageBook\" accept=\"image/*\" multiple>
                            <span  class=\"help-block \" >La resolution des images doit être (400 X 600) </span>
                        </div>
                    </div>
                    <div class=\"col-md-12 text-center\" style=\"margin: 15px 0\">
                        <button style=\"margin-top: 3px\" class=\"btn btn-circle btn-success \"><i
                                    class=\"fa fa-download\"></i>Enregistrer Modification
                        </button>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
        ";
        // line 128
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green-meadow col-md-12\">
                <div class=\"portlet-title\">
                    <div class=\"col-md-4 caption\">
                        Structure du livre
                    </div>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>


                    <div style=\"margin-top: 5px;\" class=\" pull-right \">
                        <button data-toggle=\"modal\" href=\"#new-block-modal\"  type=\"button\"
                                style=\"margin-right: 10px\"
                                class=\"btn btn-sm btn-outline  btn-success\">
                            <i class=\"fa fa-plus\"></i>&nbsp;Ajouter un bloc
                        </button>
                    </div>
                </div>
                <div class=\"portlet-body col-md-12\" style=\"display: block;\">
                    <div class=\" fakeTable\" id=\"blockTree\">
                        <table class=\"table table-bordered \" style=\"margin-bottom: 0px\">
                            <thead>
                            <tr>
                                <th class=\"col-md-5 col-sm-6 col-xs-6\">Titre</th>
                                <th class=\"col-md-2 text-center hidden-sm hidden-xs\">Dernière version Validée</th>
                                <th class=\"col-md-2 text-center col-sm-2 col-xs-2\">Version Publiée</th>
                                <th class=\"col-md-3  text-center col-sm-4 col-xs-4\">Action</th>
                            </tr>
                            </thead>
                        </table>
                        ";
        // line 228
        echo "                        <ol class=\"sortable \">
                            ";
        // line 229
        echo $context["macros"]->getdisplayVersionBlock($this->env->getExtension('Webbook\MainBundle\Twig\Extension\BlockOptions')->sortByPosition($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "underBlock", array())));
        echo "
                        </ol>
                    </div>
                    <div class=\"hiddenForm col-md-12\" style=\"margin-top: 50px\">
                        <div id=\"block-fields-list\" style=\"list-style: none\">
                            ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "blocks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 235
            echo "                                <div class=\"block-field \" id=\"block_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
            echo "\">
                                    <div data-book=\"";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()), "html", null, true);
            echo "\" class=\"modal fade fill-in blockModal\" id=\"block_info_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                                        <a type=\"button\" class=\"close-modal\" data-dismiss=\"modal\" aria-hidden=\"true\">
                                            <i class=\"fa fa-times\"></i>
                                        </a>
                                        <div class=\"modal-dialog\">
                                            <form action=\"";
            // line 241
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_update_block", array("id" => $this->getAttribute($context["block"], "id", array()))), "html", null, true);
            echo "\" class=\"updateBlockForm\" ";
            if ($this->getAttribute($context["block"], "parent", array())) {
                echo " data-parent=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "parent", array()), "id", array()), "html", null, true);
                echo "\" ";
            }
            echo ">
                                                <div class=\"modal-content row\">
                                                    <div class=\"modal-header\">
                                                        <h2><i class=\"fa fa-pencil\"></i>&nbsp; Détails du bloc</h2>
                                                    </div>
                                                    <div class=\"modal-body col-md-12\">
                                                        <div class=\"form-group col-md-12\">
                                                            <label for=\"blockTitle\" class=\"col-sm-4 control-label\">Titre du bloc</label>
                                                            <div class=\"col-sm-8\">
                                                                <input value=\"";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "title", array()), "html", null, true);
            echo "\" name=\"blockTitle\" required type=\"text\" class=\"form-control\" id=\"blockTitle\"
                                                                       placeholder=\"Titre du bloc\">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group text-center col-md-12\">
                                                            <label class=\"col-md-4\" style=\"display: flex\" for=\"showTitle\">
                                                                <div class=\"custom-check\">
                                                                    <input  ";
            // line 257
            if ($this->getAttribute($this->getAttribute($context["block"], "options", array()), "showTitle", array())) {
                echo " checked  ";
            }
            echo " id=\"showTitle\" name=\"showTitle\" type=\"checkbox\" role=\"checkbox\"
                                                                           class=\"custom-check-input\">
                                                                </div>
                                                                Afficher Titre
                                                            </label>
                                                            <label class=\"col-md-4\" style=\"display: flex\" for=\"indexed\">
                                                                <div class=\"custom-check\">
                                                                    <input ";
            // line 264
            if ($this->getAttribute($this->getAttribute($context["block"], "options", array()), "indexed", array())) {
                echo " checked  ";
            }
            echo " id=\"indexed\" name=\"indexed\" type=\"checkbox\" role=\"checkbox\"
                                                                           class=\"custom-check-input\">
                                                                </div>
                                                                Table des matières
                                                            </label>
                                                            <label class=\"col-md-4\" style=\"display: flex\" for=\"paginated\">
                                                                <div class=\"custom-check\">
                                                                    <input ";
            // line 271
            if ($this->getAttribute($this->getAttribute($context["block"], "options", array()), "paginated", array())) {
                echo " checked  ";
            }
            echo " id=\"paginated\" name=\"paginated\" type=\"checkbox\" role=\"checkbox\"
                                                                           class=\"custom-check-input\">
                                                                </div>
                                                                Pagination
                                                            </label>
                                                        </div>
                                                        <div class=\"auths\">
                                                            <h4>Autorization</h4>
                                                                <table class=\"table table-striped table-bordered table-hover auth-tb-author\"
                                                                       cellspacing=\"0\" width=\"100%\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Auteur</th>
                                                                        <th>Lecture</th>
                                                                        <th>Ecriture</th>
                                                                        <th>Supression</th>
                                                                        <th><span data-toggle=\"tooltip\" data-placement=\"bottom\"
                                                                                  title=\"Limiter l'autorisation seulement a ce bloc\">Strict</span></th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 293
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "authorizations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["authorization"]) {
                // line 294
                echo "                                                                        ";
                if (twig_in_filter("ROLE_AUTHOR", $this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "roles", array()))) {
                    // line 295
                    echo "                                                                            <tr class=\"text-center\">
                                                                                <td>
                                                                                    <select class=\"form-control\" name=\"auth_user\">
                                                                                        ";
                    // line 298
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 299
                        echo "                                                                                            <option ";
                        if (($this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                            echo " selected ";
                        }
                        // line 300
                        echo "                                                                                                    value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "fullName", array()), "html", null, true);
                        echo "</option>
                                                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 302
                    echo "                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <div class=\"custom-check\">
                                                                                        <input type=\"checkbox\" class=\"custom-check-input\" name=\"canRead\"
                                                                                            ";
                    // line 307
                    if ($this->getAttribute($context["authorization"], "canRead", array())) {
                        echo " checked ";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["authorization"], "canRead", array()), "html", null, true);
                    echo "\">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class=\"custom-check\">
                                                                                        <input type=\"checkbox\" class=\"custom-check-input\" name=\"canWrite\"
                                                                                            ";
                    // line 313
                    if ($this->getAttribute($context["authorization"], "canWrite", array())) {
                        echo " checked ";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["authorization"], "canWrite", array()), "html", null, true);
                    echo "\">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class=\"custom-check\">
                                                                                        <input type=\"checkbox\" class=\"custom-check-input\" name=\"canDelete\"
                                                                                            ";
                    // line 319
                    if ($this->getAttribute($context["authorization"], "canDelete", array())) {
                        echo " checked ";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["authorization"], "canDelete", array()), "html", null, true);
                    echo "\">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class=\"custom-check\">
                                                                                        <input type=\"checkbox\" class=\"custom-check-input\" name=\"limited\"
                                                                                            ";
                    // line 325
                    if ($this->getAttribute($context["authorization"], "limited", array())) {
                        echo " checked ";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["authorization"], "limited", array()), "html", null, true);
                    echo "\">
                                                                                    </div>
                                                                                </td>

                                                                                <td class=\"text-center\">
                                                                                    <button data-toggle=\"tooltip\"
                                                                                            data-placement=\"top\" title=\"Effacer ! \"
                                                                                            class=\"btn btn-circle btn-icon-only red remove-auth\">
                                                                                        <i class=\"fa fa-minus\"></i>
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                        ";
                }
                // line 338
                echo "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authorization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 339
            echo "                                                                    </tbody>
                                                                    ";
            // line 340
            if ((twig_length_filter($this->env, (isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors"))) > 0)) {
                // line 341
                echo "                                                                    <tfoot>
                                                                    <tr>
                                                                        <td colspan=\"6\" class=\"col-md-12\">
                                                                            <button type=\"button\" id=\"addAuthor\" class=\"btn green btn-circle btn-icon-only add-auth-btn\" ><i
                                                                                        class=\"fa fa-plus\"></i></button>
                                                                            ajouter un auteur
                                                                        </td>
                                                                    </tr>
                                                                    </tfoot>
                                                                    ";
            }
            // line 351
            echo "                                                                </table>

                                                                <table class=\"table table-striped table-bordered table-hover auth-tb-validator\"
                                                                       cellspacing=\"0\" width=\"100%\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>Validateur</th>
                                                                        <th>
                                                                            <span data-toggle=\"tooltip\" data-placement=\"bottom\"
                                                                                  title=\"Limiter l'autorisation seulement a ce bloc\">Strict</span>
                                                                        </th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    ";
            // line 366
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "authorizations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["authorization"]) {
                // line 367
                echo "                                                                        ";
                if (twig_in_filter("ROLE_VALIDATOR", $this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "roles", array()))) {
                    // line 368
                    echo "                                                                            <tr class=\"text-center\">
                                                                                <td>
                                                                                    <select class=\"form-control\" name=\"auth_user\">
                                                                                        ";
                    // line 371
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["validators"]) ? $context["validators"] : $this->getContext($context, "validators")));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 372
                        echo "                                                                                            <option ";
                        if (($this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                            echo " selected ";
                        }
                        // line 373
                        echo "                                                                                                    value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "fullName", array()), "html", null, true);
                        echo "</option>
                                                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 375
                    echo "                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <div class=\"custom-check\">
                                                                                        <input type=\"checkbox\" class=\"custom-check-input\" name=\"limited\"
                                                                                            ";
                    // line 380
                    if ($this->getAttribute($context["authorization"], "limited", array())) {
                        echo " checked ";
                    }
                    echo "  value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["authorization"], "limited", array()), "html", null, true);
                    echo "\">
                                                                                    </div>
                                                                                </td>
                                                                                <td class=\"text-center\">
                                                                                    <button data-toggle=\"tooltip\"
                                                                                            data-placement=\"top\" title=\"Effacer ! \"
                                                                                            class=\"btn btn-circle btn-icon-only red remove-auth\">
                                                                                        <i class=\"fa fa-minus\"></i>
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                        ";
                }
                // line 392
                echo "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authorization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 393
            echo "                                                                    </tbody>
                                                                    ";
            // line 394
            if ((twig_length_filter($this->env, (isset($context["validators"]) ? $context["validators"] : $this->getContext($context, "validators"))) > 0)) {
                // line 395
                echo "                                                                    <tfoot>
                                                                    <tr>
                                                                        <td colspan=\"3\" class=\"col-md-12\">
                                                                            <button type=\"button\" id=\"addValidator\" class=\"btn green btn-circle btn-icon-only add-auth-btn\" ";
                // line 398
                if ((twig_length_filter($this->env, (isset($context["validators"]) ? $context["validators"] : $this->getContext($context, "validators"))) == 0)) {
                    echo " disabled ";
                }
                echo "><i
                                                                                        class=\"fa fa-plus\"></i></button>
                                                                            ajouter un validateur
                                                                        </td>
                                                                    </tr>
                                                                    </tfoot>
                                                                    ";
            }
            // line 405
            echo "                                                                </table>
                                                        </div>
                                                    </div>
                                                    <div class=\"modal-footer col-md-12\">
                                                        <div class=\"form-group\">
                                                            <div class=\"col-sm-offset-2 col-sm-10\">
                                                                <button type=\"submit\" class=\"btn green\">Sauvegarder</button>
                                                                <button data-dismiss=\"modal\" role=\"button\" class=\"btn red\">Annuler</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 422
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"portlet box green-meadow col-md-12\" style=\"margin-bottom: 15px\">
                <div class=\"portlet-title\">
                    <h4 class=\"pull-left\">Édition du Livre</h4>

                    <div class=\"tools\">
                        <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" data-placement=\"bottom\"
                           title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" data-placement=\"bottom\"
                           title=\"\"> </a>
                    </div>
                    <div class=\"actions\" style=\"margin-right: 10px\">
                        <a id=\"addBookEdition\" data-token=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "token", array()), "html", null, true);
        echo "\" class=\"btn green btn-sm\">
                        <i class=\"fa fa-plus\"></i> ajouter une édition</a>
                    </div>
                </div>
                <div class=\"portlet-body\">
                    <table class=\"table table-bordered \">
                        <thead>
                        <tr>
                            <th class=\"text-center col-md-2\">Date Creation</th>
                            <th class=\"text-center col-md-1\">Numéro</th>
                            <th class=\"text-center col-md-6\">Titre indicatif</th>
                            <th class=\"text-center col-md-3\">Action</th>
                        </tr>
                        </thead>
                        <tbody id=\"table-book-versions\">
                        ";
        // line 452
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "editions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["bookEdition"]) {
            // line 453
            echo "                            <tr>
                                <td class=\"text-center\">";
            // line 454
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bookEdition"], "createdAt", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">";
            // line 455
            echo twig_escape_filter($this->env, $this->getAttribute($context["bookEdition"], "number", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 456
            echo twig_escape_filter($this->env, $this->getAttribute($context["bookEdition"], "title", array()), "html", null, true);
            echo "</td>
                                <td class=\"text-center\">
                                    ";
            // line 458
            if ($this->getAttribute($context["bookEdition"], "active", array())) {
                // line 459
                echo "                                        <button type=\"button\" class=\"btn green btn-sm activate-book-edition disabled\" data-token=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bookEdition"], "token", array()), "html", null, true);
                echo "\">
                                            Activer
                                        </button>
                                    ";
            } else {
                // line 463
                echo "                                        <button data-toggle=\"tooltip\" data-title=\"Charger le contenu de cette édition\" type=\"button\" data-token=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bookEdition"], "token", array()), "html", null, true);
                echo "\"
                                                class=\"btn green btn-sm activate-book-edition\">
                                            Activer
                                        </button>
                                    ";
            }
            // line 468
            echo "                                    <button data-toggle=\"tooltip\" data-title=\"Publier pour les clients\" type=\"button\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bookEdition"], "id", array()), "html", null, true);
            echo "\"
                                            class=\"btn blue btn-sm publishBookEdition ";
            // line 469
            if ($this->getAttribute($context["bookEdition"], "published", array())) {
                echo " disabled ";
            }
            echo "\">Publier
                                    </button>
                                    <button type=\"button\" data-token=\"";
            // line 471
            echo twig_escape_filter($this->env, $this->getAttribute($context["bookEdition"], "token", array()), "html", null, true);
            echo "\"
                                            class=\"btn red btn-sm deleteBookEdition\">Supprimer
                                    </button>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bookEdition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 477
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-books\">

    <div data-book=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()), "html", null, true);
        echo "\" class=\"modal fade fill-in blockModal\" id=\"new-block-modal\" tabindex=\"-1\" aria-hidden=\"true\">
        <a type=\"button\" class=\"close-modal\" data-dismiss=\"modal\" aria-hidden=\"true\">
            <i class=\"fa fa-times\"></i>
        </a>
        <div class=\"modal-dialog\">
            <form  id=\"createBlockForm\" action=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_create_block", array("book" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()))), "html", null, true);
        echo "\" >
                <div class=\"modal-content row\">
                    <div class=\"modal-header\">
                        <h2><i class=\"fa fa-pencil\"></i>&nbsp; Ajouter un bloc</h2>
                    </div>
                    <div class=\"modal-body col-md-12\">
                        <div class=\"form-group col-md-12\">
                            <label for=\"blockTitle\" class=\"col-sm-4 control-label\">Titre du bloc</label>
                            <div class=\"col-sm-8\">
                                <input name=\"blockTitle\" required type=\"text\" class=\"form-control\" id=\"blockTitle\"
                                       placeholder=\"Titre du bloc\">
                            </div>
                        </div>
                        <div class=\"form-group text-center col-md-12\">
                            <label class=\"col-md-4\" style=\"display: flex\" for=\"showTitle\">
                                <div class=\"custom-check\">
                                    <input id=\"showTitle\" name=\"showTitle\" type=\"checkbox\" role=\"checkbox\"
                                           class=\"custom-check-input\">
                                </div>
                                Afficher Titre
                            </label>
                            <label class=\"col-md-4\" style=\"display: flex\" for=\"indexed\">
                                <div class=\"custom-check\">
                                    <input id=\"indexed\" name=\"indexed\" type=\"checkbox\" role=\"checkbox\"
                                           class=\"custom-check-input\">
                                </div>
                                Table des matières
                            </label>
                            <label class=\"col-md-4\" style=\"display: flex\" for=\"paginated\">
                                <div class=\"custom-check\">
                                    <input id=\"paginated\" name=\"paginated\" type=\"checkbox\" role=\"checkbox\"
                                           class=\"custom-check-input\">
                                </div>
                                Pagination
                            </label>
                        </div>
                        <div class=\"auths\">
                            <h4>Autorization</h4>
                            ";
        // line 528
        if ((twig_length_filter($this->env, (isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors"))) > 0)) {
            // line 529
            echo "                            <table class=\"table table-striped table-bordered table-hover auth-tb-author\"
                                   cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <tr>
                                        <th>Auteur</th>
                                        <th>Lecture</th>
                                        <th>Ecriture</th>
                                        <th>Supression</th>
                                        <th><span data-toggle=\"tooltip\" data-placement=\"bottom\"
                                                  title=\"Limiter l'autorisation seulement a ce bloc\">Strict</span></th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan=\"6\" class=\"col-md-12\">
                                            <button type=\"button\" id=\"addAuthor\" class=\"btn green btn-circle btn-icon-only add-auth-btn\" ><i
                                                        class=\"fa fa-plus\"></i></button>
                                            ajouter un auteur
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            ";
        }
        // line 555
        echo "                            ";
        if ((twig_length_filter($this->env, (isset($context["validators"]) ? $context["validators"] : $this->getContext($context, "validators"))) > 0)) {
            // line 556
            echo "                            <table class=\"table table-striped table-bordered table-hover auth-tb-validator\"
                                   cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <tr class=\"text-center\">
                                        <th>Validateur</th>
                                        <th>
                                            <span data-toggle=\"tooltip\" data-placement=\"bottom\"
                                                  title=\"Limiter l'autorisation seulement a ce bloc\">Strict</span>
                                        </th>
                                        <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan=\"3\" class=\"col-md-12\">
                                            <button type=\"button\" id=\"addValidator\" class=\"btn green btn-circle btn-icon-only add-auth-btn\" ";
            // line 573
            if ((twig_length_filter($this->env, (isset($context["validators"]) ? $context["validators"] : $this->getContext($context, "validators"))) == 0)) {
                echo " disabled ";
            }
            echo "><i
                                                        class=\"fa fa-plus\"></i></button>
                                            ajouter un validateur
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            ";
        }
        // line 581
        echo "                        </div>
                    </div>
                    <div class=\"modal-footer col-md-12\">
                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-2 col-sm-10\">
                                <button type=\"submit\" class=\"btn green\">Crée</button>
                                <button type=\"reset\" data-dismiss=\"modal\" role=\"button\" class=\"btn red\">Annuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


";
        
        $__internal_afab702ea8df3330a81d26b42c9a75bd65bf8849c3ecb472079cf756a6df1b11->leave($__internal_afab702ea8df3330a81d26b42c9a75bd65bf8849c3ecb472079cf756a6df1b11_prof);

        
        $__internal_4563d44ffcf728dca2136dd9bbcfff6f6324d59f91420ce2b40138bd124fa945->leave($__internal_4563d44ffcf728dca2136dd9bbcfff6f6324d59f91420ce2b40138bd124fa945_prof);

    }

    // line 9
    public function block___internal_9a81c7c764711832499c4e166277ee77368e5068e2d8e541b94af3ddaf2f273c($context, array $blocks = array())
    {
        $__internal_71e734ead32415045fed368cc5f0d2b95d8ad9c0ed9a6d37120c659c77bef356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e734ead32415045fed368cc5f0d2b95d8ad9c0ed9a6d37120c659c77bef356->enter($__internal_71e734ead32415045fed368cc5f0d2b95d8ad9c0ed9a6d37120c659c77bef356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_9a81c7c764711832499c4e166277ee77368e5068e2d8e541b94af3ddaf2f273c"));

        $__internal_af5d6f87c10f769acecbf45bbeda06239f256fc992fb61c772e1e9cdbac38e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5d6f87c10f769acecbf45bbeda06239f256fc992fb61c772e1e9cdbac38e4a->enter($__internal_af5d6f87c10f769acecbf45bbeda06239f256fc992fb61c772e1e9cdbac38e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_9a81c7c764711832499c4e166277ee77368e5068e2d8e541b94af3ddaf2f273c"));

        // line 10
        echo "            ";
        echo twig_include($this->env, $context, "form/form.block.authorization.html.twig");
        echo "
        ";
        
        $__internal_af5d6f87c10f769acecbf45bbeda06239f256fc992fb61c772e1e9cdbac38e4a->leave($__internal_af5d6f87c10f769acecbf45bbeda06239f256fc992fb61c772e1e9cdbac38e4a_prof);

        
        $__internal_71e734ead32415045fed368cc5f0d2b95d8ad9c0ed9a6d37120c659c77bef356->leave($__internal_71e734ead32415045fed368cc5f0d2b95d8ad9c0ed9a6d37120c659c77bef356_prof);

    }

    // line 598
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_475af41c92b4a657ab61b5bc23063a6b3ae7337c695823feaa7be143d040e59b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475af41c92b4a657ab61b5bc23063a6b3ae7337c695823feaa7be143d040e59b->enter($__internal_475af41c92b4a657ab61b5bc23063a6b3ae7337c695823feaa7be143d040e59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ee96f4e109c71efe7ee691859631b3e697b3b468e9f1b29f2bf6b8f32de3209d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee96f4e109c71efe7ee691859631b3e697b3b468e9f1b29f2bf6b8f32de3209d->enter($__internal_ee96f4e109c71efe7ee691859631b3e697b3b468e9f1b29f2bf6b8f32de3209d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 599
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/viewer/viewer.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/slick/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/slick/slick-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/custom-compo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/book.structure.css"), "html", null, true);
        echo "\">
";
        
        $__internal_ee96f4e109c71efe7ee691859631b3e697b3b468e9f1b29f2bf6b8f32de3209d->leave($__internal_ee96f4e109c71efe7ee691859631b3e697b3b468e9f1b29f2bf6b8f32de3209d_prof);

        
        $__internal_475af41c92b4a657ab61b5bc23063a6b3ae7337c695823feaa7be143d040e59b->leave($__internal_475af41c92b4a657ab61b5bc23063a6b3ae7337c695823feaa7be143d040e59b_prof);

    }

    // line 605
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97384d4b07c9f6d7e4568a0d749a01841e8c5405b7658f4d61a115fa7d9aa103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97384d4b07c9f6d7e4568a0d749a01841e8c5405b7658f4d61a115fa7d9aa103->enter($__internal_97384d4b07c9f6d7e4568a0d749a01841e8c5405b7658f4d61a115fa7d9aa103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4e53e0c7387790c3c5e2ebe6e4abe157d78883095a308a2577c03843ecc9a1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e53e0c7387790c3c5e2ebe6e4abe157d78883095a308a2577c03843ecc9a1b3->enter($__internal_4e53e0c7387790c3c5e2ebe6e4abe157d78883095a308a2577c03843ecc9a1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 606
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery.mjs.nestedSortable.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/viewer/viewer.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/js/book.validation.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/js/book/admin_edit_book.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/js/book/edit_block_structure.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4e53e0c7387790c3c5e2ebe6e4abe157d78883095a308a2577c03843ecc9a1b3->leave($__internal_4e53e0c7387790c3c5e2ebe6e4abe157d78883095a308a2577c03843ecc9a1b3_prof);

        
        $__internal_97384d4b07c9f6d7e4568a0d749a01841e8c5405b7658f4d61a115fa7d9aa103->leave($__internal_97384d4b07c9f6d7e4568a0d749a01841e8c5405b7658f4d61a115fa7d9aa103_prof);

    }

    // line 163
    public function getdisplayVersionBlock($__blocks__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "blocks" => $__blocks__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_85ec38852f97e67c690221c537125a091d29fc96aa50dd706c5fc092fa1d6b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_85ec38852f97e67c690221c537125a091d29fc96aa50dd706c5fc092fa1d6b3b->enter($__internal_85ec38852f97e67c690221c537125a091d29fc96aa50dd706c5fc092fa1d6b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "displayVersionBlock"));

            $__internal_a21d4ee2b59ebd1a5df2dd45519af0527651c053925e59c07ce5bc04b8e22a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a21d4ee2b59ebd1a5df2dd45519af0527651c053925e59c07ce5bc04b8e22a00->enter($__internal_a21d4ee2b59ebd1a5df2dd45519af0527651c053925e59c07ce5bc04b8e22a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "displayVersionBlock"));

            // line 164
            echo "                            ";
            $context["macros"] = $this;
            // line 165
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 166
                echo "                                <li class=\"block-branch ";
                if ( !(null === $this->getAttribute($context["block"], "parent", array()))) {
                    echo " hidden ";
                }
                echo "\"
                                    data-id=";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
                echo "
                                    data-parent=";
                // line 168
                if ( !(null === $this->getAttribute($context["block"], "parent", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "parent", array()), "id", array()), "html", null, true);
                } else {
                    echo "null";
                }
                // line 169
                echo "                                    data-level=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "level", array()), "html", null, true);
                echo "
                                    data-position=";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "position", array()), "html", null, true);
                echo ">
                                    <div>
                                        <div class=\"cl-btn fake-column col-md-5 col-sm-6 col-xs-6\" data-pdl=\"25\">
                                            ";
                // line 173
                if ((twig_length_filter($this->env, $this->getAttribute($context["block"], "childrens", array())) > 0)) {
                    // line 174
                    echo "                                                <button role=\"button\" class=\"btn green  btn-show-children\"><i
                                                            class=\" fa fa-plus\"></i></button>
                                            ";
                }
                // line 177
                echo "                                            <input style=\"pointer-events: none\" type=\"text\" id=\"title-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
                echo "\"
                                                   class=\"form-control  block-title\"
                                                   value=\"";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "title", array()), "html", null, true);
                echo "\">
                                        </div>
                                        <div class=\"fake-column col-md-2 hidden-sm hidden-xs text-center\">
                                            <div class=\"label label-success \">
                                                ";
                // line 183
                if ( !(null === $this->getAttribute($context["block"], "lastValidatedVersion", array()))) {
                    // line 184
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "lastValidatedVersion", array()), "number", array()), 1, ".", ","), "html", null, true);
                    echo "
                                                ";
                } else {
                    // line 186
                    echo "                                                    pas de version
                                                ";
                }
                // line 188
                echo "                                            </div>
                                        </div>
                                        <div class=\"fake-column col-md-2 col-sm-2 col-xs-2 text-center\">
                                            <div class=\"label label-success \">
                                                ";
                // line 192
                if ( !(null === $this->getAttribute($context["block"], "publishedVersion", array()))) {
                    // line 193
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "publishedVersion", array()), "number", array()), 1, ".", ","), "html", null, true);
                    echo "
                                                ";
                } else {
                    // line 195
                    echo "                                                    pas de version
                                                ";
                }
                // line 197
                echo "                                            </div>
                                        </div>
                                        <div class=\"fake-column actions col-md-3 col-sm-4 col-xs-4 text-center\">
                                            <div >
                                                <a class=\"btn green btn-icon-only\"
                                                   href=\"";
                // line 202
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_book_block", array("token" => $this->getAttribute($context["block"], "token", array()))), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-eye\"></i></a>
                                            </div>

                                            <div  data-toggle=\"tooltip\" data-title=\"Détails\">
                                                <a href=\"#block_info_";
                // line 207
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
                echo "\" data-toggle=\"modal\"
                                                   class=\"btn blue btn-icon-only\"><i class=\"fa fa-cog\"></i></a>
                                            </div>
                                            <div data-toggle=\"tooltip\"
                                                 data-title=\"Effacer!\">
                                                <button type=\"button\" class=\"btn red btn-icon-only btn-delete-block\"
                                                        data-id=\"";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-trash\"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                // line 219
                if ((twig_length_filter($this->env, $this->getAttribute($context["block"], "childrens", array())) > 0)) {
                    // line 220
                    echo "                                        <ol>
                                            ";
                    // line 221
                    echo $context["macros"]->getdisplayVersionBlock($this->env->getExtension('Webbook\MainBundle\Twig\Extension\BlockOptions')->sortByPosition($this->getAttribute($context["block"], "childrens", array())));
                    echo "
                                        </ol>
                                    ";
                }
                // line 224
                echo "                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "
                        ";
            
            $__internal_a21d4ee2b59ebd1a5df2dd45519af0527651c053925e59c07ce5bc04b8e22a00->leave($__internal_a21d4ee2b59ebd1a5df2dd45519af0527651c053925e59c07ce5bc04b8e22a00_prof);

            
            $__internal_85ec38852f97e67c690221c537125a091d29fc96aa50dd706c5fc092fa1d6b3b->leave($__internal_85ec38852f97e67c690221c537125a091d29fc96aa50dd706c5fc092fa1d6b3b_prof);

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
        return "@Main/Admin/book/edit.book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1177 => 226,  1170 => 224,  1164 => 221,  1161 => 220,  1159 => 219,  1150 => 213,  1141 => 207,  1133 => 202,  1126 => 197,  1122 => 195,  1116 => 193,  1114 => 192,  1108 => 188,  1104 => 186,  1098 => 184,  1096 => 183,  1089 => 179,  1083 => 177,  1078 => 174,  1076 => 173,  1070 => 170,  1065 => 169,  1059 => 168,  1055 => 167,  1048 => 166,  1043 => 165,  1040 => 164,  1022 => 163,  1010 => 612,  1006 => 611,  1001 => 609,  997 => 608,  993 => 607,  988 => 606,  979 => 605,  967 => 603,  963 => 602,  959 => 601,  955 => 600,  950 => 599,  941 => 598,  928 => 10,  919 => 9,  893 => 581,  880 => 573,  861 => 556,  858 => 555,  830 => 529,  828 => 528,  787 => 490,  779 => 485,  769 => 477,  757 => 471,  750 => 469,  745 => 468,  736 => 463,  728 => 459,  726 => 458,  721 => 456,  717 => 455,  713 => 454,  710 => 453,  706 => 452,  688 => 437,  671 => 422,  649 => 405,  637 => 398,  632 => 395,  630 => 394,  627 => 393,  621 => 392,  602 => 380,  595 => 375,  584 => 373,  579 => 372,  575 => 371,  570 => 368,  567 => 367,  563 => 366,  546 => 351,  534 => 341,  532 => 340,  529 => 339,  523 => 338,  503 => 325,  490 => 319,  477 => 313,  464 => 307,  457 => 302,  446 => 300,  441 => 299,  437 => 298,  432 => 295,  429 => 294,  425 => 293,  398 => 271,  386 => 264,  374 => 257,  364 => 250,  346 => 241,  336 => 236,  331 => 235,  327 => 234,  319 => 229,  316 => 228,  278 => 128,  274 => 127,  258 => 113,  249 => 110,  241 => 105,  238 => 104,  234 => 103,  224 => 96,  219 => 94,  210 => 88,  205 => 86,  196 => 80,  191 => 78,  184 => 74,  179 => 72,  171 => 67,  166 => 65,  158 => 60,  153 => 58,  145 => 53,  140 => 51,  124 => 38,  117 => 34,  107 => 27,  100 => 23,  92 => 18,  83 => 11,  81 => 9,  78 => 8,  69 => 7,  56 => 5,  47 => 4,  37 => 1,  35 => 2,  11 => 1,);
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
    {{ book.title }} - Édit
{% endblock %}
{% block body %}
    <div id=\"prototypes\" data-block=\"null\" data-authorization-prototype=\"
        {% filter escape %}
            {{ include('form/form.block.authorization.html.twig') }}
        {% endfilter %}\">
    </div>
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
        <h2><span class=\"fa fa-pencil-square-o\"></span> &nbsp; {{ book.title }} - Édit</h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            {{ form_start(form,{'attr':{'class':'blockForm','enctype':'multipart/form-data'}} ) }}
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
                    <div class=\"row form-group \">
                        {{ form_label(form.title, null,{ 'label_attr': {'class': 'col-sm-2 col-sm-offset-1 control-label'}}) }}
                        <div class=\"col-md-8\">
                            {{ form_widget(form.title,{\"attr\":{\"class\":\"form-control rq\",'data-minLn':2}}) }}
                            <span id=\"fname-error\" class=\"help-block with-errors\">Vous devez entrer le titre de livre <small>( 2 caractéres au minimum )</small></span>
                        </div>
                    </div>
                    <div class=\"row form-group \">
                        {{ form_label(form.category, null,{ 'label_attr': {'class': 'col-sm-2 col-sm-offset-1 control-label'}}) }}
                        <div class=\"col-md-8\">
                            {{ form_widget(form.category,{\"attr\":{\"class\":\"form-control rq\"}}) }}
                            <span id=\"fname-error\" class=\"help-block with-errors\">Vous devez choisir la catégorie du livre</span>
                        </div>
                    </div>
                    <div class=\"row form-group \">
                        {{ form_label(form.iSBN, null,{ 'label_attr': {'class': 'col-sm-2 col-sm-offset-1 control-label'}}) }}
                        <div class=\"col-md-8\">
                            {{ form_widget(form.iSBN,{\"attr\":{\"class\":\"form-control rq\"}}) }}
                            <span id=\"fname-error\" class=\"help-block with-errors\">Ce champs est obligatoire.</span>
                        </div>
                    </div>
                    <div class=\"row form-group \">
                        {{ form_label(form.price, null,{ 'label_attr': {'class': 'col-sm-2 col-sm-offset-1 control-label'}}) }}
                        <div class=\"col-md-8\">
                            {{ form_widget(form.price,{\"attr\":{\"class\":\"form-control\"}}) }}
                        </div>
                    </div>
                    <div class=\"row form-group \">
                        {{ form_label(form.language, null,{ 'label_attr': {'class': 'col-sm-2 col-sm-offset-1 control-label'}}) }}
                        <div class=\"col-md-8\">
                            {{ form_widget(form.language,{\"attr\":{\"class\":\"form-control rq\"}}) }}
                            <span id=\"fname-error\"
                                  class=\"help-block with-errors\">Vous devez choisir la langue du livre</span>
                        </div>
                    </div>
                    <div class=\"row form-group \">
                        {{ form_label(form.mainAuthors, null,{ 'label_attr': {'class': 'col-sm-2 col-sm-offset-1 control-label '}}) }}
                        <div class=\"col-md-8 select2-bootstrap-append\">
                            {{ form_widget(form.mainAuthors,{\"attr\":{\"class\":\"form-control select2 rq\"}}) }}
                            <span id=\"fname-error\"
                                  class=\"help-block with-errors\">Vous devez choisir au moin un auteur.</span>
                        </div>
                    </div>
                    <div class=\"row form-group \">
                        {{ form_label(form.description, null,{ 'label_attr': {'class': 'col-sm-2 col-sm-offset-1 control-label  '}}) }}
                        <div class=\"col-md-8\">
                            {{ form_widget(form.description,{\"attr\":{\"class\":\"form-control rq\",'data-minln':20 }}) }}
                            <span id=\"fname-error\" class=\"help-block with-errors\">Vous devez écrire la description du livre <small>( 20 caractéres au minimum )</small> .</span>
                        </div>
                    </div>
                    <div>
                        <h3 style=\"color: #626262;\" class=\"col-md-12 text-center\"> Les images</h3>
                        <div class=\"col-md-12 images\" style=\"padding: 10px\">
                            {% for img in form.vars.value.images %}
                                <div class=\"col-lg-3 col-md-4 col-sm-2\">
                                    <input value=\"{{ img.id }}\" class=\"hidden\" type=\"checkbox\" name=\"deleteImages[]\">
                                    <button style=\"position:absolute;z-index: 1 \" class=\"btn red dlt-img\"><i
                                                class=\"fa fa-trash-o\"></i> Supprimer
                                    </button>
                                    <img style=\"padding: 10px\" width=\"100%\"
                                         src=\"{{ vich_uploader_asset(img,'mediaFile') }}\">
                                </div>
                            {% endfor %}
                        </div>
                        <div class=\"col-md-12\">
                            <input type=\"file\" name=\"images[]\" class=\"imageBook\" accept=\"image/*\" multiple>
                            <span  class=\"help-block \" >La resolution des images doit être (400 X 600) </span>
                        </div>
                    </div>
                    <div class=\"col-md-12 text-center\" style=\"margin: 15px 0\">
                        <button style=\"margin-top: 3px\" class=\"btn btn-circle btn-success \"><i
                                    class=\"fa fa-download\"></i>Enregistrer Modification
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{ form_widget(form._token) }}
        {{ form_end(form,{render_rest:false}) }}
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green-meadow col-md-12\">
                <div class=\"portlet-title\">
                    <div class=\"col-md-4 caption\">
                        Structure du livre
                    </div>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>


                    <div style=\"margin-top: 5px;\" class=\" pull-right \">
                        <button data-toggle=\"modal\" href=\"#new-block-modal\"  type=\"button\"
                                style=\"margin-right: 10px\"
                                class=\"btn btn-sm btn-outline  btn-success\">
                            <i class=\"fa fa-plus\"></i>&nbsp;Ajouter un bloc
                        </button>
                    </div>
                </div>
                <div class=\"portlet-body col-md-12\" style=\"display: block;\">
                    <div class=\" fakeTable\" id=\"blockTree\">
                        <table class=\"table table-bordered \" style=\"margin-bottom: 0px\">
                            <thead>
                            <tr>
                                <th class=\"col-md-5 col-sm-6 col-xs-6\">Titre</th>
                                <th class=\"col-md-2 text-center hidden-sm hidden-xs\">Dernière version Validée</th>
                                <th class=\"col-md-2 text-center col-sm-2 col-xs-2\">Version Publiée</th>
                                <th class=\"col-md-3  text-center col-sm-4 col-xs-4\">Action</th>
                            </tr>
                            </thead>
                        </table>
                        {% macro displayVersionBlock(blocks) %}
                            {% import _self as macros %}
                            {% for block in blocks %}
                                <li class=\"block-branch {% if block.parent is not null %} hidden {% endif %}\"
                                    data-id={{ block.id }}
                                    data-parent={% if block.parent is not null %}{{ block.parent.id }}{% else %}null{% endif %}
                                    data-level={{ block.level }}
                                    data-position={{ block.position }}>
                                    <div>
                                        <div class=\"cl-btn fake-column col-md-5 col-sm-6 col-xs-6\" data-pdl=\"25\">
                                            {% if block.childrens|length>0 %}
                                                <button role=\"button\" class=\"btn green  btn-show-children\"><i
                                                            class=\" fa fa-plus\"></i></button>
                                            {% endif %}
                                            <input style=\"pointer-events: none\" type=\"text\" id=\"title-{{ block.id }}\"
                                                   class=\"form-control  block-title\"
                                                   value=\"{{ block.title }}\">
                                        </div>
                                        <div class=\"fake-column col-md-2 hidden-sm hidden-xs text-center\">
                                            <div class=\"label label-success \">
                                                {% if block.lastValidatedVersion is not null %}
                                                    {{ block.lastValidatedVersion.number|number_format(1,'.',',') }}
                                                {% else %}
                                                    pas de version
                                                {% endif %}
                                            </div>
                                        </div>
                                        <div class=\"fake-column col-md-2 col-sm-2 col-xs-2 text-center\">
                                            <div class=\"label label-success \">
                                                {% if block.publishedVersion is not null %}
                                                    {{ block.publishedVersion.number|number_format(1,'.',',') }}
                                                {% else %}
                                                    pas de version
                                                {% endif %}
                                            </div>
                                        </div>
                                        <div class=\"fake-column actions col-md-3 col-sm-4 col-xs-4 text-center\">
                                            <div >
                                                <a class=\"btn green btn-icon-only\"
                                                   href=\"{{ url('administrator_book_block',{token:block.token}) }}\">
                                                    <i class=\"fa fa-eye\"></i></a>
                                            </div>

                                            <div  data-toggle=\"tooltip\" data-title=\"Détails\">
                                                <a href=\"#block_info_{{ block.id }}\" data-toggle=\"modal\"
                                                   class=\"btn blue btn-icon-only\"><i class=\"fa fa-cog\"></i></a>
                                            </div>
                                            <div data-toggle=\"tooltip\"
                                                 data-title=\"Effacer!\">
                                                <button type=\"button\" class=\"btn red btn-icon-only btn-delete-block\"
                                                        data-id=\"{{ block.id }}\">
                                                    <i class=\"fa fa-trash\"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    {% if block.childrens|length>0 %}
                                        <ol>
                                            {{ macros.displayVersionBlock(block.childrens|sortByPosition) }}
                                        </ol>
                                    {% endif %}
                                </li>
                            {% endfor %}

                        {% endmacro %}
                        <ol class=\"sortable \">
                            {{ macros.displayVersionBlock(book.underBlock|sortByPosition) }}
                        </ol>
                    </div>
                    <div class=\"hiddenForm col-md-12\" style=\"margin-top: 50px\">
                        <div id=\"block-fields-list\" style=\"list-style: none\">
                            {% for block in book.blocks %}
                                <div class=\"block-field \" id=\"block_{{ block.id }}\">
                                    <div data-book=\"{{ book.id }}\" class=\"modal fade fill-in blockModal\" id=\"block_info_{{ block.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                                        <a type=\"button\" class=\"close-modal\" data-dismiss=\"modal\" aria-hidden=\"true\">
                                            <i class=\"fa fa-times\"></i>
                                        </a>
                                        <div class=\"modal-dialog\">
                                            <form action=\"{{ url('administrator_update_block',{id:block.id}) }}\" class=\"updateBlockForm\" {% if block.parent %} data-parent=\"{{ block.parent.id }}\" {% endif %}>
                                                <div class=\"modal-content row\">
                                                    <div class=\"modal-header\">
                                                        <h2><i class=\"fa fa-pencil\"></i>&nbsp; Détails du bloc</h2>
                                                    </div>
                                                    <div class=\"modal-body col-md-12\">
                                                        <div class=\"form-group col-md-12\">
                                                            <label for=\"blockTitle\" class=\"col-sm-4 control-label\">Titre du bloc</label>
                                                            <div class=\"col-sm-8\">
                                                                <input value=\"{{ block.title }}\" name=\"blockTitle\" required type=\"text\" class=\"form-control\" id=\"blockTitle\"
                                                                       placeholder=\"Titre du bloc\">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group text-center col-md-12\">
                                                            <label class=\"col-md-4\" style=\"display: flex\" for=\"showTitle\">
                                                                <div class=\"custom-check\">
                                                                    <input  {% if block.options.showTitle %} checked  {% endif %} id=\"showTitle\" name=\"showTitle\" type=\"checkbox\" role=\"checkbox\"
                                                                           class=\"custom-check-input\">
                                                                </div>
                                                                Afficher Titre
                                                            </label>
                                                            <label class=\"col-md-4\" style=\"display: flex\" for=\"indexed\">
                                                                <div class=\"custom-check\">
                                                                    <input {% if block.options.indexed %} checked  {% endif %} id=\"indexed\" name=\"indexed\" type=\"checkbox\" role=\"checkbox\"
                                                                           class=\"custom-check-input\">
                                                                </div>
                                                                Table des matières
                                                            </label>
                                                            <label class=\"col-md-4\" style=\"display: flex\" for=\"paginated\">
                                                                <div class=\"custom-check\">
                                                                    <input {% if block.options.paginated %} checked  {% endif %} id=\"paginated\" name=\"paginated\" type=\"checkbox\" role=\"checkbox\"
                                                                           class=\"custom-check-input\">
                                                                </div>
                                                                Pagination
                                                            </label>
                                                        </div>
                                                        <div class=\"auths\">
                                                            <h4>Autorization</h4>
                                                                <table class=\"table table-striped table-bordered table-hover auth-tb-author\"
                                                                       cellspacing=\"0\" width=\"100%\">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Auteur</th>
                                                                        <th>Lecture</th>
                                                                        <th>Ecriture</th>
                                                                        <th>Supression</th>
                                                                        <th><span data-toggle=\"tooltip\" data-placement=\"bottom\"
                                                                                  title=\"Limiter l'autorisation seulement a ce bloc\">Strict</span></th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% for authorization in block.authorizations %}
                                                                        {% if 'ROLE_AUTHOR' in authorization.user.roles %}
                                                                            <tr class=\"text-center\">
                                                                                <td>
                                                                                    <select class=\"form-control\" name=\"auth_user\">
                                                                                        {% for user in authors %}
                                                                                            <option {% if  authorization.user.id == user.id %} selected {% endif %}
                                                                                                    value=\"{{ user.id }}\">{{ user.profile.fullName }}</option>
                                                                                        {% endfor %}
                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <div class=\"custom-check\">
                                                                                        <input type=\"checkbox\" class=\"custom-check-input\" name=\"canRead\"
                                                                                            {% if authorization.canRead %} checked {% endif %} value=\"{{ authorization.canRead }}\">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class=\"custom-check\">
                                                                                        <input type=\"checkbox\" class=\"custom-check-input\" name=\"canWrite\"
                                                                                            {% if authorization.canWrite %} checked {% endif %} value=\"{{ authorization.canWrite }}\">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class=\"custom-check\">
                                                                                        <input type=\"checkbox\" class=\"custom-check-input\" name=\"canDelete\"
                                                                                            {% if authorization.canDelete %} checked {% endif %} value=\"{{ authorization.canDelete }}\">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class=\"custom-check\">
                                                                                        <input type=\"checkbox\" class=\"custom-check-input\" name=\"limited\"
                                                                                            {% if authorization.limited %} checked {% endif %} value=\"{{ authorization.limited }}\">
                                                                                    </div>
                                                                                </td>

                                                                                <td class=\"text-center\">
                                                                                    <button data-toggle=\"tooltip\"
                                                                                            data-placement=\"top\" title=\"Effacer ! \"
                                                                                            class=\"btn btn-circle btn-icon-only red remove-auth\">
                                                                                        <i class=\"fa fa-minus\"></i>
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    {% if authors|length>0 %}
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td colspan=\"6\" class=\"col-md-12\">
                                                                            <button type=\"button\" id=\"addAuthor\" class=\"btn green btn-circle btn-icon-only add-auth-btn\" ><i
                                                                                        class=\"fa fa-plus\"></i></button>
                                                                            ajouter un auteur
                                                                        </td>
                                                                    </tr>
                                                                    </tfoot>
                                                                    {% endif %}
                                                                </table>

                                                                <table class=\"table table-striped table-bordered table-hover auth-tb-validator\"
                                                                       cellspacing=\"0\" width=\"100%\">
                                                                    <thead>
                                                                    <tr class=\"text-center\">
                                                                        <th>Validateur</th>
                                                                        <th>
                                                                            <span data-toggle=\"tooltip\" data-placement=\"bottom\"
                                                                                  title=\"Limiter l'autorisation seulement a ce bloc\">Strict</span>
                                                                        </th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    {% for authorization in block.authorizations %}
                                                                        {% if 'ROLE_VALIDATOR' in authorization.user.roles %}
                                                                            <tr class=\"text-center\">
                                                                                <td>
                                                                                    <select class=\"form-control\" name=\"auth_user\">
                                                                                        {% for user in validators %}
                                                                                            <option {% if  authorization.user.id == user.id %} selected {% endif %}
                                                                                                    value=\"{{ user.id }}\">{{ user.profile.fullName }}</option>
                                                                                        {% endfor %}
                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <div class=\"custom-check\">
                                                                                        <input type=\"checkbox\" class=\"custom-check-input\" name=\"limited\"
                                                                                            {% if authorization.limited %} checked {% endif %}  value=\"{{ authorization.limited }}\">
                                                                                    </div>
                                                                                </td>
                                                                                <td class=\"text-center\">
                                                                                    <button data-toggle=\"tooltip\"
                                                                                            data-placement=\"top\" title=\"Effacer ! \"
                                                                                            class=\"btn btn-circle btn-icon-only red remove-auth\">
                                                                                        <i class=\"fa fa-minus\"></i>
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                    </tbody>
                                                                    {% if validators|length>0 %}
                                                                    <tfoot>
                                                                    <tr>
                                                                        <td colspan=\"3\" class=\"col-md-12\">
                                                                            <button type=\"button\" id=\"addValidator\" class=\"btn green btn-circle btn-icon-only add-auth-btn\" {% if validators|length==0  %} disabled {% endif %}><i
                                                                                        class=\"fa fa-plus\"></i></button>
                                                                            ajouter un validateur
                                                                        </td>
                                                                    </tr>
                                                                    </tfoot>
                                                                    {% endif %}
                                                                </table>
                                                        </div>
                                                    </div>
                                                    <div class=\"modal-footer col-md-12\">
                                                        <div class=\"form-group\">
                                                            <div class=\"col-sm-offset-2 col-sm-10\">
                                                                <button type=\"submit\" class=\"btn green\">Sauvegarder</button>
                                                                <button data-dismiss=\"modal\" role=\"button\" class=\"btn red\">Annuler</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"portlet box green-meadow col-md-12\" style=\"margin-bottom: 15px\">
                <div class=\"portlet-title\">
                    <h4 class=\"pull-left\">Édition du Livre</h4>

                    <div class=\"tools\">
                        <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" data-placement=\"bottom\"
                           title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" data-placement=\"bottom\"
                           title=\"\"> </a>
                    </div>
                    <div class=\"actions\" style=\"margin-right: 10px\">
                        <a id=\"addBookEdition\" data-token=\"{{ book.token }}\" class=\"btn green btn-sm\">
                        <i class=\"fa fa-plus\"></i> ajouter une édition</a>
                    </div>
                </div>
                <div class=\"portlet-body\">
                    <table class=\"table table-bordered \">
                        <thead>
                        <tr>
                            <th class=\"text-center col-md-2\">Date Creation</th>
                            <th class=\"text-center col-md-1\">Numéro</th>
                            <th class=\"text-center col-md-6\">Titre indicatif</th>
                            <th class=\"text-center col-md-3\">Action</th>
                        </tr>
                        </thead>
                        <tbody id=\"table-book-versions\">
                        {% for bookEdition in book.editions %}
                            <tr>
                                <td class=\"text-center\">{{ bookEdition.createdAt|date('Y-m-d') }}</td>
                                <td class=\"text-center\">{{ bookEdition.number }}</td>
                                <td>{{ bookEdition.title }}</td>
                                <td class=\"text-center\">
                                    {% if bookEdition.active %}
                                        <button type=\"button\" class=\"btn green btn-sm activate-book-edition disabled\" data-token=\"{{ bookEdition.token }}\">
                                            Activer
                                        </button>
                                    {% else %}
                                        <button data-toggle=\"tooltip\" data-title=\"Charger le contenu de cette édition\" type=\"button\" data-token=\"{{ bookEdition.token }}\"
                                                class=\"btn green btn-sm activate-book-edition\">
                                            Activer
                                        </button>
                                    {% endif %}
                                    <button data-toggle=\"tooltip\" data-title=\"Publier pour les clients\" type=\"button\" data-id=\"{{ bookEdition.id }}\"
                                            class=\"btn blue btn-sm publishBookEdition {% if bookEdition.published %} disabled {% endif %}\">Publier
                                    </button>
                                    <button type=\"button\" data-token=\"{{ bookEdition.token }}\"
                                            class=\"btn red btn-sm deleteBookEdition\">Supprimer
                                    </button>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-books\">

    <div data-book=\"{{ book.id }}\" class=\"modal fade fill-in blockModal\" id=\"new-block-modal\" tabindex=\"-1\" aria-hidden=\"true\">
        <a type=\"button\" class=\"close-modal\" data-dismiss=\"modal\" aria-hidden=\"true\">
            <i class=\"fa fa-times\"></i>
        </a>
        <div class=\"modal-dialog\">
            <form  id=\"createBlockForm\" action=\"{{ url('administrator_create_block',{book:book.id}) }}\" >
                <div class=\"modal-content row\">
                    <div class=\"modal-header\">
                        <h2><i class=\"fa fa-pencil\"></i>&nbsp; Ajouter un bloc</h2>
                    </div>
                    <div class=\"modal-body col-md-12\">
                        <div class=\"form-group col-md-12\">
                            <label for=\"blockTitle\" class=\"col-sm-4 control-label\">Titre du bloc</label>
                            <div class=\"col-sm-8\">
                                <input name=\"blockTitle\" required type=\"text\" class=\"form-control\" id=\"blockTitle\"
                                       placeholder=\"Titre du bloc\">
                            </div>
                        </div>
                        <div class=\"form-group text-center col-md-12\">
                            <label class=\"col-md-4\" style=\"display: flex\" for=\"showTitle\">
                                <div class=\"custom-check\">
                                    <input id=\"showTitle\" name=\"showTitle\" type=\"checkbox\" role=\"checkbox\"
                                           class=\"custom-check-input\">
                                </div>
                                Afficher Titre
                            </label>
                            <label class=\"col-md-4\" style=\"display: flex\" for=\"indexed\">
                                <div class=\"custom-check\">
                                    <input id=\"indexed\" name=\"indexed\" type=\"checkbox\" role=\"checkbox\"
                                           class=\"custom-check-input\">
                                </div>
                                Table des matières
                            </label>
                            <label class=\"col-md-4\" style=\"display: flex\" for=\"paginated\">
                                <div class=\"custom-check\">
                                    <input id=\"paginated\" name=\"paginated\" type=\"checkbox\" role=\"checkbox\"
                                           class=\"custom-check-input\">
                                </div>
                                Pagination
                            </label>
                        </div>
                        <div class=\"auths\">
                            <h4>Autorization</h4>
                            {% if authors|length>0 %}
                            <table class=\"table table-striped table-bordered table-hover auth-tb-author\"
                                   cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <tr>
                                        <th>Auteur</th>
                                        <th>Lecture</th>
                                        <th>Ecriture</th>
                                        <th>Supression</th>
                                        <th><span data-toggle=\"tooltip\" data-placement=\"bottom\"
                                                  title=\"Limiter l'autorisation seulement a ce bloc\">Strict</span></th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan=\"6\" class=\"col-md-12\">
                                            <button type=\"button\" id=\"addAuthor\" class=\"btn green btn-circle btn-icon-only add-auth-btn\" ><i
                                                        class=\"fa fa-plus\"></i></button>
                                            ajouter un auteur
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            {% endif %}
                            {% if validators|length>0 %}
                            <table class=\"table table-striped table-bordered table-hover auth-tb-validator\"
                                   cellspacing=\"0\" width=\"100%\">
                                <thead>
                                    <tr class=\"text-center\">
                                        <th>Validateur</th>
                                        <th>
                                            <span data-toggle=\"tooltip\" data-placement=\"bottom\"
                                                  title=\"Limiter l'autorisation seulement a ce bloc\">Strict</span>
                                        </th>
                                        <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan=\"3\" class=\"col-md-12\">
                                            <button type=\"button\" id=\"addValidator\" class=\"btn green btn-circle btn-icon-only add-auth-btn\" {% if validators|length==0  %} disabled {% endif %}><i
                                                        class=\"fa fa-plus\"></i></button>
                                            ajouter un validateur
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"modal-footer col-md-12\">
                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-2 col-sm-10\">
                                <button type=\"submit\" class=\"btn green\">Crée</button>
                                <button type=\"reset\" data-dismiss=\"modal\" role=\"button\" class=\"btn red\">Annuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/viewer/viewer.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/slick/slick.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/slick/slick-theme.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/pages/css/custom-compo.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/pages/css/book.structure.css') }}\">
{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery.mjs.nestedSortable.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/viewer/viewer.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/slick/slick.min.js') }}\"></script>
    <script src=\"{{ asset('assets/pages/js/book.validation.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset('assets/pages/js/book/admin_edit_book.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/pages/js/book/edit_block_structure.js') }}\"></script>
{% endblock %}", "@Main/Admin/book/edit.book.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\book\\edit.book.html.twig");
    }
}
