<?php

/* form/my.fileManager.html.twig */
class __TwigTemplate_45d2f940b481e2d3fc78eac6f2d4e01ff92aa1c9323cc68307852b507b45189e extends Twig_Template
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
        $__internal_12d6aea9eb7f1a2d0ea70b617ac9d96a36e6dd8f207928540ec5894a73535f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d6aea9eb7f1a2d0ea70b617ac9d96a36e6dd8f207928540ec5894a73535f44->enter($__internal_12d6aea9eb7f1a2d0ea70b617ac9d96a36e6dd8f207928540ec5894a73535f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/my.fileManager.html.twig"));

        $__internal_155d2bfa82885ce89a8b27c17932693dd016e6bf16876ee075be3326d4f5b9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155d2bfa82885ce89a8b27c17932693dd016e6bf16876ee075be3326d4f5b9f2->enter($__internal_155d2bfa82885ce89a8b27c17932693dd016e6bf16876ee075be3326d4f5b9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/my.fileManager.html.twig"));

        // line 1
        echo "<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/css/components-md.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/layout/css/font/matriel.font.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/css/fileinput.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/viewer/viewer.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-sweetalert/sweetalert.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/file-manager/css/file-manager.css"), "html", null, true);
        echo "\">
</head>
<body class=\"fileManager\">
    <div class=\"fm-header\">
        <ul class=\"row\">
            <li id=\"selectFile\" class=\"fm-btn disabled col-md-1 col-sm-2 col-xs-2\">
                <i style=\"color: #7de3af\" class=\"fa fa-check-square-o fa-2x\"></i>
                <span>Selectionner</span>
            </li>
            <li id=\"displayImage\" class=\"fm-btn disabled col-md-1 col-sm-2 col-xs-2\">
                <i style=\"height: 30px;background: url(";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/file-manager/img/preview.png"), "html", null, true);
        echo ")center no-repeat\"></i>
                <span>Aperçu</span>
            </li>
            <li id=\"downloadMediaFile\" class=\"fm-btn disabled col-md-1 col-sm-2 col-xs-2\">
                <i style=\"color: #25c7f5\" class=\"fa fa-download fa-2x \"></i>
                <span>Télécharger</span>
            </li>
            <li id=\"uploadMediaFile\" class=\"fm-btn col-md-1 col-sm-2 col-xs-2\">
                <i style=\"color: #59e323\" class=\"fa fa-cloud-upload fa-2x\"></i>
                <span>Upload</span>
            </li>
            <li id=\"removeFile\" class=\"fm-btn disabled col-md-1 col-sm-2 col-xs-2\">
                <i style=\"color: #ed362f\" class=\"fa fa-trash fa-2x \"></i>
                <span>Supprimer</span>
            </li>
            <li id=\"mode-list\" class=\"fm-btn col-md-1 active col-sm-2 col-xs-2\">
                <i style=\"height: 30px;background: url(";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/file-manager/img/list.png"), "html", null, true);
        echo ")center no-repeat\"></i>
                <span>Liste</span>
            </li>
            <li id=\"mode-thumbnail\" class=\"fm-btn col-md-1  col-sm-2 col-xs-2\">
                <i style=\"height: 30px;background: url(";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/file-manager/img/thumbnails.png"), "html", null, true);
        echo ")center no-repeat\"></i>
                <span>Thumbnail</span>
            </li>
            <li class=\"col-md-2 col-offset-sm-1 col-sm-4 col-xs-5\" style=\"display: -webkit-box\">
                <div style=\"display: inline-grid\">
                    <i style=\"color: #22eab3\" class=\"fa fa-sort fa-2x\"></i>
                    <span>Trier par</span>
                </div>
                <select id=\"slcta\" class=\"form-control\">
                    <option value=\"size\">Taille</option>
                    <option value=\"name\">Nom</option>
                    <option value=\"date\" selected>Date</option>
                </select>
            </li>
            <li class=\"col-md-3 col-sm-4 col-xs-5\" style=\"display: -webkit-box\">
                <div style=\"display: inline-grid\">
                    <i  style=\"color: #f55c27\" class=\"fa fa-filter fa-2x\"></i>
                    <span>Rechercher</span>
                </div>
                <input id=\"searchMediaFile\" type=\"text\" class=\"form-control\" placeholder=\"recherche ..\">
            </li>
        </ul>
    </div>
    <div class=\"fm-body\" oncontextmenu=\"return false;\">
        <ul id=\"mediaFileBox\" class=\"row list-group images \">
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 66
            echo "                ";
            if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "image") || (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "image") && twig_in_filter("image", $this->getAttribute($this->getAttribute($context["file"], "media", array()), "mimeType", array()))))) {
                // line 67
                echo "                <li class=\"list\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "id", array()), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("file_manager_remove_file");
                echo "\" data-path=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
                echo "\">
                    <div class=\"media-image\">
                        ";
                // line 69
                if (twig_in_filter("image", $this->getAttribute($this->getAttribute($context["file"], "media", array()), "mimeType", array()))) {
                    // line 70
                    echo "                            <img class=\"real\" style=\"pointer-events: none\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["file"], "mediaFile"), "html", null, true);
                    echo "\">
                        ";
                } elseif (twig_in_filter("text", $this->getAttribute($this->getAttribute(                // line 71
$context["file"], "media", array()), "mimeType", array()))) {
                    // line 72
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/file-manager/img/txt.png"), "html", null, true);
                    echo "\">
                        ";
                } elseif (twig_in_filter("pdf", $this->getAttribute($this->getAttribute(                // line 73
$context["file"], "media", array()), "mimeType", array()))) {
                    // line 74
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/file-manager/img/pdf.png"), "html", null, true);
                    echo "\">
                        ";
                } elseif (twig_in_filter("doc", $this->getAttribute($this->getAttribute(                // line 75
$context["file"], "media", array()), "mimeType", array()))) {
                    // line 76
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/file-manager/img/doc.png"), "html", null, true);
                    echo "\">
                        ";
                } elseif (twig_in_filter("video", $this->getAttribute($this->getAttribute(                // line 77
$context["file"], "media", array()), "mimeType", array()))) {
                    // line 78
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/file-manager/img/media.ico"), "html", null, true);
                    echo "\">
                        ";
                } else {
                    // line 80
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/file-manager/img/default.png"), "html", null, true);
                    echo "\">
                        ";
                }
                // line 82
                echo "                    </div>
                    <div class=\"media-name\">
                        <h4 style=\"max-height: 20px;\">";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["file"], "media", array()), "originalName", array()), "html", null, true);
                echo "</h4>
                    </div>
                    <div class=\"media-size\">
                        <strong>";
                // line 87
                if ((($this->getAttribute($this->getAttribute($context["file"], "media", array()), "size", array()) / 1000) > 1000)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getAttribute($context["file"], "media", array()), "size", array()) / 1000000), 2, ".", ","), "html", null, true);
                    echo " Mb ";
                } else {
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getAttribute($context["file"], "media", array()), "size", array()) / 1000), 2, ".", ","), "html", null, true);
                    echo " Kb";
                }
                echo "</strong>
                    </div>
                    <div class=\"media-date\">
                        <b>";
                // line 90
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["file"], "createdAt", array()), "Y-m-d H:i"), "html", null, true);
                echo "</b>
                    </div>
                </li>
                ";
            }
            // line 94
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        </ul>
        <div id=\"uploadMediaBox\" style=\"padding: 30px\" class=\"hidden\">
            <input id=\"mediaUpload\" ";
        // line 97
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "image")) {
            echo " accept=\"image/*\" ";
        }
        echo " name=\"media[]\" type=\"file\" multiple class=\"file-loading -input\" style=\"max-height: 400px\">
            <div id=\"errorBlock\" class=\"help-block\" ></div>
        </div>

    </div>

    <div class=\"fm-footer\">

    </div>
    <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/js/plugins/sortable.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/js/plugins/purify.min.js"), "html", null, true);
        echo "\"> </script>
    <script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/js/fileinput.js"), "html", null, true);
        echo "\"> </script>
    <script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-fileinput/js/locales/fr.js"), "html", null, true);
        echo "\"> </script>
    <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/viewer/viewer.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).on('ready', function() {
            \$(\"#mediaUpload\").fileinput({
                uploadUrl: \"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("file_manager_upload_file", array("version_token" => (isset($context["version_token"]) ? $context["version_token"] : $this->getContext($context, "version_token")))), "html", null, true);
        echo "\",
                showUpload:true
            }).on('fileuploaded', function(event, data, previewId, index) {
                var id=data.response.id;
                var path=data.response.path;
                var size=(data.response.size/1000)>1000?(data.response.size/1000000)+\" Mb \":(data.response.size/1000)+\" Kb \";
                var name=data.response.name;
                var type=data.response.type;
                var createdAt=data.response.date;
                var displayMode=\$('#mode-list.active').length?'list':'thumbnail';
                var elem='<li class=\"'+displayMode+'\" data-id='+id+' data-url=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("file_manager_remove_file");
        echo "\" ' +
                'data-path=\"'+path+'\"> <div class=\"media-image\">';
                if(type.includes('image'))
                    elem+=' <img  class=\"real\" style=\"pointer-events: none\" src=\"'+path+'\" >';
                else if(type.includes('text'))
                    elem+=' <img  class=\"real\" style=\"pointer-events: none\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/file-manager/img/txt.png"), "html", null, true);
        echo "\" >';
                else if(type.includes('pdf'))
                    elem+=' <img  class=\"real\" style=\"pointer-events: none\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/file-manager/img/pdf.png"), "html", null, true);
        echo "\" >';
                else if(type.includes('doc'))
                    elem+=' <img  class=\"real\" style=\"pointer-events: none\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/file-manager/img/doc.png"), "html", null, true);
        echo "\" >';
                else if(type.includes('video'))
                    elem+=' <img  class=\"real\" style=\"pointer-events: none\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/file-manager/img/media.ico"), "html", null, true);
        echo "\" >';
                else
                    elem+=' <img  class=\"real\" style=\"pointer-events: none\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/file-manager/img/default.png"), "html", null, true);
        echo "\" >';
                elem+='</div><div class=\"media-name\"><h4 style=\"max-height: 20px;\">'+name+'</h4></div>';
                elem+='<div class=\"media-size\"><strong>'+size+'</strong></div>';
                elem+='<div class=\"media-date\"><b>'+createdAt+'</b></div></li>';
                \$('#mediaFileBox').append(elem);
                \$('.images').viewer().destroy();
                \$('.images').viewer();

            });

            \$('#uploadMediaFile').click(function () {
                \$('.fm-header>ul>li').each(function () {
                    if(\$(this).attr('id')!==\"uploadMediaFile\")
                        \$(this).toggleClass('instant-disabled');
                    else {
                        if(\$(this).find('.fa-cloud-upload').length)
                            \$(this).html('<i style=\"color: red\" class=\"fa fa-times fa-2x\"></i> <span>Annuler</span>');
                        else
                            \$(this).html('<i style=\"color: #59e323\" class=\"fa fa-cloud-upload fa-2x\"></i> <span>Upload</span>')
                    }
                });
                \$('#uploadMediaBox').toggleClass('hidden');
                \$('#mediaFileBox').toggleClass('hidden');

            });
            \$(document).on('click','#mediaFileBox>li',function () {
                var isSelected=\$(this).hasClass('selected');
                \$('#mediaFileBox>li.selected').removeClass('selected');
                if(!isSelected)
                    \$(this).addClass('selected');

                \$('#downloadMediaFile,#removeFile,#selectFile,#displayImage').trigger('contentchanged');
            });
            \$('.images').viewer();
            \$('#displayImage').bind('contentchanged', function() {
                if( \$('#mediaFileBox>li.selected img.real').length>0)
                    \$(this).removeClass('disabled');
                else
                    \$(this).addClass('disabled');
            });
            \$('#removeFile,#selectFile,#downloadMediaFile').bind('contentchanged', function() {
                \$('.option-menu').remove();
                if( \$('#mediaFileBox>li.selected ').length>0)
                    \$(this).removeClass('disabled');
                else
                    \$(this).addClass('disabled');
            });

            \$(document).on('click','#selectFile:not(.disabled)',function (event) {
                event.stopPropagation();
                var selected=\$('#mediaFileBox>li.selected');
                var args = top.tinymce.activeEditor.windowManager.getParams();
                var win = (args.window);
                var input = (args.input);
                win.document.getElementById(input).value =selected.data('path');

                top.tinymce.activeEditor.windowManager.close();
            });
            \$(document).on('click','#displayImage:not(.disabled)',function (event) {
                event.stopPropagation();
                \$('.option-menu').remove();
                var img=\$('#mediaFileBox>li.selected img.real').first();
                img.click();
            });
            \$(document).on('click','#removeFile:not(.disabled)',function (event) {
                event.stopPropagation();
                \$('.option-menu').remove();
                var file=\$('#mediaFileBox>li.selected');
                var id=file.data('id');
                var url=file.data('url');
                swal({
                    title: \"Êtes-vous sûr\",
                    text: \"Voulez vous vraiment supprimer ce fichier\",
                    type: \"warning\",
                    cancelButtonText: 'Annuler',
                    confirmButtonText:\"Confirmer\",
                    confirmButtonClass:\"blue\",
                    cancelButtonClass:\"red\",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                    \$.ajax({
                        url:url,
                        method:\"POST\",
                        data:{id:id},
                        success:function () {
                            swal(\"Ce fichier a été supprimer !\");
                            file.remove();
                        },
                        error:function () {
                            swal(\"Erreur !\");
                        }
                    })

                });
            });

            \$('#mode-list').click(function () {
                \$(this).addClass('active');
                \$('#mode-thumbnail').removeClass('active');
                \$('#mediaFileBox>li').each(function () {
                    \$(this).addClass('list').removeClass('thumbnail');
                })
            });
            \$('#mode-thumbnail').click(function () {
                \$(this).addClass('active');
                \$('#mode-list').removeClass('active');
                \$('#mediaFileBox>li').each(function () {
                    \$(this).addClass('thumbnail').removeClass('list');
                })
            });

            \$('#slcta').change(function () {
                var elems = \$.makeArray(\$(\"#mediaFileBox>li\"));
                switch (\$(this).val() ){
                    case 'size': elems.sort(function(a, b) {
                        return parseFloat( \$(a).find('.media-size').text() ) < parseFloat( \$(b).find('.media-size').text() );
                    });break;
                    case 'name':elems.sort(function(a, b) {
                        var compA = \$(a).find('.media-name h4').text().toUpperCase();
                        var compB = \$(b).find('.media-name h4').text().toUpperCase();
                        return (compA < compB) ? -1 : 1;
                    });break;
                    case 'date':
                        elems.sort(function(a, b) {
                            return parseDate( \$(a).find('.media-date').text() ) < parseDate( \$(b).find('.media-date').text() );
                        });break;
                    default: elems;
                }
                \$(\"#mediaFileBox\").html(elems);
            });

            \$('#searchMediaFile').on('change keyup', function () {
                var search = \$(this).val();
                \$('#mediaFileBox>li div.media-name>h4').each(function () {
                    var txt = \$(this).text();
                    if (!(txt.toUpperCase()).includes(search.toUpperCase())){
                        \$(this).closest('li').addClass('hidden');
                    }else{
                        \$(this).closest('li').removeClass('hidden')

                    }
                })
            });
            \$(document).on('click','#downloadMediaFile:not(.disabled)',function () {
                var file=\$('#mediaFileBox>li.selected');
                var file_name=file.find('.media-name h4').text();
                saveFile(file.data('path'),file_name);
            });
            \$(document).on('contextmenu','#mediaFileBox>li',function (event) {
                \$('.option-menu').remove();
                if(!\$(this).hasClass('selected'))
                    \$(this).click();
               var menu='<ul class=\"option-menu\">' +
                   '<li onclick=\$(\"#selectFile\").click() >Selectionner</li>' ;
                    if(\$(this).find('img.real').length)
                        menu+='<li  onclick=\$(\"#displayImage\").click() >Aperçu</li>';
                    else
                        menu+='<li class=\"disabled\">Aperçu</li>';
                   menu+='<li onclick=\$(\"#downloadMediaFile\").click()>Télécharger</li>' +
                   '<li onclick=\$(\"#removeFile\").click()>Supprimer</li>' +
                   '</ul>';

                menu=\$(menu);
                leftVal = event.pageX + \"px\";
                topVal = event.pageY + \"px\";
                if(event.pageY>=(\$('.fileManager').height()-180))
                    topVal=event.pageY-100+\"px\";
                menu.appendTo(\$('.fm-body')).css({ left: leftVal, top: topVal });
            });
            \$('.fm-body').click(function () {
                \$('.option-menu').remove();
            })
        });

        function parseDate(input) {
            var parts = input.match(/(\\d+)/g);
            // new Date(year, month [, date [, hours[, minutes[, seconds[, ms]]]]])
            return new Date(parts[0], parts[1]-1, parts[2], parts[3], parts[4], 0); //     months are 0-based
        }

        function saveFile(url,file_name) {
            var xhr = new XMLHttpRequest();
            xhr.responseType = 'blob';
            xhr.onload = function() {
                var a = document.createElement('a');
                a.href = window.URL.createObjectURL(xhr.response); // xhr.response is a blob
                a.download = file_name; // Set the file name.
                a.style.display = 'none';
                document.body.appendChild(a);
                a.click();
                delete a;
            };
            xhr.open('GET', url);
            xhr.send();
        }

    </script>
</body>
</html>


";
        
        $__internal_12d6aea9eb7f1a2d0ea70b617ac9d96a36e6dd8f207928540ec5894a73535f44->leave($__internal_12d6aea9eb7f1a2d0ea70b617ac9d96a36e6dd8f207928540ec5894a73535f44_prof);

        
        $__internal_155d2bfa82885ce89a8b27c17932693dd016e6bf16876ee075be3326d4f5b9f2->leave($__internal_155d2bfa82885ce89a8b27c17932693dd016e6bf16876ee075be3326d4f5b9f2_prof);

    }

    public function getTemplateName()
    {
        return "form/my.fileManager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 141,  312 => 139,  307 => 137,  302 => 135,  297 => 133,  289 => 128,  276 => 118,  269 => 114,  265 => 113,  261 => 112,  257 => 111,  253 => 110,  249 => 109,  245 => 108,  241 => 107,  237 => 106,  223 => 97,  219 => 95,  213 => 94,  206 => 90,  193 => 87,  187 => 84,  183 => 82,  177 => 80,  171 => 78,  169 => 77,  164 => 76,  162 => 75,  157 => 74,  155 => 73,  150 => 72,  148 => 71,  143 => 70,  141 => 69,  131 => 67,  128 => 66,  124 => 65,  96 => 40,  89 => 36,  70 => 20,  57 => 10,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/layout/css/components-md.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/font-awesome/css/font-awesome.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/layout/css/font/matriel.font.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap/css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/global/plugins/bootstrap-fileinput/css/fileinput.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/global/plugins/viewer/viewer.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/file-manager/css/file-manager.css') }}\">
</head>
<body class=\"fileManager\">
    <div class=\"fm-header\">
        <ul class=\"row\">
            <li id=\"selectFile\" class=\"fm-btn disabled col-md-1 col-sm-2 col-xs-2\">
                <i style=\"color: #7de3af\" class=\"fa fa-check-square-o fa-2x\"></i>
                <span>Selectionner</span>
            </li>
            <li id=\"displayImage\" class=\"fm-btn disabled col-md-1 col-sm-2 col-xs-2\">
                <i style=\"height: 30px;background: url({{ asset('assets/file-manager/img/preview.png') }})center no-repeat\"></i>
                <span>Aperçu</span>
            </li>
            <li id=\"downloadMediaFile\" class=\"fm-btn disabled col-md-1 col-sm-2 col-xs-2\">
                <i style=\"color: #25c7f5\" class=\"fa fa-download fa-2x \"></i>
                <span>Télécharger</span>
            </li>
            <li id=\"uploadMediaFile\" class=\"fm-btn col-md-1 col-sm-2 col-xs-2\">
                <i style=\"color: #59e323\" class=\"fa fa-cloud-upload fa-2x\"></i>
                <span>Upload</span>
            </li>
            <li id=\"removeFile\" class=\"fm-btn disabled col-md-1 col-sm-2 col-xs-2\">
                <i style=\"color: #ed362f\" class=\"fa fa-trash fa-2x \"></i>
                <span>Supprimer</span>
            </li>
            <li id=\"mode-list\" class=\"fm-btn col-md-1 active col-sm-2 col-xs-2\">
                <i style=\"height: 30px;background: url({{ asset('assets/file-manager/img/list.png') }})center no-repeat\"></i>
                <span>Liste</span>
            </li>
            <li id=\"mode-thumbnail\" class=\"fm-btn col-md-1  col-sm-2 col-xs-2\">
                <i style=\"height: 30px;background: url({{ asset('assets/file-manager/img/thumbnails.png') }})center no-repeat\"></i>
                <span>Thumbnail</span>
            </li>
            <li class=\"col-md-2 col-offset-sm-1 col-sm-4 col-xs-5\" style=\"display: -webkit-box\">
                <div style=\"display: inline-grid\">
                    <i style=\"color: #22eab3\" class=\"fa fa-sort fa-2x\"></i>
                    <span>Trier par</span>
                </div>
                <select id=\"slcta\" class=\"form-control\">
                    <option value=\"size\">Taille</option>
                    <option value=\"name\">Nom</option>
                    <option value=\"date\" selected>Date</option>
                </select>
            </li>
            <li class=\"col-md-3 col-sm-4 col-xs-5\" style=\"display: -webkit-box\">
                <div style=\"display: inline-grid\">
                    <i  style=\"color: #f55c27\" class=\"fa fa-filter fa-2x\"></i>
                    <span>Rechercher</span>
                </div>
                <input id=\"searchMediaFile\" type=\"text\" class=\"form-control\" placeholder=\"recherche ..\">
            </li>
        </ul>
    </div>
    <div class=\"fm-body\" oncontextmenu=\"return false;\">
        <ul id=\"mediaFileBox\" class=\"row list-group images \">
            {% for file in files %}
                {% if type!='image' or (type=='image' and 'image' in file.media.mimeType )%}
                <li class=\"list\" data-id=\"{{ file.id }}\" data-url=\"{{ url('file_manager_remove_file') }}\" data-path=\"{{file.path}}\">
                    <div class=\"media-image\">
                        {% if 'image' in file.media.mimeType %}
                            <img class=\"real\" style=\"pointer-events: none\" src=\"{{ vich_uploader_asset(file,'mediaFile') }}\">
                        {% elseif 'text' in file.media.mimeType  %}
                            <img src=\"{{ asset('assets/file-manager/img/txt.png') }}\">
                        {% elseif 'pdf' in file.media.mimeType  %}
                            <img src=\"{{ asset('assets/file-manager/img/pdf.png') }}\">
                        {% elseif 'doc' in file.media.mimeType %}
                            <img src=\"{{ asset('assets/file-manager/img/doc.png') }}\">
                        {% elseif 'video' in file.media.mimeType  %}
                            <img src=\"{{ asset('assets/file-manager/img/media.ico') }}\">
                        {% else %}
                            <img src=\"{{ asset('assets/file-manager/img/default.png') }}\">
                        {% endif %}
                    </div>
                    <div class=\"media-name\">
                        <h4 style=\"max-height: 20px;\">{{ file.media.originalName }}</h4>
                    </div>
                    <div class=\"media-size\">
                        <strong>{% if file.media.size/1000>1000 %} {{ (file.media.size/1000000)|number_format(2,'.',',') }} Mb {% else %}{{ (file.media.size/1000)|number_format(2,'.',',') }} Kb{% endif %}</strong>
                    </div>
                    <div class=\"media-date\">
                        <b>{{ file.createdAt|date('Y-m-d H:i') }}</b>
                    </div>
                </li>
                {% endif %}
            {% endfor %}
        </ul>
        <div id=\"uploadMediaBox\" style=\"padding: 30px\" class=\"hidden\">
            <input id=\"mediaUpload\" {% if type=='image' %} accept=\"image/*\" {% endif %} name=\"media[]\" type=\"file\" multiple class=\"file-loading -input\" style=\"max-height: 400px\">
            <div id=\"errorBlock\" class=\"help-block\" ></div>
        </div>

    </div>

    <div class=\"fm-footer\">

    </div>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/jquery.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/bootstrap/js/bootstrap.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-fileinput/js/plugins/sortable.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-fileinput/js/plugins/purify.min.js') }}\"> </script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-fileinput/js/fileinput.js') }}\"> </script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-fileinput/js/locales/fr.js') }}\"> </script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/viewer/viewer.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js') }}\"></script>
    <script>
        \$(document).on('ready', function() {
            \$(\"#mediaUpload\").fileinput({
                uploadUrl: \"{{ url('file_manager_upload_file',{version_token:version_token}) }}\",
                showUpload:true
            }).on('fileuploaded', function(event, data, previewId, index) {
                var id=data.response.id;
                var path=data.response.path;
                var size=(data.response.size/1000)>1000?(data.response.size/1000000)+\" Mb \":(data.response.size/1000)+\" Kb \";
                var name=data.response.name;
                var type=data.response.type;
                var createdAt=data.response.date;
                var displayMode=\$('#mode-list.active').length?'list':'thumbnail';
                var elem='<li class=\"'+displayMode+'\" data-id='+id+' data-url=\"{{ url('file_manager_remove_file') }}\" ' +
                'data-path=\"'+path+'\"> <div class=\"media-image\">';
                if(type.includes('image'))
                    elem+=' <img  class=\"real\" style=\"pointer-events: none\" src=\"'+path+'\" >';
                else if(type.includes('text'))
                    elem+=' <img  class=\"real\" style=\"pointer-events: none\" src=\"{{ asset('assets/file-manager/img/txt.png') }}\" >';
                else if(type.includes('pdf'))
                    elem+=' <img  class=\"real\" style=\"pointer-events: none\" src=\"{{ asset('assets/file-manager/img/pdf.png') }}\" >';
                else if(type.includes('doc'))
                    elem+=' <img  class=\"real\" style=\"pointer-events: none\" src=\"{{ asset('assets/file-manager/img/doc.png') }}\" >';
                else if(type.includes('video'))
                    elem+=' <img  class=\"real\" style=\"pointer-events: none\" src=\"{{ asset('assets/file-manager/img/media.ico') }}\" >';
                else
                    elem+=' <img  class=\"real\" style=\"pointer-events: none\" src=\"{{ asset('assets/file-manager/img/default.png') }}\" >';
                elem+='</div><div class=\"media-name\"><h4 style=\"max-height: 20px;\">'+name+'</h4></div>';
                elem+='<div class=\"media-size\"><strong>'+size+'</strong></div>';
                elem+='<div class=\"media-date\"><b>'+createdAt+'</b></div></li>';
                \$('#mediaFileBox').append(elem);
                \$('.images').viewer().destroy();
                \$('.images').viewer();

            });

            \$('#uploadMediaFile').click(function () {
                \$('.fm-header>ul>li').each(function () {
                    if(\$(this).attr('id')!==\"uploadMediaFile\")
                        \$(this).toggleClass('instant-disabled');
                    else {
                        if(\$(this).find('.fa-cloud-upload').length)
                            \$(this).html('<i style=\"color: red\" class=\"fa fa-times fa-2x\"></i> <span>Annuler</span>');
                        else
                            \$(this).html('<i style=\"color: #59e323\" class=\"fa fa-cloud-upload fa-2x\"></i> <span>Upload</span>')
                    }
                });
                \$('#uploadMediaBox').toggleClass('hidden');
                \$('#mediaFileBox').toggleClass('hidden');

            });
            \$(document).on('click','#mediaFileBox>li',function () {
                var isSelected=\$(this).hasClass('selected');
                \$('#mediaFileBox>li.selected').removeClass('selected');
                if(!isSelected)
                    \$(this).addClass('selected');

                \$('#downloadMediaFile,#removeFile,#selectFile,#displayImage').trigger('contentchanged');
            });
            \$('.images').viewer();
            \$('#displayImage').bind('contentchanged', function() {
                if( \$('#mediaFileBox>li.selected img.real').length>0)
                    \$(this).removeClass('disabled');
                else
                    \$(this).addClass('disabled');
            });
            \$('#removeFile,#selectFile,#downloadMediaFile').bind('contentchanged', function() {
                \$('.option-menu').remove();
                if( \$('#mediaFileBox>li.selected ').length>0)
                    \$(this).removeClass('disabled');
                else
                    \$(this).addClass('disabled');
            });

            \$(document).on('click','#selectFile:not(.disabled)',function (event) {
                event.stopPropagation();
                var selected=\$('#mediaFileBox>li.selected');
                var args = top.tinymce.activeEditor.windowManager.getParams();
                var win = (args.window);
                var input = (args.input);
                win.document.getElementById(input).value =selected.data('path');

                top.tinymce.activeEditor.windowManager.close();
            });
            \$(document).on('click','#displayImage:not(.disabled)',function (event) {
                event.stopPropagation();
                \$('.option-menu').remove();
                var img=\$('#mediaFileBox>li.selected img.real').first();
                img.click();
            });
            \$(document).on('click','#removeFile:not(.disabled)',function (event) {
                event.stopPropagation();
                \$('.option-menu').remove();
                var file=\$('#mediaFileBox>li.selected');
                var id=file.data('id');
                var url=file.data('url');
                swal({
                    title: \"Êtes-vous sûr\",
                    text: \"Voulez vous vraiment supprimer ce fichier\",
                    type: \"warning\",
                    cancelButtonText: 'Annuler',
                    confirmButtonText:\"Confirmer\",
                    confirmButtonClass:\"blue\",
                    cancelButtonClass:\"red\",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                    \$.ajax({
                        url:url,
                        method:\"POST\",
                        data:{id:id},
                        success:function () {
                            swal(\"Ce fichier a été supprimer !\");
                            file.remove();
                        },
                        error:function () {
                            swal(\"Erreur !\");
                        }
                    })

                });
            });

            \$('#mode-list').click(function () {
                \$(this).addClass('active');
                \$('#mode-thumbnail').removeClass('active');
                \$('#mediaFileBox>li').each(function () {
                    \$(this).addClass('list').removeClass('thumbnail');
                })
            });
            \$('#mode-thumbnail').click(function () {
                \$(this).addClass('active');
                \$('#mode-list').removeClass('active');
                \$('#mediaFileBox>li').each(function () {
                    \$(this).addClass('thumbnail').removeClass('list');
                })
            });

            \$('#slcta').change(function () {
                var elems = \$.makeArray(\$(\"#mediaFileBox>li\"));
                switch (\$(this).val() ){
                    case 'size': elems.sort(function(a, b) {
                        return parseFloat( \$(a).find('.media-size').text() ) < parseFloat( \$(b).find('.media-size').text() );
                    });break;
                    case 'name':elems.sort(function(a, b) {
                        var compA = \$(a).find('.media-name h4').text().toUpperCase();
                        var compB = \$(b).find('.media-name h4').text().toUpperCase();
                        return (compA < compB) ? -1 : 1;
                    });break;
                    case 'date':
                        elems.sort(function(a, b) {
                            return parseDate( \$(a).find('.media-date').text() ) < parseDate( \$(b).find('.media-date').text() );
                        });break;
                    default: elems;
                }
                \$(\"#mediaFileBox\").html(elems);
            });

            \$('#searchMediaFile').on('change keyup', function () {
                var search = \$(this).val();
                \$('#mediaFileBox>li div.media-name>h4').each(function () {
                    var txt = \$(this).text();
                    if (!(txt.toUpperCase()).includes(search.toUpperCase())){
                        \$(this).closest('li').addClass('hidden');
                    }else{
                        \$(this).closest('li').removeClass('hidden')

                    }
                })
            });
            \$(document).on('click','#downloadMediaFile:not(.disabled)',function () {
                var file=\$('#mediaFileBox>li.selected');
                var file_name=file.find('.media-name h4').text();
                saveFile(file.data('path'),file_name);
            });
            \$(document).on('contextmenu','#mediaFileBox>li',function (event) {
                \$('.option-menu').remove();
                if(!\$(this).hasClass('selected'))
                    \$(this).click();
               var menu='<ul class=\"option-menu\">' +
                   '<li onclick=\$(\"#selectFile\").click() >Selectionner</li>' ;
                    if(\$(this).find('img.real').length)
                        menu+='<li  onclick=\$(\"#displayImage\").click() >Aperçu</li>';
                    else
                        menu+='<li class=\"disabled\">Aperçu</li>';
                   menu+='<li onclick=\$(\"#downloadMediaFile\").click()>Télécharger</li>' +
                   '<li onclick=\$(\"#removeFile\").click()>Supprimer</li>' +
                   '</ul>';

                menu=\$(menu);
                leftVal = event.pageX + \"px\";
                topVal = event.pageY + \"px\";
                if(event.pageY>=(\$('.fileManager').height()-180))
                    topVal=event.pageY-100+\"px\";
                menu.appendTo(\$('.fm-body')).css({ left: leftVal, top: topVal });
            });
            \$('.fm-body').click(function () {
                \$('.option-menu').remove();
            })
        });

        function parseDate(input) {
            var parts = input.match(/(\\d+)/g);
            // new Date(year, month [, date [, hours[, minutes[, seconds[, ms]]]]])
            return new Date(parts[0], parts[1]-1, parts[2], parts[3], parts[4], 0); //     months are 0-based
        }

        function saveFile(url,file_name) {
            var xhr = new XMLHttpRequest();
            xhr.responseType = 'blob';
            xhr.onload = function() {
                var a = document.createElement('a');
                a.href = window.URL.createObjectURL(xhr.response); // xhr.response is a blob
                a.download = file_name; // Set the file name.
                a.style.display = 'none';
                document.body.appendChild(a);
                a.click();
                delete a;
            };
            xhr.open('GET', url);
            xhr.send();
        }

    </script>
</body>
</html>


", "form/my.fileManager.html.twig", "D:\\PFE\\webbook\\app\\Resources\\views\\form\\my.fileManager.html.twig");
    }
}
