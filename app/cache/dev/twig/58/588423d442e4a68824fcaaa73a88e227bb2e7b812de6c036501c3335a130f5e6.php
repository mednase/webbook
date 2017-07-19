<?php

/* @Main/Admin/book/search.book.html.twig */
class __TwigTemplate_f96144b52d23b93997eafc0b3d4abcf0aef2262e5a84c2315583fde1d03f14a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/book/search.book.html.twig", 1);
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
        $__internal_dbb468c019a416ee51eb64431a604ac2f3e613e932c403953da0d9327223d469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb468c019a416ee51eb64431a604ac2f3e613e932c403953da0d9327223d469->enter($__internal_dbb468c019a416ee51eb64431a604ac2f3e613e932c403953da0d9327223d469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/book/search.book.html.twig"));

        $__internal_91a6debf8e8bce52bbd89b09cb0ad5e703f4f821af289826f41d983d47e9babc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a6debf8e8bce52bbd89b09cb0ad5e703f4f821af289826f41d983d47e9babc->enter($__internal_91a6debf8e8bce52bbd89b09cb0ad5e703f4f821af289826f41d983d47e9babc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/book/search.book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbb468c019a416ee51eb64431a604ac2f3e613e932c403953da0d9327223d469->leave($__internal_dbb468c019a416ee51eb64431a604ac2f3e613e932c403953da0d9327223d469_prof);

        
        $__internal_91a6debf8e8bce52bbd89b09cb0ad5e703f4f821af289826f41d983d47e9babc->leave($__internal_91a6debf8e8bce52bbd89b09cb0ad5e703f4f821af289826f41d983d47e9babc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba5d8902e33b88ee1083f7154157f36f505e04605f981daf6b7045c525f2323d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5d8902e33b88ee1083f7154157f36f505e04605f981daf6b7045c525f2323d->enter($__internal_ba5d8902e33b88ee1083f7154157f36f505e04605f981daf6b7045c525f2323d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4db02521216fb324ddb08bf3171dbd204595188d7a1bd1fa52627835e368c527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db02521216fb324ddb08bf3171dbd204595188d7a1bd1fa52627835e368c527->enter($__internal_4db02521216fb324ddb08bf3171dbd204595188d7a1bd1fa52627835e368c527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Recherche de livre
";
        
        $__internal_4db02521216fb324ddb08bf3171dbd204595188d7a1bd1fa52627835e368c527->leave($__internal_4db02521216fb324ddb08bf3171dbd204595188d7a1bd1fa52627835e368c527_prof);

        
        $__internal_ba5d8902e33b88ee1083f7154157f36f505e04605f981daf6b7045c525f2323d->leave($__internal_ba5d8902e33b88ee1083f7154157f36f505e04605f981daf6b7045c525f2323d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b9131b2e74e7efb541f299ce47dfa7443039e452910f10d2d9efd9af625bbcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9131b2e74e7efb541f299ce47dfa7443039e452910f10d2d9efd9af625bbcf->enter($__internal_1b9131b2e74e7efb541f299ce47dfa7443039e452910f10d2d9efd9af625bbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3260642e036eae32d405784f16d6db26b9086443e9d5c059d69b2ef5a726f5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3260642e036eae32d405784f16d6db26b9086443e9d5c059d69b2ef5a726f5f3->enter($__internal_3260642e036eae32d405784f16d6db26b9086443e9d5c059d69b2ef5a726f5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"fa fa-home\"></i>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Recherche de livre</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"icon-c-search-book\"></span> &nbsp; Recherche de livre </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green\">
                <div class=\"portlet-title\">
                    <div class=\"tools\">
                        <a href=\"javascript:;\" data-placement=\"bottom\" class=\"collapse\" data-original-title=\"reduire\"
                           title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-placement=\"bottom\" data-original-title=\"plein ecran\"
                           title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body col-md-12\">
                    <form>
                        <div class=\"clearfix mgb-5\">
                            <div class=\"bloc-select blc-alphabet clearfix\">
                                <a class=\"select-All\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_search_book");
        echo "\">Tous</a>
                                <ul class=\"letter-select\">
                                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "A", 1 => "B", 2 => "C", 3 => "D", 4 => "E", 5 => "F", 6 => "G", 7 => "H", 8 => "I", 9 => "J", 10 => "K", 11 => "L", 12 => "M", 13 => "N", 14 => "O", 15 => "P", 16 => "Q", 17 => "R", 18 => "S", 19 => "T", 20 => "U", 21 => "V", 22 => "W", 23 => "X", 24 => "Y", 25 => "Z"));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 43
            echo "                                    <li value=\"";
            echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
            echo "\"
                                            ";
            // line 44
            if ($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array(), "any", false, true), "letter", array(), "array", true, true)) {
                // line 45
                echo "                                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "params", array()), "letter", array(), "array") == $context["letter"])) {
                    // line 46
                    echo "                                                    class=\"active\"
                                                ";
                }
                // line 48
                echo "                                            ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
            echo "</li>
                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                </ul>
                            </div>
                        </div>
                        <div class=\"clearfix mgb-5\" style=\"display: flex;\">
                            <div class=\"bloc-select col-md-4\">
                                <input type=\"text\" class=\"form-control\" name=\"title\" placeholder=\"Titre\"
                                        ";
        // line 56
        if ($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array(), "any", false, true), "title", array(), "array", true, true)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "params", array()), "title", array(), "array"), "html", null, true);
            echo "\" ";
        }
        echo ">
                            </div>
                            <div class=\" bloc-select col-md-4\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Auteur\" name=\"author\"
                                        ";
        // line 60
        if ($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array(), "any", false, true), "author", array(), "array", true, true)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "params", array()), "author", array(), "array"), "html", null, true);
            echo "\" ";
        }
        echo ">
                            </div>
                            <div class=\" bloc-select col-md-4\">
                                <select name=\"category\" class=\"form-control\">
                                    <option value=\"\" ";
        // line 64
        if ( !$this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array(), "any", false, true), "category", array(), "array", true, true)) {
            echo "selected";
        }
        echo ">Categorie</option>
                                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 66
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\"
                                        ";
            // line 67
            if ($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array(), "any", false, true), "category", array(), "array", true, true)) {
                // line 68
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "params", array()), "category", array(), "array") == $this->getAttribute($context["category"], "id", array()))) {
                    // line 69
                    echo "                                                selected
                                            ";
                }
                // line 71
                echo "                                        ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"clearfix mgb-5\" style=\"display: flex;\">
                            <div class=\"bloc-select blc-tri col-md-4\">
                                <select class=\"form-control\" name=\"sort\">
                                    <option value=\"\" ";
        // line 79
        if ( !$this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array(), "any", false, true), "sort", array(), "array", true, true)) {
            echo " selected ";
        }
        echo ">Trier par <span class=\"ft-semi\">ordre alphabétique</span>
                                    </option>
                                    <option value=\"ASC\"
                                            ";
        // line 82
        if ($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array(), "any", false, true), "sort", array(), "array", true, true)) {
            // line 83
            echo "                                                ";
            if (($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "params", array()), "sort", array(), "array") == "ASC")) {
                // line 84
                echo "                                                    selected
                                                ";
            }
            // line 86
            echo "                                            ";
        }
        echo ">Croissant</option>
                                    <option value=\"DESC\"
                                            ";
        // line 88
        if ($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array(), "any", false, true), "sort", array(), "array", true, true)) {
            // line 89
            echo "                                        ";
            if (($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "params", array()), "sort", array(), "array") == "DESC")) {
                // line 90
                echo "                                            selected
                                        ";
            }
            // line 92
            echo "                                            ";
        }
        echo ">Décroissant</option>
                                </select>
                            </div>
                            <div class=\"bloc-select col-md-5\">
                                <div id=\"publicationDate\" class=\"pull-right\">
                                    <i style=\"float: left\" class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                    <span class=\"dateRangePlaceHolder\"> Date de publication </span>
                                    <span></span> <b class=\"caret\"></b>
                                </div>
                            </div>
                            <div class=\"bloc-select col-md-3\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"ISBN\" name=\"isbn\">
                            </div>
                        </div>
                        <div class=\"clearfix mgb-5\" style=\"display: flex;\">

                            <div class=\"bloc-select blc-result col-md-4\">
                                <div>
                                    ";
        // line 110
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) > 0)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "-";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))), "html", null, true);
        echo "
                                    sur ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
                                    résultats
                                </div>
                            </div>
                            <div class=\"bloc-select blc-nav col-md-1\">
                                <i class=\"fa fa-chevron-left\"></i>
                            </div>
                            <div class=\"bloc-select blc-pages col-md-2\">
                                <div>
                                    page ";
        // line 120
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) > 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "currentPageNumber", array()), "html", null, true);
        } else {
            echo "0";
        }
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pageCount", array()), "html", null, true);
        echo "
                                </div>
                            </div>
                            <div class=\"bloc-select blc-nav col-md-1\">
                                <i class=\"fa fa-chevron-right\"></i>
                            </div>
                            <div class=\"bloc-select col-md-4\">
                                <input type=\"submit\" class=\"btn btn-block btn-primary\" value=\"Chercher\">
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"publicationFrom\">
                        <input type=\"hidden\" name=\"publicationTo\">
                    </form>
                    <div class=\"col-md-12 clearfix\" style=\"padding: 0\">
                        <ul class=\" found-books\">
                            ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 136
            echo "                                <li class=\"col-md-12 book-item\">
                                    <div class=\"col-md-3 text-center\">
                                        <img class=\"img-responsive\" src=\"";
            // line 138
            if ((twig_length_filter($this->env, $this->getAttribute($context["book"], "images", array())) > 0)) {
                // line 139
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($this->getAttribute($this->getAttribute($context["book"], "images", array()), "first", array()), "mediaFile"), "html", null, true);
                echo "
                                              ";
            } else {
                // line 141
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/no-book-image.png"), "html", null, true);
                echo "
                                                ";
            }
            // line 142
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"col-md-9 row\">
                                        <div class=\"infos-book col-md-12\">
                                            <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_edit_book", array("token" => $this->getAttribute($context["book"], "token", array()))), "html", null, true);
            echo "\" class=\"book-title\">
                                                ";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo "
                                            </a>
                                            <p class=\"col-md-12\">
                                                ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["book"], "mainAuthors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 151
                echo "                                                - <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_show_user", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
                echo "\" class=\"author\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "fullName", array()), "html", null, true);
                echo "</a><br>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "                                            </p>
                                            <p class=\"col-md-12\">
                                                ";
            // line 155
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["book"], "description", array()), 1, 600), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["book"], "description", array())) > 600)) {
                echo "....";
            }
            // line 156
            echo "                                            </p>
                                            <p class=\"col-md-12\" style=\"color:#bfbdbe;\">
                                                <span class=\"col-md-6\">Category : ";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["book"], "category", array()), "name", array()), "html", null, true);
            echo "</span>
                                                <span class=\"col-md-6\">Date Publication : ";
            // line 159
            if ($this->getAttribute($context["book"], "published", array())) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["book"], "publishDate", array()), "d-m-Y"), "html", null, true);
            } else {
                echo "Pas encore";
            }
            echo "</span>
                                            </p>
                                            <div class=\"col-md-12\">
                                                <a style=\"font-size: 18px\" href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrator_edit_book", array("token" => $this->getAttribute($context["book"], "token", array()))), "html", null, true);
            echo "\" class=\"btn green btn-outline pull-right\">
                                                    <i class=\"fa fa-eye\"></i>&nbsp;&nbsp; Voir</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                        </ul>
                    </div>
                    <div class=\"navigation col-md-12 text-center\">
                        ";
        // line 172
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), ":KnpPaginatorBundle/Pagination:site_defaut_pagination.html.twig");
        echo "
                    </div>
                    ";
        // line 174
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) == 0)) {
            // line 175
            echo "                    <div class=\"col-md-12 text-center\">
                        <h1 style=\"color: grey\">Aucun livre trouvée</h1>
                    </div>
                    ";
        }
        // line 179
        echo "                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-book-search\">
