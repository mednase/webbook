<?php

/* @Main/test.html.twig */
class __TwigTemplate_fe6d7552cef7abfd5bb5d89a4dc63caddfcfd21dc6f5f1ec3dbee911e8952739 extends Twig_Template
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
        $__internal_3b0e296e48098186ce743ebbe6cb3623bf09564f99b82b39d4a0629fe3076fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0e296e48098186ce743ebbe6cb3623bf09564f99b82b39d4a0629fe3076fc5->enter($__internal_3b0e296e48098186ce743ebbe6cb3623bf09564f99b82b39d4a0629fe3076fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/test.html.twig"));

        $__internal_ea1ff36eb20515a69d5c57db084bdd5f4ef2aae90e636ffdf48613a17d79117e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1ff36eb20515a69d5c57db084bdd5f4ef2aae90e636ffdf48613a17d79117e->enter($__internal_ea1ff36eb20515a69d5c57db084bdd5f4ef2aae90e636ffdf48613a17d79117e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/test.html.twig"));

        // line 1
        $context["macros"] = $this;
        // line 2
        echo "
<!doctype html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<style>
    body {
        counter-reset: chapternum figurenum;
        font: 14pt Georgia, \"Times New Roman\", Times, serif;
        line-height: 1.5;
    }
    figure.image {
        text-align: center;
    }

    ol {
        list-style: none;
        counter-reset: item;
        padding-left: 0;
        display: block;
    }

    OL li {
        text-transform: capitalize;
    }

    ol.contentTable > li.numerated>:first-child{
        border-bottom: 1px solid ;
        width: 92%!important;
        display: inline-block;
        float: right;
        margin: 0;
        max-height: 38px;
    }

    ol > li.numerated:before {
        counter-increment: item;
        content: counters(item, \".\") \". \";
    }

    ol li[class*=\"book-header\"]:before,
    ol li[class*=\"book-header\"] > h1, li[class*=\"book-header\"] > h2, li[class*=\"book-header\"] > h3,
    ol li[class*=\"book-header\"] > h4, li[class*=\"book-header\"] > h5, li[class*=\"book-header\"] > h6 {
        font-weight: bold;
        font-family: 'Times New Roman', \"sans-serif\";
        display: inline;
        line-height: 1.5;
    }

    li[class*=\"book-header\"] > h1, li.book-header-1:before {
        font-size: 24pt;
        margin-top: 25px;
    }

    li[class*=\"book-header\"] > h2, li.book-header-2:before {
        font-size: 20pt;
    }

    li[class*=\"book-header\"] > h3, li.book-header-3:before {
        font-size: 18pt;
    }

    li[class*=\"book-header\"] > h4, li.book-header-4:before {
        font-size: 16pt;
    }

    li[class*=\"book-header\"] > h5, li.book-header-5:before {
        font-size: 14pt;
    }

    table td {
        border: 1px solid grey;
    }
    table, tr, td, th, tbody, thead, tfoot, img {
        page-break-inside: avoid !important;
    }
    ol li a {
        text-decoration: none;  color: inherit;
    }
    .book-title {
        padding-left: 20%;
        padding-bottom: 50px;
        padding-top: 40%;
        font-size: 50px;
    }

    .dots {
        word-spacing: 2px;
    }

    span.number {
        font-size: 25px !important;  font-weight: normal !important;  position: relative;  float: right;
    }

    #figureList,#tableList{
        list-style: none;
    }
    #figureList li,#tableList li{
        width: 100%;  border-bottom: 1px solid ;
    }
    #figureList h3,#tableList h3{
        height: 30px;margin: 0;
    }
    #figureList a ,#tableList a{
        text-decoration: none;  color: inherit;
    }
    .break-page{
        page-break-after: always;
    }
    #author{
        font-size: 24px;
        margin-top: 0;
        text-decoration: none;
        list-style: none;
    }
</style>
<body onload=\"\">
<div>
    <div>
        <h1 class=\"book-title\">";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo "</h1>
        <div style=\"text-align: right;margin-top: 200px\">
            <b style=\"font-size: 26px;margin-right: 180px\">Par : </b>
            <ul id=\"author\">
                ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "mainAuthors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 131
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "fullName", array()), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "            </ul>
        </div>

    </div>
    <div class=\"break-page\"></div>
</div>
<div>
    <h1>Table Des Matiéres</h1>
    <div id=\"test\"></div>
    <ol class=\"contentTable numerated\">
        ";
        // line 162
        echo "        ";
        echo $context["macros"]->getdisplayBookContentTable($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "underBlock", array()), 1);
        echo "
    </ol>
    <div class=\"break-page\"></div>
