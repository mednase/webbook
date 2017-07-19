<?php

/* ::menu/toaster.html.twig */
class __TwigTemplate_eb3e4f2a4b446a3fc54da5b7e8b6528956a681bb854c04ca2128970fa58b8d3b extends Twig_Template
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
        $__internal_6fbb086ed1c66b46944e64597e25da77e6b7f99e6d12ad0803460ee2c1da1be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fbb086ed1c66b46944e64597e25da77e6b7f99e6d12ad0803460ee2c1da1be3->enter($__internal_6fbb086ed1c66b46944e64597e25da77e6b7f99e6d12ad0803460ee2c1da1be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu/toaster.html.twig"));

        $__internal_d8da58105ad8fccd88390e82da795e699a9c0fed49dd80859fc2e5763c460c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8da58105ad8fccd88390e82da795e699a9c0fed49dd80859fc2e5763c460c1e->enter($__internal_d8da58105ad8fccd88390e82da795e699a9c0fed49dd80859fc2e5763c460c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu/toaster.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    <script>
        jQuery(document).ready(function (\$) {
            toastr.options = {
                \"closeButton\": true,
                \"debug\": false,
                \"positionClass\": \"toast-top-right\",
                \"showDuration\": \"5000\",
                \"hideDuration\": \"5000\",
                \"timeOut\": \"5000\",
                \"extendedTimeOut\": \"5000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\",
                \"progressBar\": false
            };
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
        foreach ($context['_seq'] as $context["label"] => $context["flashes"]) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flashes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 20
                echo "            ";
                if (($context["label"] == "danger")) {
                    // line 21
                    echo "            ";
                    $context["label"] = "error";
                    // line 22
                    echo "            ";
                }
                // line 23
                echo "            var \$toast = toastr['";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "'](\"";
                echo $context["flash"];
                echo "\", \"info :\");
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['flashes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6fbb086ed1c66b46944e64597e25da77e6b7f99e6d12ad0803460ee2c1da1be3->leave($__internal_6fbb086ed1c66b46944e64597e25da77e6b7f99e6d12ad0803460ee2c1da1be3_prof);

        
        $__internal_d8da58105ad8fccd88390e82da795e699a9c0fed49dd80859fc2e5763c460c1e->leave($__internal_d8da58105ad8fccd88390e82da795e699a9c0fed49dd80859fc2e5763c460c1e_prof);

    }

    public function getTemplateName()
    {
        return "::menu/toaster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 26,  74 => 25,  63 => 23,  60 => 22,  57 => 21,  54 => 20,  49 => 19,  45 => 18,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
    <script>
        jQuery(document).ready(function (\$) {
            toastr.options = {
                \"closeButton\": true,
                \"debug\": false,
                \"positionClass\": \"toast-top-right\",
                \"showDuration\": \"5000\",
                \"hideDuration\": \"5000\",
                \"timeOut\": \"5000\",
                \"extendedTimeOut\": \"5000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\",
                \"progressBar\": false
            };
            {% for label, flashes in app.session.flashbag.all %}
            {% for flash in flashes %}
            {% if label == 'danger' %}
            {% set label = 'error' %}
            {% endif %}
            var \$toast = toastr['{{ label }}'](\"{{flash|raw}}\", \"info :\");
            {% endfor %}
            {% endfor %}
        });
    </script>
{% endspaceless %}", "::menu/toaster.html.twig", "D:\\PFE\\webbook\\app/Resources\\views/menu/toaster.html.twig");
    }
}
