<?php

/* ::menu/socket.html.twig */
class __TwigTemplate_d8d286a646779e268804b0689516bdf57e199513610a2ba0cda5b832ef611c62 extends Twig_Template
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
        $__internal_166517e5336fe85bb6a73a466863ddeca0455874aa6fae86d51b21d3d45dbb8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166517e5336fe85bb6a73a466863ddeca0455874aa6fae86d51b21d3d45dbb8f->enter($__internal_166517e5336fe85bb6a73a466863ddeca0455874aa6fae86d51b21d3d45dbb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu/socket.html.twig"));

        $__internal_4b8300dcc9d57106dcf1d6a0d27bc7af37cdf5df1b2c3b8a7527f3f6c1909fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8300dcc9d57106dcf1d6a0d27bc7af37cdf5df1b2c3b8a7527f3f6c1909fc1->enter($__internal_4b8300dcc9d57106dcf1d6a0d27bc7af37cdf5df1b2c3b8a7527f3f6c1909fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu/socket.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<script>
    jQuery(document).ready(function (\$) {
        var websocket = WS.connect(\"ws://lavoiser.marzouk-med.loc:8080\");
        websocket.on(\"socket/connect\", function(session){
            session.subscribe(\"notification/";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "\", function(uri, payload){
                var notif=JSON.parse(payload.msg);
                console.log(notif);
                \$('#notificatin-list').prepend(
                    '<li class=\"notif unseen\">' +
                    '<a href=\"'+notif.url+'\" style=\"text-decoration: none!important;padding-right: 5px!important;\">' +
                    '<div class=\"time margin-top-0\">'+notif.date+'<span class=\"fa fa-clock-o\"></span></div>' +
                    '<span class=\"label label-sm label-icon label-warning col-md-1\" style=\"padding-left: 4px!important;\">'+
                    '<i class=\"fa '+notif.icon+' \"></i>'+
                    '</span>'+
                    '<p class=\"details\">' + notif.message+'</p>' +
                    '</div>' +
                    '</a>' +
                    '</li>'
                );
                if(\$(\"#bade-notification\").length){
                    var num_not=parseInt(\$(\"#bade-notification\").text());
                    console.log(num_not);
                    \$(\"#newNotif\").text(num_not+1+'nouveau');
                    \$(\"#bade-notification\").text(num_not+1);
                }else{
                    \$('#bell-notif').append('<span class=\"badge badge-default\" id=\"bade-notification\"> 1 </span>')
                }

            });
        });
        websocket.on(\"socket/disconnect\", function(error){
            console.log(\"Disconnected for \" + error.reason + \" with code \" + error.code);
        });
    })
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_166517e5336fe85bb6a73a466863ddeca0455874aa6fae86d51b21d3d45dbb8f->leave($__internal_166517e5336fe85bb6a73a466863ddeca0455874aa6fae86d51b21d3d45dbb8f_prof);

        
        $__internal_4b8300dcc9d57106dcf1d6a0d27bc7af37cdf5df1b2c3b8a7527f3f6c1909fc1->leave($__internal_4b8300dcc9d57106dcf1d6a0d27bc7af37cdf5df1b2c3b8a7527f3f6c1909fc1_prof);

    }

    public function getTemplateName()
    {
        return "::menu/socket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  27 => 2,  25 => 1,);
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
        var websocket = WS.connect(\"ws://lavoiser.marzouk-med.loc:8080\");
        websocket.on(\"socket/connect\", function(session){
            session.subscribe(\"notification/{{ app.user.username }}\", function(uri, payload){
                var notif=JSON.parse(payload.msg);
                console.log(notif);
                \$('#notificatin-list').prepend(
                    '<li class=\"notif unseen\">' +
                    '<a href=\"'+notif.url+'\" style=\"text-decoration: none!important;padding-right: 5px!important;\">' +
                    '<div class=\"time margin-top-0\">'+notif.date+'<span class=\"fa fa-clock-o\"></span></div>' +
                    '<span class=\"label label-sm label-icon label-warning col-md-1\" style=\"padding-left: 4px!important;\">'+
                    '<i class=\"fa '+notif.icon+' \"></i>'+
                    '</span>'+
                    '<p class=\"details\">' + notif.message+'</p>' +
                    '</div>' +
                    '</a>' +
                    '</li>'
                );
                if(\$(\"#bade-notification\").length){
                    var num_not=parseInt(\$(\"#bade-notification\").text());
                    console.log(num_not);
                    \$(\"#newNotif\").text(num_not+1+'nouveau');
                    \$(\"#bade-notification\").text(num_not+1);
                }else{
                    \$('#bell-notif').append('<span class=\"badge badge-default\" id=\"bade-notification\"> 1 </span>')
                }

            });
        });
        websocket.on(\"socket/disconnect\", function(error){
            console.log(\"Disconnected for \" + error.reason + \" with code \" + error.code);
        });
    })
</script>
{% endspaceless %}", "::menu/socket.html.twig", "D:\\PFE\\webbook\\app/Resources\\views/menu/socket.html.twig");
    }
}
