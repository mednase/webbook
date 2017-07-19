/**
 * Created by medna on 04/04/2017.
 */
$(document).ready(function () {
    $(document).ready(function () {
        tinymce.init({
            selector: '.tinyMince',  // change this value according to your HTML
            theme: 'modern',
            height: 400,
            readonly: 1
        });
    })
    $(document).on('click','.btn-show-children',function () {
        var id=$(this).data('id');
        if($(this).hasClass('opened')){
            $(this).removeClass('red').addClass('green').html('<i class=" fa fa-plus"></i>');
            $('tr[data-parent='+id+']').each(function(){
                if($(this).find('.btn-show-children').hasClass('opened'))
                    $(this).find('.btn-show-children').click();
                $(this).toggleClass('hidden showed');

            });
        }else{
            $(this).removeClass('green').addClass('red').html('<i class=" fa fa-minus"></i>');
            $('tr[data-parent='+id+']').each(function(){
                $(this).toggleClass('hidden showed');
            });
        }
        $(this).toggleClass('opened');

    });

    function sortable() {
        $('.sortable').nestedSortable({
            forcePlaceholderSize: true,
            items: 'li',

            disableParentChange: true,
            handle: 'div',
            toleranceElement: '> div',
            opacity: .6,
            revert: 250,
            rootID: 'bockTree',
            tabSize: 25,
            isTree: true,
            expandOnHover: 700,
            relocate: function (ev, elem) {
                $('li.block-branch').each(function () {
                    $(this).data('position', $(this).index());
                    if ($(this).find('li.block-branch').length > 0)
                        if ($(this).find('>div>div.cl-btn  .btn-hide-children').length == 0 && $(this).find('>div>div.cl-btn  .btn-show-children').length == 0) {
                            $(this).find('>div>div.cl-btn ').first().prepend('<button role="button" class="btn red  btn-hide-children" ><i class=" fa fa-minus"></i></button>')
                        }

                    if ($(this).find('li.block-branch').length == 0) {
                        $(this).find('>div>div.cl-btn  .btn-hide-children').remove();
                        $(this).find('>div>div.cl-btn  .btn-show-children').remove();
                    }
                    var parent = $(this).parent().closest('li.block-branch');
                    var oldLevel = $(this).data('level');
                    var parent_id = parent.data('id');
                    if (parent_id === undefined) {
                        $(this).data('level', '0');
                        $(this).data('parent', null);
                    } else {
                        $(this).data('level', parseInt(parent.data('level')) + 1);
                        $(this).data('parent', parent.data('id'));
                    }
                    var newLevel = $(this).data('level');

                    $(this).find('>div .padding-left-' + (oldLevel * 30)).each(function () {
                        $(this).removeClass('padding-left-' + (oldLevel * 30)).addClass('padding-left-' + (newLevel * 30))
                    });
                });
            }
        });
    }
    function GetFormattedDate() {
        var todayTime = new Date();
        var month = todayTime.getMonth();
        var day = todayTime.getDate();
        var year = todayTime.getFullYear();
        return day + "/" + month + "/" + year;
    }
    sortable();
    function uniqeId() {
        return Math.round(new Date().getTime() + (Math.random() * 100));
    }
    $(document).on('click','#addBlock',function () {
        var position = $('.sortable>li').length;
        var id = uniqeId();

        if (!$('.sortable').length) {
            $('#blockTree').append('<ol class="sortable " ></ol>');
            sortable();
        }

        $('.sortable').append(' <li class="block-branch nbl " data-id=' + id + ' data-position=' + position + '>' +
            '<div>' +
            '<div class="fake-column hidden-xs hidden-sm hidden-md col-lg-1  ">' + GetFormattedDate() + '</div>'+
            '<div class="cl-btn fake-column col-xs-6 col-sm-5 col-md-5 col-lg-4 padding-left-0">' +
            '<input type="text" id="title-' + id + '" class="form-control" value="nouveau bloc"></div>' +
            '<div class="text-center fake-column hidden-xs col-sm-2 col-md-2"><div class="label label-success">pas de version</div></div>'+
            '<div class="text-center fake-column col-xs-2 col-sm-2 col-md-2"><div class="label label-success">pas de version</div></div>'+
            '<div class="fake-column col-xs-4 col-sm-3 col-md-3  text-center">' +
            '<div style="display:inline-block"  data-toggle="tooltip" data-title="Options !"><button type="button" data-toggle="modal" href="#option-modal-' + id + '" class="btn blue btn-icon-only " ><i class="fa fa-cog"></i> </button></div>' +
            '<div style="display:inline-block"  data-toggle="tooltip" data-title="Permissions">&nbsp;<button type="button" data-toggle="modal" href="#auth-modal-' + id + '" class="btn green btn-icon-only" ><i class="fa fa-users"></i></button></div>' +
            '<div style="display:inline-block"  data-toggle="tooltip" data-title="Annuler !">&nbsp;<button type="button" class="btn red cancel-new-block btn-icon-only" data-id=' + id + ' ><i class="fa fa-times-circle"></i></button></div>' +
            '</div> </div></li>');

        var blockPlace = $('#block-fields-list');
        var blockList = jQuery('option');
        var newTextBlock = blockList.attr('data-block-prototype');
        newTextBlock = newTextBlock.replace(/__num-block__/g, id);
        var newLi = jQuery(newTextBlock);
        newLi.appendTo(blockPlace);

    });
    $(document).on('click', '.cancel-new-block', function () {
        var block_id = $(this).data('id');
        var branch = $('.block-branch[data-id="' + block_id + '"]');
        var parent_branch = branch.parent().closest('.block-branch');
        $('#block_' + block_id).remove();
        $('#model-' + block_id).remove();
        branch.remove();
        if (parent_branch.find('ol').length > 0 && parent_branch.find('ol>li').length === 0) {
            parent_branch.find('ol').first().remove();
            parent_branch.find('.btn-angle').first().remove();
            parent_branch.find('.btn-block-closed').first().click();
        } else
            $('.sortable').find('.btn-block-closed').first().click();
    });
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
        if($(this).data('type')==0)
             authPlace = $(this).closest('.modal-content').find('.auth-tb-author tbody');
        else
             authPlace = $(this).closest('.modal-content').find('.auth-tb-validator tbody');

        var name_block = $(this).data('name');
        var blockList = jQuery('option');
        var newAuthorization = blockList.attr('data-authorization-prototype');
        newAuthorization = newAuthorization.replace(/__num-block__/g, name_block);
        newAuthorization = newAuthorization.replace(/__auth_name__/g, uniqeId());
        var newLi = jQuery(newAuthorization);
        if($(this).data('type')==0)
            newLi.find('.val-attr').remove();
        else
            newLi.find('.auth-attr').remove();
        newLi.appendTo(authPlace);

    });
    $(document).on('click', '.remove-auth', function () {
        $(this).closest('tr').remove();
    });

    $('#submitSaveForm').click(function () {
        $('input.new-token').each(function () {
            $(this).val(uniqeId());
        });
        $('li.block-branch').each(function (i) {
            var block_id = $(this).data('id');
            $('.block-name-input[data-id=' + block_id + ']').val($("#title-" + block_id).val());
            $('.block-index-input[data-id=' + block_id + ']').attr('checked', $("#index-" + block_id).prop('checked'));
            var block = $('#block_' + block_id);
            block.find('.blockPositionInput').val(i);
        });
        $('form').submit();
    });
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover({html: true});
    });
    $(".btn-delet-block").click(function () {
        var elem=$(this);
        var url = elem.data('url');
        var id = elem.data('id');
        swal({
            title: "Supression d'un bloc",
            text: "Voulez vous vraiment supprimer ce bloc , veuillez noter que tous ces sous-bloc seront aussi supprimer !",
            type: "error",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true
        }, function () {
            $.ajax({
                url:url,
                method:'POST',
                success:function () {
                    elem.closest('.block-branch').remove();
                    $('#block_'+id).remove();
                    $('#model-'+id).remove();
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
    $('.btn-create-new-version').click(function (e) {
        e.preventDefault();
        var url = $(this).data('url');
        $('<form action="' + url + '" method="post"></form>').appendTo('body').submit();
    });
});