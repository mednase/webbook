<?php

/* :KnpPaginatorBundle/Pagination:site_defaut_pagination.html.twig */
class __TwigTemplate_533a716f3c5c4dc7b095bd2faef5d8a588b92d042494ef0a56db2f927aad5b5b extends Twig_Template
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
        $__internal_a9a0b571cd5966fa20b49fa6df5d5ebc4e7c6c24682b66a8b1cce003ac318dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a0b571cd5966fa20b49fa6df5d5ebc4e7c6c24682b66a8b1cce003ac318dd3->enter($__internal_a9a0b571cd5966fa20b49fa6df5d5ebc4e7c6c24682b66a8b1cce003ac318dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":KnpPaginatorBundle/Pagination:site_defaut_pagination.html.twig"));

        $__internal_fd770138849844f2cf712e94d15b5b3d48052d9d18d1be2cde054340409a3a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd770138849844f2cf712e94d15b5b3d48052d9d18d1be2cde054340409a3a39->enter($__internal_fd770138849844f2cf712e94d15b5b3d48052d9d18d1be2cde054340409a3a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":KnpPaginatorBundle/Pagination:site_defaut_pagination.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 2
            echo "    <ul class=\"pagination\">
        ";
            // line 3
            if (array_key_exists("previous", $context)) {
                // line 4
                echo "            <li>
                <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">«</a>
            </li>
        ";
            } else {
                // line 8
                echo "            <li class=\"disabled\">
                <a>«</a>
            </li>
        ";
            }
            // line 12
            echo "        ";
            if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) > 1)) {
                // line 13
                echo "            <li>
                <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 1))), "html", null, true);
                echo "\">1</a>
            </li>
            ";
                // line 16
                if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) == 3)) {
                    // line 17
                    echo "                <li>
                    <a href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 2))), "html", null, true);
                    echo "\">2</a>
                </li>
            ";
                } elseif ((                // line 20
(isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) != 2)) {
                    // line 21
                    echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                }
                // line 25
                echo "        ";
            }
            // line 26
            echo "
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 28
                echo "            ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 29
                    echo "                <li>
                    <a href=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                } else {
                    // line 33
                    echo "                <li class=\"active\">
                    <span>";
                    // line 34
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                </li>
            ";
                }
                // line 37
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
        ";
            // line 40
            if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > (isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")))) {
                // line 41
                echo "            ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 1))) {
                    // line 42
                    echo "                ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 2))) {
                        // line 43
                        echo "                    <li class=\"disabled\">
                        <span>&hellip;</span>
                    </li>
                ";
                    } else {
                        // line 47
                        echo "                    <li>
                        <a href=\"";
                        // line 48
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1), "html", null, true);
                        echo "</a>
                    </li>
                ";
                    }
                    // line 51
                    echo "            ";
                }
                // line 52
                echo "            <li>
                <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 56
            echo "
        ";
            // line 57
            if (array_key_exists("next", $context)) {
                // line 58
                echo "            <li>
                <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">»</a>
            </li>
        ";
            } else {
                // line 62
                echo "            <li class=\"disabled\">
                <span>»</span>
            </li>
        ";
            }
            // line 66
            echo "    </ul>
";
        }
        
        $__internal_a9a0b571cd5966fa20b49fa6df5d5ebc4e7c6c24682b66a8b1cce003ac318dd3->leave($__internal_a9a0b571cd5966fa20b49fa6df5d5ebc4e7c6c24682b66a8b1cce003ac318dd3_prof);

        
        $__internal_fd770138849844f2cf712e94d15b5b3d48052d9d18d1be2cde054340409a3a39->leave($__internal_fd770138849844f2cf712e94d15b5b3d48052d9d18d1be2cde054340409a3a39_prof);

    }

    public function getTemplateName()
    {
        return ":KnpPaginatorBundle/Pagination:site_defaut_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 66,  172 => 62,  166 => 59,  163 => 58,  161 => 57,  158 => 56,  150 => 53,  147 => 52,  144 => 51,  136 => 48,  133 => 47,  127 => 43,  124 => 42,  121 => 41,  119 => 40,  116 => 39,  109 => 37,  103 => 34,  100 => 33,  92 => 30,  89 => 29,  86 => 28,  82 => 27,  79 => 26,  76 => 25,  70 => 21,  68 => 20,  63 => 18,  60 => 17,  58 => 16,  53 => 14,  50 => 13,  47 => 12,  41 => 8,  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pageCount > 1 %}
    <ul class=\"pagination\">
        {% if previous is defined %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">«</a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <a>«</a>
            </li>
        {% endif %}
        {% if startPage > 1 %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\">1</a>
            </li>
            {% if startPage == 3 %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): 2})) }}\">2</a>
                </li>
            {% elseif startPage != 2 %}
                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            {% endif %}
        {% endif %}

        {% for page in pagesInRange %}
            {% if page != current %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                </li>
            {% else %}
                <li class=\"active\">
                    <span>{{ page }}</span>
                </li>
            {% endif %}

        {% endfor %}

        {% if pageCount > endPage %}
            {% if pageCount > (endPage + 1) %}
                {% if pageCount > (endPage + 2) %}
                    <li class=\"disabled\">
                        <span>&hellip;</span>
                    </li>
                {% else %}
                    <li>
                        <a href=\"{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}\">{{ pageCount -1 }}</a>
                    </li>
                {% endif %}
            {% endif %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\">{{ pageCount }}</a>
            </li>
        {% endif %}

        {% if next is defined %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">»</a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <span>»</span>
            </li>
        {% endif %}
    </ul>
{% endif %}", ":KnpPaginatorBundle/Pagination:site_defaut_pagination.html.twig", "D:\\PFE\\webbook\\app/Resources\\views/KnpPaginatorBundle/Pagination/site_defaut_pagination.html.twig");
    }
}