";
        
        $__internal_3260642e036eae32d405784f16d6db26b9086443e9d5c059d69b2ef5a726f5f3->leave($__internal_3260642e036eae32d405784f16d6db26b9086443e9d5c059d69b2ef5a726f5f3_prof);

        
        $__internal_1b9131b2e74e7efb541f299ce47dfa7443039e452910f10d2d9efd9af625bbcf->leave($__internal_1b9131b2e74e7efb541f299ce47dfa7443039e452910f10d2d9efd9af625bbcf_prof);

    }

    // line 185
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_963dd8b9d0f2bb871876785aeae1de5538816a35e6ee57ada841dec8a657cf51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963dd8b9d0f2bb871876785aeae1de5538816a35e6ee57ada841dec8a657cf51->enter($__internal_963dd8b9d0f2bb871876785aeae1de5538816a35e6ee57ada841dec8a657cf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f8b6484d4bd0215fd383ac6ba4413a71f8f5fac0462c097f0e1cc3d14bdb2d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b6484d4bd0215fd383ac6ba4413a71f8f5fac0462c097f0e1cc3d14bdb2d52->enter($__internal_f8b6484d4bd0215fd383ac6ba4413a71f8f5fac0462c097f0e1cc3d14bdb2d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 186
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-daterange/daterangepicker.css"), "html", null, true);
        echo "\">
    <style>

        .found-books{
            padding:0px;
            list-style: none;
        }
        .found-books .book-item{
            margin: 5px;
            padding:10px;
            background-color: whitesmoke;
        }
        .infos-book .book-title{
            font-size: 25px;
            color: #3a3a3a;
            font-family: \"Bree Serif\",sans-serif;
            text-decoration: none;
        }
        .infos-book .author{
            font-size: 18px;
            color: #32c5d2;
            font-family: \"Bree Serif\",sans-serif;
            text-decoration: none;
        }
        .bloc-select {
            background: #f2f2f2;
            border: 1px solid #dbdbdb;
            padding: 5px;
            text-align: center;
        }
        .btn{
            padding: 7px 30px!important;
        }
        .mgb-5 {
            margin-bottom: 5px;
        }

        .bloc-select a {
            text-decoration: none;
            background: white;
            font-weight: 600;
            color: #0a0f19;
            display: block;
            border: 1px solid white;
            line-height: 1em;
            height: 32px;
            padding: 0 10px 0 6px;
            cursor: pointer;
            width: 100%;
            vertical-align: middle;
        }

        .bloc-select.blc-alphabet {
            padding: 5px !important;
        }

        .bloc-select.blc-alphabet ul {
            margin: 0;
            list-style: none;
            display: block;
            float: left;
            position: relative;
            top: auto;
            left: auto;
            right: auto;
            background: none;
            border: none;
            width: 90%;
            padding-left: 10px;
        }

        .bloc-select.blc-alphabet ul li {
            display: inline-block;
            position: relative;
            padding: 8px 6px;
            cursor: pointer;
            line-height: normal;
            float: left;
            background: none;
            width: 3.8461538462%;
            text-align: center;
            border-left: 2px solid #f2f2f2;
            border-right: 2px solid #f2f2f2;
            -webkit-transition: color 0.5s, font-size 0.5s;
            -moz-transition: color 0.5s, font-size 0.5s;
            -o-transition: color 0.5s, font-size 0.5s;
            transition: color 0.5s, font-size 0.5s;
        }

        .bloc-select.blc-alphabet ul li:hover,.bloc-select.blc-alphabet ul li.active {
            background-color: white;
            font-weight: bold;
            /* Adjust for font-weight bold so that the text will still align */
            letter-spacing: -1px;
            color: #01b070;
        }

        .bloc-select.blc-alphabet .select-All {
            float: left;
            width: 10%;
            text-align: center;
            padding-top: 10px;
        }

        .bloc-select.blc-alphabet .select-All:hover {
            background-color: white;
            cursor: pointer;
        }

        .bloc-select.blc-result {
            padding-top: 13px;
            background-color: white;
        }

        .bloc-select.blc-nav {
            color: rgba(182, 180, 180, 0.33);
            font-size: 18px;
            padding-top: 13px;
            background-color: white;
        }

        .bloc-select.blc-nav.nvl, .bloc-select.blc-nav.nvr {
            cursor: pointer;
            color: #0a0a0a;
        }

        .bloc-select.blc-pages {
            padding-top: 13px;
            background-color: white;
        }

        #loading-icon {
            color: #17c4bb;
            right: 90px;
            position: absolute;
            top: 10px;
            font-size: 25px;
            z-index: 5;
        }

        .mt-comment {
            text-decoration: none;
        }

        *:before, *:after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            outline: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
            position: relative;
            -webkit-touch-callout: none;
        }

        .bloc-select .container {
            display: table;
            width: 100%;
        }

        .dateRangePlaceHolder {
            padding: 2px 5px;
            color: grey;
            font-size: 14px;
            letter-spacing: 1px;
        }

        #publicationDate {
            background: #fff;
            cursor: pointer;
            padding: 5px 10px;
            border: 1px solid #ccc;
            width: 100%;
            height: 100%;
        }
    </style>
