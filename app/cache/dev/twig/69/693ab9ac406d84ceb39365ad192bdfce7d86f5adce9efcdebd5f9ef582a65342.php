<?php

/* @Main/shared/profile.html.twig */
class __TwigTemplate_89a6cf894aa1fb39d78913406881911a4775a0a939234987194d5e83b9beb7f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Main/shared/profile.html.twig", 1);
        $this->blocks = array(
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
        $__internal_fa07f3cae6ef0f795b6e7a24a8994f2f721029582d69d31d52ca81e189358553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa07f3cae6ef0f795b6e7a24a8994f2f721029582d69d31d52ca81e189358553->enter($__internal_fa07f3cae6ef0f795b6e7a24a8994f2f721029582d69d31d52ca81e189358553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/shared/profile.html.twig"));

        $__internal_8bc653e71a9b122a6f470525fe1d569b099746fe24233862ee59ebc13f977a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc653e71a9b122a6f470525fe1d569b099746fe24233862ee59ebc13f977a9a->enter($__internal_8bc653e71a9b122a6f470525fe1d569b099746fe24233862ee59ebc13f977a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/shared/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa07f3cae6ef0f795b6e7a24a8994f2f721029582d69d31d52ca81e189358553->leave($__internal_fa07f3cae6ef0f795b6e7a24a8994f2f721029582d69d31d52ca81e189358553_prof);

        
        $__internal_8bc653e71a9b122a6f470525fe1d569b099746fe24233862ee59ebc13f977a9a->leave($__internal_8bc653e71a9b122a6f470525fe1d569b099746fe24233862ee59ebc13f977a9a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1f36c53262c1d58ef53255a356a84cabc3a937180b9ba509d47a9872c48f65a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f36c53262c1d58ef53255a356a84cabc3a937180b9ba509d47a9872c48f65a->enter($__internal_f1f36c53262c1d58ef53255a356a84cabc3a937180b9ba509d47a9872c48f65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_457188cc0c267081105c2d61efd521dded11515a036d7429fd1ebbbfc25f7b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457188cc0c267081105c2d61efd521dded11515a036d7429fd1ebbbfc25f7b6d->enter($__internal_457188cc0c267081105c2d61efd521dded11515a036d7429fd1ebbbfc25f7b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"fa fa-home\"></i>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("author_homepage");
        echo "\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Profil</span>
            </li>
        </ul>
    </div>
    <div>
        <div class=\"col-md-12 portlet custom-bg\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("enctype" => "multipart/form-data", "class" => "form-horizantal")));
        echo "
            <div class=\"col-md-3\" style=\"padding: 50px\">
                <div class=\"userpic\">
                    <div class=\"userpic-wrapper\">
                        <img id=\"avatar\" src=\"";
        // line 22
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "picture", array()))) {
            // line 23
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "picture", array()), "mediaFile"), "html", null, true);
            echo "
                        ";
        } else {
            // line 25
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/no-avatar.png"), "html", null, true);
            echo "
                        ";
        }
        // line 26
        echo "\">
                    </div>
                    <div id=\"picture-widget\" class=\"hidden\">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "picture", array()), 'widget');
        echo "
                    </div>
                    <i id=\"init-avatar\" class=\"ion-ios-close-outline \"></i>
                    <div class=\"change-userpic button\">Changer photo de profil
                    </div>
                </div>
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\" style=\"padding: 20px\">
                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "lastName", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "lastName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "lastName", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "firstName", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "firstName", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "firstName", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "phone", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "phone", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "address", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "address", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "address", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "birthday", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "birthday", array()), 'widget', array("attr" => array("class" => "form-control datepicker")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "birthday", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row col-md-12\">
                ";
        // line 86
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTHOR")) {
            // line 87
            echo "                <div class=\"row form-group margin-top-10\">
                    ";
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bibliography", array()), 'label', array("label_attr" => array("class" => "col-md-2 col-md-offset-1 custom-lb")));
            echo "
                    <div class=\"col-md-9\">
                        ";
            // line 90
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bibliography", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 10)));
            echo "
                        <div class=\"font-red\" style=\"list-style: none\">
                            ";
            // line 92
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bibliography", array()), 'errors');
            echo "
                        </div>
                    </div>
                </div>
                ";
        }
        // line 97
        echo "                <div class=\"row\" style=\"padding: 50px\">
                    <h2 style=\"margin-top: 0px;margin-bottom: 15px\" class=\"font-green-jungle bold\">Information du compte
                        :</h2>
                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>

                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>

                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-md-offset-1 custom-lb")));
        echo "
                        <div class=\"col-md-6\">
                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <div class=\"font-red\" style=\"list-style: none\">
                                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center margin-top-10\" style=\"margin-bottom: 10px\">
                    <input  class=\"btn blue\" type=\"submit\" value=\"Enregister\"/>
                </div>
            </div>
        </div>
        ";
        // line 144
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_457188cc0c267081105c2d61efd521dded11515a036d7429fd1ebbbfc25f7b6d->leave($__internal_457188cc0c267081105c2d61efd521dded11515a036d7429fd1ebbbfc25f7b6d_prof);

        
        $__internal_f1f36c53262c1d58ef53255a356a84cabc3a937180b9ba509d47a9872c48f65a->leave($__internal_f1f36c53262c1d58ef53255a356a84cabc3a937180b9ba509d47a9872c48f65a_prof);

    }

    // line 147
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f53b59a0530eff621741f604ed1f116d7a87aa5eaccf43f4b6120b2467a0d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f53b59a0530eff621741f604ed1f116d7a87aa5eaccf43f4b6120b2467a0d75->enter($__internal_5f53b59a0530eff621741f604ed1f116d7a87aa5eaccf43f4b6120b2467a0d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aa650eff9227f4f81b7b3b26f1d688f92156025794409e29acd980bc59581bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa650eff9227f4f81b7b3b26f1d688f92156025794409e29acd980bc59581bee->enter($__internal_aa650eff9227f4f81b7b3b26f1d688f92156025794409e29acd980bc59581bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 148
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/profile.css"), "html", null, true);
        echo "\">
";
        
        $__internal_aa650eff9227f4f81b7b3b26f1d688f92156025794409e29acd980bc59581bee->leave($__internal_aa650eff9227f4f81b7b3b26f1d688f92156025794409e29acd980bc59581bee_prof);

        
        $__internal_5f53b59a0530eff621741f604ed1f116d7a87aa5eaccf43f4b6120b2467a0d75->leave($__internal_5f53b59a0530eff621741f604ed1f116d7a87aa5eaccf43f4b6120b2467a0d75_prof);

    }

    // line 150
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4709a36fc1fb5a390cf5f7db0916a02983ebd1b2d5031cd4550de4069a3ec39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4709a36fc1fb5a390cf5f7db0916a02983ebd1b2d5031cd4550de4069a3ec39->enter($__internal_b4709a36fc1fb5a390cf5f7db0916a02983ebd1b2d5031cd4550de4069a3ec39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0c29f8f9bc5f8e40ab6a7030fefcb4ee23b6a57703127775b1a7bd499fe76246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c29f8f9bc5f8e40ab6a7030fefcb4ee23b6a57703127775b1a7bd499fe76246->enter($__internal_0c29f8f9bc5f8e40ab6a7030fefcb4ee23b6a57703127775b1a7bd499fe76246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 151
        echo "    <script>
        \$(document).ready(function () {
            var original_img=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/avatar/no-avatar.png"), "html", null, true);
        echo "\";
            \$('.change-userpic').click(function () {
                \$('.input-avatar').attr('accept','image/*').click();
            });
            \$('.input-avatar').change(function () {
                readURL(this);
            });
            \$('#init-avatar').click(function () {
                \$('#avatar').attr('src',original_img);
                \$('.input-avatar').val(\"\");
            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        \$('#avatar').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        })

    </script>
 ";
        
        $__internal_0c29f8f9bc5f8e40ab6a7030fefcb4ee23b6a57703127775b1a7bd499fe76246->leave($__internal_0c29f8f9bc5f8e40ab6a7030fefcb4ee23b6a57703127775b1a7bd499fe76246_prof);

        
        $__internal_b4709a36fc1fb5a390cf5f7db0916a02983ebd1b2d5031cd4550de4069a3ec39->leave($__internal_b4709a36fc1fb5a390cf5f7db0916a02983ebd1b2d5031cd4550de4069a3ec39_prof);

    }

    public function getTemplateName()
    {
        return "@Main/shared/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 153,  353 => 151,  344 => 150,  331 => 148,  322 => 147,  309 => 144,  296 => 134,  291 => 132,  286 => 130,  278 => 125,  273 => 123,  268 => 121,  259 => 115,  254 => 113,  249 => 111,  240 => 105,  235 => 103,  230 => 101,  224 => 97,  216 => 92,  211 => 90,  206 => 88,  203 => 87,  201 => 86,  191 => 79,  186 => 77,  181 => 75,  173 => 70,  168 => 68,  163 => 66,  155 => 61,  150 => 59,  145 => 57,  137 => 52,  132 => 50,  127 => 48,  119 => 43,  114 => 41,  109 => 39,  96 => 29,  91 => 26,  85 => 25,  79 => 23,  77 => 22,  70 => 18,  57 => 8,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@Main/layout.html.twig\" %}

{% block body %}
    <div class=\"page-bar\">
        <ul class=\"page-breadcrumb\">
            <li>
                <i class=\"fa fa-home\"></i>
                <a href=\"{{ url('author_homepage') }}\">Tableau de bord</a>
                <i class=\"fa fa-angle-right\"></i>
            </li>
            <li>
                <span class=\"active\">Profil</span>
            </li>
        </ul>
    </div>
    <div>
        <div class=\"col-md-12 portlet custom-bg\">
            {{ form_start(form,{'attr':{enctype:\"multipart/form-data\",class:'form-horizantal'}}) }}
            <div class=\"col-md-3\" style=\"padding: 50px\">
                <div class=\"userpic\">
                    <div class=\"userpic-wrapper\">
                        <img id=\"avatar\" src=\"{% if app.user.picture is not null %}
                        {{ vich_uploader_asset(app.user.picture,'mediaFile') }}
                        {% else %}
                        {{ asset('assets/img/avatar/no-avatar.png') }}
                        {% endif %}\">
                    </div>
                    <div id=\"picture-widget\" class=\"hidden\">
                        {{ form_widget(form.picture) }}
                    </div>
                    <i id=\"init-avatar\" class=\"ion-ios-close-outline \"></i>
                    <div class=\"change-userpic button\">Changer photo de profil
                    </div>
                </div>
            </div>
            <div class=\"col-md-9\">
                <div class=\"row\" style=\"padding: 20px\">
                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(form.profile.lastName, null,{ 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(form.profile.lastName,{'attr':{'class':'form-control'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(form.profile.lastName) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(form.profile.firstName, null,{ 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(form.profile.firstName,{'attr':{'class':'form-control'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(form.profile.firstName) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(form.profile.phone, null,{ 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(form.profile.phone,{'attr':{'class':'form-control'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(form.profile.phone) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(form.profile.address, null,{ 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(form.profile.address,{'attr':{'class':'form-control'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(form.profile.address) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(form.profile.birthday, null,{ 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(form.profile.birthday,{'attr':{'class':'form-control datepicker'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(form.profile.birthday) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row col-md-12\">
                {% if is_granted('ROLE_AUTHOR')  %}
                <div class=\"row form-group margin-top-10\">
                    {{ form_label(form.bibliography, null,{ 'label_attr': {'class': 'col-md-2 col-md-offset-1 custom-lb'}}) }}
                    <div class=\"col-md-9\">
                        {{ form_widget(form.bibliography,{'attr':{'class':'form-control','rows':10}}) }}
                        <div class=\"font-red\" style=\"list-style: none\">
                            {{ form_errors(form.bibliography) }}
                        </div>
                    </div>
                </div>
                {% endif %}
                <div class=\"row\" style=\"padding: 50px\">
                    <h2 style=\"margin-top: 0px;margin-bottom: 15px\" class=\"font-green-jungle bold\">Information du compte
                        :</h2>
                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(form.username, null,{ 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(form.username,{'attr':{'class':'form-control'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(form.username) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(form.email,null, { 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(form.email,{'attr':{'class':'form-control'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(form.email) }}
                            </div>
                        </div>
                    </div>

                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(form.plainPassword.first,null, { 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(form.plainPassword.first,{'attr':{'class':'form-control'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(form.plainPassword.first) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row form-group margin-top-10\">
                        {{ form_label(form.plainPassword.second,null, { 'label_attr': {'class': 'col-md-3 col-md-offset-1 custom-lb'}}) }}
                        <div class=\"col-md-6\">
                            {{ form_widget(form.plainPassword.second,{'attr':{'class':'form-control'}}) }}
                            <div class=\"font-red\" style=\"list-style: none\">
                                {{ form_errors(form.plainPassword.second) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"text-center margin-top-10\" style=\"margin-bottom: 10px\">
                    <input  class=\"btn blue\" type=\"submit\" value=\"Enregister\"/>
                </div>
            </div>
        </div>
        {{ form_end(form,{'render_rest':false}) }}
    </div>
{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/pages/css/profile.css') }}\">
{% endblock %}
{% block javascripts %}
    <script>
        \$(document).ready(function () {
            var original_img=\"{{ asset('assets/img/avatar/no-avatar.png') }}\";
            \$('.change-userpic').click(function () {
                \$('.input-avatar').attr('accept','image/*').click();
            });
            \$('.input-avatar').change(function () {
                readURL(this);
            });
            \$('#init-avatar').click(function () {
                \$('#avatar').attr('src',original_img);
                \$('.input-avatar').val(\"\");
            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        \$('#avatar').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        })

    </script>
 {% endblock %}", "@Main/shared/profile.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MainBundle\\Resources\\views\\shared\\profile.html.twig");
    }
}
