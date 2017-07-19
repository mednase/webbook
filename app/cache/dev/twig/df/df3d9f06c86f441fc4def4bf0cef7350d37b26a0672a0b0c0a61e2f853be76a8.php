<?php

/* MainBundle:Author:my.books.html.twig */
class __TwigTemplate_119642e69c2cbfaf2de215bff86de5f0c3dea5cd53e475447ff0b5c645484d08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "MainBundle:Author:my.books.html.twig", 1);
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
        $__internal_939a053bc2d6fdb80b9abd16c06e38603783574e9a7881060bee8b70dfc4ae1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939a053bc2d6fdb80b9abd16c06e38603783574e9a7881060bee8b70dfc4ae1f->enter($__internal_939a053bc2d6fdb80b9abd16c06e38603783574e9a7881060bee8b70dfc4ae1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Author:my.books.html.twig"));

        $__internal_4e376876de6971e7f4d14d439af66d1a22ca536fb36d7b2f751a6ed24e0598ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e376876de6971e7f4d14d439af66d1a22ca536fb36d7b2f751a6ed24e0598ea->enter($__internal_4e376876de6971e7f4d14d439af66d1a22ca536fb36d7b2f751a6ed24e0598ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Author:my.books.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_939a053bc2d6fdb80b9abd16c06e38603783574e9a7881060bee8b70dfc4ae1f->leave($__internal_939a053bc2d6fdb80b9abd16c06e38603783574e9a7881060bee8b70dfc4ae1f_prof);

        
        $__internal_4e376876de6971e7f4d14d439af66d1a22ca536fb36d7b2f751a6ed24e0598ea->leave($__internal_4e376876de6971e7f4d14d439af66d1a22ca536fb36d7b2f751a6ed24e0598ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bca83845f1b6b3cf21d634cce351315c449b3356febbd067be46b60135772cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca83845f1b6b3cf21d634cce351315c449b3356febbd067be46b60135772cca->enter($__internal_bca83845f1b6b3cf21d634cce351315c449b3356febbd067be46b60135772cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c770dd7a950c4cc7d8cb5ddf33912ddb9c01e3637d6f9ca1b9ccf4ea080915d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c770dd7a950c4cc7d8cb5ddf33912ddb9c01e3637d6f9ca1b9ccf4ea080915d1->enter($__internal_c770dd7a950c4cc7d8cb5ddf33912ddb9c01e3637d6f9ca1b9ccf4ea080915d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes  Livres
";
        
        $__internal_c770dd7a950c4cc7d8cb5ddf33912ddb9c01e3637d6f9ca1b9ccf4ea080915d1->leave($__internal_c770dd7a950c4cc7d8cb5ddf33912ddb9c01e3637d6f9ca1b9ccf4ea080915d1_prof);

        
        $__internal_bca83845f1b6b3cf21d634cce351315c449b3356febbd067be46b60135772cca->leave($__internal_bca83845f1b6b3cf21d634cce351315c449b3356febbd067be46b60135772cca_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ebf2200874d75f850984ab59990bff64f4e796b5067254e085858cd6c2e4e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ebf2200874d75f850984ab59990bff64f4e796b5067254e085858cd6c2e4e05->enter($__internal_4ebf2200874d75f850984ab59990bff64f4e796b5067254e085858cd6c2e4e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8be64561714f5894404aa5bcfb06c658d4477450fc3d1e1ef517b35bdee78425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be64561714f5894404aa5bcfb06c658d4477450fc3d1e1ef517b35bdee78425->enter($__internal_8be64561714f5894404aa5bcfb06c658d4477450fc3d1e1ef517b35bdee78425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Mes Livres</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-list-ul\"></span> &nbsp; Mes Livres </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box red\">
                <div class=\"portlet-body \">
                    <table class=\"table table-striped table-bordered datatable \" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th class=\"text-center\">Date Creation</th>
                            <th class=\"text-center\">Titre</th>
                            <th class=\"text-center\">Categorie</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 39
            echo "                            <tr class=\"text-center\">
                                <td >";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["book"], "createdAt", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["book"], "category", array()), "name", array()), "html", null, true);
            echo "</td>
                                <td class=\"col-md-3\">
                                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_show_book", array("token" => $this->getAttribute($context["book"], "token", array()))), "html", null, true);
            echo "\" class=\"btn blue \"><i class=\"fa fa-eye\"></i></a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div style=\"top:-150px;position:fixed;\" class=\"modal fade\" id=\"model-tag-version\" tabindex=\"-1\" role=\"basic\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"background-color: #17C4BB\">
                    <h4 class=\"modal-title font-white bold font col-md-9\">Marquage du version </h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <input id=\"descriptionTag\" class=\"form-control\" placeholder=\"donner un titre a ce marquage\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button id=\"closeModal\" type=\"button\" class=\"btn dark btn-outline\" data-dismiss=\"modal\">Fermer
                    </button>
                    <button id=\"execTagBookVersion\" type=\"button\" class=\"btn blue btn-outline\">Confirmer</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-my-books\">

";
        
        $__internal_8be64561714f5894404aa5bcfb06c658d4477450fc3d1e1ef517b35bdee78425->leave($__internal_8be64561714f5894404aa5bcfb06c658d4477450fc3d1e1ef517b35bdee78425_prof);

        
        $__internal_4ebf2200874d75f850984ab59990bff64f4e796b5067254e085858cd6c2e4e05->leave($__internal_4ebf2200874d75f850984ab59990bff64f4e796b5067254e085858cd6c2e4e05_prof);

    }

    // line 80
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa6abc4027191c6a2a6aa595aba47588c9b189b114a884d0661c753aa7721987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6abc4027191c6a2a6aa595aba47588c9b189b114a884d0661c753aa7721987->enter($__internal_aa6abc4027191c6a2a6aa595aba47588c9b189b114a884d0661c753aa7721987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_32b321feee55d5f20ad6772853be48497f4b797a7cd86257a9dd00ff1386007f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b321feee55d5f20ad6772853be48497f4b797a7cd86257a9dd00ff1386007f->enter($__internal_32b321feee55d5f20ad6772853be48497f4b797a7cd86257a9dd00ff1386007f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_32b321feee55d5f20ad6772853be48497f4b797a7cd86257a9dd00ff1386007f->leave($__internal_32b321feee55d5f20ad6772853be48497f4b797a7cd86257a9dd00ff1386007f_prof);

        
        $__internal_aa6abc4027191c6a2a6aa595aba47588c9b189b114a884d0661c753aa7721987->leave($__internal_aa6abc4027191c6a2a6aa595aba47588c9b189b114a884d0661c753aa7721987_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70fc257477886a314cd5080f0ba2d8a5888fa582b5c0c00e1289694613979065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70fc257477886a314cd5080f0ba2d8a5888fa582b5c0c00e1289694613979065->enter($__internal_70fc257477886a314cd5080f0ba2d8a5888fa582b5c0c00e1289694613979065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_56d75d8200dd4c2071e6694b0e1fbad5046b0f0e4c8c487fc744b8b4a275be25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d75d8200dd4c2071e6694b0e1fbad5046b0f0e4c8c487fc744b8b4a275be25->enter($__internal_56d75d8200dd4c2071e6694b0e1fbad5046b0f0e4c8c487fc744b8b4a275be25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "    <script>
        \$(document).ready(function () {
            \$('.tag-version').click(function () {
                var url = \$(this).data('url');
                \$('#execTagBookVersion').data('url', url);
            });
            \$('#execTagBookVersion').click(function () {
                var elem = \$(this);
                var url = elem.data('url');
                var description = \$('#descriptionTag').val();
                if(description.length>1){
                    \$.ajax({
                        url: url,
                        method: 'POST',
                        data: {description: description},
                        beforeSend: function () {
                            \$('#descriptionTag').parent().removeClass('has-error');
                            \$('#closeModal').click();
                        },
                        success: function () {
                            \$('.tag-version[data-url=\"' + url + '\"]').addClass('disabled').off().attr('href', '');
                            toastr.success('cette version du livre a été marqué');
                            \$('#descriptionTag').val(\"\");
                        }
                    })
                }else
                    \$('#descriptionTag').parent().addClass('has-error');
            });

            \$('.revertBookTag').click(function () {
                var elem = \$(this);
                var url = elem.closest('.modal-content').find('select>option:selected').data('url');
                \$.ajax({
                    url: url,
                    method: 'POST',
                    beforeSend: function () {
                        \$('.closeModal').click();
                    },
                    success: function () {
                        toastr.success('ce marquage a été retabli avec succes!');
                    }
                })
            })
        })
    </script>
";
        
        $__internal_56d75d8200dd4c2071e6694b0e1fbad5046b0f0e4c8c487fc744b8b4a275be25->leave($__internal_56d75d8200dd4c2071e6694b0e1fbad5046b0f0e4c8c487fc744b8b4a275be25_prof);

        
        $__internal_70fc257477886a314cd5080f0ba2d8a5888fa582b5c0c00e1289694613979065->leave($__internal_70fc257477886a314cd5080f0ba2d8a5888fa582b5c0c00e1289694613979065_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Author:my.books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 83,  196 => 82,  179 => 80,  138 => 48,  128 => 44,  123 => 42,  119 => 41,  115 => 40,  112 => 39,  108 => 38,  79 => 12,  72 => 7,  63 => 6,  52 => 4,  43 => 3,  11 => 1,);
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
    Mes  Livres
{% endblock %}
{% block body %}
    <!-- BEGIN PAGE BASE CONTENT -->
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"{{ url('author_homepage') }}\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Mes Livres</span>
            </li>

        </ul>
    </div>
    <div class=\"m-heading-1 border-green m-bordered row\" style=\"margin-bottom: 17px;\">
        <h2><span class=\"fa fa-list-ul\"></span> &nbsp; Mes Livres </h2>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"portlet box red\">
                <div class=\"portlet-body \">
                    <table class=\"table table-striped table-bordered datatable \" cellspacing=\"0\" width=\"100%\">
                        <thead>
                        <tr>
                            <th class=\"text-center\">Date Creation</th>
                            <th class=\"text-center\">Titre</th>
                            <th class=\"text-center\">Categorie</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for book in books %}
                            <tr class=\"text-center\">
                                <td >{{ book.createdAt|date('d-m-Y') }}</td>
                                <td>{{ book.title }}</td>
                                <td>{{ book.category.name }}</td>
                                <td class=\"col-md-3\">
                                    <a href=\"{{ url('author_show_book',{token:book.token}) }}\" class=\"btn blue \"><i class=\"fa fa-eye\"></i></a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div style=\"top:-150px;position:fixed;\" class=\"modal fade\" id=\"model-tag-version\" tabindex=\"-1\" role=\"basic\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\" style=\"background-color: #17C4BB\">
                    <h4 class=\"modal-title font-white bold font col-md-9\">Marquage du version </h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <input id=\"descriptionTag\" class=\"form-control\" placeholder=\"donner un titre a ce marquage\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button id=\"closeModal\" type=\"button\" class=\"btn dark btn-outline\" data-dismiss=\"modal\">Fermer
                    </button>
                    <button id=\"execTagBookVersion\" type=\"button\" class=\"btn blue btn-outline\">Confirmer</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-my-books\">

{% endblock %}
{% block stylesheets %}
{% endblock %}
{% block javascripts %}
    <script>
        \$(document).ready(function () {
            \$('.tag-version').click(function () {
                var url = \$(this).data('url');
                \$('#execTagBookVersion').data('url', url);
            });
            \$('#execTagBookVersion').click(function () {
                var elem = \$(this);
                var url = elem.data('url');
                var description = \$('#descriptionTag').val();
                if(description.length>1){
                    \$.ajax({
                        url: url,
                        method: 'POST',
                        data: {description: description},
                        beforeSend: function () {
                            \$('#descriptionTag').parent().removeClass('has-error');
                            \$('#closeModal').click();
                        },
                        success: function () {
                            \$('.tag-version[data-url=\"' + url + '\"]').addClass('disabled').off().attr('href', '');
                            toastr.success('cette version du livre a été marqué');
                            \$('#descriptionTag').val(\"\");
                        }
                    })
                }else
                    \$('#descriptionTag').parent().addClass('has-error');
            });

            \$('.revertBookTag').click(function () {
                var elem = \$(this);
                var url = elem.closest('.modal-content').find('select>option:selected').data('url');
                \$.ajax({
                    url: url,
                    method: 'POST',
                    beforeSend: function () {
                        \$('.closeModal').click();
                    },
                    success: function () {
                        toastr.success('ce marquage a été retabli avec succes!');
                    }
                })
            })
        })
    </script>
{% endblock %}", "MainBundle:Author:my.books.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle/Resources/views/Author/my.books.html.twig");
    }
}