";
        
        $__internal_f8b6484d4bd0215fd383ac6ba4413a71f8f5fac0462c097f0e1cc3d14bdb2d52->leave($__internal_f8b6484d4bd0215fd383ac6ba4413a71f8f5fac0462c097f0e1cc3d14bdb2d52_prof);

        
        $__internal_963dd8b9d0f2bb871876785aeae1de5538816a35e6ee57ada841dec8a657cf51->leave($__internal_963dd8b9d0f2bb871876785aeae1de5538816a35e6ee57ada841dec8a657cf51_prof);

    }

    // line 364
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b6059b73dd68075a0d69198b810b66c675dbe38d150d56cc04f3e4a5353d5fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6059b73dd68075a0d69198b810b66c675dbe38d150d56cc04f3e4a5353d5fbd->enter($__internal_b6059b73dd68075a0d69198b810b66c675dbe38d150d56cc04f3e4a5353d5fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ed0f6bd74d1d1183b79584a773fc8cead812415a467e5a1d582e0588455e17b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0f6bd74d1d1183b79584a773fc8cead812415a467e5a1d582e0588455e17b0->enter($__internal_ed0f6bd74d1d1183b79584a773fc8cead812415a467e5a1d582e0588455e17b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 365
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-daterange/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                \$('#publicationDate span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            \$('#publicationDate').daterangepicker({
                startDate: start,
                endDate: end,
                locale: {
                    format: 'YYYY-MM-DD',
                    separator: ' - ',
                    applyLabel: 'Appliquer',
                    cancelLabel: 'Annuler',
                    customRangeLabel: 'Personnalisée'
                },
                ranges: {
                    'Aujourdhui': [moment(), moment()],
                    'Hier': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Les 7 derniers jours': [moment().subtract(6, 'days'), moment()],
                    'Les 30 derniers jours': [moment().subtract(29, 'days'), moment()],
                    'Ce mois-ci': [moment().startOf('month'), moment().endOf('month')],
                    'Le mois dernier': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb).on('apply.daterangepicker', function () {
                \$('.dateRangePlaceHolder').addClass('hidden');
                \$('input[name=\"publicationFrom\"]').val(\$('input[name=\"daterangepicker_start\"]').val());
                \$('input[name=\"publicationTo\"]').val(\$('input[name=\"daterangepicker_end\"]').val());

            });
            \$(document).on('click','.letter-select>li',function () {
                var letter =\$(this).attr('value');
                window.location=Routing.generate('administrator_search_book')+'?letter='+letter;
            });
            \$('form').submit(function(e){
                \$(this).find('input').filter(function(){
                    return !\$.trim(this.value).length;  // get all empty fields
                }).prop('disabled',true);
                \$(this).find('select').filter(function(){
                    return !\$.trim(this.value).length;  // get all empty fields
                }).prop('disabled',true);
            });
        });
    </script>
";
        
        $__internal_ed0f6bd74d1d1183b79584a773fc8cead812415a467e5a1d582e0588455e17b0->leave($__internal_ed0f6bd74d1d1183b79584a773fc8cead812415a467e5a1d582e0588455e17b0_prof);

        
        $__internal_b6059b73dd68075a0d69198b810b66c675dbe38d150d56cc04f3e4a5353d5fbd->leave($__internal_b6059b73dd68075a0d69198b810b66c675dbe38d150d56cc04f3e4a5353d5fbd_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Admin/book/search.book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  653 => 365,  644 => 364,  455 => 186,  446 => 185,  431 => 179,  425 => 175,  423 => 174,  418 => 172,  413 => 169,  400 => 162,  389 => 159,  385 => 158,  381 => 156,  375 => 155,  371 => 153,  360 => 151,  356 => 150,  350 => 147,  346 => 146,  338 => 142,  332 => 141,  326 => 139,  324 => 138,  320 => 136,  316 => 135,  292 => 120,  280 => 111,  270 => 110,  248 => 92,  244 => 90,  241 => 89,  239 => 88,  233 => 86,  229 => 84,  226 => 83,  224 => 82,  216 => 79,  208 => 73,  197 => 71,  193 => 69,  190 => 68,  188 => 67,  183 => 66,  179 => 65,  173 => 64,  162 => 60,  151 => 56,  143 => 50,  132 => 48,  128 => 46,  125 => 45,  123 => 44,  118 => 43,  114 => 41,  109 => 39,  79 => 12,  72 => 7,  63 => 6,  52 => 4,  43 => 3,  11 => 1,);
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
    Recherche de livre
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
                <span class=\"active\">Recherche de livre</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"icon-c-search-book\"></span> &nbsp; Recherche de livre </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green\">
                <div class=\"portlet-title\">
                    <div class=\"tools\">
                        <a href=\"javascript:;\" data-placement=\"bottom\" class=\"collapse\" data-original-title=\"reduire\"
                           title=\"\"> </a>
                        <a href=\"\" class=\"fullscreen\" data-placement=\"bottom\" data-original-title=\"plein ecran\"
                           title=\"\"> </a>
                    </div>
                </div>
                <div class=\"portlet-body col-md-12\">
                    <form>
                        <div class=\"clearfix mgb-5\">
                            <div class=\"bloc-select blc-alphabet clearfix\">
                                <a class=\"select-All\" href=\"{{ path('administrator_search_book') }}\">Tous</a>
                                <ul class=\"letter-select\">
                                    {% for letter in ['A','B','C','D','E','F','G','H','I','J','K',
                                    'L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'] %}
                                    <li value=\"{{ letter }}\"
                                            {% if pagination.params['letter'] is defined %}
                                                {% if pagination.params['letter']== letter%}
                                                    class=\"active\"
                                                {% endif %}
                                            {% endif %}>{{ letter }}</li>
                                   {% endfor %}
                                </ul>
                            </div>
                        </div>
                        <div class=\"clearfix mgb-5\" style=\"display: flex;\">
                            <div class=\"bloc-select col-md-4\">
                                <input type=\"text\" class=\"form-control\" name=\"title\" placeholder=\"Titre\"
                                        {% if pagination.params['title'] is defined %} value=\"{{ pagination.params['title'] }}\" {% endif %}>
                            </div>
                            <div class=\" bloc-select col-md-4\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Auteur\" name=\"author\"
                                        {% if pagination.params['author'] is defined %} value=\"{{ pagination.params['author'] }}\" {% endif %}>
                            </div>
                            <div class=\" bloc-select col-md-4\">
                                <select name=\"category\" class=\"form-control\">
                                    <option value=\"\" {% if pagination.params['category'] is not defined %}selected{% endif %}>Categorie</option>
                                    {% for category in categories %}
                                        <option value=\"{{ category.id }}\"
                                        {% if pagination.params['category'] is defined %}
                                            {% if pagination.params['category']==category.id %}
                                                selected
                                            {% endif %}
                                        {% endif %}>{{ category.name }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        <div class=\"clearfix mgb-5\" style=\"display: flex;\">
                            <div class=\"bloc-select blc-tri col-md-4\">
                                <select class=\"form-control\" name=\"sort\">
                                    <option value=\"\" {% if pagination.params['sort'] is not defined %} selected {% endif %}>Trier par <span class=\"ft-semi\">ordre alphabétique</span>
                                    </option>
                                    <option value=\"ASC\"
                                            {% if pagination.params['sort'] is defined %}
                                                {% if pagination.params['sort']==\"ASC\" %}
                                                    selected
                                                {% endif %}
                                            {% endif %}>Croissant</option>
                                    <option value=\"DESC\"
                                            {% if pagination.params['sort'] is defined %}
                                        {% if pagination.params['sort']==\"DESC\" %}
                                            selected
                                        {% endif %}
                                            {% endif %}>Décroissant</option>
                                </select>
                            </div>
                            <div class=\"bloc-select col-md-5\">
                                <div id=\"publicationDate\" class=\"pull-right\">
                                    <i style=\"float: left\" class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                                    <span class=\"dateRangePlaceHolder\"> Date de publication </span>
                                    <span></span> <b class=\"caret\"></b>
                                </div>
                            </div>
                            <div class=\"bloc-select col-md-3\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"ISBN\" name=\"isbn\">
                            </div>
                        </div>
                        <div class=\"clearfix mgb-5\" style=\"display: flex;\">

                            <div class=\"bloc-select blc-result col-md-4\">
                                <div>
                                    {% if pagination|length>0 %}1{% else %}0{% endif %}-{{ pagination|length }}
                                    sur {{ pagination.getTotalItemCount }}
                                    résultats
                                </div>
                            </div>
                            <div class=\"bloc-select blc-nav col-md-1\">
                                <i class=\"fa fa-chevron-left\"></i>
                            </div>
                            <div class=\"bloc-select blc-pages col-md-2\">
                                <div>
                                    page {% if pagination|length>0 %}{{ pagination.currentPageNumber }}{% else %}0{% endif %}/{{ pagination.pageCount }}
                                </div>
                            </div>
                            <div class=\"bloc-select blc-nav col-md-1\">
                                <i class=\"fa fa-chevron-right\"></i>
                            </div>
                            <div class=\"bloc-select col-md-4\">
                                <input type=\"submit\" class=\"btn btn-block btn-primary\" value=\"Chercher\">
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"publicationFrom\">
                        <input type=\"hidden\" name=\"publicationTo\">
                    </form>
                    <div class=\"col-md-12 clearfix\" style=\"padding: 0\">
                        <ul class=\" found-books\">
                            {% for book in pagination %}
                                <li class=\"col-md-12 book-item\">
                                    <div class=\"col-md-3 text-center\">
                                        <img class=\"img-responsive\" src=\"{% if book.images|length>0 %}
                                                {{ vich_uploader_asset(book.images.first,'mediaFile') }}
                                              {% else %}
                                                {{ asset('assets/img/no-book-image.png') }}
                                                {% endif %}\" alt=\"{{ book.title }}\">
                                    </div>
                                    <div class=\"col-md-9 row\">
                                        <div class=\"infos-book col-md-12\">
                                            <a href=\"{{ path('administrator_edit_book', {'token': book.token}) }}\" class=\"book-title\">
                                                {{ book.title }}
                                            </a>
                                            <p class=\"col-md-12\">
                                                {% for author in book.mainAuthors %}
                                                - <a href=\"{{ path('administrator_show_user', {'id': author.id}) }}\" class=\"author\">{{ author.fullName }}</a><br>
                                                {% endfor %}
                                            </p>
                                            <p class=\"col-md-12\">
                                                {{ book.description|slice(1,600) }} {% if book.description|length>600 %}....{% endif %}
                                            </p>
                                            <p class=\"col-md-12\" style=\"color:#bfbdbe;\">
                                                <span class=\"col-md-6\">Category : {{ book.category.name }}</span>
                                                <span class=\"col-md-6\">Date Publication : {% if book.published %} {{ book.publishDate|date('d-m-Y') }}{% else %}Pas encore{% endif %}</span>
                                            </p>
                                            <div class=\"col-md-12\">
                                                <a style=\"font-size: 18px\" href=\"{{ path('administrator_edit_book', {'token': book.token}) }}\" class=\"btn green btn-outline pull-right\">
                                                    <i class=\"fa fa-eye\"></i>&nbsp;&nbsp; Voir</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                    <div class=\"navigation col-md-12 text-center\">
                        {{ knp_pagination_render(pagination, ':KnpPaginatorBundle/Pagination:site_defaut_pagination.html.twig') }}
                    </div>
                    {% if pagination|length==0 %}
                    <div class=\"col-md-12 text-center\">
                        <h1 style=\"color: grey\">Aucun livre trouvée</h1>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-book-search\">
{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/bootstrap-daterange/daterangepicker.css') }}\">
    <style>

        .found-books{
            padding:0px;
            list-style: none;
        }
        .found-books .book-item{
            margin: 5px;
            padding:10px;
            background-color: whitesmoke;
        }
        .infos-book .book-title{
            font-size: 25px;
            color: #3a3a3a;
            font-family: \"Bree Serif\",sans-serif;
            text-decoration: none;
        }
        .infos-book .author{
            font-size: 18px;
            color: #32c5d2;
            font-family: \"Bree Serif\",sans-serif;
            text-decoration: none;
        }
        .bloc-select {
            background: #f2f2f2;
            border: 1px solid #dbdbdb;
            padding: 5px;
            text-align: center;
        }
        .btn{
            padding: 7px 30px!important;
        }
        .mgb-5 {
            margin-bottom: 5px;
        }

        .bloc-select a {
            text-decoration: none;
            background: white;
            font-weight: 600;
            color: #0a0f19;
            display: block;
            border: 1px solid white;
            line-height: 1em;
            height: 32px;
            padding: 0 10px 0 6px;
            cursor: pointer;
            width: 100%;
            vertical-align: middle;
        }

        .bloc-select.blc-alphabet {
            padding: 5px !important;
        }

        .bloc-select.blc-alphabet ul {
            margin: 0;
            list-style: none;
            display: block;
            float: left;
            position: relative;
            top: auto;
            left: auto;
            right: auto;
            background: none;
            border: none;
            width: 90%;
            padding-left: 10px;
        }

        .bloc-select.blc-alphabet ul li {
            display: inline-block;
            position: relative;
            padding: 8px 6px;
            cursor: pointer;
            line-height: normal;
            float: left;
            background: none;
            width: 3.8461538462%;
            text-align: center;
            border-left: 2px solid #f2f2f2;
            border-right: 2px solid #f2f2f2;
            -webkit-transition: color 0.5s, font-size 0.5s;
            -moz-transition: color 0.5s, font-size 0.5s;
            -o-transition: color 0.5s, font-size 0.5s;
            transition: color 0.5s, font-size 0.5s;
        }

        .bloc-select.blc-alphabet ul li:hover,.bloc-select.blc-alphabet ul li.active {
            background-color: white;
            font-weight: bold;
            /* Adjust for font-weight bold so that the text will still align */
            letter-spacing: -1px;
            color: #01b070;
        }

        .bloc-select.blc-alphabet .select-All {
            float: left;
            width: 10%;
            text-align: center;
            padding-top: 10px;
        }

        .bloc-select.blc-alphabet .select-All:hover {
            background-color: white;
            cursor: pointer;
        }

        .bloc-select.blc-result {
            padding-top: 13px;
            background-color: white;
        }

        .bloc-select.blc-nav {
            color: rgba(182, 180, 180, 0.33);
            font-size: 18px;
            padding-top: 13px;
            background-color: white;
        }

        .bloc-select.blc-nav.nvl, .bloc-select.blc-nav.nvr {
            cursor: pointer;
            color: #0a0a0a;
        }

        .bloc-select.blc-pages {
            padding-top: 13px;
            background-color: white;
        }

        #loading-icon {
            color: #17c4bb;
            right: 90px;
            position: absolute;
            top: 10px;
            font-size: 25px;
            z-index: 5;
        }

        .mt-comment {
            text-decoration: none;
        }

        *:before, *:after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            outline: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
            position: relative;
            -webkit-touch-callout: none;
        }

        .bloc-select .container {
            display: table;
            width: 100%;
        }

        .dateRangePlaceHolder {
            padding: 2px 5px;
            color: grey;
            font-size: 14px;
            letter-spacing: 1px;
        }

        #publicationDate {
            background: #fff;
            cursor: pointer;
            padding: 5px 10px;
            border: 1px solid #ccc;
            width: 100%;
            height: 100%;
        }
    </style>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('assets/global/plugins/bootstrap-daterange/daterangepicker.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                \$('#publicationDate span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            \$('#publicationDate').daterangepicker({
                startDate: start,
                endDate: end,
                locale: {
                    format: 'YYYY-MM-DD',
                    separator: ' - ',
                    applyLabel: 'Appliquer',
                    cancelLabel: 'Annuler',
                    customRangeLabel: 'Personnalisée'
                },
                ranges: {
                    'Aujourdhui': [moment(), moment()],
                    'Hier': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Les 7 derniers jours': [moment().subtract(6, 'days'), moment()],
                    'Les 30 derniers jours': [moment().subtract(29, 'days'), moment()],
                    'Ce mois-ci': [moment().startOf('month'), moment().endOf('month')],
                    'Le mois dernier': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb).on('apply.daterangepicker', function () {
                \$('.dateRangePlaceHolder').addClass('hidden');
                \$('input[name=\"publicationFrom\"]').val(\$('input[name=\"daterangepicker_start\"]').val());
                \$('input[name=\"publicationTo\"]').val(\$('input[name=\"daterangepicker_end\"]').val());

            });
            \$(document).on('click','.letter-select>li',function () {
                var letter =\$(this).attr('value');
                window.location=Routing.generate('administrator_search_book')+'?letter='+letter;
            });
            \$('form').submit(function(e){
                \$(this).find('input').filter(function(){
                    return !\$.trim(this.value).length;  // get all empty fields
                }).prop('disabled',true);
                \$(this).find('select').filter(function(){
                    return !\$.trim(this.value).length;  // get all empty fields
                }).prop('disabled',true);
            });
        });
    </script>
{% endblock %}
", "@Main/Admin/book/search.book.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\book\\search.book.html.twig");
    }
}
