<?php

/* footer-test.html.twig */
class __TwigTemplate_f74b6dab5e543796f1940c8085b77f1fbb39b50f12ef1337a59d595461c9139c extends Twig_Template
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
        $__internal_783d5fcf1ec0c97db518a0377f6fb868093e244b8d5732b41c31462c01198cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783d5fcf1ec0c97db518a0377f6fb868093e244b8d5732b41c31462c01198cc6->enter($__internal_783d5fcf1ec0c97db518a0377f6fb868093e244b8d5732b41c31462c01198cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer-test.html.twig"));

        $__internal_8d49f655ead29a8306c7bfb92c3ac6ed475837a5c1fa4ba36a048812d439da7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d49f655ead29a8306c7bfb92c3ac6ed475837a5c1fa4ba36a048812d439da7a->enter($__internal_8d49f655ead29a8306c7bfb92c3ac6ed475837a5c1fa4ba36a048812d439da7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer-test.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <style>
        #footer{
            margin-top: 10px;
        }
    </style>
    <script>
        function substitutePdfVariables() {

            function getParameterByName(name) {
                var match = RegExp('[?&]' + name + '=([^&]*)').exec(window.location.search);
                return match && decodeURIComponent(match[1].replace(/\\+/g, ' '));
            }

            function substitute(name) {
                var value = getParameterByName(name);
                var elements = document.getElementsByClassName(name);
                var footer= document.getElementById('footer');
                var page= document.getElementById('page');
                for (var i = 0; elements && i < elements.length; i++) {
                    if(name==\"page\") {
                        if(parseInt(value)<=";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["startPaginationFrom"]) ? $context["startPaginationFrom"] : $this->getContext($context, "startPaginationFrom")), "html", null, true);
        echo " ";
        if (((isset($context["StopPaginationAt"]) ? $context["StopPaginationAt"] : $this->getContext($context, "StopPaginationAt")) != false)) {
            echo "|| parseInt(value)>";
            echo twig_escape_filter($this->env, (isset($context["StopPaginationAt"]) ? $context["StopPaginationAt"] : $this->getContext($context, "StopPaginationAt")), "html", null, true);
        }
        echo "){
                            footer.removeChild(page);
                        }else
                            elements[i].textContent = value-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["startPaginationFrom"]) ? $context["startPaginationFrom"] : $this->getContext($context, "startPaginationFrom")), "html", null, true);
        echo ";
                    }
                }
            }

            ['frompage', 'topage', 'page', 'webpage', 'section', 'subsection', 'subsubsection']
                .forEach(function(param) {
                    substitute(param);
                });
        }
    </script>
</head>
<body id=\"footer\" onload=\"substitutePdfVariables()\">
<p id=\"page\" style=\"text-align: center\">Page <span class=\"page\"></span></p>
</body>
</html>";
        
        $__internal_783d5fcf1ec0c97db518a0377f6fb868093e244b8d5732b41c31462c01198cc6->leave($__internal_783d5fcf1ec0c97db518a0377f6fb868093e244b8d5732b41c31462c01198cc6_prof);

        
        $__internal_8d49f655ead29a8306c7bfb92c3ac6ed475837a5c1fa4ba36a048812d439da7a->leave($__internal_8d49f655ead29a8306c7bfb92c3ac6ed475837a5c1fa4ba36a048812d439da7a_prof);

    }

    public function getTemplateName()
    {
        return "footer-test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 28,  51 => 25,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <style>
        #footer{
            margin-top: 10px;
        }
    </style>
    <script>
        function substitutePdfVariables() {

            function getParameterByName(name) {
                var match = RegExp('[?&]' + name + '=([^&]*)').exec(window.location.search);
                return match && decodeURIComponent(match[1].replace(/\\+/g, ' '));
            }

            function substitute(name) {
                var value = getParameterByName(name);
                var elements = document.getElementsByClassName(name);
                var footer= document.getElementById('footer');
                var page= document.getElementById('page');
                for (var i = 0; elements && i < elements.length; i++) {
                    if(name==\"page\") {
                        if(parseInt(value)<={{ startPaginationFrom }} {% if StopPaginationAt != false %}|| parseInt(value)>{{ StopPaginationAt }}{% endif %}){
                            footer.removeChild(page);
                        }else
                            elements[i].textContent = value-{{ startPaginationFrom }};
                    }
                }
            }

            ['frompage', 'topage', 'page', 'webpage', 'section', 'subsection', 'subsubsection']
                .forEach(function(param) {
                    substitute(param);
                });
        }
    </script>
</head>
<body id=\"footer\" onload=\"substitutePdfVariables()\">
<p id=\"page\" style=\"text-align: center\">Page <span class=\"page\"></span></p>
</body>
</html>", "footer-test.html.twig", "D:\\PFE\\webbook\\app\\Resources\\views\\footer-test.html.twig");
    }
}
