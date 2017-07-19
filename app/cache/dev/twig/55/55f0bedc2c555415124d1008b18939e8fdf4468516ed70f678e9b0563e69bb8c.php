<?php

/* form/form.block.authorization.html.twig */
class __TwigTemplate_539a1d379b7102e91360f01a911ac6d2f4a879e3c86adf9f7f31961a678980eb extends Twig_Template
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
        $__internal_3e1d36d1bbf207fe0bd598a546b6239e0abb3ef23b76f2770a8a4bd9f852202b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1d36d1bbf207fe0bd598a546b6239e0abb3ef23b76f2770a8a4bd9f852202b->enter($__internal_3e1d36d1bbf207fe0bd598a546b6239e0abb3ef23b76f2770a8a4bd9f852202b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/form.block.authorization.html.twig"));

        $__internal_aaa502262d00d98be88244dc8789c196f6ee2b3e1caa028199636c3fac70f06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa502262d00d98be88244dc8789c196f6ee2b3e1caa028199636c3fac70f06e->enter($__internal_aaa502262d00d98be88244dc8789c196f6ee2b3e1caa028199636c3fac70f06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/form.block.authorization.html.twig"));

        // line 1
        echo "<tr class=\"text-center \">
    <td>
        <select class=\"form-control\" name=\"auth_user\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 5
            echo "                <option class=\"auth-attr\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "fullName", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["validators"]) ? $context["validators"] : $this->getContext($context, "validators")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 8
            echo "                <option class=\"val-attr\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "profile", array()), "fullName", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </select>
    </td>
    <td class=\"auth-attr\">
        <div class=\"custom-check\">
            <input type=\"checkbox\"  name=\"canRead\" class=\"custom-check-input\">
        </div>
    </td>
    <td class=\"auth-attr\">
        <div class=\"custom-check\">
            <input type=\"checkbox\"  name=\"canWrite\" class=\"custom-check-input\">
        </div>
    </td>
    <td class=\"auth-attr\">
        <div class=\"custom-check\">
            <input type=\"checkbox\"  name=\"canDelete\" class=\"custom-check-input\">
        </div>
    </td>
    <td>
        <div class=\"custom-check\">
            <input type=\"checkbox\"  name=\"limited\" class=\"custom-check-input\">
        </div>
    </td>

    <td class=\"text-center\">
        <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Effacer !\"
                class=\"btn btn-sm btn-circle red remove-auth\">
            <i class=\"fa fa-minus\"></i>
        </button>
    </td>
</tr>";
        
        $__internal_3e1d36d1bbf207fe0bd598a546b6239e0abb3ef23b76f2770a8a4bd9f852202b->leave($__internal_3e1d36d1bbf207fe0bd598a546b6239e0abb3ef23b76f2770a8a4bd9f852202b_prof);

        
        $__internal_aaa502262d00d98be88244dc8789c196f6ee2b3e1caa028199636c3fac70f06e->leave($__internal_aaa502262d00d98be88244dc8789c196f6ee2b3e1caa028199636c3fac70f06e_prof);

    }

    public function getTemplateName()
    {
        return "form/form.block.authorization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  50 => 8,  45 => 7,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr class=\"text-center \">
    <td>
        <select class=\"form-control\" name=\"auth_user\">
            {% for user in authors %}
                <option class=\"auth-attr\" value=\"{{ user.id }}\">{{ user.profile.fullName }}</option>
            {% endfor %}
            {% for user in validators %}
                <option class=\"val-attr\" value=\"{{ user.id }}\">{{ user.profile.fullName }}</option>
            {% endfor %}
        </select>
    </td>
    <td class=\"auth-attr\">
        <div class=\"custom-check\">
            <input type=\"checkbox\"  name=\"canRead\" class=\"custom-check-input\">
        </div>
    </td>
    <td class=\"auth-attr\">
        <div class=\"custom-check\">
            <input type=\"checkbox\"  name=\"canWrite\" class=\"custom-check-input\">
        </div>
    </td>
    <td class=\"auth-attr\">
        <div class=\"custom-check\">
            <input type=\"checkbox\"  name=\"canDelete\" class=\"custom-check-input\">
        </div>
    </td>
    <td>
        <div class=\"custom-check\">
            <input type=\"checkbox\"  name=\"limited\" class=\"custom-check-input\">
        </div>
    </td>

    <td class=\"text-center\">
        <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Effacer !\"
                class=\"btn btn-sm btn-circle red remove-auth\">
            <i class=\"fa fa-minus\"></i>
        </button>
    </td>
</tr>", "form/form.block.authorization.html.twig", "D:\\PFE\\webbook\\app\\Resources\\views\\form\\form.block.authorization.html.twig");
    }
}
