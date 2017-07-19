<?php

/* @Main/Admin/book/edit.block.html.twig */
class __TwigTemplate_54022e0926e7b55c8d5d2d6ce4a8b5add4ec49e7c5ec420713571e79ba3e2310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/book/edit.block.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            '__internal_9316178a1b765d80a3fcb4556add29bcad4546c545e3e772d237e5d71ab474f4' => array($this, 'block___internal_9316178a1b765d80a3fcb4556add29bcad4546c545e3e772d237e5d71ab474f4'),
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
        $__internal_f40779ddc174aa650070509b7d2506fade4826873f8fcdb913085028bd01b7f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40779ddc174aa650070509b7d2506fade4826873f8fcdb913085028bd01b7f8->enter($__internal_f40779ddc174aa650070509b7d2506fade4826873f8fcdb913085028bd01b7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/book/edit.block.html.twig"));

        $__internal_ae54553ceba732e61f360d016345c7185462c5805c4108796e57418ea89dc681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae54553ceba732e61f360d016345c7185462c5805c4108796e57418ea89dc681->enter($__internal_ae54553ceba732e61f360d016345c7185462c5805c4108796e57418ea89dc681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/book/edit.block.html.twig"));

        // line 2
        $context["macros"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f40779ddc174aa650070509b7d2506fade4826873f8fcdb913085028bd01b7f8->leave($__internal_f40779ddc174aa650070509b7d2506fade4826873f8fcdb913085028bd01b7f8_prof);

        
        $__internal_ae54553ceba732e61f360d016345c7185462c5805c4108796e57418ea89dc681->leave($__internal_ae54553ceba732e61f360d016345c7185462c5805c4108796e57418ea89dc681_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_86f4d41ce2f8526ba5f51c378a7f57db2e79c87cb8ec9d550d4538b90496c936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f4d41ce2f8526ba5f51c378a7f57db2e79c87cb8ec9d550d4538b90496c936->enter($__internal_86f4d41ce2f8526ba5f51c378a7f57db2e79c87cb8ec9d550d4538b90496c936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa76154ca9914a1f708cf166ebed8b3b1319d07fa89831ba53ef7dff472ced76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa76154ca9914a1f708cf166ebed8b3b1319d07fa89831ba53ef7dff472ced76->enter($__internal_aa76154ca9914a1f708cf166ebed8b3b1319d07fa89831ba53ef7dff472ced76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "book", array()), "title", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "title", array()), "html", null, true);
        echo " - Édit
";
        
        $__internal_aa76154ca9914a1f708cf166ebed8b3b1319d07fa89831ba53ef7dff472ced76->leave($__internal_aa76154ca9914a1f708cf166ebed8b3b1319d07fa89831ba53ef7dff472ced76_prof);

        
        $__internal_86f4d41ce2f8526ba5f51c378a7f57db2e79c87cb8ec9d550d4538b90496c936->leave($__internal_86f4d41ce2f8526ba5f51c378a7f57db2e79c87cb8ec9d550d4538b90496c936_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_df10f5a5817936e4f84a8aa06a1c0510c5d978fbef11691cca7a296d48cc358f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df10f5a5817936e4f84a8aa06a1c0510c5d978fbef11691cca7a296d48cc358f->enter($__internal_df10f5a5817936e4f84a8aa06a1c0510c5d978fbef11691cca7a296d48cc358f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e92677fb743cc7ea87237c827cc2e13296cf96d06b7558672b59c6084ec26498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92677fb743cc7ea87237c827cc2e13296cf96d06b7558672b59c6084ec26498->enter($__internal_e92677fb743cc7ea87237c827cc2e13296cf96d06b7558672b59c6084ec26498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div id=\"prototypes\" data-block=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\"  data-authorization-prototype=\"
        ";
        // line 8
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_9316178a1b765d80a3fcb4556add29bcad4546c545e3e772d237e5d71ab474f4", $context, $blocks));
        // line 10
        echo "\">
    </div>
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"fa fa-home\"></i>
                <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <i class=\"fa fa-book\"></i>
                <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_books");
        echo "\">Liste des livres</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_edit_book", array("token" => $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "book", array()), "token", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "book", array()), "title", array()), "html", null, true);
        echo "</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "title", array()), "html", null, true);
        echo "
                </span>
            </li>

        </ul>
    </div>
        <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
            <h2><span class=\"fa fa-book\"></span> &nbsp; ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "title", array()), "html", null, true);
        echo "</h2>
        </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green-meadow col-md-12\">
                        <div class=\"portlet-title\">
                            <h4 class=\"pull-left\">Structure du bloc</h4>
                            <div class=\"tools\">
                                <a href=\"javascript:;\" data-placement=\"bottom\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                                <a href=\"\" class=\"fullscreen\" data-placement=\"bottom\" data-original-title=\"plein ecran\" title=\"\"> </a>
                            </div>
                            <div class=\"pull-right\" style=\"margin-top: 5px;margin-right: 10px\">
                             ";
        // line 50
        if ( !(null === $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "parent", array()))) {
            // line 51
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_book_block", array("token" => $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "parent", array()), "token", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm default\" >
                                    <i class=\"fa fa-arrow-left\"></i>
                                    Bloc Précedent
                                </a>
                                ";
        }
        // line 56
        echo "                            <button data-toggle=\"modal\" href=\"#new-block-modal\"  class=\"btn btnnn btn-success btn-sm \">
                                <i class=\"fa fa-plus\"></i>&nbsp;
                                Ajouter un bloc
                            </button>
                            </div>
                        </div>
                        <div class=\"portlet-body col-md-12\">
                            <div class=\"col-md-12 fakeTable\" id=\"blockTree\">
                                <table class=\"table table-bordered  \" cellspacing=\"0\" width=\"100%\" style=\"margin: 0px;\">
                                    <thead>
                                    <tr>
                                        <th class=\"col-md-5 col-sm-6 col-xs-6\">Titre du block</th>
                                        <th class=\"col-md-2 text-center hidden-sm hidden-xs\">Dernière version Validée</th>
                                        <th class=\"text-center col-md-2 col-sm-2 col-xs-2\">Version Puliée</th>
                                        <th class=\"text-center col-md-3 col-sm-4 col-xs-4 text-center\">Actions</th>
                                    </tr>
                                    </thead>
                                </table>
                                ";
        // line 138
        echo "                                <ol class=\"sortable \">
                                    ";
        // line 139
        echo $context["macros"]->getdisplayVersionBlock($this->env->getExtension('Webbook\MainBundle\Twig\Extension\BlockOptions')->sortByPosition($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "childrens", array())), (isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")));
        echo "
                                </ol>
                            </div>
                                <div class=\"hiddenForm col-md-12\" style=\"margin-top: 50px\">
                                    <div id=\"block-fields-list\" style=\"list-style: none\">
                                         ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "childrens", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["bl"]) {
            // line 145
            echo "                                            <div class=\"block-field \" id=\"block_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bl"], "id", array()), "html", null, true);
            echo "\">
                                                <div data-book=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["bl"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade fill-in blockModal\" id=\"block_info_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bl"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" aria-hidden=\"true\">
                                                    <a type=\"button\" class=\"close-modal\" data-dismiss=\"modal\" aria-hidden=\"true\">
                                                        <i class=\"fa fa-times\"></i>
                                                    </a>
                                                    <div class=\"modal-dialog\">
                                                        <form action=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_update_block", array("id" => $this->getAttribute($context["bl"], "id", array()))), "html", null, true);
            echo "\" class=\"updateBlockForm\" data-parent=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
            echo "\">
                                                            <div class=\"modal-content row\">
                                                                <div class=\"modal-header\">
                                                                    <h2><i class=\"fa fa-pencil\"></i>&nbsp; Détails du bloc</h2>
                                                                </div>
                                                                <div class=\"modal-body col-md-12\">
                                                                    <div class=\"form-group col-md-12\">
                                                                        <label for=\"blockTitle\" class=\"col-sm-4 control-label\">Titre du bloc</label>
                                                                        <div class=\"col-sm-8\">
                                                                            <input value=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["bl"], "title", array()), "html", null, true);
            echo "\" name=\"blockTitle\" required type=\"text\" class=\"form-control\" id=\"blockTitle\"
                                                                                   placeholder=\"Titre du bloc\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group text-center col-md-12\">
                                                                        <label class=\"col-md-4\" style=\"display: flex\" for=\"showTitle\">
                                                                            <div class=\"custom-check\">
                                                                                <input  ";
            // line 167
            if ($this->getAttribute($this->getAttribute($context["bl"], "options", array()), "showTitle", array())) {
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
            // line 174
            if ($this->getAttribute($this->getAttribute($context["bl"], "options", array()), "indexed", array())) {
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
            // line 181
            if ($this->getAttribute($this->getAttribute($context["bl"], "options", array()), "paginated", array())) {
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
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bl"], "authorizations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["authorization"]) {
                // line 204
                echo "                                                                                    ";
                if (twig_in_filter("ROLE_AUTHOR", $this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "roles", array()))) {
                    // line 205
                    echo "                                                                                        <tr class=\"text-center\">
                                                                                            <td>
                                                                                                <select class=\"form-control\" name=\"auth_user\">
                                                                                                    ";
                    // line 208
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 209
                        echo "                                                                                                        <option ";
                        if (($this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                            echo " selected ";
                        }
                        // line 210
                        echo "                                                                                                                value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "fullName", array()), "html", null, true);
                        echo "</option>
                                                                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 212
                    echo "                                                                                                </select>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class=\"custom-check\">
                                                                                                    <input type=\"checkbox\" class=\"custom-check-input\" name=\"canRead\"
                                                                                                        ";
                    // line 217
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
                    // line 223
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
                    // line 229
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
                    // line 235
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
                // line 248
                echo "                                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authorization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo "                                                                                </tbody>
                                                                                ";
            // line 250
            if ((twig_length_filter($this->env, (isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors"))) > 0)) {
                // line 251
                echo "                                                                                <tfoot>
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
            // line 261
            echo "                                                                            </table>

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
            // line 276
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bl"], "authorizations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["authorization"]) {
                // line 277
                echo "                                                                                    ";
                if (twig_in_filter("ROLE_VALIDATOR", $this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "roles", array()))) {
                    // line 278
                    echo "                                                                                        <tr class=\"text-center\">
                                                                                            <td>
                                                                                                <select class=\"form-control\" name=\"auth_user\">
                                                                                                    ";
                    // line 281
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["validators"]) ? $context["validators"] : $this->getContext($context, "validators")));
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 282
                        echo "                                                                                                        <option ";
                        if (($this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                            echo " selected ";
                        }
                        // line 283
                        echo "                                                                                                                value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "fullName", array()), "html", null, true);
                        echo "</option>
                                                                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 285
                    echo "                                                                                                </select>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class=\"custom-check\">
                                                                                                    <input type=\"checkbox\" class=\"custom-check-input\" name=\"limited\"
                                                                                                        ";
                    // line 290
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
                // line 302
                echo "                                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authorization'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "                                                                                </tbody>
                                                                                ";
            // line 304
            if ((twig_length_filter($this->env, (isset($context["validators"]) ? $context["validators"] : $this->getContext($context, "validators"))) > 0)) {
                // line 305
                echo "                                                                                <tfoot>
                                                                                <tr>
                                                                                    <td colspan=\"3\" class=\"col-md-12\">
                                                                                        <button type=\"button\" id=\"addValidator\" class=\"btn green btn-circle btn-icon-only add-auth-btn\" ";
                // line 308
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
            // line 315
            echo "                                                                            </table>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 332
        echo "                                    </div>
                                </div>
                    </div>
                </div>
            ";
        // line 336
        if ( !(null === $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()))) {
            // line 337
            echo "                <div class=\"portlet box green-meadow col-md-12\" style=\"margin-bottom: 15px\">
                    <div class=\"portlet-title\">
                        <h4 class=\"pull-left\">Contenu du bloc</h4>
                        <div class=\"tools\">
                            <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" data-placement=\"bottom\" title=\"\"> </a>
                            <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" data-placement=\"bottom\" title=\"\"> </a>
                        </div>
                    </div>
                    <div class=\"portlet-body col-md-12\">
                        <div class=\"col-md-12\" style=\"display: block;\">
                            <textarea class=\"tinyMince\">";
            // line 347
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()), "content", array()), "html", null, true);
            echo "</textarea>
                        </div>
                    </div>
                </div>
                <div id=\"fm-token\" data-token=\"";
            // line 351
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()), "token", array()), "html", null, true);
            echo "\"></div>
            ";
        }
        // line 353
        echo "            <div class=\"portlet box green-meadow col-md-12\" style=\"margin-bottom: 15px\">
                    <div class=\"portlet-title\">
                        <h4 class=\"pull-left\">Versions du bloc</h4>
                        <div class=\"tools\">
                            <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" data-placement=\"bottom\" title=\"\"> </a>
                            <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" data-placement=\"bottom\" title=\"\"> </a>
                        </div>
                    </div>
                    <div class=\"portlet-body\">
                        <table class=\"table table-bordered \">
                            <thead>
                                <tr>
                                    <th class=\"text-center \">Date Creation</th>
                                    <th class=\"text-center\">Crée Par</th>
                                    <th class=\"text-center\">Numéro</th>
                                    <th class=\"text-center\">Status</th>
                                    <th class=\"text-center\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 373
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->env->getExtension('Snilius\Twig\SortByFieldExtension')->sortByFieldFilter($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "versions", array()), "createdAt")));
        foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
            // line 374
            echo "                                <tr class=\"text-center\">
                                    <td>";
            // line 375
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["version"], "createdAt", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 376
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["version"], "createdBy", array()), "profile", array()), "fullName", array()), "html", null, true);
            echo "</td>
                                    <td >
                                        <div style=\"font-size: 10px!important;\" class=\"label label-success\"> v ";
            // line 378
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["version"], "number", array()), 1, ".", ","), "html", null, true);
            echo "</div>
                                    </td>
                                    <td >
                                        ";
            // line 381
            if (($this->getAttribute($context["version"], "status", array()) == 3)) {
                // line 382
                echo "                                            <div class=\"label label-success\">publiée</div>
                                        ";
            } elseif (($this->getAttribute(            // line 383
$context["version"], "status", array()) == 2)) {
                // line 384
                echo "                                           <div class=\"label label-info\">validée</div>
                                        ";
            } else {
                // line 386
                echo "                                           <div class=\"label label-warning\">en cours</div>
                                        ";
            }
            // line 388
            echo "                                    </td>
                                    <td>
                                        ";
            // line 390
            if (($this->getAttribute($context["version"], "status", array()) == 3)) {
                // line 391
                echo "                                            <button type=\"button\" class=\"btn green disabled btn-sm\">Active</button>
                                        ";
            } elseif (($this->getAttribute(            // line 392
$context["version"], "status", array()) == 2)) {
                // line 393
                echo "                                            <button data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_publish_block_version", array("token" => $this->getAttribute($context["version"], "token", array()))), "html", null, true);
                echo "\" type=\"button\"
                                               class=\"btn default btn-sm btn-activate-version \">Activer la version</button>
                                            <button href=\"#animatedModal\" type=\"button\"  class=\"btn blue btn-cmp-version\"
                                            data-content=\"";
                // line 396
                echo twig_escape_filter($this->env, twig_convert_encoding($this->getAttribute($context["version"], "content", array()), "UTF-8", "HTML-ENTITIES"), "html", null, true);
                echo "\"
                                             data-author=\"";
                // line 397
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["version"], "createdBy", array()), "profile", array()), "fullName", array()), "html", null, true);
                echo "\" data-vnumber=\"";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["version"], "number", array()), 1, ".", ","), "html", null, true);
                echo "\"
                                            data-toggle=\"tooltip\" data-title=\"Comparer avec la version actuelle\"><i class=\"fa fa-exchange\"></i>Différence</button>
                                        ";
            } else {
                // line 400
                echo "                                            ";
                if (($this->getAttribute($context["version"], "status", array()) == 0)) {
                    // line 401
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_display_version_progression", array("token" => $this->getAttribute($context["version"], "token", array()))), "html", null, true);
                    echo "\" class=\"btn blue btn-sm\"><i class=\"fa fa-eye\"></i> suivie </a>
                                            ";
                }
                // line 403
                echo "                                            <button type=\"button\" class=\"btn default btn-sm disabled\">Active</button>
                                        ";
            }
            // line 405
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 408
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
                 <!-- needed to load file from current version -->
            <div class=\"portlet box green-meadow col-md-12\">
                    <div class=\"portlet-title\">
                        <h4 class=\"pull-left\">Historique du bloc</h4>
                        <div class=\"tools\">
                            <a href=\"javascript:;\" data-placement=\"bottom\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                            <a href=\"\" class=\"fullscreen\" data-placement=\"bottom\" data-original-title=\"plein ecran\" title=\"\"> </a>
                        </div>
                    </div>
                    <div class=\"portlet-body col-md-12\">
                        <table class=\"table table-hover table-bordered\">
                        \t<thead>
                        \t\t<tr>
                        \t\t\t<th class=\"col-md-2 text-center\"> Date </th>
                                    <th class=\"text-center\"> Information </th>
                        \t\t</tr>
                        \t</thead>
                        \t<tbody>
                        \t";
        // line 430
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Snilius\Twig\SortByFieldExtension')->sortByFieldFilter($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "historics", array()), "date", "desc"));
        foreach ($context['_seq'] as $context["_key"] => $context["historic"]) {
            // line 431
            echo "                        \t    <tr>
                        \t\t    <td class=\"text-center\">";
            // line 432
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["historic"], "date", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                        \t\t    <td>";
            // line 433
            echo twig_escape_filter($this->env, $this->getAttribute($context["historic"], "message", array()), "html", null, true);
            echo " </td>
                                </tr>
                        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        echo "                        \t</tbody>
                        </table>

                    </div>
                </div>
    </div>
 <!--DEMO01-->
    <div id=\"animatedModal\" style=\"z-index: 99999\">
            <div id=\"closebt-container\" class=\"close-animatedModal\">
                <img class=\"closebt\" src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/closebt.svg"), "html", null, true);
        echo "\">
            </div>
        <div  id=\"animatedModal-content\" class=\"modal-content\">
            <h2 class=\"text-center bold font-green\"> Comparaison de version </h2>
            <div class=\"col-md-12\">
                <h4 class=\"col-md-6 text-center\" style=\"color: grey\">
                    <span class=\"col-md-5\">Numéro version : <strong>";
        // line 451
        if ( !(null === $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()))) {
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()), "number", array()), 1, ".", ","), "html", null, true);
            echo " ";
        }
        echo "</strong></span>
                    <span class=\"col-md-7\">&nbsp;&nbsp;- &nbsp; Crée par : <strong>";
        // line 452
        if ( !(null === $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()), "createdBy", array()), "profile", array()), "fullName", array()), "html", null, true);
            echo " ";
        }
        echo "</strong></span>
                </h4>
                <h4 class=\"col-md-6 text-center\" style=\"color: grey\">
                    <span class=\"col-md-5\">Numéro version : <strong id=\"cmpv-number\"></strong></span>
                    <span class=\"col-md-7\">&nbsp;&nbsp;- &nbsp; Crée par : <strong id=\"cmpv-author\"></strong></span>
                </h4>
            </div>
            <div class=\"col-md-12\" id=\"compare\">

            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-my-books\">
    <div id=\"currentVersion\" class=\"hidden\">";
        // line 465
        if ( !(null === $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()))) {
            ob_start();
            echo twig_escape_filter($this->env, twig_convert_encoding($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "publishedVersion", array()), "content", array()), "UTF-8", "HTML-ENTITIES"), "html", null, true);
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        echo "</div>
    <div id=\"newVersion\" class=\"hidden\"></div>

   <!-- new block modal -->
    <div data-book=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "book", array()), "id", array()), "html", null, true);
        echo "\" class=\"modal fade fill-in blockModal\" id=\"new-block-modal\" tabindex=\"-1\" aria-hidden=\"true\">
        <a type=\"button\" class=\"close-modal\" data-dismiss=\"modal\" aria-hidden=\"true\">
            <i class=\"fa fa-times\"></i>
        </a>
        <div class=\"modal-dialog\">
            <form  id=\"createBlockForm\" action=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_create_block", array("book" => $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "book", array()), "id", array()))), "html", null, true);
        echo "\" data-parent=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\">
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
        // line 512
        if ((twig_length_filter($this->env, (isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors"))) > 0)) {
            // line 513
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
        // line 539
        echo "                            ";
        if ((twig_length_filter($this->env, (isset($context["validators"]) ? $context["validators"] : $this->getContext($context, "validators"))) > 0)) {
            // line 540
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
            // line 557
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
        // line 565
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
        
        $__internal_e92677fb743cc7ea87237c827cc2e13296cf96d06b7558672b59c6084ec26498->leave($__internal_e92677fb743cc7ea87237c827cc2e13296cf96d06b7558672b59c6084ec26498_prof);

        
        $__internal_df10f5a5817936e4f84a8aa06a1c0510c5d978fbef11691cca7a296d48cc358f->leave($__internal_df10f5a5817936e4f84a8aa06a1c0510c5d978fbef11691cca7a296d48cc358f_prof);

    }

    // line 8
    public function block___internal_9316178a1b765d80a3fcb4556add29bcad4546c545e3e772d237e5d71ab474f4($context, array $blocks = array())
    {
        $__internal_aab54f8008580936a8c421c66f9194bc70bffe3694f8ac9221e52593f63cf5d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aab54f8008580936a8c421c66f9194bc70bffe3694f8ac9221e52593f63cf5d7->enter($__internal_aab54f8008580936a8c421c66f9194bc70bffe3694f8ac9221e52593f63cf5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_9316178a1b765d80a3fcb4556add29bcad4546c545e3e772d237e5d71ab474f4"));

        $__internal_e2ab2dcca2bcf61b099cafc6d9e86fbe145406d19ea5e19028149e4baba8ac5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ab2dcca2bcf61b099cafc6d9e86fbe145406d19ea5e19028149e4baba8ac5d->enter($__internal_e2ab2dcca2bcf61b099cafc6d9e86fbe145406d19ea5e19028149e4baba8ac5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "__internal_9316178a1b765d80a3fcb4556add29bcad4546c545e3e772d237e5d71ab474f4"));

        // line 9
        echo "            ";
        echo twig_include($this->env, $context, "form/form.block.authorization.html.twig");
        echo "
        ";
        
        $__internal_e2ab2dcca2bcf61b099cafc6d9e86fbe145406d19ea5e19028149e4baba8ac5d->leave($__internal_e2ab2dcca2bcf61b099cafc6d9e86fbe145406d19ea5e19028149e4baba8ac5d_prof);

        
        $__internal_aab54f8008580936a8c421c66f9194bc70bffe3694f8ac9221e52593f63cf5d7->leave($__internal_aab54f8008580936a8c421c66f9194bc70bffe3694f8ac9221e52593f63cf5d7_prof);

    }

    // line 581
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_121de799f4556c4074d2105de0d8d20d01cea3d116be6bebf03d53a190a11ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121de799f4556c4074d2105de0d8d20d01cea3d116be6bebf03d53a190a11ddc->enter($__internal_121de799f4556c4074d2105de0d8d20d01cea3d116be6bebf03d53a190a11ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b054b24a8733fcce7b52d1001bf9c5d81bc36edc4d12a340079f6865df3b7b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b054b24a8733fcce7b52d1001bf9c5d81bc36edc4d12a340079f6865df3b7b4a->enter($__internal_b054b24a8733fcce7b52d1001bf9c5d81bc36edc4d12a340079f6865df3b7b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 582
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/book.structure.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 583
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/mergely-3.4.4/lib/mergely.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 584
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/mergely-3.4.4/lib/codemirror.css"), "html", null, true);
        echo "\">
    <style>
        .fake-column{
            vertical-align: middle;
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
        .center-all{
            display: grid;
            align-items: center;
        }
        .center-all>div{
            text-align: center;
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
        .label-success.ui-sortable-handle{
        vertical-align: sub;
        }
    </style>
";
        
        $__internal_b054b24a8733fcce7b52d1001bf9c5d81bc36edc4d12a340079f6865df3b7b4a->leave($__internal_b054b24a8733fcce7b52d1001bf9c5d81bc36edc4d12a340079f6865df3b7b4a_prof);

        
        $__internal_121de799f4556c4074d2105de0d8d20d01cea3d116be6bebf03d53a190a11ddc->leave($__internal_121de799f4556c4074d2105de0d8d20d01cea3d116be6bebf03d53a190a11ddc_prof);

    }

    // line 642
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12c4ba41018a175361287642994ae065e4df872d0c00fa3827d45ecf7ebd6c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c4ba41018a175361287642994ae065e4df872d0c00fa3827d45ecf7ebd6c21->enter($__internal_12c4ba41018a175361287642994ae065e4df872d0c00fa3827d45ecf7ebd6c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e4106f27c4e0ce5d2fdf2f1aecb9a661271b67bc813ca16024c29dbc7aecb6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4106f27c4e0ce5d2fdf2f1aecb9a661271b67bc813ca16024c29dbc7aecb6ba->enter($__internal_e4106f27c4e0ce5d2fdf2f1aecb9a661271b67bc813ca16024c29dbc7aecb6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 643
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery.mjs.nestedSortable.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/js/book/edit_block_structure.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/annimatedModal/animatedModal.js-master/animatedModal.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/mergely-3.4.4/lib/codemirror.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/mergely-3.4.4/lib/mergely.js"), "html", null, true);
        echo "\"></script>
    <script >
        \$(document).ready(function() {
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
          \$(document).on('click','.btn-activate-version',function() {
                var elem=\$(this);
                var url = elem.data('url');
                \$.ajax({
                    url: url,
                    method: 'POST',
                    beforeSend: function () {
                        \$('.btn-activate-version').off();
                        elem.attr('disabled', true).addClass('yellow');
                        elem.html('<i class=\"fa fa-cog fa-2x fa-spin\"></i>');
                        toastr.options.progressBar = true;
                        toastr.info('Chargement de la nouvelle version ')
                    },
                    success: function () {
                        location.reload();
                    }
                })
          });
          \$(\".btn-cmp-version\").click(function() {
              content=\$(this).data('content');
              author_name=\$(this).data('author');
              version_number=\$(this).data('vnumber');
                \$('#newVersion').text(content);
                \$('#cmpv-author').text(author_name);
                \$('#cmpv-number').text(version_number);
          })
        })
    </script>
";
        
        $__internal_e4106f27c4e0ce5d2fdf2f1aecb9a661271b67bc813ca16024c29dbc7aecb6ba->leave($__internal_e4106f27c4e0ce5d2fdf2f1aecb9a661271b67bc813ca16024c29dbc7aecb6ba_prof);

        
        $__internal_12c4ba41018a175361287642994ae065e4df872d0c00fa3827d45ecf7ebd6c21->leave($__internal_12c4ba41018a175361287642994ae065e4df872d0c00fa3827d45ecf7ebd6c21_prof);

    }

    // line 74
    public function getdisplayVersionBlock($__blocks__ = null, $__firstBlock__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "blocks" => $__blocks__,
            "firstBlock" => $__firstBlock__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4ca4d35844846d4ec4c9ee08109d00c75df1ab849d3d48955c768a2b9276836d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_4ca4d35844846d4ec4c9ee08109d00c75df1ab849d3d48955c768a2b9276836d->enter($__internal_4ca4d35844846d4ec4c9ee08109d00c75df1ab849d3d48955c768a2b9276836d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "displayVersionBlock"));

            $__internal_fa13ab5053854fcfba4f79e7bf145035325ac2bdb0c53b59d9da3013aaeca5cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fa13ab5053854fcfba4f79e7bf145035325ac2bdb0c53b59d9da3013aaeca5cf->enter($__internal_fa13ab5053854fcfba4f79e7bf145035325ac2bdb0c53b59d9da3013aaeca5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "displayVersionBlock"));

            // line 75
            echo "                                    ";
            $context["macros"] = $this;
            // line 76
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Snilius\Twig\SortByFieldExtension')->sortByFieldFilter((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")), "position"));
            foreach ($context['_seq'] as $context["_key"] => $context["bl"]) {
                // line 77
                echo "                                        <li class=\"block-branch ";
                if (($this->getAttribute($context["bl"], "parent", array()) != (isset($context["firstBlock"]) ? $context["firstBlock"] : $this->getContext($context, "firstBlock")))) {
                    echo " hidden ";
                }
                echo "\"
                                            data-id=";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["bl"], "id", array()), "html", null, true);
                echo "
                                            data-parent=";
                // line 79
                if ( !(null === $this->getAttribute($context["bl"], "parent", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bl"], "parent", array()), "id", array()), "html", null, true);
                } else {
                    echo "null";
                }
                // line 80
                echo "                                            data-level=";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["bl"], "level", array()) - $this->getAttribute((isset($context["firstBlock"]) ? $context["firstBlock"] : $this->getContext($context, "firstBlock")), "level", array())) - 1), "html", null, true);
                echo "
                                            data-position=";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["bl"], "position", array()), "html", null, true);
                echo ">
                                            <div>
                                                <div class=\"cl-btn fake-column col-md-5 col-sm-6 col-xs-6 \" data-pdl=25>
                                                    ";
                // line 84
                if ((twig_length_filter($this->env, $this->getAttribute($context["bl"], "childrens", array())) > 0)) {
                    // line 85
                    echo "                                                        <button  class=\"btn green  btn-show-children\"><i
                                                                    class=\" fa fa-plus\"></i></button>
                                                    ";
                }
                // line 88
                echo "                                                    <input style=\"pointer-events: none\" readonly type=\"text\" id=\"title-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bl"], "id", array()), "html", null, true);
                echo "\" class=\"form-control\"
                                                           value=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["bl"], "title", array()), "html", null, true);
                echo "\">
                                                </div>
                                                 <div class=\"fake-column col-md-2 hidden-sm hidden-xs text-center\">
                                                    <div class=\"label label-success \">
                                                        ";
                // line 93
                if ( !(null === $this->getAttribute($context["bl"], "lastValidatedVersion", array()))) {
                    // line 94
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["bl"], "lastValidatedVersion", array()), "number", array()), 1, ".", ","), "html", null, true);
                    echo "
                                                        ";
                } else {
                    // line 96
                    echo "                                                            pas de version
                                                        ";
                }
                // line 98
                echo "                                                    </div>
                                                </div>
                                                <div class=\"fake-column col-md-2 col-sm-2 col-xs-2 text-center\" >
                                                    <div class=\"label label-success \">
                                                        ";
                // line 102
                if ( !(null === $this->getAttribute($context["bl"], "publishedVersion", array()))) {
                    // line 103
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["bl"], "publishedVersion", array()), "number", array()), 1, ".", ","), "html", null, true);
                    echo "
                                                        ";
                } else {
                    // line 105
                    echo "                                                            pas de version
                                                        ";
                }
                // line 107
                echo "                                                    </div>
                                                </div>
                                               <div class=\"fake-column actions col-md-3 col-sm-4 col-xs-4 text-center\">
                                                    <div >
                                                        <a class=\"btn green btn-icon-only\"
                                                           href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_book_block", array("token" => $this->getAttribute($context["bl"], "token", array()))), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-eye\"></i></a>
                                                    </div>

                                                    <div  data-toggle=\"tooltip\" data-title=\"Détails\">
                                                        <a href=\"#block_info_";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["bl"], "id", array()), "html", null, true);
                echo "\" data-toggle=\"modal\"
                                                           class=\"btn blue btn-icon-only\"><i class=\"fa fa-cog\"></i></a>
                                                    </div>
                                                    <div data-toggle=\"tooltip\"
                                                         data-title=\"Effacer!\">
                                                        <button type=\"button\" class=\"btn red btn-icon-only btn-delet-block\"
                                                                data-id=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["bl"], "id", array()), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-trash\"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
                // line 129
                if ((twig_length_filter($this->env, $this->getAttribute($context["bl"], "childrens", array())) > 0)) {
                    // line 130
                    echo "                                                <ol>
                                                    ";
                    // line 131
                    echo $context["macros"]->getdisplayVersionBlock($this->env->getExtension('Webbook\MainBundle\Twig\Extension\BlockOptions')->sortByPosition($this->getAttribute($context["bl"], "childrens", array())), (isset($context["firstBlock"]) ? $context["firstBlock"] : $this->getContext($context, "firstBlock")));
                    echo "
                                                </ol>
                                            ";
                }
                // line 134
                echo "                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "
                                ";
            
            $__internal_fa13ab5053854fcfba4f79e7bf145035325ac2bdb0c53b59d9da3013aaeca5cf->leave($__internal_fa13ab5053854fcfba4f79e7bf145035325ac2bdb0c53b59d9da3013aaeca5cf_prof);

            
            $__internal_4ca4d35844846d4ec4c9ee08109d00c75df1ab849d3d48955c768a2b9276836d->leave($__internal_4ca4d35844846d4ec4c9ee08109d00c75df1ab849d3d48955c768a2b9276836d_prof);

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
        return "@Main/Admin/book/edit.block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1267 => 136,  1260 => 134,  1254 => 131,  1251 => 130,  1249 => 129,  1240 => 123,  1231 => 117,  1223 => 112,  1216 => 107,  1212 => 105,  1206 => 103,  1204 => 102,  1198 => 98,  1194 => 96,  1188 => 94,  1186 => 93,  1179 => 89,  1174 => 88,  1169 => 85,  1167 => 84,  1161 => 81,  1156 => 80,  1150 => 79,  1146 => 78,  1139 => 77,  1134 => 76,  1131 => 75,  1112 => 74,  1047 => 647,  1043 => 646,  1039 => 645,  1035 => 644,  1030 => 643,  1021 => 642,  953 => 584,  949 => 583,  944 => 582,  935 => 581,  922 => 9,  913 => 8,  888 => 565,  875 => 557,  856 => 540,  853 => 539,  825 => 513,  823 => 512,  780 => 474,  772 => 469,  761 => 465,  741 => 452,  734 => 451,  725 => 445,  714 => 436,  705 => 433,  701 => 432,  698 => 431,  694 => 430,  670 => 408,  662 => 405,  658 => 403,  652 => 401,  649 => 400,  641 => 397,  637 => 396,  630 => 393,  628 => 392,  625 => 391,  623 => 390,  619 => 388,  615 => 386,  611 => 384,  609 => 383,  606 => 382,  604 => 381,  598 => 378,  593 => 376,  589 => 375,  586 => 374,  582 => 373,  560 => 353,  555 => 351,  548 => 347,  536 => 337,  534 => 336,  528 => 332,  506 => 315,  494 => 308,  489 => 305,  487 => 304,  484 => 303,  478 => 302,  459 => 290,  452 => 285,  441 => 283,  436 => 282,  432 => 281,  427 => 278,  424 => 277,  420 => 276,  403 => 261,  391 => 251,  389 => 250,  386 => 249,  380 => 248,  360 => 235,  347 => 229,  334 => 223,  321 => 217,  314 => 212,  303 => 210,  298 => 209,  294 => 208,  289 => 205,  286 => 204,  282 => 203,  255 => 181,  243 => 174,  231 => 167,  221 => 160,  207 => 151,  197 => 146,  192 => 145,  188 => 144,  180 => 139,  177 => 138,  157 => 56,  148 => 51,  146 => 50,  131 => 38,  121 => 31,  111 => 26,  104 => 22,  96 => 17,  87 => 10,  85 => 8,  80 => 7,  71 => 6,  56 => 4,  47 => 3,  37 => 1,  35 => 2,  11 => 1,);
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
    {{ block.book.title }} - {{ block.title }} - Édit
{% endblock %}
{% block body %}
<div id=\"prototypes\" data-block=\"{{ block.id }}\"  data-authorization-prototype=\"
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
                <a href=\"{{ url('administrator_edit_book',{token:block.book.token}) }}\">{{ block.book.title }}</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">
                    {{ block.title }}
                </span>
            </li>

        </ul>
    </div>
        <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
            <h2><span class=\"fa fa-book\"></span> &nbsp; {{ block.title }}</h2>
        </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box green-meadow col-md-12\">
                        <div class=\"portlet-title\">
                            <h4 class=\"pull-left\">Structure du bloc</h4>
                            <div class=\"tools\">
                                <a href=\"javascript:;\" data-placement=\"bottom\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                                <a href=\"\" class=\"fullscreen\" data-placement=\"bottom\" data-original-title=\"plein ecran\" title=\"\"> </a>
                            </div>
                            <div class=\"pull-right\" style=\"margin-top: 5px;margin-right: 10px\">
                             {% if block.parent is not null %}
                                <a href=\"{{ url('administrator_book_block',{token:block.parent.token} ) }}\" class=\"btn btn-sm default\" >
                                    <i class=\"fa fa-arrow-left\"></i>
                                    Bloc Précedent
                                </a>
                                {% endif %}
                            <button data-toggle=\"modal\" href=\"#new-block-modal\"  class=\"btn btnnn btn-success btn-sm \">
                                <i class=\"fa fa-plus\"></i>&nbsp;
                                Ajouter un bloc
                            </button>
                            </div>
                        </div>
                        <div class=\"portlet-body col-md-12\">
                            <div class=\"col-md-12 fakeTable\" id=\"blockTree\">
                                <table class=\"table table-bordered  \" cellspacing=\"0\" width=\"100%\" style=\"margin: 0px;\">
                                    <thead>
                                    <tr>
                                        <th class=\"col-md-5 col-sm-6 col-xs-6\">Titre du block</th>
                                        <th class=\"col-md-2 text-center hidden-sm hidden-xs\">Dernière version Validée</th>
                                        <th class=\"text-center col-md-2 col-sm-2 col-xs-2\">Version Puliée</th>
                                        <th class=\"text-center col-md-3 col-sm-4 col-xs-4 text-center\">Actions</th>
                                    </tr>
                                    </thead>
                                </table>
                                {% macro displayVersionBlock(blocks,firstBlock) %}
                                    {% import _self as macros %}
                                    {% for bl in blocks| sortbyfield('position') %}
                                        <li class=\"block-branch {% if bl.parent != firstBlock %} hidden {% endif %}\"
                                            data-id={{ bl.id }}
                                            data-parent={% if bl.parent is not null %}{{ bl.parent.id }}{% else %}null{% endif %}
                                            data-level={{ bl.level-firstBlock.level-1 }}
                                            data-position={{ bl.position }}>
                                            <div>
                                                <div class=\"cl-btn fake-column col-md-5 col-sm-6 col-xs-6 \" data-pdl=25>
                                                    {% if bl.childrens|length>0 %}
                                                        <button  class=\"btn green  btn-show-children\"><i
                                                                    class=\" fa fa-plus\"></i></button>
                                                    {% endif %}
                                                    <input style=\"pointer-events: none\" readonly type=\"text\" id=\"title-{{ bl.id }}\" class=\"form-control\"
                                                           value=\"{{ bl.title }}\">
                                                </div>
                                                 <div class=\"fake-column col-md-2 hidden-sm hidden-xs text-center\">
                                                    <div class=\"label label-success \">
                                                        {% if bl.lastValidatedVersion is not null %}
                                                            {{ bl.lastValidatedVersion.number|number_format(1,'.',',') }}
                                                        {% else %}
                                                            pas de version
                                                        {% endif %}
                                                    </div>
                                                </div>
                                                <div class=\"fake-column col-md-2 col-sm-2 col-xs-2 text-center\" >
                                                    <div class=\"label label-success \">
                                                        {% if bl.publishedVersion is not null %}
                                                            {{ bl.publishedVersion.number|number_format(1,'.',',') }}
                                                        {% else %}
                                                            pas de version
                                                        {% endif %}
                                                    </div>
                                                </div>
                                               <div class=\"fake-column actions col-md-3 col-sm-4 col-xs-4 text-center\">
                                                    <div >
                                                        <a class=\"btn green btn-icon-only\"
                                                           href=\"{{ url('administrator_book_block',{token:bl.token}) }}\">
                                                            <i class=\"fa fa-eye\"></i></a>
                                                    </div>

                                                    <div  data-toggle=\"tooltip\" data-title=\"Détails\">
                                                        <a href=\"#block_info_{{ bl.id }}\" data-toggle=\"modal\"
                                                           class=\"btn blue btn-icon-only\"><i class=\"fa fa-cog\"></i></a>
                                                    </div>
                                                    <div data-toggle=\"tooltip\"
                                                         data-title=\"Effacer!\">
                                                        <button type=\"button\" class=\"btn red btn-icon-only btn-delet-block\"
                                                                data-id=\"{{ bl.id }}\">
                                                            <i class=\"fa fa-trash\"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            {% if bl.childrens|length>0 %}
                                                <ol>
                                                    {{ macros.displayVersionBlock(bl.childrens|sortByPosition,firstBlock) }}
                                                </ol>
                                            {% endif %}
                                        </li>
                                    {% endfor %}

                                {% endmacro %}
                                <ol class=\"sortable \">
                                    {{ macros.displayVersionBlock(block.childrens|sortByPosition,block) }}
                                </ol>
                            </div>
                                <div class=\"hiddenForm col-md-12\" style=\"margin-top: 50px\">
                                    <div id=\"block-fields-list\" style=\"list-style: none\">
                                         {% for bl in block.childrens %}
                                            <div class=\"block-field \" id=\"block_{{ bl.id }}\">
                                                <div data-book=\"{{ bl.id }}\" class=\"modal fade fill-in blockModal\" id=\"block_info_{{ bl.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                                                    <a type=\"button\" class=\"close-modal\" data-dismiss=\"modal\" aria-hidden=\"true\">
                                                        <i class=\"fa fa-times\"></i>
                                                    </a>
                                                    <div class=\"modal-dialog\">
                                                        <form action=\"{{ url('administrator_update_block',{id:bl.id}) }}\" class=\"updateBlockForm\" data-parent=\"{{ block.id }}\">
                                                            <div class=\"modal-content row\">
                                                                <div class=\"modal-header\">
                                                                    <h2><i class=\"fa fa-pencil\"></i>&nbsp; Détails du bloc</h2>
                                                                </div>
                                                                <div class=\"modal-body col-md-12\">
                                                                    <div class=\"form-group col-md-12\">
                                                                        <label for=\"blockTitle\" class=\"col-sm-4 control-label\">Titre du bloc</label>
                                                                        <div class=\"col-sm-8\">
                                                                            <input value=\"{{ bl.title }}\" name=\"blockTitle\" required type=\"text\" class=\"form-control\" id=\"blockTitle\"
                                                                                   placeholder=\"Titre du bloc\">
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"form-group text-center col-md-12\">
                                                                        <label class=\"col-md-4\" style=\"display: flex\" for=\"showTitle\">
                                                                            <div class=\"custom-check\">
                                                                                <input  {% if bl.options.showTitle %} checked  {% endif %} id=\"showTitle\" name=\"showTitle\" type=\"checkbox\" role=\"checkbox\"
                                                                                       class=\"custom-check-input\">
                                                                            </div>
                                                                            Afficher Titre
                                                                        </label>
                                                                        <label class=\"col-md-4\" style=\"display: flex\" for=\"indexed\">
                                                                            <div class=\"custom-check\">
                                                                                <input {% if bl.options.indexed %} checked  {% endif %} id=\"indexed\" name=\"indexed\" type=\"checkbox\" role=\"checkbox\"
                                                                                       class=\"custom-check-input\">
                                                                            </div>
                                                                            Table des matières
                                                                        </label>
                                                                        <label class=\"col-md-4\" style=\"display: flex\" for=\"paginated\">
                                                                            <div class=\"custom-check\">
                                                                                <input {% if bl.options.paginated %} checked  {% endif %} id=\"paginated\" name=\"paginated\" type=\"checkbox\" role=\"checkbox\"
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
                                                                                {% for authorization in bl.authorizations %}
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
                                                                                {% for authorization in bl.authorizations %}
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
            {% if block.publishedVersion is not null %}
                <div class=\"portlet box green-meadow col-md-12\" style=\"margin-bottom: 15px\">
                    <div class=\"portlet-title\">
                        <h4 class=\"pull-left\">Contenu du bloc</h4>
                        <div class=\"tools\">
                            <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" data-placement=\"bottom\" title=\"\"> </a>
                            <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" data-placement=\"bottom\" title=\"\"> </a>
                        </div>
                    </div>
                    <div class=\"portlet-body col-md-12\">
                        <div class=\"col-md-12\" style=\"display: block;\">
                            <textarea class=\"tinyMince\">{{ block.publishedVersion.content }}</textarea>
                        </div>
                    </div>
                </div>
                <div id=\"fm-token\" data-token=\"{{ block.publishedVersion.token }}\"></div>
            {% endif %}
            <div class=\"portlet box green-meadow col-md-12\" style=\"margin-bottom: 15px\">
                    <div class=\"portlet-title\">
                        <h4 class=\"pull-left\">Versions du bloc</h4>
                        <div class=\"tools\">
                            <a href=\"javascript:;\" class=\"collapse\" data-original-title=\"reduire\" data-placement=\"bottom\" title=\"\"> </a>
                            <a href=\"\" class=\"fullscreen\" data-original-title=\"plein ecran\" data-placement=\"bottom\" title=\"\"> </a>
                        </div>
                    </div>
                    <div class=\"portlet-body\">
                        <table class=\"table table-bordered \">
                            <thead>
                                <tr>
                                    <th class=\"text-center \">Date Creation</th>
                                    <th class=\"text-center\">Crée Par</th>
                                    <th class=\"text-center\">Numéro</th>
                                    <th class=\"text-center\">Status</th>
                                    <th class=\"text-center\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for version in block.versions|sortbyfield('createdAt')|reverse %}
                                <tr class=\"text-center\">
                                    <td>{{ version.createdAt|date('d-m-Y') }}</td>
                                    <td>{{ version.createdBy.profile.fullName }}</td>
                                    <td >
                                        <div style=\"font-size: 10px!important;\" class=\"label label-success\"> v {{ version.number|number_format(1,'.',',') }}</div>
                                    </td>
                                    <td >
                                        {% if version.status==3 %}
                                            <div class=\"label label-success\">publiée</div>
                                        {% elseif version.status==2 %}
                                           <div class=\"label label-info\">validée</div>
                                        {% else %}
                                           <div class=\"label label-warning\">en cours</div>
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if version.status==3 %}
                                            <button type=\"button\" class=\"btn green disabled btn-sm\">Active</button>
                                        {% elseif version.status==2 %}
                                            <button data-url=\"{{ url('administrator_publish_block_version',{token:version.token}) }}\" type=\"button\"
                                               class=\"btn default btn-sm btn-activate-version \">Activer la version</button>
                                            <button href=\"#animatedModal\" type=\"button\"  class=\"btn blue btn-cmp-version\"
                                            data-content=\"{{ version.content|raw|convert_encoding('UTF-8', 'HTML-ENTITIES') }}\"
                                             data-author=\"{{ version.createdBy.profile.fullName }}\" data-vnumber=\"{{ version.number|number_format(1,'.',',') }}\"
                                            data-toggle=\"tooltip\" data-title=\"Comparer avec la version actuelle\"><i class=\"fa fa-exchange\"></i>Différence</button>
                                        {% else %}
                                            {% if version.status==0 %}
                                                <a href=\"{{ url('administrator_display_version_progression',{token:version.token}) }}\" class=\"btn blue btn-sm\"><i class=\"fa fa-eye\"></i> suivie </a>
                                            {% endif %}
                                            <button type=\"button\" class=\"btn default btn-sm disabled\">Active</button>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
                 <!-- needed to load file from current version -->
            <div class=\"portlet box green-meadow col-md-12\">
                    <div class=\"portlet-title\">
                        <h4 class=\"pull-left\">Historique du bloc</h4>
                        <div class=\"tools\">
                            <a href=\"javascript:;\" data-placement=\"bottom\" class=\"collapse\" data-original-title=\"reduire\" title=\"\"> </a>
                            <a href=\"\" class=\"fullscreen\" data-placement=\"bottom\" data-original-title=\"plein ecran\" title=\"\"> </a>
                        </div>
                    </div>
                    <div class=\"portlet-body col-md-12\">
                        <table class=\"table table-hover table-bordered\">
                        \t<thead>
                        \t\t<tr>
                        \t\t\t<th class=\"col-md-2 text-center\"> Date </th>
                                    <th class=\"text-center\"> Information </th>
                        \t\t</tr>
                        \t</thead>
                        \t<tbody>
                        \t{% for historic in block.historics|sortbyfield('date','desc') %}
                        \t    <tr>
                        \t\t    <td class=\"text-center\">{{ historic.date|date('d-m-Y H:i') }}</td>
                        \t\t    <td>{{ historic.message }} </td>
                                </tr>
                        \t{% endfor %}
                        \t</tbody>
                        </table>

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
                    <span class=\"col-md-5\">Numéro version : <strong>{% if block.publishedVersion is not null  %}{{ block.publishedVersion.number|number_format(1,'.',',')  }} {% endif %}</strong></span>
                    <span class=\"col-md-7\">&nbsp;&nbsp;- &nbsp; Crée par : <strong>{% if block.publishedVersion is not null  %} {{ block.publishedVersion.createdBy.profile.fullName }} {% endif %}</strong></span>
                </h4>
                <h4 class=\"col-md-6 text-center\" style=\"color: grey\">
                    <span class=\"col-md-5\">Numéro version : <strong id=\"cmpv-number\"></strong></span>
                    <span class=\"col-md-7\">&nbsp;&nbsp;- &nbsp; Crée par : <strong id=\"cmpv-author\"></strong></span>
                </h4>
            </div>
            <div class=\"col-md-12\" id=\"compare\">

            </div>
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-my-books\">
    <div id=\"currentVersion\" class=\"hidden\">{% if block.publishedVersion is not null %}{% spaceless %}{{ block.publishedVersion.content|convert_encoding('UTF-8', 'HTML-ENTITIES')}}{% endspaceless %}{% endif %}</div>
    <div id=\"newVersion\" class=\"hidden\"></div>

   <!-- new block modal -->
    <div data-book=\"{{ block.book.id }}\" class=\"modal fade fill-in blockModal\" id=\"new-block-modal\" tabindex=\"-1\" aria-hidden=\"true\">
        <a type=\"button\" class=\"close-modal\" data-dismiss=\"modal\" aria-hidden=\"true\">
            <i class=\"fa fa-times\"></i>
        </a>
        <div class=\"modal-dialog\">
            <form  id=\"createBlockForm\" action=\"{{ url('administrator_create_block',{book:block.book.id}) }}\" data-parent=\"{{ block.id }}\">
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
    <link rel=\"stylesheet\" href=\"{{ asset('assets/pages/css/book.structure.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/mergely-3.4.4/lib/mergely.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/mergely-3.4.4/lib/codemirror.css') }}\">
    <style>
        .fake-column{
            vertical-align: middle;
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
        .center-all{
            display: grid;
            align-items: center;
        }
        .center-all>div{
            text-align: center;
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
        .label-success.ui-sortable-handle{
        vertical-align: sub;
        }
    </style>
{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery.mjs.nestedSortable.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/pages/js/book/edit_block_structure.js') }}\"></script>
    <script src=\"{{ asset('assets/global/plugins/annimatedModal/animatedModal.js-master/animatedModal.min.js') }}\"></script>
    <script src=\"{{ asset('assets/global/plugins/mergely-3.4.4/lib/codemirror.js') }}\"></script>
    <script src=\"{{ asset('assets/global/plugins/mergely-3.4.4/lib/mergely.js') }}\"></script>
    <script >
        \$(document).ready(function() {
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
          \$(document).on('click','.btn-activate-version',function() {
                var elem=\$(this);
                var url = elem.data('url');
                \$.ajax({
                    url: url,
                    method: 'POST',
                    beforeSend: function () {
                        \$('.btn-activate-version').off();
                        elem.attr('disabled', true).addClass('yellow');
                        elem.html('<i class=\"fa fa-cog fa-2x fa-spin\"></i>');
                        toastr.options.progressBar = true;
                        toastr.info('Chargement de la nouvelle version ')
                    },
                    success: function () {
                        location.reload();
                    }
                })
          });
          \$(\".btn-cmp-version\").click(function() {
              content=\$(this).data('content');
              author_name=\$(this).data('author');
              version_number=\$(this).data('vnumber');
                \$('#newVersion').text(content);
                \$('#cmpv-author').text(author_name);
                \$('#cmpv-number').text(version_number);
          })
        })
    </script>
{% endblock %}", "@Main/Admin/book/edit.block.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\book\\edit.block.html.twig");
    }
}
