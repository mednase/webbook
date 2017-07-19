/**
 * Created by medna on 31/05/2017.
 */
function uniqeId() {
    return Math.round(new Date().getTime() + (Math.random() * 100));
}
$(document).ready(function () {

    $('[data-toggle="popover"]').popover({html: true});
    tinymce.init({
        selector: '.tinyMince',  // change this value according to your HTML
        theme: 'modern',
        height: 400,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
        ],
        image_advtab: true,
        file_browser_callback_types: 'file image media',
        file_browser_callback: function (field_name, url, type, win) {
            var token = $('#fm-token').data('token');
            tinymce.activeEditor.windowManager.open({
                title: "Selectionneur du fichier",
                url: Routing.generate('file_manager_load', {token: token, type: type}),
                width: 320,
                height: 240
            }, {
                window: win,
                input: field_name,
            });
            return false;
        },
        toolbar1: "insertfile undo redo | styleselect | forecolor backcolor | | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview fullscreen |"
    });
    function sortable() {
        $('.sortable').nestedSortable({
            forcePlaceholderSize: true,
            items: 'li',
            handle: 'div',
            helper:'clone',
            toleranceElement: '> div',
            tolerance:'pointer',
            opacity: .6,
            placeholder: 'placeholder',
            revert: 250,
            rootID: 'bockTree',
            tabSize: 25,
            isTree: true,
            expandOnHover: 700,
            startCollapsed:true,
            relocate: function (ev, elem) {
                // updating blocks position
                $('li.block-branch').each(function () {
                    var content=elem.item.closest('.portlet');
                    var oldPosition=$(this).data('position');
                    var newPosition=$(this).index();
                    $(this).data('position',newPosition);

                    //if it become the only child of the new parent add button hide children
                    if ($(this).find('li.block-branch').length > 0)
                        if ($(this).find('>div div.cl-btn  .btn-hide-children').length == 0 && $(this).find('>div div.cl-btn  .btn-show-children').length == 0) {
                            $(this).find('>div div.cl-btn ').first().prepend('<button role="button" class="btn red  btn-hide-children" ><i class=" fa fa-minus"></i></button>')
                        }

                    // if the old parent has no more child remove button show children
                    if ($(this).find('li.block-branch').length == 0) {
                        $(this).find('>div div.cl-btn  .btn-hide-children').remove();
                        $(this).find('>div div.cl-btn  .btn-show-children').remove();
                    }
                    var oldParent = $(this).data('parent');
                    var parent = $(this).parent().closest('li.block-branch');
                    var oldLevel = $(this).data('level');
                    var parent_id = parent.data('id');
                    if (parent_id === undefined) {
                        $(this).data('level', 0);
                        $(this).data('parent', $('#prototypes').data('block'));
                    } else {
                        $(this).data('level', parseInt(parent.data('level')) + 1);
                        $(this).data('parent', parent.data('id'));
                    }
                    var newParent = $(this).data('parent');
                    var newLevel = $(this).data('level');
                    if (oldLevel === undefined)
                        oldLevel = 0;

                    // update if position  changed
                    if ($(this).data('id') === elem.item.data('id') && ((oldParent !== newParent) || (oldPosition!==newPosition) )) {
                        var id = $(this).data('id');
                        var position = $(this).data('position');
                        $.ajax({
                            url: Routing.generate('administrator_update_block_level_position', {id: id}),
                            method: 'POST',
                            data: {newParent: newParent,position:position},
                            beforeSend:function () {
                                content.block({message: " Execution encours ... !!",
                                    css:{backgroundColor: 'rgba(244, 241, 241, 0.29)'}});
                            },
                            success:function (data) {
                                $('#block_'+data.id).find('form').data('parent',data.parent);
                                content.unblock();
                            }
                        })
                    }

                    $(this).find('.fake-column[data-pdl='+(oldLevel * 30)+']').each(function () {
                        $(this).data('level',newLevel);
                    });
                    syncPositionStyle();
                });
            }
        });
    }
    sortable();
    $(document).on('click', '.btn-show-children', function (e) {
        e.preventDefault();
        var openedBlockBtn = $(this).closest('.block-branch').first();
        openedBlockBtn.find('>ol>li.hidden').removeClass('hidden');
        $(this).toggleClass('opened btn-hide-children btn-show-children ');
        $(this).removeClass('green').addClass('red').html('<i class=" fa fa-minus"></i>');

    });
    $(document).on('click', '.btn-hide-children', function (e) {
        e.preventDefault();
        var openedBlockBtn = $(this).closest('.block-branch').first();
        openedBlockBtn.find('>ol>li').addClass('hidden');
        $(this).toggleClass('opened btn-hide-children btn-show-children ');
        $(this).removeClass('red').addClass('green').html('<i class=" fa fa-plus"></i>');
    });

    $(document).on('click', '.new-auth', function ($event) {
        $event.preventDefault();
        if ($(this).data('type') == 0)
            authPlace = $(this).closest('.modal-content').find('.auth-tb-author tbody');
        else
            authPlace = $(this).closest('.modal-content').find('.auth-tb-validator tbody');

        auth_name = $(this).closest('.modal-content').find('table tbody tr').length;
        var name_block = $(this).data('name');
        var blockList = jQuery('#prototypes');
        var newAuthorization = blockList.attr('data-authorization-prototype');
        newAuthorization = newAuthorization.replace(/__num-block__/g, name_block);
        newAuthorization = newAuthorization.replace(/__auth_name__/g, auth_name);
        var newLi = jQuery(newAuthorization);
        if ($(this).data('type') == 0)
            newLi.find('.val-attr').remove();
        else
            newLi.find('.auth-attr').remove();
        newLi.appendTo(authPlace);

    });
    $(document).on('click', '.remove-auth', function () {
        $(this).closest('tr').remove();
    });
    $('.blockForm').submit(function (e) {
        $('body').block({message: " Veuillez patienter, Traitement en cours !!"
            ,css:{
                backgroundColor:'rgba(255, 255, 255, 0.8)!important',
                position:'fixed'
            }
        });
    });
    $(document).on('click', '.btn-delete-block', function () {
        var elem = $(this);
        var id = elem.data('id');
        swal({
            title: "Êtes-vous sûr",
            text: "Voulez vous vraiment supprimer ce bloc , veuillez noter que tous ces sous-blocs seront aussi supprimer !",
            type: "warning",
            cancelButtonText: 'Annuler',
            confirmButtonText:"Confirmer",
            confirmButtonClass:"blue",
            cancelButtonClass:"red",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true
        }, function () {
            $.ajax({
                url: Routing.generate('administrator_delete_block', {id: id}),
                method: 'POST',
                success: function () {
                    bl = elem.closest('.block-branch');
                    $.each(bl.find('.block-branch'), function (i, e) {
                        var child_id = $(e).data('id');
                        $('#block_' + child_id).remove();
                    });
                    // remove open child button if parent has no more childrens
                    parent = bl.parent().closest('.block-branch');
                    bl.remove();
                    $('#block_' + id).remove();
                    if (parent.find('.block-branch').length === 0) {
                        parent.find('.btn-show-children').remove();
                        parent.find('.btn-hide-children').remove();
                    }
                    swal("Terminer", "Ce bloc a été supprimer", "success");
                }
            })
        });
    });
    $(document).on('focusin', function (e) {
        if ($(e.target).closest(".mce-window").length) {
            e.stopImmediatePropagation();
        }
    });
    // for adding left padding for each bloc level
    function syncPositionStyle() {
        $.each($('.fake-column[data-pdl]'), function (i, o) {
            var level =$(this).closest('.block-branch').data('level');
            $(o).css('padding-left',(level*$(o).data('pdl')));
        });
    }
    syncPositionStyle();

    $('#createBlockForm').submit(function (e) {
        var form=$(this);
        var block=retrieveFormData(form);
        var url=form.attr('action');
        $.ajax({
            url:url,
            method:'POST',
            data:$.param({block:block}),
            beforeSend: function () {
                $('body').block({message: " Execution encours ... !!",
                css:{position:'fixed'}});
            },
            success:function (data) {
                if(data.success){
                    handleNewBlockSubmitSuccess(form,data);
                    $('.close-modal').click();
                    toastr.success('Le bloc a été ajouter succes ');
                } else{
                    errorMsg="";
                    for(var i=0;i<data.errors.length;i++){
                        errorMsg+=data.errors[i]+'<br>'
                    }
                    toastr.error(errorMsg);
                }
                $('body').unblock();
            },
            error:function () {
                $('body').unblock();
                toastr.error('Erreur la creation du bloc est annulé');
            }
        });
        e.preventDefault();
    });

    $('.updateBlockForm').submit(function (e) {
        var form=$(this);
        var block=retrieveFormData(form);
        var url=form.attr('action');
        $.ajax({
            url:url,
            method:'POST',
            data:$.param({block:block}),
            beforeSend: function () {
                $('body').block({message: " Execution encours ... !!",
                    css:{backgroundColor: 'rgba(244, 241, 241, 0.29)'}});
            },
            success:function (data) {
                if(data.success){
                    $('#title-'+data.id).val(data.title);
                    $('.close-modal').click();
                    toastr.success('Modification du bloc effectué avec succes ');
                }
                else
                    toastr.error('Erreur modification annulé');

                $('body').unblock();
            }
        });
        e.preventDefault();
    });

    $(document).on('click','#addAuthor',function () {
        var blockList = jQuery('#prototypes');
        var newAuthorization = $(blockList.attr('data-authorization-prototype'));
        newAuthorization.find('.val-attr').remove();
        $(this).closest('table').find('tbody')
            .append(newAuthorization)

    });
    $(document).on('click','#addValidator',function () {
        var blockList = jQuery('#prototypes');
        var newAuthorization = $(blockList.attr('data-authorization-prototype'));
        newAuthorization.find('.auth-attr').remove();
        $(this).closest('table').find('tbody')
            .append(newAuthorization)
    });

    function retrieveFormData(form) {
        var block={parent:null};
        if(form.data('parent'))
            block.parent=form.data('parent');
        block.title=form.find('input[name="blockTitle"]').val();
        block.options={};
        if(form.find('input[name="showTitle"]').prop('checked'))
            block.options.showTitle=true;
        if(form.find('input[name="indexed"]').prop('checked'))
            block.options.indexed=true;
        if(form.find('input[name="paginated"]').prop('checked'))
            block.options.paginated=true;

        block.authorizations=[];
        $.each(form.find('.auths tbody tr'),function (i,o) {
            var auth={};
            var user=$(this).find('select').val();
            if(!authExist(block.authorizations,user)){
                if($(this).data('id'))
                    auth.id=$(this).data('id');
                auth.user=user;
                if($(this).find('.auth-attr').length>0){
                    if($(this).find('input[name="canRead"]').prop('checked'))
                        auth.canRead=true;
                    if($(this).find('input[name="canWrite"]').prop('checked'))
                        auth.canWrite=true;
                    if($(this).find('input[name="canDelete"]').prop('checked'))
                        auth.canDelete=true;
                }
                if(form.find('input[name="limited"]').prop('checked'))
                    auth.limited=true;
                block.authorizations.push(auth);
            }else{
                $(this).remove();
            }
        });
        return block;
    }

    function authExist(authorizations, val) {
        for(var i=0 ;i<authorizations.length;i++){
            if(authorizations[i].user===val){
                return true
            }
        }
        return false
    }

    function handleNewBlockSubmitSuccess(form,data){
        if (!$('.sortable').length) {
            $('#blockTree').append('<ol class="sortable " ></ol>');
            sortable();
        }
        $('.sortable').append(' <li class="block-branch" data-parent=' + data.parent + ' data-id=' + data.id +
            ' data-position=' + data.position + ' data-level=0><div>' +
            '<div class="cl-btn fake-column col-md-5 col-sm-6 col-xs-6" style="padding-left: 0" data-pdl=25>' +
            '<input style="pointer-events: none" type="text" id="title-' + data.id + '" class="form-control" value="'+data.title+'"></div>' +
            '<div class="fake-column col-md-2 hidden-sm hidden-xs text-center"><div class="label label-success">pas de version</div></div>' +
            '<div class="fake-column col-md-2 col-sm-2 col-xs-2 text-center"><div class="label label-success">pas de version</div></div>' +
            '<div class="fake-column actions col-md-3 col-sm-4 col-xs-4 text-center">' +
            '<div><a href="'+data.url+'" class="btn green btn-icon-only" ><i class="fa fa-eye"></i></a></div>' +
            '<div data-toggle="tooltip" data-title="Details !">&nbsp;<button type="button" data-toggle="modal" href="#block_info_' + data.id + '" type="button" data-toggle="modal" href="#option-modal-' + data.id + '" class="btn blue btn-icon-only " ><i class="fa fa-cog"></i> </button></div>' +
            '<div data-toggle="tooltip" data-title="Effacer !">&nbsp;<button type="button" class="btn red btn-delete-block btn-icon-only" data-id=' + data.id + ' ><i class="fa fa-trash"></i></button></div>' +
            '</div> </div></li>');

        var blockPlace = $('#block-fields-list');
        var newLi = jQuery($(data.template));
        newLi.appendTo(blockPlace);
        form[0].reset();
        form.find('.auths tbody tr').remove();
        $.each($('.custom-check-input'),function (i,o) {
            if($(o).prop('checked'))
                $(o).parent().addClass('active');
            else
                $(o).parent().removeClass('active');

        });
    }
});