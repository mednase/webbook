<?php

/* @Main/Author/show.book.html.twig */
class __TwigTemplate_a3da5c51478caa21271a200148c053e2f676e53f428a1ab90b5b30a39eeb0097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Author/show.book.html.twig", 1);
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
        $__internal_dc112489ca35e193a6a3dc12a5ce38cbb44acdbf527aa44c6ffcf9f11b6afca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc112489ca35e193a6a3dc12a5ce38cbb44acdbf527aa44c6ffcf9f11b6afca7->enter($__internal_dc112489ca35e193a6a3dc12a5ce38cbb44acdbf527aa44c6ffcf9f11b6afca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Author/show.book.html.twig"));

        $__internal_c12a356a9764389e01e921f7edca6c2e924add7ba1251d6f74ee36ca978eb41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c12a356a9764389e01e921f7edca6c2e924add7ba1251d6f74ee36ca978eb41b->enter($__internal_c12a356a9764389e01e921f7edca6c2e924add7ba1251d6f74ee36ca978eb41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Author/show.book.html.twig"));

        // line 2
        $context["macros"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc112489ca35e193a6a3dc12a5ce38cbb44acdbf527aa44c6ffcf9f11b6afca7->leave($__internal_dc112489ca35e193a6a3dc12a5ce38cbb44acdbf527aa44c6ffcf9f11b6afca7_prof);

        
        $__internal_c12a356a9764389e01e921f7edca6c2e924add7ba1251d6f74ee36ca978eb41b->leave($__internal_c12a356a9764389e01e921f7edca6c2e924add7ba1251d6f74ee36ca978eb41b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_35ad209079e4b41f1a4223ed773d8923f14dd9ef103d341efecd98ba2b427612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ad209079e4b41f1a4223ed773d8923f14dd9ef103d341efecd98ba2b427612->enter($__internal_35ad209079e4b41f1a4223ed773d8923f14dd9ef103d341efecd98ba2b427612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1bdf1d01677e469d1477a06586cf14e2b106741d4eff629b2953fea925c193ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdf1d01677e469d1477a06586cf14e2b106741d4eff629b2953fea925c193ac->enter($__internal_1bdf1d01677e469d1477a06586cf14e2b106741d4eff629b2953fea925c193ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_1bdf1d01677e469d1477a06586cf14e2b106741d4eff629b2953fea925c193ac->leave($__internal_1bdf1d01677e469d1477a06586cf14e2b106741d4eff629b2953fea925c193ac_prof);

        
        $__internal_35ad209079e4b41f1a4223ed773d8923f14dd9ef103d341efecd98ba2b427612->leave($__internal_35ad209079e4b41f1a4223ed773d8923f14dd9ef103d341efecd98ba2b427612_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f18d5cbafa400b87bdeeb0cfdb366c0e57b00f5ef4b49cd2a13dd7137bfc8e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f18d5cbafa400b87bdeeb0cfdb366c0e57b00f5ef4b49cd2a13dd7137bfc8e98->enter($__internal_f18d5cbafa400b87bdeeb0cfdb366c0e57b00f5ef4b49cd2a13dd7137bfc8e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e06c0e54e7247e7276e8ca40b77d897310fce5b12e3cc2b7dcab8a1edacdb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e06c0e54e7247e7276e8ca40b77d897310fce5b12e3cc2b7dcab8a1edacdb13->enter($__internal_6e06c0e54e7247e7276e8ca40b77d897310fce5b12e3cc2b7dcab8a1edacdb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <i class=\"fa fa-book\"></i>
                <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_my_books");
        echo "\">Mes livres</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo "</span>
            </li>


        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-book\"></span> &nbsp; ";
        // line 28
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
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\" >Catégorie</label></td>
                            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "category", array()), "name", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\">Auteurs</label> </td>
                            <td>
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "mainAuthors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["autheur"]) {
            // line 57
            echo "                                    - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["autheur"], "fullName", array()), "html", null, true);
            echo "<br>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autheur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                            </td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\" >ISBN</label></td>
                            <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "iSBN", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\" >Langue</label></td>
                            <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "language", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\" >Prix</label></td>
                            <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "price", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\">Résumé</label></td>
                            <td>";
        // line 75
        echo $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "description", array());
        echo "</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class=\"col-md-12 images center\" >
                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 81
            echo "                            <img style=\"padding: 10px\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["img"], "mediaFile"), "html", null, true);
            echo "\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green-meadow\">
                <div class=\"portlet-title\">
                    <h4 class=\"pull-left\">Structure  du livre : ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo "</h4>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body \">
                    <table class=\"table table-striped table-bordered  \" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th class=\"col-md-5 col-sm-6 col-xs-6\">Titre</th>
                            <th class=\"col-md-2 text-center hidden-sm hidden-xs\">Dernière version Validée</th>
                            <th class=\"col-md-2 text-center col-sm-2 col-xs-2\">Version Publiée</th>
                            <th class=\"col-md-3  text-center col-sm-4 col-xs-4\">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 188
        echo "                        ";
        echo $context["macros"]->getdisplayVersionBlock($this->env->getExtension('Webbook\MainBundle\Twig\Extension\BlockOptions')->sortByPosition($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "underBlock", array())));
        echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-my-books\">

";
        
        $__internal_6e06c0e54e7247e7276e8ca40b77d897310fce5b12e3cc2b7dcab8a1edacdb13->leave($__internal_6e06c0e54e7247e7276e8ca40b77d897310fce5b12e3cc2b7dcab8a1edacdb13_prof);

        
        $__internal_f18d5cbafa400b87bdeeb0cfdb366c0e57b00f5ef4b49cd2a13dd7137bfc8e98->leave($__internal_f18d5cbafa400b87bdeeb0cfdb366c0e57b00f5ef4b49cd2a13dd7137bfc8e98_prof);

    }

    // line 198
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2a00af9a338f6db58c590fde6fbf8a8a257cf5e8b6955aefa282dd5dda468c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2a00af9a338f6db58c590fde6fbf8a8a257cf5e8b6955aefa282dd5dda468c3->enter($__internal_c2a00af9a338f6db58c590fde6fbf8a8a257cf5e8b6955aefa282dd5dda468c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_05306c8da7da3f7435488cdee2a53acf37c527acb17965388df575c2698564b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05306c8da7da3f7435488cdee2a53acf37c527acb17965388df575c2698564b2->enter($__internal_05306c8da7da3f7435488cdee2a53acf37c527acb17965388df575c2698564b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 199
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/viewer/viewer.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/slick/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/slick/slick-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/book.structure.css"), "html", null, true);
        echo "\">
";
        
        $__internal_05306c8da7da3f7435488cdee2a53acf37c527acb17965388df575c2698564b2->leave($__internal_05306c8da7da3f7435488cdee2a53acf37c527acb17965388df575c2698564b2_prof);

        
        $__internal_c2a00af9a338f6db58c590fde6fbf8a8a257cf5e8b6955aefa282dd5dda468c3->leave($__internal_c2a00af9a338f6db58c590fde6fbf8a8a257cf5e8b6955aefa282dd5dda468c3_prof);

    }

    // line 204
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fa2a3ebdec6ef1e88006276530c0c978db9de128f823f66b0b93bef486351c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa2a3ebdec6ef1e88006276530c0c978db9de128f823f66b0b93bef486351c2c->enter($__internal_fa2a3ebdec6ef1e88006276530c0c978db9de128f823f66b0b93bef486351c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ab30849a3eaab8bafc581ece002351a10df6dc3b76f4ab3f55b5d58efa48909b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab30849a3eaab8bafc581ece002351a10df6dc3b76f4ab3f55b5d58efa48909b->enter($__internal_ab30849a3eaab8bafc581ece002351a10df6dc3b76f4ab3f55b5d58efa48909b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 205
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/viewer/viewer.min.js"), "html", null, true);
        echo "\"></script>
   <script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/js/author_show_book.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ab30849a3eaab8bafc581ece002351a10df6dc3b76f4ab3f55b5d58efa48909b->leave($__internal_ab30849a3eaab8bafc581ece002351a10df6dc3b76f4ab3f55b5d58efa48909b_prof);

        
        $__internal_fa2a3ebdec6ef1e88006276530c0c978db9de128f823f66b0b93bef486351c2c->leave($__internal_fa2a3ebdec6ef1e88006276530c0c978db9de128f823f66b0b93bef486351c2c_prof);

    }

    // line 109
    public function getdisplayVersionBlock($__blocks__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "blocks" => $__blocks__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_57eb630ff3a7c243784fe79bb4ce91fa23cf6f27f6e8776cff319335d53e9bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_57eb630ff3a7c243784fe79bb4ce91fa23cf6f27f6e8776cff319335d53e9bce->enter($__internal_57eb630ff3a7c243784fe79bb4ce91fa23cf6f27f6e8776cff319335d53e9bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "displayVersionBlock"));

            $__internal_cb676db781e14d35cc3272680c75251a0951f95a067e9f9cea6c3b6e7cfbc6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_cb676db781e14d35cc3272680c75251a0951f95a067e9f9cea6c3b6e7cfbc6e1->enter($__internal_cb676db781e14d35cc3272680c75251a0951f95a067e9f9cea6c3b6e7cfbc6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "displayVersionBlock"));

            // line 110
            echo "                            ";
            $context["macros"] = $this;
            // line 111
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Snilius\Twig\SortByFieldExtension')->sortByFieldFilter((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 112
                echo "                                <tr ";
                if ($this->getAttribute($context["block"], "parent", array())) {
                    echo "data-parent=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "parent", array()), "id", array()), "html", null, true);
                    echo "\" ";
                }
                echo " class=\" ";
                if (($this->getAttribute($context["block"], "level", array()) > 0)) {
                    echo " hidden";
                }
                echo "\">
                                    <td  style=\"overflow-x: hidden\" class=\"col-md-5 col-sm-6 col-xs-6\" data-pdl=\"25\" data-level=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "level", array()), "html", null, true);
                echo "\">
                                        ";
                // line 114
                if ((twig_length_filter($this->env, $this->getAttribute($context["block"], "childrens", array())) > 0)) {
                    // line 115
                    echo "                                            <button class=\"btn green btn-xs btn-show-children\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
                    echo "\"><i class=\" fa fa-plus\"></i></button>
                                        ";
                }
                // line 117
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "title", array()), "html", null, true);
                echo "
                                    </td>
                                    <td class=\"text-center col-md-2 hidden-sm hidden-xs\">
                                        <div class=\"label label-success\">
                                            ";
                // line 121
                if ( !(null === $this->getAttribute($context["block"], "lastValidatedVersion", array()))) {
                    // line 122
                    echo "                                                v ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "lastValidatedVersion", array()), "number", array()), 1, ".", ","), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 124
                    echo "                                                Aucune
                                            ";
                }
                // line 126
                echo "                                        </div>
                                    </td>
                                    <td class=\"col-md-2 col-sm-2 col-xs-2 text-center\">
                                        <div class=\"label label-success\">
                                            ";
                // line 130
                if ( !(null === $this->getAttribute($context["block"], "publishedVersion", array()))) {
                    // line 131
                    echo "                                                v ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["block"], "publishedVersion", array()), "number", array()), 1, ".", ","), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 133
                    echo "                                                Aucune
                                            ";
                }
                // line 135
                echo "                                        </div>
                                    </td>
                                    <td class=\"text-center col-md-3 col-sm-4 col-xs-4 text-center\">
                                        <div class=\"\">
                                            <a  ";
                // line 139
                if (($this->env->getExtension('Webbook\MainBundle\Twig\Extension\BlockOptions')->hasPermission("r", $context["block"]) || (twig_length_filter($this->env, $this->getAttribute($context["block"], "childrens", array())) > 0))) {
                    echo "class=\"btn btn-icon-only blue\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_show_block", array("token" => $this->getAttribute($context["block"], "token", array()))), "html", null, true);
                    echo "\"  ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute($context["block"], "childrens", array())) == 0)) {
                    echo "class=\"btn btn-icon-only blue disabled-link \" data-toggle=\"tooltip\" data-title=\"Tu na pas la permission\"";
                }
                echo "><i class=\"fa fa-eye\"></i> </a>
                                            ";
                // line 140
                $context["version_edit"] = $this->env->getExtension('Webbook\MainBundle\Twig\Extension\BlockOptions')->versionHasStatus(0, $context["block"]);
                // line 141
                echo "                                            ";
                $context["version_validate"] = $this->env->getExtension('Webbook\MainBundle\Twig\Extension\BlockOptions')->versionHasStatus(1, $context["block"]);
                // line 142
                echo "
                                        ";
                // line 143
                if ($this->env->getExtension('Webbook\MainBundle\Twig\Extension\BlockOptions')->hasPermission("w", $context["block"])) {
                    // line 144
                    echo "                                            ";
                    if ( !(null === (isset($context["version_edit"]) ? $context["version_edit"] : $this->getContext($context, "version_edit")))) {
                        // line 145
                        echo "                                                ";
                        if (($this->getAttribute((isset($context["version_edit"]) ? $context["version_edit"] : $this->getContext($context, "version_edit")), "createdBy", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                            // line 146
                            echo "                                                <a class=\"btn btn-icon-only blue-hoki\" data-toggle=\"tooltip\" data-title=\"Continuer l'edition du version\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_block_version_edit", array("token" => $this->getAttribute((isset($context["version_edit"]) ? $context["version_edit"] : $this->getContext($context, "version_edit")), "token", array()))), "html", null, true);
                            echo "\"><i class=\"fa fa-pencil-square-o\" ></i></a>
                                                ";
                        } else {
                            // line 148
                            echo "                                                <div class=\"btn-group\">
                                                    <button class=\"btn btn-icon-only green disabled\"  data-toggle=\"tooltip\"
                                                            data-title=\"Il ya une autre version en cours !\">
                                                            <i class=\"fa fa-pencil-square-o\" ></i>
                                                    </button>
                                                </div>
                                                ";
                        }
                        // line 155
                        echo "                                                ";
                    } elseif ( !(null === (isset($context["version_validate"]) ? $context["version_validate"] : $this->getContext($context, "version_validate")))) {
                        // line 156
                        echo "                                                        <button data-toggle=\"tooltip\" data-title=\"Encours de validation\" class=\"btn btn-icon-only yellow disabled\">
                                                            <i class=\"fa fa-check-square-o\"></i>
                                                        </button>
                                                ";
                    } else {
                        // line 160
                        echo "                                                    <button data-toggle=\"tooltip\" data-title=\"Crée une nouvelle version\"
                                                            class=\"btn green btn-icon-only btn-create-new-version\"
                                                            data-url=\"";
                        // line 162
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_create_block_version", array("token" => $this->getAttribute($context["block"], "token", array()))), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                    </button>
                                                ";
                    }
                    // line 166
                    echo "                                            ";
                } else {
                    // line 167
                    echo "                                                <button class=\"btn green btn-icon-only disabled\" data-toggle=\"tooltip\"
                                                        data-title=\"Tu na pas la permission\">
                                                    <i class=\"fa fa-pencil-square-o\"></i>
                                                </button>
                                            ";
                }
                // line 172
                echo "                                            <button ";
                if ($this->env->getExtension('Webbook\MainBundle\Twig\Extension\BlockOptions')->hasPermission("d", $context["block"])) {
                    echo "class=\"btn red btn-icon-only btn-delet-block\"
                                                        data-url=\"";
                    // line 173
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_delete_block", array("token" => $this->getAttribute($context["block"], "token", array()))), "html", null, true);
                    echo "\"
                                                    ";
                } else {
                    // line 175
                    echo "                                                        class=\"btn btn-icon-only red disabled \"  data-toggle=\"tooltip\"
                                                        data-title=\"Tu na pas la permission\"
                                                    ";
                }
                // line 177
                echo ">
                                                <i class=\"fa fa-trash\"></i>
                                            </button>
                                        </div>
                                    </td>
                                    ";
                // line 182
                if ((twig_length_filter($this->env, $this->getAttribute($context["block"], "childrens", array())) > 0)) {
                    // line 183
                    echo "                                        ";
                    echo $context["macros"]->getdisplayVersionBlock($this->env->getExtension('Webbook\MainBundle\Twig\Extension\BlockOptions')->sortByPosition($this->getAttribute($context["block"], "childrens", array())));
                    echo "
                                    ";
                }
                // line 185
                echo "                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                        ";
            
            $__internal_cb676db781e14d35cc3272680c75251a0951f95a067e9f9cea6c3b6e7cfbc6e1->leave($__internal_cb676db781e14d35cc3272680c75251a0951f95a067e9f9cea6c3b6e7cfbc6e1_prof);

            
            $__internal_57eb630ff3a7c243784fe79bb4ce91fa23cf6f27f6e8776cff319335d53e9bce->leave($__internal_57eb630ff3a7c243784fe79bb4ce91fa23cf6f27f6e8776cff319335d53e9bce_prof);

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
        return "@Main/Author/show.book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 187,  519 => 185,  513 => 183,  511 => 182,  504 => 177,  499 => 175,  494 => 173,  489 => 172,  482 => 167,  479 => 166,  472 => 162,  468 => 160,  462 => 156,  459 => 155,  450 => 148,  444 => 146,  441 => 145,  438 => 144,  436 => 143,  433 => 142,  430 => 141,  428 => 140,  418 => 139,  412 => 135,  408 => 133,  402 => 131,  400 => 130,  394 => 126,  390 => 124,  384 => 122,  382 => 121,  374 => 117,  368 => 115,  366 => 114,  362 => 113,  349 => 112,  344 => 111,  341 => 110,  323 => 109,  311 => 207,  307 => 206,  302 => 205,  293 => 204,  281 => 202,  277 => 201,  273 => 200,  268 => 199,  259 => 198,  238 => 188,  218 => 92,  207 => 83,  198 => 81,  194 => 80,  186 => 75,  179 => 71,  172 => 67,  165 => 63,  159 => 59,  150 => 57,  146 => 56,  138 => 51,  131 => 47,  109 => 28,  99 => 21,  92 => 17,  84 => 12,  77 => 7,  68 => 6,  55 => 4,  46 => 3,  36 => 1,  34 => 2,  11 => 1,);
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
    {{ book.title }}
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
                <i class=\"fa fa-book\"></i>
                <a href=\"{{ url('author_my_books') }}\">Mes livres</a>
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
                                    - {{ autheur.fullName }}<br>
                                {% endfor %}
                            </td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\" >ISBN</label></td>
                            <td>{{ book.iSBN }}</td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\" >Langue</label></td>
                            <td>{{ book.language }}</td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\" >Prix</label></td>
                            <td>{{ book.price }}</td>
                        </tr>
                        <tr>
                            <td class=\"col-md-2\"><label class=\"custom-lb\">Résumé</label></td>
                            <td>{{ book.description|raw }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class=\"col-md-12 images center\" >
                        {% for img in book.images %}
                            <img style=\"padding: 10px\" src=\"{{ vich_uploader_asset(img,'mediaFile') }}\">
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
                    <h4 class=\"pull-left\">Structure  du livre : {{ book.title }}</h4>
                    <div class=\"tools\">
                        <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body \">
                    <table class=\"table table-striped table-bordered  \" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th class=\"col-md-5 col-sm-6 col-xs-6\">Titre</th>
                            <th class=\"col-md-2 text-center hidden-sm hidden-xs\">Dernière version Validée</th>
                            <th class=\"col-md-2 text-center col-sm-2 col-xs-2\">Version Publiée</th>
                            <th class=\"col-md-3  text-center col-sm-4 col-xs-4\">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% macro displayVersionBlock(blocks) %}
                            {% import _self as macros %}
                            {% for block in blocks| sortbyfield('position') %}
                                <tr {% if block.parent %}data-parent=\"{{ block.parent.id }}\" {% endif %} class=\" {% if block.level>0%} hidden{% endif %}\">
                                    <td  style=\"overflow-x: hidden\" class=\"col-md-5 col-sm-6 col-xs-6\" data-pdl=\"25\" data-level=\"{{ block.level }}\">
                                        {% if block.childrens|length>0 %}
                                            <button class=\"btn green btn-xs btn-show-children\" data-id=\"{{ block.id }}\"><i class=\" fa fa-plus\"></i></button>
                                        {% endif %}
                                        {{ block.title }}
                                    </td>
                                    <td class=\"text-center col-md-2 hidden-sm hidden-xs\">
                                        <div class=\"label label-success\">
                                            {% if block.lastValidatedVersion is not null %}
                                                v {{ block.lastValidatedVersion.number|number_format(1,'.',',') }}
                                            {% else %}
                                                Aucune
                                            {% endif %}
                                        </div>
                                    </td>
                                    <td class=\"col-md-2 col-sm-2 col-xs-2 text-center\">
                                        <div class=\"label label-success\">
                                            {% if block.publishedVersion is not null %}
                                                v {{ block.publishedVersion.number|number_format(1,'.',',') }}
                                            {% else %}
                                                Aucune
                                            {% endif %}
                                        </div>
                                    </td>
                                    <td class=\"text-center col-md-3 col-sm-4 col-xs-4 text-center\">
                                        <div class=\"\">
                                            <a  {% if has_permission('r',block) or block.childrens|length>0  %}class=\"btn btn-icon-only blue\" href=\"{{ url('author_show_block',{token:block.token} ) }}\"  {% elseif block.childrens|length==0 %}class=\"btn btn-icon-only blue disabled-link \" data-toggle=\"tooltip\" data-title=\"Tu na pas la permission\"{% endif %}><i class=\"fa fa-eye\"></i> </a>
                                            {%  set version_edit = version_has_status(0,block) %}
                                            {%  set version_validate = version_has_status(1,block) %}

                                        {% if has_permission('w',block) %}
                                            {% if version_edit is not null %}
                                                {% if version_edit.createdBy==app.user %}
                                                <a class=\"btn btn-icon-only blue-hoki\" data-toggle=\"tooltip\" data-title=\"Continuer l'edition du version\" href=\"{{ url('author_block_version_edit',{token:version_edit.token}) }}\"><i class=\"fa fa-pencil-square-o\" ></i></a>
                                                {% else%}
                                                <div class=\"btn-group\">
                                                    <button class=\"btn btn-icon-only green disabled\"  data-toggle=\"tooltip\"
                                                            data-title=\"Il ya une autre version en cours !\">
                                                            <i class=\"fa fa-pencil-square-o\" ></i>
                                                    </button>
                                                </div>
                                                {% endif %}
                                                {% elseif version_validate is not null %}
                                                        <button data-toggle=\"tooltip\" data-title=\"Encours de validation\" class=\"btn btn-icon-only yellow disabled\">
                                                            <i class=\"fa fa-check-square-o\"></i>
                                                        </button>
                                                {% else %}
                                                    <button data-toggle=\"tooltip\" data-title=\"Crée une nouvelle version\"
                                                            class=\"btn green btn-icon-only btn-create-new-version\"
                                                            data-url=\"{{ url('author_create_block_version',{token:block.token}) }}\">
                                                        <i class=\"fa fa-pencil-square-o\"></i>
                                                    </button>
                                                {% endif %}
                                            {% else %}
                                                <button class=\"btn green btn-icon-only disabled\" data-toggle=\"tooltip\"
                                                        data-title=\"Tu na pas la permission\">
                                                    <i class=\"fa fa-pencil-square-o\"></i>
                                                </button>
                                            {% endif %}
                                            <button {% if has_permission('d',block) %}class=\"btn red btn-icon-only btn-delet-block\"
                                                        data-url=\"{{ url('author_delete_block',{token:block.token}) }}\"
                                                    {% else %}
                                                        class=\"btn btn-icon-only red disabled \"  data-toggle=\"tooltip\"
                                                        data-title=\"Tu na pas la permission\"
                                                    {% endif %}>
                                                <i class=\"fa fa-trash\"></i>
                                            </button>
                                        </div>
                                    </td>
                                    {% if block.childrens|length>0 %}
                                        {{ macros.displayVersionBlock(block.childrens|sortByPosition) }}
                                    {% endif %}
                                </tr>
                            {% endfor %}
                        {% endmacro %}
                        {{ macros.displayVersionBlock(book.underBlock|sortByPosition) }}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-my-books\">

{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/viewer/viewer.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/slick/slick.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/slick/slick-theme.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/pages/css/book.structure.css') }}\">
{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/slick/slick.min.js') }}\"></script>
    <script src=\"{{ asset('assets/global/plugins/viewer/viewer.min.js') }}\"></script>
   <script type=\"text/javascript\" src=\"{{ asset('assets/pages/js/author_show_book.js') }}\"></script>
{% endblock %}", "@Main/Author/show.book.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Author\\show.book.html.twig");
    }
}
