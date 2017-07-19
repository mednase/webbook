<?php

/* form/form.book_block.html.twig */
class __TwigTemplate_7f29d07143787cdf7640a213645a378b7d7d10a3e7c278c95d29585eb0aca99a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9827ccd726bc83eead42c9822fb12fc65a58ff4725e144405c577af80ffa1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9827ccd726bc83eead42c9822fb12fc65a58ff4725e144405c577af80ffa1ee->enter($__internal_b9827ccd726bc83eead42c9822fb12fc65a58ff4725e144405c577af80ffa1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/form.book_block.html.twig"));

        $__internal_5f80df5442cf1b7bad39fe4f0752819fb86a276670fa2a121f45e634eb2f61ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f80df5442cf1b7bad39fe4f0752819fb86a276670fa2a121f45e634eb2f61ae->enter($__internal_5f80df5442cf1b7bad39fe4f0752819fb86a276670fa2a121f45e634eb2f61ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/form.book_block.html.twig"));

        // line 1
        echo "<div class=\"block-field \" id=\"block_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\">
    <div data-book=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "book", array()), "id", array()), "html", null, true);
        echo "\" class=\"modal fade fill-in blockModal\" id=\"block_info_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" tabindex=\"-1\" aria-hidden=\"true\">
        <a type=\"button\" class=\"close-modal\" data-dismiss=\"modal\" aria-hidden=\"true\">
            <i class=\"fa fa-times\"></i>
        </a>
        <div class=\"modal-dialog\">
            <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_update_block", array("id" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()))), "html", null, true);
        echo "\" class=\"updateBlockForm\" ";
        if ($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "parent", array())) {
            echo "data-parent=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "parent", array()), "id", array()), "html", null, true);
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
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "title", array()), "html", null, true);
        echo "\" name=\"blockTitle\" required type=\"text\" class=\"form-control\" id=\"blockTitle\"
                                       placeholder=\"Titre du bloc\">
                            </div>
                        </div>
                        <div class=\"form-group text-center col-md-12\">
                            <label class=\"col-md-4\" style=\"display: flex\" for=\"showTitle\">
                                <div class=\"custom-check\">
                                    <input  ";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "options", array()), "showTitle", array())) {
            echo " checked  ";
        }
        echo " id=\"showTitle\" name=\"options[showTitle]\" type=\"checkbox\" role=\"checkbox\"
                                                                                                  class=\"custom-check-input\">
                                </div>
                                Afficher Titre
                            </label>
                            <label class=\"col-md-4\" style=\"display: flex\" for=\"indexed\">
                                <div class=\"custom-check\">
                                    <input ";
        // line 30
        if ($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "options", array()), "indexed", array())) {
            echo " checked  ";
        }
        echo " id=\"indexed\" name=\"options[indexed]\" type=\"checkbox\" role=\"checkbox\"
                                                                                               class=\"custom-check-input\">
                                </div>
                                Table des matières
                            </label>
                            <label class=\"col-md-4\" style=\"display: flex\" for=\"paginated\">
                                <div class=\"custom-check\">
                                    <input ";
        // line 37
        if ($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "options", array()), "paginated", array())) {
            echo " checked  ";
        }
        echo " id=\"paginated\" name=\"options[paginated]\" type=\"checkbox\" role=\"checkbox\"
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
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "authorizations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["authorization"]) {
            // line 60
            echo "                                    ";
            if (twig_in_filter("ROLE_AUTHOR", $this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "roles", array()))) {
                // line 61
                echo "                                        <tr class=\"text-center\">
                                            <td>
                                                <select class=\"form-control\" name=\"auth_user\">
                                                    ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 65
                    echo "                                                        <option ";
                    if (($this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                        echo " selected ";
                    }
                    // line 66
                    echo "                                                                value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "fullName", array()), "html", null, true);
                    echo "</option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                                                </select>
                                            </td>
                                            <td>
                                                <div class=\"custom-check\">
                                                    <input type=\"checkbox\" class=\"custom-check-input\" name=\"canRead\"
                                                            ";
                // line 73
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
                // line 79
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
                // line 85
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
                // line 91
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
            // line 104
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authorization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                                </tbody>
                                ";
        // line 106
        if ((twig_length_filter($this->env, (isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors"))) > 0)) {
            // line 107
            echo "                                    <tfoot>
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
        // line 117
        echo "                            </table>

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
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "authorizations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["authorization"]) {
            // line 133
            echo "                                    ";
            if (twig_in_filter("ROLE_VALIDATOR", $this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "roles", array()))) {
                // line 134
                echo "                                        <tr class=\"text-center\">
                                            <td>
                                                <select class=\"form-control\" name=\"auth_user\">
                                                    ";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["validators"]) ? $context["validators"] : $this->getContext($context, "validators")));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 138
                    echo "                                                        <option ";
                    if (($this->getAttribute($this->getAttribute($context["authorization"], "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                        echo " selected ";
                    }
                    // line 139
                    echo "                                                                value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "fullName", array()), "html", null, true);
                    echo "</option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "                                                </select>
                                            </td>
                                            <td>
                                                <div class=\"custom-check\">
                                                    <input type=\"checkbox\" class=\"custom-check-input\" name=\"limited\"
                                                            ";
                // line 146
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
            // line 158
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authorization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "                                </tbody>
                                ";
        // line 160
        if ((twig_length_filter($this->env, (isset($context["validators"]) ? $context["validators"] : $this->getContext($context, "validators"))) > 0)) {
            // line 161
            echo "                                    <tfoot>
                                    <tr>
                                        <td colspan=\"3\" class=\"col-md-12\">
                                            <button type=\"button\" id=\"addValidator\" class=\"btn green btn-circle btn-icon-only add-auth-btn\" ";
            // line 164
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
        // line 171
        echo "                            </table>
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
        
        $__internal_b9827ccd726bc83eead42c9822fb12fc65a58ff4725e144405c577af80ffa1ee->leave($__internal_b9827ccd726bc83eead42c9822fb12fc65a58ff4725e144405c577af80ffa1ee_prof);

        
        $__internal_5f80df5442cf1b7bad39fe4f0752819fb86a276670fa2a121f45e634eb2f61ae->leave($__internal_5f80df5442cf1b7bad39fe4f0752819fb86a276670fa2a121f45e634eb2f61ae_prof);

    }

    public function getTemplateName()
    {
        return "form/form.book_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 171,  331 => 164,  326 => 161,  324 => 160,  321 => 159,  315 => 158,  296 => 146,  289 => 141,  278 => 139,  273 => 138,  269 => 137,  264 => 134,  261 => 133,  257 => 132,  240 => 117,  228 => 107,  226 => 106,  223 => 105,  217 => 104,  197 => 91,  184 => 85,  171 => 79,  158 => 73,  151 => 68,  140 => 66,  135 => 65,  131 => 64,  126 => 61,  123 => 60,  119 => 59,  92 => 37,  80 => 30,  68 => 23,  58 => 16,  40 => 7,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"block-field \" id=\"block_{{ block.id }}\">
    <div data-book=\"{{ block.book.id }}\" class=\"modal fade fill-in blockModal\" id=\"block_info_{{ block.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
        <a type=\"button\" class=\"close-modal\" data-dismiss=\"modal\" aria-hidden=\"true\">
            <i class=\"fa fa-times\"></i>
        </a>
        <div class=\"modal-dialog\">
            <form action=\"{{ url('administrator_update_block',{id:block.id}) }}\" class=\"updateBlockForm\" {% if block.parent %}data-parent=\"{{ block.parent.id }}\" {% endif %}>
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
                                    <input  {% if block.options.showTitle %} checked  {% endif %} id=\"showTitle\" name=\"options[showTitle]\" type=\"checkbox\" role=\"checkbox\"
                                                                                                  class=\"custom-check-input\">
                                </div>
                                Afficher Titre
                            </label>
                            <label class=\"col-md-4\" style=\"display: flex\" for=\"indexed\">
                                <div class=\"custom-check\">
                                    <input {% if block.options.indexed %} checked  {% endif %} id=\"indexed\" name=\"options[indexed]\" type=\"checkbox\" role=\"checkbox\"
                                                                                               class=\"custom-check-input\">
                                </div>
                                Table des matières
                            </label>
                            <label class=\"col-md-4\" style=\"display: flex\" for=\"paginated\">
                                <div class=\"custom-check\">
                                    <input {% if block.options.paginated %} checked  {% endif %} id=\"paginated\" name=\"options[paginated]\" type=\"checkbox\" role=\"checkbox\"
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
", "form/form.book_block.html.twig", "D:\\PFE\\webbook\\app\\Resources\\views\\form\\form.book_block.html.twig");
    }
}
