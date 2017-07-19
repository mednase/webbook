<?php

/* @Messaging/message.layout.html.twig */
class __TwigTemplate_974704ce2468b5b856a4016a03ccbc18282c882fd041c824db00b95c630d858f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Main/layout.html.twig", "@Messaging/message.layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'BCMInbox' => array($this, 'block_BCMInbox'),
            'BCMSent' => array($this, 'block_BCMSent'),
            'BCMImportant' => array($this, 'block_BCMImportant'),
            'message_body' => array($this, 'block_message_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'under_js' => array($this, 'block_under_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Main/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e90884021d349a41842f214f87c4874331e07bb889a2fdd612fb81bc93eefc74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90884021d349a41842f214f87c4874331e07bb889a2fdd612fb81bc93eefc74->enter($__internal_e90884021d349a41842f214f87c4874331e07bb889a2fdd612fb81bc93eefc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Messaging/message.layout.html.twig"));

        $__internal_5430855b0dd3e16b876108d0f0be225a0b2112434a5b44243ec468f76fd66669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5430855b0dd3e16b876108d0f0be225a0b2112434a5b44243ec468f76fd66669->enter($__internal_5430855b0dd3e16b876108d0f0be225a0b2112434a5b44243ec468f76fd66669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Messaging/message.layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e90884021d349a41842f214f87c4874331e07bb889a2fdd612fb81bc93eefc74->leave($__internal_e90884021d349a41842f214f87c4874331e07bb889a2fdd612fb81bc93eefc74_prof);

        
        $__internal_5430855b0dd3e16b876108d0f0be225a0b2112434a5b44243ec468f76fd66669->leave($__internal_5430855b0dd3e16b876108d0f0be225a0b2112434a5b44243ec468f76fd66669_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b14b3d6dd2df892c3ce3ffcd3bf0cea6a7ce702f492d2407211540fdebede2ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b14b3d6dd2df892c3ce3ffcd3bf0cea6a7ce702f492d2407211540fdebede2ac->enter($__internal_b14b3d6dd2df892c3ce3ffcd3bf0cea6a7ce702f492d2407211540fdebede2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88e3155044efd7ab06384a94f5039e53c2756ef3f27d2924e774b8c62f4a8cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e3155044efd7ab06384a94f5039e53c2756ef3f27d2924e774b8c62f4a8cc5->enter($__internal_88e3155044efd7ab06384a94f5039e53c2756ef3f27d2924e774b8c62f4a8cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Messages
";
        
        $__internal_88e3155044efd7ab06384a94f5039e53c2756ef3f27d2924e774b8c62f4a8cc5->leave($__internal_88e3155044efd7ab06384a94f5039e53c2756ef3f27d2924e774b8c62f4a8cc5_prof);

        
        $__internal_b14b3d6dd2df892c3ce3ffcd3bf0cea6a7ce702f492d2407211540fdebede2ac->leave($__internal_b14b3d6dd2df892c3ce3ffcd3bf0cea6a7ce702f492d2407211540fdebede2ac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_07519b816d8bccf47d67a158f6ba150545f9b3e7e77745109a1b180359c8a1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07519b816d8bccf47d67a158f6ba150545f9b3e7e77745109a1b180359c8a1bb->enter($__internal_07519b816d8bccf47d67a158f6ba150545f9b3e7e77745109a1b180359c8a1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72ecfcece922882949bcfaff340161bd1c0b4b3cdf88c9c1821a1bbf6692bcdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ecfcece922882949bcfaff340161bd1c0b4b3cdf88c9c1821a1bbf6692bcdf->enter($__internal_72ecfcece922882949bcfaff340161bd1c0b4b3cdf88c9c1821a1bbf6692bcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"inbox\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("messaging_search", array("role" => $this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->getRole())), "html", null, true);
        echo "\">
                    <div class=\"input-group\" style=\"margin-bottom: 20px\">
                        <input ";
        // line 11
        if (array_key_exists("search", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "html", null, true);
            echo "\" ";
        }
        echo " name=\"searchMessage\" type=\"text\" class=\"form-control\" placeholder=\"Rechercher .. \">
                        <span class=\"input-group-btn\">
                                <button type=\"submit\" class=\"btn green\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                        </span>
                    </div>
                </form>
                <div class=\"inbox-sidebar\">
                    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("messaging_compose", array("role" => $this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->getRole())), "html", null, true);
        echo "\" id=\"btn-compose-message\"
                       class=\"btn red compose-btn btn-block\"><i
                                class=\"fa fa-pencil-square-o\"></i>Composer
                    </a>
                    <ul class=\"inbox-nav\">
                        <li class=\"";
        // line 25
        $this->displayBlock('BCMInbox', $context, $blocks);
        echo "\">
                            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("messaging_inbox", array("role" => $this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->getRole())), "html", null, true);
        echo "\">
                                <span class=\"fa fa-inbox\"></span>
                                Boîte de réception
                                ";
        // line 29
        if (($this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->countNewMessages() > 0)) {
            // line 30
            echo "                                <span class=\"badge badge-success msg-nb\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->countNewMessages(), "html", null, true);
            echo "</span>
                                ";
        }
        // line 32
        echo "                            </a>
                        </li>
                        <li class=\"";
        // line 34
        $this->displayBlock('BCMSent', $context, $blocks);
        echo "\">
                            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("messaging_sent", array("role" => $this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->getRole())), "html", null, true);
        echo "\">
                                <span class=\"fa fa-send-o\"></span>
                                Messages envoyés
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li class=\"";
        // line 41
        $this->displayBlock('BCMImportant', $context, $blocks);
        echo "\">
                            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("messaging_important", array("role" => $this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->getRole())), "html", null, true);
        echo "\" class=\"sbold uppercase\">
                                <span class=\"fa fa-star\" style=\"color: #73879C!important\"></span> Important</a>
                        </li>
                    </ul>
                </div>
            </div>
            ";
        // line 48
        $this->displayBlock('message_body', $context, $blocks);
        // line 50
        echo "        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-inbox\">
    <div id=\"RoleDiv\" data-role=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Webbook\MessagingBundle\Twig\Extension\MessageSupport')->getRole(), "html", null, true);
        echo "\"></div>
";
        
        $__internal_72ecfcece922882949bcfaff340161bd1c0b4b3cdf88c9c1821a1bbf6692bcdf->leave($__internal_72ecfcece922882949bcfaff340161bd1c0b4b3cdf88c9c1821a1bbf6692bcdf_prof);

        
        $__internal_07519b816d8bccf47d67a158f6ba150545f9b3e7e77745109a1b180359c8a1bb->leave($__internal_07519b816d8bccf47d67a158f6ba150545f9b3e7e77745109a1b180359c8a1bb_prof);

    }

    // line 25
    public function block_BCMInbox($context, array $blocks = array())
    {
        $__internal_8d6197028c159e0170db8ab3bbe11a22f5e41ac71084313e7327edc5cc1d92f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6197028c159e0170db8ab3bbe11a22f5e41ac71084313e7327edc5cc1d92f0->enter($__internal_8d6197028c159e0170db8ab3bbe11a22f5e41ac71084313e7327edc5cc1d92f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BCMInbox"));

        $__internal_b90495043cb2224443f5b65d200b311642cde780c8f4b1bf19461d0db333cc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90495043cb2224443f5b65d200b311642cde780c8f4b1bf19461d0db333cc2d->enter($__internal_b90495043cb2224443f5b65d200b311642cde780c8f4b1bf19461d0db333cc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BCMInbox"));

        
        $__internal_b90495043cb2224443f5b65d200b311642cde780c8f4b1bf19461d0db333cc2d->leave($__internal_b90495043cb2224443f5b65d200b311642cde780c8f4b1bf19461d0db333cc2d_prof);

        
        $__internal_8d6197028c159e0170db8ab3bbe11a22f5e41ac71084313e7327edc5cc1d92f0->leave($__internal_8d6197028c159e0170db8ab3bbe11a22f5e41ac71084313e7327edc5cc1d92f0_prof);

    }

    // line 34
    public function block_BCMSent($context, array $blocks = array())
    {
        $__internal_46f371cc54738cfdd00460d948bcd2ba103c5384dc9bd37d40497bc298a3b83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f371cc54738cfdd00460d948bcd2ba103c5384dc9bd37d40497bc298a3b83b->enter($__internal_46f371cc54738cfdd00460d948bcd2ba103c5384dc9bd37d40497bc298a3b83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BCMSent"));

        $__internal_b565542c986011842e1af203f5733f28b0dacebb368a6783d79d9ac011702ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b565542c986011842e1af203f5733f28b0dacebb368a6783d79d9ac011702ccb->enter($__internal_b565542c986011842e1af203f5733f28b0dacebb368a6783d79d9ac011702ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BCMSent"));

        
        $__internal_b565542c986011842e1af203f5733f28b0dacebb368a6783d79d9ac011702ccb->leave($__internal_b565542c986011842e1af203f5733f28b0dacebb368a6783d79d9ac011702ccb_prof);

        
        $__internal_46f371cc54738cfdd00460d948bcd2ba103c5384dc9bd37d40497bc298a3b83b->leave($__internal_46f371cc54738cfdd00460d948bcd2ba103c5384dc9bd37d40497bc298a3b83b_prof);

    }

    // line 41
    public function block_BCMImportant($context, array $blocks = array())
    {
        $__internal_ed50a185f85b35fab84e1db07e8bf244244dc8dce9bc1d7c11c377b6e76f8a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed50a185f85b35fab84e1db07e8bf244244dc8dce9bc1d7c11c377b6e76f8a33->enter($__internal_ed50a185f85b35fab84e1db07e8bf244244dc8dce9bc1d7c11c377b6e76f8a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BCMImportant"));

        $__internal_6b91e4d510abdc5e9e5a3f5b7dda4b8c5a77329a3961107c17956d07389a44f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b91e4d510abdc5e9e5a3f5b7dda4b8c5a77329a3961107c17956d07389a44f5->enter($__internal_6b91e4d510abdc5e9e5a3f5b7dda4b8c5a77329a3961107c17956d07389a44f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BCMImportant"));

        
        $__internal_6b91e4d510abdc5e9e5a3f5b7dda4b8c5a77329a3961107c17956d07389a44f5->leave($__internal_6b91e4d510abdc5e9e5a3f5b7dda4b8c5a77329a3961107c17956d07389a44f5_prof);

        
        $__internal_ed50a185f85b35fab84e1db07e8bf244244dc8dce9bc1d7c11c377b6e76f8a33->leave($__internal_ed50a185f85b35fab84e1db07e8bf244244dc8dce9bc1d7c11c377b6e76f8a33_prof);

    }

    // line 48
    public function block_message_body($context, array $blocks = array())
    {
        $__internal_a8d0736978266caddca8849b0f4c6ef91cfe0a9a6dd49c163bcd755a30e5aa31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d0736978266caddca8849b0f4c6ef91cfe0a9a6dd49c163bcd755a30e5aa31->enter($__internal_a8d0736978266caddca8849b0f4c6ef91cfe0a9a6dd49c163bcd755a30e5aa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message_body"));

        $__internal_7da7a46d423ab0aca607b2e90815163f7e94a1f65d4a551f933a901a1503852c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da7a46d423ab0aca607b2e90815163f7e94a1f65d4a551f933a901a1503852c->enter($__internal_7da7a46d423ab0aca607b2e90815163f7e94a1f65d4a551f933a901a1503852c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "message_body"));

        // line 49
        echo "            ";
        
        $__internal_7da7a46d423ab0aca607b2e90815163f7e94a1f65d4a551f933a901a1503852c->leave($__internal_7da7a46d423ab0aca607b2e90815163f7e94a1f65d4a551f933a901a1503852c_prof);

        
        $__internal_a8d0736978266caddca8849b0f4c6ef91cfe0a9a6dd49c163bcd755a30e5aa31->leave($__internal_a8d0736978266caddca8849b0f4c6ef91cfe0a9a6dd49c163bcd755a30e5aa31_prof);

    }

    // line 55
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d50b9b42a1acef2d9392a18f2bf9d609cba843a9a963fcacfbed789e2406588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d50b9b42a1acef2d9392a18f2bf9d609cba843a9a963fcacfbed789e2406588->enter($__internal_8d50b9b42a1acef2d9392a18f2bf9d609cba843a9a963fcacfbed789e2406588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b397bbf8cb75989e0870880ed17181b40ab694a8ca524f2efb4d66f46c4e5598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b397bbf8cb75989e0870880ed17181b40ab694a8ca524f2efb4d66f46c4e5598->enter($__internal_b397bbf8cb75989e0870880ed17181b40ab694a8ca524f2efb4d66f46c4e5598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 56
        echo "    <style>
        .view-message {
            padding-left: 5px;
        }
        .no-message{
            color: #73879c;
            font-size: 40px!important;
            padding: 150px 0!important;
            font-weight: 700;
        }


        .select2-selection__choice {
            border: none !important;
            font-size: 17px !important;
            color: white !important;
            background-color: #4abdbc !important;
        }

        .select2-selection__choice__remove {
            color: #e7505a !important;
            font-weight: 900 !important;
            font-size: 18px !important;
        }

        .select2-selection.has-error, .form-control.has-error {
            border: 2px solid #e35b5a;
        }

        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border: 2px solid #52bad5 !important;
            outline: 0;
        }

        .compose-tab .inbox-body {
            background-color: #f5f5f5 !important;
        }

        li.groupes > h3 {
            text-align: center;
            font-weight: 700;
            color: #659be0;
        }

        li.groupes-item {
            padding: 5px !important;
            line-height: 20px;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            font-weight: 700;
            color: grey;
        }

        li.groupes-item i {
            margin-right: 5px;
        }

        .datepicker {
            z-index: 1 !important;
        }
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/css/inbox.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_b397bbf8cb75989e0870880ed17181b40ab694a8ca524f2efb4d66f46c4e5598->leave($__internal_b397bbf8cb75989e0870880ed17181b40ab694a8ca524f2efb4d66f46c4e5598_prof);

        
        $__internal_8d50b9b42a1acef2d9392a18f2bf9d609cba843a9a963fcacfbed789e2406588->leave($__internal_8d50b9b42a1acef2d9392a18f2bf9d609cba843a9a963fcacfbed789e2406588_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53be04dca25345a99758fc8c932c661155a4695fb3b190ffa6d6814b7a62902c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53be04dca25345a99758fc8c932c661155a4695fb3b190ffa6d6814b7a62902c->enter($__internal_53be04dca25345a99758fc8c932c661155a4695fb3b190ffa6d6814b7a62902c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_831ce8610557288a113a3ebe876d39e9d4d82b62e2ceb685f79be276ac65a7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831ce8610557288a113a3ebe876d39e9d4d82b62e2ceb685f79be276ac65a7a6->enter($__internal_831ce8610557288a113a3ebe876d39e9d4d82b62e2ceb685f79be276ac65a7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        echo "    <script>
        \$(document).ready(function () {
            const ROLE=\$(\"#RoleDiv\").data('role');
            \$(document).on('change', '#dateSearch', function () {
                \$('#page-loader').removeClass('hidden');
                var date = \$(this).val();
                window.location = Routing.generate('messaging_inbox',{role:ROLE,date:date});
            })
            \$('.important-btn').change(function () {
                var elem=\$(this);
                var _id=elem.data('msg');
                \$.ajax({
                    url:Routing.generate('set_important_msg',{role:ROLE}),
                    method:'post',
                    data:{messages:[_id]},
                    success:function () {
                        elem.parent().find('i').toggleClass('fa-star-o fa-star')
                    }
                });
            });
            \$(document).on('click','#check-all-msg',function () {
                var checked=\$(this).prop('checked');
                \$('input[name=\"msg-check[]\"]').each(function () {
                    if(checked != \$(this).prop('checked'))
                        \$(this).closest('label').click();
                });
            });
            \$(document).on('click','#btn-dlt-st-msg',function () {
                var data=[];
                var elems=[];
                \$('input[name=\"msg-check[]\"]:checked').each(function () {
                    var tr = \$(this).closest('tr');
                    data.push(tr.data('id'));
                    elems.push(tr);
                });
                \$.ajax({
                    url:Routing.generate('messaging_delete_sent_messages',{role:ROLE}),
                    method:'post',
                    data:{messages:data},
                    success:function () {
                        \$.each(elems,function (i,e) {
                            e.remove();
                        });
                    }
                });
            });
            \$(document).on('click','#btn-dlt-msg',function () {
                var data=[];
                var elems=[];
                \$('input[name=\"msg-check[]\"]:checked').each(function () {
                    var tr = \$(this).closest('tr');
                    data.push(tr.data('id'));
                    elems.push(tr);
                });
                \$.ajax({
                    url:Routing.generate('messaging_delete_inbox_messages',{role:ROLE}),
                    method:'post',
                    data:{messages:data},
                    success:function () {
                        \$.each(elems,function (i,e) {
                            e.remove();
                        });
                    }
                });
            });
            \$('#btn-dlt-imp').click(function () {
                var data=[];
                var elems=[];
                \$('input[name=\"msg-check[]\"]:checked').each(function () {
                    var tr = \$(this).closest('tr');
                    data.push(tr.data('id'));
                    elems.push(tr);
                });
                \$.ajax({
                    url:Routing.generate('set_important_msg',{role:ROLE}),
                    method:'post',
                    data:{messages:data},
                    success:function () {
                        \$.each(elems,function (i,e) {
                            e.remove();
                        });
                    }
                });
            });

            \$(document).on('click','#btn-mq-read',function () {
                var data = [];
                var elems = [];
                \$('input[name=\"msg-check[]\"]:checked').each(function () {
                    var tr = \$(this).closest('tr');
                    if (tr.hasClass('unread')) {
                        data.push(tr.data('id'));
                        elems.push(tr);
                    }
                });

                \$.ajax({
                    url: Routing.generate('messaging_mark_as_read', {role: ROLE}),
                    method: 'POST',
                    data: {messages: data},
                    success: function () {
                        \$.each(elems, function (i, o) {
                            o.removeClass('unread')
                        });
                        var nbMsg = \$('.msg-nb');
                        var nbMessages = parseInt(nbMsg.text()) - elems.length;
                        nbMessages > 0 ? nbMsg.text(nbMessages) : nbMsg.remove();

                    }
                })
            });
        })
    </script>
    ";
        // line 233
        $this->displayBlock('under_js', $context, $blocks);
        
        $__internal_831ce8610557288a113a3ebe876d39e9d4d82b62e2ceb685f79be276ac65a7a6->leave($__internal_831ce8610557288a113a3ebe876d39e9d4d82b62e2ceb685f79be276ac65a7a6_prof);

        
        $__internal_53be04dca25345a99758fc8c932c661155a4695fb3b190ffa6d6814b7a62902c->leave($__internal_53be04dca25345a99758fc8c932c661155a4695fb3b190ffa6d6814b7a62902c_prof);

    }

    public function block_under_js($context, array $blocks = array())
    {
        $__internal_e73404ff9d9f061509a0b71366f2a1dc9f2575b2e1b033d4e89d6b0cdbd71ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73404ff9d9f061509a0b71366f2a1dc9f2575b2e1b033d4e89d6b0cdbd71ca4->enter($__internal_e73404ff9d9f061509a0b71366f2a1dc9f2575b2e1b033d4e89d6b0cdbd71ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "under_js"));

        $__internal_b500436b5d22067efbc8e94e7bbba7d9d3f65ba2edab936e996876386934b259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b500436b5d22067efbc8e94e7bbba7d9d3f65ba2edab936e996876386934b259->enter($__internal_b500436b5d22067efbc8e94e7bbba7d9d3f65ba2edab936e996876386934b259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "under_js"));

        // line 234
        echo "    ";
        
        $__internal_b500436b5d22067efbc8e94e7bbba7d9d3f65ba2edab936e996876386934b259->leave($__internal_b500436b5d22067efbc8e94e7bbba7d9d3f65ba2edab936e996876386934b259_prof);

        
        $__internal_e73404ff9d9f061509a0b71366f2a1dc9f2575b2e1b033d4e89d6b0cdbd71ca4->leave($__internal_e73404ff9d9f061509a0b71366f2a1dc9f2575b2e1b033d4e89d6b0cdbd71ca4_prof);

    }

    public function getTemplateName()
    {
        return "@Messaging/message.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 234,  456 => 233,  341 => 120,  332 => 119,  320 => 117,  257 => 56,  248 => 55,  238 => 49,  229 => 48,  212 => 41,  195 => 34,  178 => 25,  166 => 53,  161 => 50,  159 => 48,  150 => 42,  146 => 41,  137 => 35,  133 => 34,  129 => 32,  123 => 30,  121 => 29,  115 => 26,  111 => 25,  103 => 20,  87 => 11,  82 => 9,  77 => 6,  68 => 5,  57 => 3,  48 => 2,  11 => 1,);
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
{% block title %}
    Messages
{% endblock %}
{% block body %}
    <div class=\"inbox\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <form action=\"{{ url('messaging_search',{role:getRole()} ) }}\">
                    <div class=\"input-group\" style=\"margin-bottom: 20px\">
                        <input {% if search is defined %} value=\"{{ search }}\" {% endif %} name=\"searchMessage\" type=\"text\" class=\"form-control\" placeholder=\"Rechercher .. \">
                        <span class=\"input-group-btn\">
                                <button type=\"submit\" class=\"btn green\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                        </span>
                    </div>
                </form>
                <div class=\"inbox-sidebar\">
                    <a href=\"{{ url('messaging_compose',{role:getRole()}) }}\" id=\"btn-compose-message\"
                       class=\"btn red compose-btn btn-block\"><i
                                class=\"fa fa-pencil-square-o\"></i>Composer
                    </a>
                    <ul class=\"inbox-nav\">
                        <li class=\"{% block BCMInbox %}{% endblock %}\">
                            <a href=\"{{ url('messaging_inbox',{role:getRole()}) }}\">
                                <span class=\"fa fa-inbox\"></span>
                                Boîte de réception
                                {% if  countNewMessages()>0 %}
                                <span class=\"badge badge-success msg-nb\">{{ countNewMessages() }}</span>
                                {% endif %}
                            </a>
                        </li>
                        <li class=\"{% block BCMSent %}{% endblock %}\">
                            <a href=\"{{ url('messaging_sent',{role:getRole()}) }}\">
                                <span class=\"fa fa-send-o\"></span>
                                Messages envoyés
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li class=\"{% block BCMImportant %}{% endblock %}\">
                            <a href=\"{{ url('messaging_important',{role:getRole()}) }}\" class=\"sbold uppercase\">
                                <span class=\"fa fa-star\" style=\"color: #73879C!important\"></span> Important</a>
                        </li>
                    </ul>
                </div>
            </div>
            {% block message_body %}
            {% endblock %}
        </div>
    </div>
    <input type=\"hidden\" value=\"\" id=\"menuSelected\" data-menu=\"page-inbox\">
    <div id=\"RoleDiv\" data-role=\"{{ getRole() }}\"></div>
{% endblock %}
{% block stylesheets %}
    <style>
        .view-message {
            padding-left: 5px;
        }
        .no-message{
            color: #73879c;
            font-size: 40px!important;
            padding: 150px 0!important;
            font-weight: 700;
        }


        .select2-selection__choice {
            border: none !important;
            font-size: 17px !important;
            color: white !important;
            background-color: #4abdbc !important;
        }

        .select2-selection__choice__remove {
            color: #e7505a !important;
            font-weight: 900 !important;
            font-size: 18px !important;
        }

        .select2-selection.has-error, .form-control.has-error {
            border: 2px solid #e35b5a;
        }

        .select2-container--default.select2-container--focus .select2-selection--multiple {
            border: 2px solid #52bad5 !important;
            outline: 0;
        }

        .compose-tab .inbox-body {
            background-color: #f5f5f5 !important;
        }

        li.groupes > h3 {
            text-align: center;
            font-weight: 700;
            color: #659be0;
        }

        li.groupes-item {
            padding: 5px !important;
            line-height: 20px;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            font-weight: 700;
            color: grey;
        }

        li.groupes-item i {
            margin-right: 5px;
        }

        .datepicker {
            z-index: 1 !important;
        }
    </style>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/pages/css/inbox.min.css') }}\">
{% endblock %}
{% block javascripts %}
    <script>
        \$(document).ready(function () {
            const ROLE=\$(\"#RoleDiv\").data('role');
            \$(document).on('change', '#dateSearch', function () {
                \$('#page-loader').removeClass('hidden');
                var date = \$(this).val();
                window.location = Routing.generate('messaging_inbox',{role:ROLE,date:date});
            })
            \$('.important-btn').change(function () {
                var elem=\$(this);
                var _id=elem.data('msg');
                \$.ajax({
                    url:Routing.generate('set_important_msg',{role:ROLE}),
                    method:'post',
                    data:{messages:[_id]},
                    success:function () {
                        elem.parent().find('i').toggleClass('fa-star-o fa-star')
                    }
                });
            });
            \$(document).on('click','#check-all-msg',function () {
                var checked=\$(this).prop('checked');
                \$('input[name=\"msg-check[]\"]').each(function () {
                    if(checked != \$(this).prop('checked'))
                        \$(this).closest('label').click();
                });
            });
            \$(document).on('click','#btn-dlt-st-msg',function () {
                var data=[];
                var elems=[];
                \$('input[name=\"msg-check[]\"]:checked').each(function () {
                    var tr = \$(this).closest('tr');
                    data.push(tr.data('id'));
                    elems.push(tr);
                });
                \$.ajax({
                    url:Routing.generate('messaging_delete_sent_messages',{role:ROLE}),
                    method:'post',
                    data:{messages:data},
                    success:function () {
                        \$.each(elems,function (i,e) {
                            e.remove();
                        });
                    }
                });
            });
            \$(document).on('click','#btn-dlt-msg',function () {
                var data=[];
                var elems=[];
                \$('input[name=\"msg-check[]\"]:checked').each(function () {
                    var tr = \$(this).closest('tr');
                    data.push(tr.data('id'));
                    elems.push(tr);
                });
                \$.ajax({
                    url:Routing.generate('messaging_delete_inbox_messages',{role:ROLE}),
                    method:'post',
                    data:{messages:data},
                    success:function () {
                        \$.each(elems,function (i,e) {
                            e.remove();
                        });
                    }
                });
            });
            \$('#btn-dlt-imp').click(function () {
                var data=[];
                var elems=[];
                \$('input[name=\"msg-check[]\"]:checked').each(function () {
                    var tr = \$(this).closest('tr');
                    data.push(tr.data('id'));
                    elems.push(tr);
                });
                \$.ajax({
                    url:Routing.generate('set_important_msg',{role:ROLE}),
                    method:'post',
                    data:{messages:data},
                    success:function () {
                        \$.each(elems,function (i,e) {
                            e.remove();
                        });
                    }
                });
            });

            \$(document).on('click','#btn-mq-read',function () {
                var data = [];
                var elems = [];
                \$('input[name=\"msg-check[]\"]:checked').each(function () {
                    var tr = \$(this).closest('tr');
                    if (tr.hasClass('unread')) {
                        data.push(tr.data('id'));
                        elems.push(tr);
                    }
                });

                \$.ajax({
                    url: Routing.generate('messaging_mark_as_read', {role: ROLE}),
                    method: 'POST',
                    data: {messages: data},
                    success: function () {
                        \$.each(elems, function (i, o) {
                            o.removeClass('unread')
                        });
                        var nbMsg = \$('.msg-nb');
                        var nbMessages = parseInt(nbMsg.text()) - elems.length;
                        nbMessages > 0 ? nbMsg.text(nbMessages) : nbMsg.remove();

                    }
                })
            });
        })
    </script>
    {% block under_js %}
    {% endblock %}
{% endblock %}", "@Messaging/message.layout.html.twig", "D:\\PFE\\webbook\\src\\Webbook\\MessagingBundle\\Resources\\views\\message.layout.html.twig");
    }
}
