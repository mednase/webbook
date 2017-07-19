<?php

/* @Messaging/Default/inbox.html.twig */
class __TwigTemplate_35d5539528d826d2ecefd2fba1b3f251d45d53cc1fd9c96d794e7b4907316d63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Messaging/message.layout.html.twig", "@Messaging/Default/inbox.html.twig", 1);
        $this->blocks = array(
            'BCMInbox' => array($this, 'block_BCMInbox'),
            'message_body' => array($this, 'block_message_body'),
            'under_js' => array($this, 'block_under_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Messaging/message.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23385d22baa5bca6cac0d147d79d2b759e7d92499b66ab2abb08bcc1aab783dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23385d22baa5bca6cac0d147d79d2b759e7d92499b66ab2abb08bcc1aab783dc->enter($__internal_23385d22baa5bca6cac0d147d79d2b759e7d92499b66ab2abb08bcc1aab783dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Messaging/Default/inbox.html.twig"));

        $__internal_effddd5b4a0874a6ab9112ef47476347392c5b2873e6cd597f60eb8288818c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effddd5b4a0874a6ab9112ef47476347392c5b2873e6cd597f60eb8288818c8f->enter($__internal_effddd5b4a0874a6ab9112ef47476347392c5b2873e6cd597f60eb8288818c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Messaging/Default/inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23385d22baa5bca6cac0d147d79d2b759e7d92499b66ab2abb08bcc1aab783dc->leave($__internal_23385d22baa5bca6cac0d147d79d2b759e7d92499b66ab2abb08bcc1aab783dc_prof);

        
        $__internal_effddd5b4a0874a6ab9112ef47476347392c5b2873e6cd597f60eb8288818c8f->leave($__internal_effddd5b4a0874a6ab9112ef47476347392c5b2873e6cd597f60eb8288818c8f_prof);

    }

    // line 2
    public function block_BCMInbox($context, array $blocks = array())
    {
        $__internal_f62ea33f68d25a8626b83b308e0001e514effaeaa833ea339f6db38d9eae4337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62ea33f68d25a8626b83b308e0001e514effaeaa833ea339f6db38d9eae4337->enter($__internal_f62ea33f68d25a8626b83b308e0001e514effaeaa833ea339f6db38d9eae4337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BCMInbox"));

        $__internal_5138d3e129dd1feae789f0e0bd337c086fa3f2cb7b10c2368e7335ecd0eae313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5138d3e129dd1feae789f0e0bd337c086fa3f2cb7b10c2368e7335ecd0eae313->enter($__internal_5138d3e129dd1feae789f0e0bd337c086fa3f2cb7b10c2368e7335ecd0eae313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BCMInbox"));

        echo "active";
        
        $__internal_5138d3e129dd1feae789f0e0bd337c086fa3f2cb7b10c2368e7335ecd0eae313->leave($__internal_5138d3e129dd1feae789f0e0bd337c086fa3f2cb7b10c2368e7335ecd0eae313_prof);

        
        $__internal_f62ea33f68d25a8626b83b308e0001e514effaeaa833ea339f6db38d9eae4337->leave($__internal_f62ea33f68d25a8626b83b308e0001e514effaeaa833ea339f6db38d9eae4337_prof);

    }

    // line 3
    public function block_message_body($context, array $blocks = array())
    {
        $__internal_da3e823dec5319e959f854082c2cc2a49ba3494f7bec5a5681af27eb7a7d7645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3e823dec5319e959f854082c2cc2a49ba3494f7bec5a5681af27eb7a7d7645->enter($__internal_da3e823dec5319e959f854082c2cc2a49ba3494f7bec5a5681af27eb7a7d7645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message_body"));

        $__internal_a10d498c50eec3a7c94e83b1917c13c16f74283d9629149d715aa71ea8e02165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10d498c50eec3a7c94e83b1917c13c16f74283d9629149d715aa71ea8e02165->enter($__internal_a10d498c50eec3a7c94e83b1917c13c16f74283d9629149d715aa71ea8e02165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message_body"));

        // line 4
        echo "    <div class=\"col-md-9\">
        <div class=\"inbox-body\">
            <div class=\"inbox-content\">
                <table class=\"table table-striped table-advance\">
                    <thead>
                        <tr>
                            <th class=\"inbox-small-cells\" colspan=\"1\">
                                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline green \">
                                    <input id=\"check-all-msg\" type=\"checkbox\" class=\"mail-checkbox\" value=\"1\">
                                    <span></span>
                                </label>

                            </th>
                            <th class=\"inbox-small-cells\" colspan=\"2\">
                                <button id=\"btn-mq-read\" data-toggle=\"tooltip\" title=\"marquer comme lus \" class=\"btn btn-default\"><span class=\"fa fa-eye\" style=\"color: #73879C!important;\"></span></button>
                                <button id=\"btn-dlt-msg\" data-toggle=\"tooltip\" title=\"supprimer\" class=\"btn btn-default\"><span class=\"fa fa-trash-o\" style=\"color: #73879C!important;\"></span></button>
                            </th>
                            <th colspan=\"3\">
                                <div class=\"pull-right\" style=\"width: 150px;margin-left: 20px\">
                                    <div class=\"input-group\">
                                        <input id=\"dateSearch\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
        echo "\" class=\"form-control datepicker\" type=\"text\" data-orientation=\"left\">
                                        <div class=\"input-group-addon\" style=\"background:#32c5d2;color: white;\"><span
                                                    class=\"fa fa-calendar\"></span></div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 33
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) == 0)) {
            // line 34
            echo "                        <tr ><td colspan=\"5\" class=\"text-center no-message\">Pas de message </td></tr>
                    ";
        }
        // line 36
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["hasMessage"]) {
            // line 37
            echo "                    <tr data-type=1 class=\"msg-tr ";
            if ( !$this->getAttribute($context["hasMessage"], "seen", array())) {
                echo "unread";
            }
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["hasMessage"], "id", array()), "html", null, true);
            echo "\" data-token=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["hasMessage"], "token", array()), "html", null, true);
            echo "\">
                        <td class=\"inbox-small-cells\">
                            <label class=\"mt-checkbox mt-checkbox-single green mt-checkbox-outline green\">
                                <input type=\"checkbox\" class=\"mail-checkbox\" name=\"msg-check[]\">
                                <span></span>
                            </label>
                        </td>
                        <td class=\"inbox-small-cells\">
                            <label for=\"important\">
                                <input data-msgt=0 data-msg=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["hasMessage"], "id", array()), "html", null, true);
            echo "\"  class=\"hidden important-btn\" type=\"checkbox\" ";
            if ($this->getAttribute($context["hasMessage"], "important", array())) {
                echo " checked ";
            }
            echo "id=\"important\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["hasMessage"], "important", array()), "html", null, true);
            echo "\">
                                ";
            // line 47
            if ($this->getAttribute($context["hasMessage"], "important", array())) {
                echo "<i class=\"fa fa-star\"></i>";
            } else {
                echo "<i class=\"fa fa-star-o\"></i>";
            }
            // line 48
            echo "                            </label>
                        </td>
                        <td class=\"view-message col-md-3\"><div>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["hasMessage"], "message", array()), "sender", array()), "profile", array()), "fullName", array()), "html", null, true);
            echo "</div></td>
                        <td class=\"view-message col-md-4\"><div><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("messaging_show_msg", array("token" => $this->getAttribute($context["hasMessage"], "token", array()), "role" => $this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->getRole())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["hasMessage"], "message", array()), "subject", array()), "html", null, true);
            echo "</a></div></td>
                        <td class=\"view-message inbox-small-cells  hidden-xs\">
                            ";
            // line 53
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["hasMessage"], "message", array()), "attachments", array())) > 0)) {
                // line 54
                echo "                            <i data-toggle=\"tooltip\" title=\"attachements\" class=\"fa fa-paperclip\"></i>
                            ";
            }
            // line 56
            echo "                        </td>
                        <td class=\"col-md-2 view-message text-right\">";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["hasMessage"], "message", array()), "dateSend", array()), "d-m-y H:i"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hasMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"panel-footer col-md-12\">
                <div class=\"col-md-4 nb-msg\">
                    ";
        // line 65
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))), "html", null, true);
        echo " - Messages
                </div>
                ";
        // line 67
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_a10d498c50eec3a7c94e83b1917c13c16f74283d9629149d715aa71ea8e02165->leave($__internal_a10d498c50eec3a7c94e83b1917c13c16f74283d9629149d715aa71ea8e02165_prof);

        
        $__internal_da3e823dec5319e959f854082c2cc2a49ba3494f7bec5a5681af27eb7a7d7645->leave($__internal_da3e823dec5319e959f854082c2cc2a49ba3494f7bec5a5681af27eb7a7d7645_prof);

    }

    // line 72
    public function block_under_js($context, array $blocks = array())
    {
        $__internal_b1c648634a855c1109789a0a14b97cabcedda1e7309cab89dcac0b39c3534cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c648634a855c1109789a0a14b97cabcedda1e7309cab89dcac0b39c3534cbd->enter($__internal_b1c648634a855c1109789a0a14b97cabcedda1e7309cab89dcac0b39c3534cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "under_js"));

        $__internal_b6e66d77a3815eafe54a154d793bdf6531cb81bce80c0f3548c24a589510b32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e66d77a3815eafe54a154d793bdf6531cb81bce80c0f3548c24a589510b32c->enter($__internal_b6e66d77a3815eafe54a154d793bdf6531cb81bce80c0f3548c24a589510b32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "under_js"));

        
        $__internal_b6e66d77a3815eafe54a154d793bdf6531cb81bce80c0f3548c24a589510b32c->leave($__internal_b6e66d77a3815eafe54a154d793bdf6531cb81bce80c0f3548c24a589510b32c_prof);

        
        $__internal_b1c648634a855c1109789a0a14b97cabcedda1e7309cab89dcac0b39c3534cbd->leave($__internal_b1c648634a855c1109789a0a14b97cabcedda1e7309cab89dcac0b39c3534cbd_prof);

    }

    public function getTemplateName()
    {
        return "@Messaging/Default/inbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 72,  194 => 67,  189 => 65,  182 => 60,  173 => 57,  170 => 56,  166 => 54,  164 => 53,  157 => 51,  153 => 50,  149 => 48,  143 => 47,  133 => 46,  114 => 37,  109 => 36,  105 => 34,  103 => 33,  91 => 24,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Messaging/message.layout.html.twig' %}
{% block BCMInbox %}active{% endblock %}
{% block message_body %}
    <div class=\"col-md-9\">
        <div class=\"inbox-body\">
            <div class=\"inbox-content\">
                <table class=\"table table-striped table-advance\">
                    <thead>
                        <tr>
                            <th class=\"inbox-small-cells\" colspan=\"1\">
                                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline green \">
                                    <input id=\"check-all-msg\" type=\"checkbox\" class=\"mail-checkbox\" value=\"1\">
                                    <span></span>
                                </label>

                            </th>
                            <th class=\"inbox-small-cells\" colspan=\"2\">
                                <button id=\"btn-mq-read\" data-toggle=\"tooltip\" title=\"marquer comme lus \" class=\"btn btn-default\"><span class=\"fa fa-eye\" style=\"color: #73879C!important;\"></span></button>
                                <button id=\"btn-dlt-msg\" data-toggle=\"tooltip\" title=\"supprimer\" class=\"btn btn-default\"><span class=\"fa fa-trash-o\" style=\"color: #73879C!important;\"></span></button>
                            </th>
                            <th colspan=\"3\">
                                <div class=\"pull-right\" style=\"width: 150px;margin-left: 20px\">
                                    <div class=\"input-group\">
                                        <input id=\"dateSearch\" value=\"{{ date }}\" class=\"form-control datepicker\" type=\"text\" data-orientation=\"left\">
                                        <div class=\"input-group-addon\" style=\"background:#32c5d2;color: white;\"><span
                                                    class=\"fa fa-calendar\"></span></div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    {% if pagination|length==0 %}
                        <tr ><td colspan=\"5\" class=\"text-center no-message\">Pas de message </td></tr>
                    {% endif %}
                    {% for hasMessage in pagination %}
                    <tr data-type=1 class=\"msg-tr {% if not hasMessage.seen %}unread{% endif %}\" data-id=\"{{ hasMessage.id }}\" data-token=\"{{ hasMessage.token }}\">
                        <td class=\"inbox-small-cells\">
                            <label class=\"mt-checkbox mt-checkbox-single green mt-checkbox-outline green\">
                                <input type=\"checkbox\" class=\"mail-checkbox\" name=\"msg-check[]\">
                                <span></span>
                            </label>
                        </td>
                        <td class=\"inbox-small-cells\">
                            <label for=\"important\">
                                <input data-msgt=0 data-msg=\"{{ hasMessage.id }}\"  class=\"hidden important-btn\" type=\"checkbox\" {% if  hasMessage.important %} checked {% endif %}id=\"important\" value=\"{{ hasMessage.important }}\">
                                {% if hasMessage.important %}<i class=\"fa fa-star\"></i>{% else %}<i class=\"fa fa-star-o\"></i>{% endif %}
                            </label>
                        </td>
                        <td class=\"view-message col-md-3\"><div>{{ hasMessage.message.sender.profile.fullName }}</div></td>
                        <td class=\"view-message col-md-4\"><div><a href=\"{{ url('messaging_show_msg',{token:hasMessage.token,role:getRole()}) }}\">{{ hasMessage.message.subject }}</a></div></td>
                        <td class=\"view-message inbox-small-cells  hidden-xs\">
                            {% if hasMessage.message.attachments|length>0 %}
                            <i data-toggle=\"tooltip\" title=\"attachements\" class=\"fa fa-paperclip\"></i>
                            {% endif %}
                        </td>
                        <td class=\"col-md-2 view-message text-right\">{{ hasMessage.message.dateSend|date('d-m-y H:i') }}</td>
                    </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"panel-footer col-md-12\">
                <div class=\"col-md-4 nb-msg\">
                    {{ pagination|length }} - Messages
                </div>
                {{ knp_pagination_render(pagination) }}
            </div>
        </div>
    </div>
{% endblock %}
{% block under_js %}
{% endblock %}
", "@Messaging/Default/inbox.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MessagingBundle\\Resources\\views\\Default\\inbox.html.twig");
    }
}