</div>
<div>
    <h1>Liste Des Figures</h1>
    <ul id=\"figureList\">
    </ul>
    <div class=\"break-page\"></div>
</div>
<div>
    <h1>Liste Des Tableaux</h1>
    <ul id=\"tableList\">
    </ul>
    <div class=\"break-page\"></div>
</div>
<div class=\"pdfContent\">
    ";
        // line 179
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
</div>
<div class=\"test\">

</div>
</body>
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, ((isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

    // setting page number for the table of content
    const MAXPRINTEDPAGEHEIGHT = 14075;
    \$('li[name*=\"section-\"].numerated').each(function () {
        var initialOffset=\$(\".pdfContent\").offset().top;
        var elem=\$(this);
        var pageNumber=Math.ceil((elem.offset().top+1-initialOffset)/MAXPRINTEDPAGEHEIGHT);
        \$(\"#\"+elem.attr('name')+\"-number\").text(pageNumber);
    });
    // setting page number for the list of figure
    var figureNumber=1;
    \$('.pdfContent figcaption:contains(\"&&figureNumber&&\")').each(function () {
        var elem=\$(this);
        var content=elem.text();
        content=content.replace(\"&&figureNumber&&\",figureNumber);
        elem.html(content);
        elem.parent().find('img').attr('id','figure-'+figureNumber);
        //now determine the page number
        var initialOffset=\$(\".pdfContent\").offset().top;
        var pageNumber=Math.ceil((elem.offset().top+1+(\$(this).parent().height()*10)-initialOffset)/MAXPRINTEDPAGEHEIGHT);


        \$('#figureList').append('<li> <h3  class=\"figureName\"><a href=\"#figure-'+figureNumber+'\">'+content+'</a> <span class=\"number\">'+pageNumber+'</span> </h3> </li>');
        figureNumber++;
    });
    // setting page number for the list of table
    var tableNumber=1;
    \$('.pdfContent table>caption:contains(\"&&tableNumber&&\")').each(function () {
        var elem=\$(this);
        var content=elem.text();
        content=content.replace(\"&&tableNumber&&\",tableNumber);
        elem.html(content);
        elem.attr('id','table-'+tableNumber);
        //now determine the page number
        var initialOffset=\$(\".pdfContent\").offset().top;
        var pageNumber=Math.ceil((elem.offset().top+1+(\$(this).parent().height()*10)-initialOffset)/MAXPRINTEDPAGEHEIGHT);

        \$('#tableList').append('<li> <h3  class=\"figureName\"><a href=\"#table-'+tableNumber+'\">'+content+' </a><span class=\"number\">'+pageNumber+'</span></h3> </li>');
        tableNumber++;
    });

</script>
</html>
";
        
        $__internal_3b0e296e48098186ce743ebbe6cb3623bf09564f99b82b39d4a0629fe3076fc5->leave($__internal_3b0e296e48098186ce743ebbe6cb3623bf09564f99b82b39d4a0629fe3076fc5_prof);

        
        $__internal_ea1ff36eb20515a69d5c57db084bdd5f4ef2aae90e636ffdf48613a17d79117e->leave($__internal_ea1ff36eb20515a69d5c57db084bdd5f4ef2aae90e636ffdf48613a17d79117e_prof);

    }

    // line 143
    public function getdisplayBookContentTable($__blocks__ = null, $__level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "blocks" => $__blocks__,
            "level" => $__level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5c7c4736a64c325cc862cbd8ee9873dd618e1a3a4dcc5ddc766b9ca46a1e8248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_5c7c4736a64c325cc862cbd8ee9873dd618e1a3a4dcc5ddc766b9ca46a1e8248->enter($__internal_5c7c4736a64c325cc862cbd8ee9873dd618e1a3a4dcc5ddc766b9ca46a1e8248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "displayBookContentTable"));

            $__internal_5f0ea0862865279d3b911600569030a546637307325cd8673bb28ad5346a73e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5f0ea0862865279d3b911600569030a546637307325cd8673bb28ad5346a73e0->enter($__internal_5f0ea0862865279d3b911600569030a546637307325cd8673bb28ad5346a73e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "displayBookContentTable"));

            // line 144
            echo "            ";
            $context["macros"] = $this;
            // line 145
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 146
                echo "                ";
                if ($this->getAttribute($this->getAttribute($context["block"], "options", array()), "indexed", array())) {
                    // line 147
                    echo "                    <li class=\"numerated book-header-";
                    echo twig_escape_filter($this->env, (isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "html", null, true);
                    echo "\">
                        <h";
                    // line 148
                    echo twig_escape_filter($this->env, (isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "html", null, true);
                    echo ">
                            <a href=\"#section-";
                    // line 149
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
                    echo "\" style=\"text-align: left\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "title", array()), "html", null, true);
                    echo "</a>
                            <span class=\"dots\"></span>
                            <span id=\"section-";
                    // line 151
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "id", array()), "html", null, true);
                    echo "-number\" class=\"number\">1</span>
                        </h";
                    // line 152
                    echo twig_escape_filter($this->env, (isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")), "html", null, true);
                    echo ">
                        ";
                    // line 153
                    if ((twig_length_filter($this->env, $this->getAttribute($context["block"], "childrens", array())) > 0)) {
                        // line 154
                        echo "                            <ol class=\"contentTable numerated\">
                                ";
                        // line 155
                        echo $context["macros"]->getdisplayBookContentTable($this->getAttribute($context["block"], "childrens", array()), ((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")) + 1));
                        echo "
                            </ol>
                        ";
                    }
                    // line 158
                    echo "                    </li>
                ";
                }
                // line 160
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "        ";
            
            $__internal_5f0ea0862865279d3b911600569030a546637307325cd8673bb28ad5346a73e0->leave($__internal_5f0ea0862865279d3b911600569030a546637307325cd8673bb28ad5346a73e0_prof);

            
            $__internal_5c7c4736a64c325cc862cbd8ee9873dd618e1a3a4dcc5ddc766b9ca46a1e8248->leave($__internal_5c7c4736a64c325cc862cbd8ee9873dd618e1a3a4dcc5ddc766b9ca46a1e8248_prof);

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
        return "@Main/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 161,  340 => 160,  336 => 158,  330 => 155,  327 => 154,  325 => 153,  321 => 152,  317 => 151,  310 => 149,  306 => 148,  301 => 147,  298 => 146,  293 => 145,  290 => 144,  271 => 143,  215 => 185,  206 => 179,  185 => 162,  173 => 133,  164 => 131,  160 => 130,  153 => 126,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as macros %}

<!doctype html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<style>
    body {
        counter-reset: chapternum figurenum;
        font: 14pt Georgia, \"Times New Roman\", Times, serif;
        line-height: 1.5;
    }
    figure.image {
        text-align: center;
    }

    ol {
        list-style: none;
        counter-reset: item;
        padding-left: 0;
        display: block;
    }

    OL li {
        text-transform: capitalize;
    }

    ol.contentTable > li.numerated>:first-child{
        border-bottom: 1px solid ;
        width: 92%!important;
        display: inline-block;
        float: right;
        margin: 0;
        max-height: 38px;
    }

    ol > li.numerated:before {
        counter-increment: item;
        content: counters(item, \".\") \". \";
    }

    ol li[class*=\"book-header\"]:before,
    ol li[class*=\"book-header\"] > h1, li[class*=\"book-header\"] > h2, li[class*=\"book-header\"] > h3,
    ol li[class*=\"book-header\"] > h4, li[class*=\"book-header\"] > h5, li[class*=\"book-header\"] > h6 {
        font-weight: bold;
        font-family: 'Times New Roman', \"sans-serif\";
        display: inline;
        line-height: 1.5;
    }

    li[class*=\"book-header\"] > h1, li.book-header-1:before {
        font-size: 24pt;
        margin-top: 25px;
    }

    li[class*=\"book-header\"] > h2, li.book-header-2:before {
        font-size: 20pt;
    }

    li[class*=\"book-header\"] > h3, li.book-header-3:before {
        font-size: 18pt;
    }

    li[class*=\"book-header\"] > h4, li.book-header-4:before {
        font-size: 16pt;
    }

    li[class*=\"book-header\"] > h5, li.book-header-5:before {
        font-size: 14pt;
    }

    table td {
        border: 1px solid grey;
    }
    table, tr, td, th, tbody, thead, tfoot, img {
        page-break-inside: avoid !important;
    }
    ol li a {
        text-decoration: none;  color: inherit;
    }
    .book-title {
        padding-left: 20%;
        padding-bottom: 50px;
        padding-top: 40%;
        font-size: 50px;
    }

    .dots {
        word-spacing: 2px;
    }

    span.number {
        font-size: 25px !important;  font-weight: normal !important;  position: relative;  float: right;
    }

    #figureList,#tableList{
        list-style: none;
    }
    #figureList li,#tableList li{
        width: 100%;  border-bottom: 1px solid ;
    }
    #figureList h3,#tableList h3{
        height: 30px;margin: 0;
    }
    #figureList a ,#tableList a{
        text-decoration: none;  color: inherit;
    }
    .break-page{
        page-break-after: always;
    }
    #author{
        font-size: 24px;
        margin-top: 0;
        text-decoration: none;
        list-style: none;
    }
</style>
<body onload=\"\">
<div>
    <div>
        <h1 class=\"book-title\">{{ book.title }}</h1>
        <div style=\"text-align: right;margin-top: 200px\">
            <b style=\"font-size: 26px;margin-right: 180px\">Par : </b>
            <ul id=\"author\">
                {% for author in book.mainAuthors %}
                    <li>{{ author.fullName }}</li>
                {% endfor %}
            </ul>
        </div>

    </div>
    <div class=\"break-page\"></div>
</div>
<div>
    <h1>Table Des Matiéres</h1>
    <div id=\"test\"></div>
    <ol class=\"contentTable numerated\">
        {% macro displayBookContentTable(blocks,level) %}
            {% import _self as macros %}
            {% for block in blocks %}
                {% if block.options.indexed %}
                    <li class=\"numerated book-header-{{ level }}\">
                        <h{{ level }}>
                            <a href=\"#section-{{ block.id }}\" style=\"text-align: left\">{{ block.title }}</a>
                            <span class=\"dots\"></span>
                            <span id=\"section-{{ block.id }}-number\" class=\"number\">1</span>
                        </h{{ level }}>
                        {% if block.childrens|length>0 %}
                            <ol class=\"contentTable numerated\">
                                {{ macros.displayBookContentTable(block.childrens,level+1) }}
                            </ol>
                        {% endif %}
                    </li>
                {% endif %}
            {% endfor %}
        {% endmacro %}
        {{ macros.displayBookContentTable(book.underBlock,1) }}
    </ol>
    <div class=\"break-page\"></div>
</div>
<div>
    <h1>Liste Des Figures</h1>
    <ul id=\"figureList\">
    </ul>
    <div class=\"break-page\"></div>
</div>
<div>
    <h1>Liste Des Tableaux</h1>
    <ul id=\"tableList\">
    </ul>
    <div class=\"break-page\"></div>
</div>
<div class=\"pdfContent\">
    {{ content|raw }}
</div>
<div class=\"test\">

</div>
</body>
<script src=\"{{ siteUrl~asset('assets/global/plugins/jquery.min.js') }}\"></script>
<script type=\"text/javascript\">

    // setting page number for the table of content
    const MAXPRINTEDPAGEHEIGHT = 14075;
    \$('li[name*=\"section-\"].numerated').each(function () {
        var initialOffset=\$(\".pdfContent\").offset().top;
        var elem=\$(this);
        var pageNumber=Math.ceil((elem.offset().top+1-initialOffset)/MAXPRINTEDPAGEHEIGHT);
        \$(\"#\"+elem.attr('name')+\"-number\").text(pageNumber);
    });
    // setting page number for the list of figure
    var figureNumber=1;
    \$('.pdfContent figcaption:contains(\"&&figureNumber&&\")').each(function () {
        var elem=\$(this);
        var content=elem.text();
        content=content.replace(\"&&figureNumber&&\",figureNumber);
        elem.html(content);
        elem.parent().find('img').attr('id','figure-'+figureNumber);
        //now determine the page number
        var initialOffset=\$(\".pdfContent\").offset().top;
        var pageNumber=Math.ceil((elem.offset().top+1+(\$(this).parent().height()*10)-initialOffset)/MAXPRINTEDPAGEHEIGHT);


        \$('#figureList').append('<li> <h3  class=\"figureName\"><a href=\"#figure-'+figureNumber+'\">'+content+'</a> <span class=\"number\">'+pageNumber+'</span> </h3> </li>');
        figureNumber++;
    });
    // setting page number for the list of table
    var tableNumber=1;
    \$('.pdfContent table>caption:contains(\"&&tableNumber&&\")').each(function () {
        var elem=\$(this);
        var content=elem.text();
        content=content.replace(\"&&tableNumber&&\",tableNumber);
        elem.html(content);
        elem.attr('id','table-'+tableNumber);
        //now determine the page number
        var initialOffset=\$(\".pdfContent\").offset().top;
        var pageNumber=Math.ceil((elem.offset().top+1+(\$(this).parent().height()*10)-initialOffset)/MAXPRINTEDPAGEHEIGHT);

        \$('#tableList').append('<li> <h3  class=\"figureName\"><a href=\"#table-'+tableNumber+'\">'+content+' </a><span class=\"number\">'+pageNumber+'</span></h3> </li>');
        tableNumber++;
    });

</script>
</html>
", "@Main/test.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\test.html.twig");
    }
}
