<?php

/* @Main/Admin/newsletters/new.html.twig */
class __TwigTemplate_97e06e159355b0fc2f4580d17939610bc3954e0fe3918ce8417ed3a7ff7216f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/Admin/newsletters/new.html.twig", 1);
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
        $__internal_a8919c25cc2a34d4206ec0b643bfc0c930fbdf6e8f3ce7c09aec1a4f2f75bfac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8919c25cc2a34d4206ec0b643bfc0c930fbdf6e8f3ce7c09aec1a4f2f75bfac->enter($__internal_a8919c25cc2a34d4206ec0b643bfc0c930fbdf6e8f3ce7c09aec1a4f2f75bfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/newsletters/new.html.twig"));

        $__internal_f230c2a226c329751fb7a7e103601606b8011630b4c5696ce8b9b28c3d59e5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f230c2a226c329751fb7a7e103601606b8011630b4c5696ce8b9b28c3d59e5b1->enter($__internal_f230c2a226c329751fb7a7e103601606b8011630b4c5696ce8b9b28c3d59e5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Admin/newsletters/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8919c25cc2a34d4206ec0b643bfc0c930fbdf6e8f3ce7c09aec1a4f2f75bfac->leave($__internal_a8919c25cc2a34d4206ec0b643bfc0c930fbdf6e8f3ce7c09aec1a4f2f75bfac_prof);

        
        $__internal_f230c2a226c329751fb7a7e103601606b8011630b4c5696ce8b9b28c3d59e5b1->leave($__internal_f230c2a226c329751fb7a7e103601606b8011630b4c5696ce8b9b28c3d59e5b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc76e4f3323d9a2c8f106d44c466106ce80d26bad4071670b4831148eb02e991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc76e4f3323d9a2c8f106d44c466106ce80d26bad4071670b4831148eb02e991->enter($__internal_dc76e4f3323d9a2c8f106d44c466106ce80d26bad4071670b4831148eb02e991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b7a3c9e551b41d105254cbcda3e8b5fe554dd7f0b5fe779439d134f3899f067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7a3c9e551b41d105254cbcda3e8b5fe554dd7f0b5fe779439d134f3899f067->enter($__internal_9b7a3c9e551b41d105254cbcda3e8b5fe554dd7f0b5fe779439d134f3899f067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Ajouter newsLetter
";
        
        $__internal_9b7a3c9e551b41d105254cbcda3e8b5fe554dd7f0b5fe779439d134f3899f067->leave($__internal_9b7a3c9e551b41d105254cbcda3e8b5fe554dd7f0b5fe779439d134f3899f067_prof);

        
        $__internal_dc76e4f3323d9a2c8f106d44c466106ce80d26bad4071670b4831148eb02e991->leave($__internal_dc76e4f3323d9a2c8f106d44c466106ce80d26bad4071670b4831148eb02e991_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_474b8380ef4a6da39c80cfd031da27aa7a3c521df1a15ccba7db982fe14ffc03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474b8380ef4a6da39c80cfd031da27aa7a3c521df1a15ccba7db982fe14ffc03->enter($__internal_474b8380ef4a6da39c80cfd031da27aa7a3c521df1a15ccba7db982fe14ffc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ca2f2622e01ed0cf5f423124463949a2a84eb0828af123ab3bbabb8be13dc5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca2f2622e01ed0cf5f423124463949a2a84eb0828af123ab3bbabb8be13dc5c->enter($__internal_2ca2f2622e01ed0cf5f423124463949a2a84eb0828af123ab3bbabb8be13dc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("administrator_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Ajouter newsLetter</span>
            </li>

        </ul>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"portlet \">
                <div class=\"portlet-body col-md-12\" style=\"padding: 10px 0\">
                    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("enctype" => "multipart/form-data", "class" => "messageForm", "novalidate" => true)));
        echo "
                    <div class=\"form-group col-md-12\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'label', array("label_attr" => array("class" => "col-sm-2 col-sm-offset-1  control-label")));
        echo "
                        <div class=\"col-sm-7\">
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"help-block with-errors\">vous devez entrer le sujet du newsletter</div>
                        </div>
                    </div>
                    <div class=\"form-group col-md-12\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'label', array("label_attr" => array("class" => "control-label")));
        echo "
                        <div>
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'widget', array("attr" => array("class" => "summernote")));
        echo "
                            <div class=\"help-block with-errors\">Le contenu de newsletter ne peut pas etre vide (20 caractéres minimum)</div>
                        </div>
                    </div>
                    <div class=\"form-group col-md-12\">
                        <label  class=\"control-label\">Attachement</label>
                        <input type=\"file\" class=\"fileinput\" name=\"attachments[]\"/>
                    </div>
                    <div class=\"col-md-12 text-center\" style=\"margin-top: 20px\">
                        <button  type=\"submit\" class=\"btn green\">Enregistrer</button>
                        <button type=\"reset\" class=\"btn btn-default\">X Annuler</button>
                    </div>
                    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>


    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-add-newsletter\">
";
        
        $__internal_2ca2f2622e01ed0cf5f423124463949a2a84eb0828af123ab3bbabb8be13dc5c->leave($__internal_2ca2f2622e01ed0cf5f423124463949a2a84eb0828af123ab3bbabb8be13dc5c_prof);

        
        $__internal_474b8380ef4a6da39c80cfd031da27aa7a3c521df1a15ccba7db982fe14ffc03->leave($__internal_474b8380ef4a6da39c80cfd031da27aa7a3c521df1a15ccba7db982fe14ffc03_prof);

    }

    // line 58
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0603c77dc6eed4c1d387b298b4b576877a1a09dee105236f0cfa3c0eb7a5eac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0603c77dc6eed4c1d387b298b4b576877a1a09dee105236f0cfa3c0eb7a5eac3->enter($__internal_0603c77dc6eed4c1d387b298b4b576877a1a09dee105236f0cfa3c0eb7a5eac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2721bc97ea20e30d00357ea72b752cb21c545d2e46d271e359366068e3978d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2721bc97ea20e30d00357ea72b752cb21c545d2e46d271e359366068e3978d2c->enter($__internal_2721bc97ea20e30d00357ea72b752cb21c545d2e46d271e359366068e3978d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2721bc97ea20e30d00357ea72b752cb21c545d2e46d271e359366068e3978d2c->leave($__internal_2721bc97ea20e30d00357ea72b752cb21c545d2e46d271e359366068e3978d2c_prof);

        
        $__internal_0603c77dc6eed4c1d387b298b4b576877a1a09dee105236f0cfa3c0eb7a5eac3->leave($__internal_0603c77dc6eed4c1d387b298b4b576877a1a09dee105236f0cfa3c0eb7a5eac3_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7690b8027081badefae7ff6c6baa8adce6012f4a9057f65747dcec848c31950b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7690b8027081badefae7ff6c6baa8adce6012f4a9057f65747dcec848c31950b->enter($__internal_7690b8027081badefae7ff6c6baa8adce6012f4a9057f65747dcec848c31950b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f148781758ba5845f94ac213441c9f410d2079b510803e64fa6155162232a466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f148781758ba5845f94ac213441c9f410d2079b510803e64fa6155162232a466->enter($__internal_f148781758ba5845f94ac213441c9f410d2079b510803e64fa6155162232a466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    <script>
        \$(document).ready(function () {
            \$('.summernote').summernote(
                {
                    height: 300,
                    language: 'fr',
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']]
                    ],
                }).trigger('summernote.change');
            \$(\".summernote\").on(\"summernote.change\", function (e) {   // callback as jquery custom event
                \$(this).val().length >= 20 ? \$(this).closest('.form-group').removeClass('has-error').addClass('has-success') :
                    \$(this).closest('.form-group').addClass('has-error').removeClass('has-success');
            });

            \$('.messageForm').on('submit',function (\$event) {
                var subject=\$('#webbook_mainbundle_newsletter_subject');
                var content=\$('#webbook_mainbundle_newsletter_body');

                var error=false;

                if(!subject.val()){
                    error=true;
                    subject.closest('.form-group').addClass('has-error');
                }
                if(!content.val() || \$.trim(content.val()).length<20){
                    error=true;
                    content.closest('.form-group').addClass('has-error');
                }
                if(error){
                    subject.on('change',function () {
                        \$(this).val()?\$(this).closest('.form-group').removeClass('has-error').addClass('has-success'):
                            \$(this).closest('.form-group').addClass('has-error').removeClass('has-success');
                    });
                    \$event.preventDefault();
                }

            });
            \$('button[type=\"reset\"]').click(function () {
                \$(\".has-error\").removeClass(\"has-error\");
            })
        })
    </script>
";
        
        $__internal_f148781758ba5845f94ac213441c9f410d2079b510803e64fa6155162232a466->leave($__internal_f148781758ba5845f94ac213441c9f410d2079b510803e64fa6155162232a466_prof);

        
        $__internal_7690b8027081badefae7ff6c6baa8adce6012f4a9057f65747dcec848c31950b->leave($__internal_7690b8027081badefae7ff6c6baa8adce6012f4a9057f65747dcec848c31950b_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Admin/newsletters/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 62,  168 => 61,  151 => 58,  132 => 48,  117 => 36,  112 => 34,  104 => 29,  99 => 27,  94 => 25,  78 => 12,  72 => 8,  63 => 7,  52 => 4,  43 => 3,  11 => 1,);
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
    Ajouter newsLetter
{% endblock %}

{% block body %}
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"icon-home\"></i>
                <a href=\"{{ url('administrator_homepage') }}\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Ajouter newsLetter</span>
            </li>

        </ul>
    </div>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"portlet \">
                <div class=\"portlet-body col-md-12\" style=\"padding: 10px 0\">
                    {{ form_start(form,{'attr':{enctype:\"multipart/form-data\",'class':'messageForm',novalidate:true} }) }}
                    <div class=\"form-group col-md-12\">
                        {{ form_label(form.subject,null,{label_attr:{class:'col-sm-2 col-sm-offset-1  control-label'} }) }}
                        <div class=\"col-sm-7\">
                            {{ form_widget(form.subject,{attr:{class:'form-control'}}) }}
                            <div class=\"help-block with-errors\">vous devez entrer le sujet du newsletter</div>
                        </div>
                    </div>
                    <div class=\"form-group col-md-12\">
                        {{ form_label(form.body,null,{label_attr:{class:'control-label'}}) }}
                        <div>
                            {{ form_widget(form.body,{attr:{class:'summernote'}}) }}
                            <div class=\"help-block with-errors\">Le contenu de newsletter ne peut pas etre vide (20 caractéres minimum)</div>
                        </div>
                    </div>
                    <div class=\"form-group col-md-12\">
                        <label  class=\"control-label\">Attachement</label>
                        <input type=\"file\" class=\"fileinput\" name=\"attachments[]\"/>
                    </div>
                    <div class=\"col-md-12 text-center\" style=\"margin-top: 20px\">
                        <button  type=\"submit\" class=\"btn green\">Enregistrer</button>
                        <button type=\"reset\" class=\"btn btn-default\">X Annuler</button>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>


    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-add-newsletter\">
{% endblock %}

{% block stylesheets %}
{% endblock %}

{% block javascripts %}
    <script>
        \$(document).ready(function () {
            \$('.summernote').summernote(
                {
                    height: 300,
                    language: 'fr',
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']]
                    ],
                }).trigger('summernote.change');
            \$(\".summernote\").on(\"summernote.change\", function (e) {   // callback as jquery custom event
                \$(this).val().length >= 20 ? \$(this).closest('.form-group').removeClass('has-error').addClass('has-success') :
                    \$(this).closest('.form-group').addClass('has-error').removeClass('has-success');
            });

            \$('.messageForm').on('submit',function (\$event) {
                var subject=\$('#webbook_mainbundle_newsletter_subject');
                var content=\$('#webbook_mainbundle_newsletter_body');

                var error=false;

                if(!subject.val()){
                    error=true;
                    subject.closest('.form-group').addClass('has-error');
                }
                if(!content.val() || \$.trim(content.val()).length<20){
                    error=true;
                    content.closest('.form-group').addClass('has-error');
                }
                if(error){
                    subject.on('change',function () {
                        \$(this).val()?\$(this).closest('.form-group').removeClass('has-error').addClass('has-success'):
                            \$(this).closest('.form-group').addClass('has-error').removeClass('has-success');
                    });
                    \$event.preventDefault();
                }

            });
            \$('button[type=\"reset\"]').click(function () {
                \$(\".has-error\").removeClass(\"has-error\");
            })
        })
    </script>
{% endblock %}", "@Main/Admin/newsletters/new.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\Admin\\newsletters\\new.html.twig");
    }
}
