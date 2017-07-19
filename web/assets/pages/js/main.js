/**
 * Created by medna on 06/03/2017.
 */
jQuery.fn.extend({
    live: function (event, callback) {
        if (this.selector) {
            jQuery(document).on(event, this.selector, callback);
        }
    }
});
moment.locale('fr');

$(document).ready(function () {
    $(document).on('change','.custom-check-input',function () {
        if($(this).prop('checked')===true){
            $(this).parent().addClass('active')
        }else
            $(this).parent().removeClass('active')
    });
    $.each($('.custom-check-input'),function (i,o) {
        if($(o).prop('checked'))
            $(o).parent().addClass('active');
    });
    if ($("#menuSelected").length) {
        $("." + $("#menuSelected").data('menu')).addClass('active');
    }
    if($('.datepicker').length)
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            language:'fr',
            endDate: '+0d'
        });

    $(document).on('mouseenter','[data-toggle=tooltip]', function(){
        $(this).tooltip('show');
    });

    $(document).on('mouseleave','[data-toggle=tooltip]', function(){
        $(this).tooltip('hide');
    });

    if($('.fileinput').length)
        $('.fileinput').fileinput();

    if($('.tinyMce').length)
        tinymce.init({
            selector: '.tinyMce',  // change this value according to your HTML
            theme: 'modern',
            height: 400,
        });


    if($('.select2').length)
        $('.select2').select2({});

    if ($(".minimisedDataTable").length)
        $('.minimisedDataTable').dataTable({
        "bPaginate": false, //hide pagination
        "bInfo": false,
        "language": {
            "sSearch": "Rechercher&nbsp;:",
            "sInfoEmpty": "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
            "sZeroRecords": "Aucun &eacute;l&eacute;ment &agrave; afficher",
            "sEmptyTable": "Aucune donn&eacute;e disponible dans le tableau"
        }
    })
    if ($(".datatable").length)
        $('.datatable').DataTable({
            "language": {
                "sProcessing":     "Traitement en cours...",
                "sSearch":         "Rechercher&nbsp;:",
                "sLengthMenu":     "Afficher _MENU_ &eacute;l&eacute;ments",
                "sInfo":           "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                "sInfoEmpty":      "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                "sInfoFiltered":   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                "sInfoPostFix":    "",
                "sLoadingRecords": "Chargement en cours...",
                "sZeroRecords":    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                "sEmptyTable":     "Aucune donn&eacute;e disponible dans le tableau",
                "oPaginate": {
                    "sFirst":      "Premier",
                    "sPrevious":   "Pr&eacute;c&eacute;dent",
                    "sNext":       "Suivant",
                    "sLast":       "Dernier"
                },
                "oAria": {
                    "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                }
            }});

    $('.change-user-roles input[type=radio]').live('click', function () {
        var username = $(this).attr('name');
        var url = $(".change-user-roles").data('url');
        App.blockUI({target: ".username-" + username, animate: !0});

        $.ajax({
            type: "POST",
            url: url,
            data: {role: $(this).closest($(".role-" + username)).data('role'), 'username': username},
            success: function (data) {
                App.unblockUI(".username-" + username);
                var $toast = toastr['success']("le role de " + data.username +" a été changer avec succés", "info :");
            },
            error: function () {
                App.unblockUI(".username-" + username)
            }
        });
    });

    $('.notif.unseen').click(function () {
            $(this).removeClass('unseen');
            $.ajax({
                url: Routing.generate('get_user_notifications'),
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    $('#notificatin-list').html('');
                    $.each(data, function () {
                        var cls = "";
                        if (!this.seen)
                            cls = "unseen";
                        $('#notificatin-list').append(
                            '<li class="notif ' + cls + '">' +
                            '<a href="' + this.url + '">' +
                            '<div class="time">' + this.date + '<span class="fa fa-clock-o"></span></div>' +
                            '<span class="label label-sm label-icon label-warning col-md-1">' +
                            '<i class="fa ' + this.icon + ' "></i>' +
                            '</span>' +
                            '<p class="details">' + this.message + '</p>' +
                            '</div>' +
                            '</a>' +
                            '</li>'
                        )
                    });
                    $("#bade-notification").remove();
                    // styling notification icons
                    if($('.notif .label-icon .fa-user-plus').length){
                        $('.fa-user-plus').parents('.label-icon').css('background','lightseagreen');
                    }
                }
            })
    });

    $('.nav .msg-list.unseen').click(function () {
            $(this).removeClass('unseen');
            $(this).off();
            $.ajax({
                url: Routing.generate('get_user_messages'),
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    $('#message-list').html('');
                    $.each(data, function () {
                        var cls = "";
                        if (!this.seen)
                            cls = "unseen";
                        $('#message-list').append(
                            '<li class="msg ' + cls + '">' +
                            '<a href="' + this.url + '">' +
                            '<span class="photo"><img src="'+this.sender.picture+'" class="img-circle" alt=""> </span>' +
                            '<span class="subject"><span class="from">'+this.sender.fullName+'</span>' +
                            '<span class="time">'+this.dateSent+' </span></span>' +
                            '<span class="message">' + this.subject + '</span>' +
                            '</a>' +
                            '</li>'
                        )
                    });
                }
            })
    });
    if($('.progress-bar').length){
        setValue($('.progress-slider').val());
        $(document).on('input', '.progress-slider', function (e) {
            if($(this).val()<$(this).data('min')){
                e.preventDefault();
                $(this).val($(this).data('val'));
            }else
                showValue($(this).val())
        });
        $(document).on('change', '.progress-slider', function (e) {
            if($(this).val()<$(this).data('min')){
                e.preventDefault();
                $(this).val($(this).data('val'));
            }else
                showValue($(this).val())
        });

        $(document).on('focusin','.progress-slider', function(){
            $(this).data('val', $(this).val());
        });

        function showValue(val) {
            /* setup variables for the elements of our slider */
            var thumb = $(".sliderthumb");
            var shell = $(".slidershell");
            var track = $(".slidertrack");
            var fill = $(".sliderfill");
            var rangevalue = $(".slidervalue");
            var slider = $(".progress-slider");
            var progress = val / (slider.attr('max') );
            /* the percentage slider value */
            var thumbsize = shell.width() / 100;
            /* must match the thumb size in your css */
            var bigval = shell.width();
            /* widest or tallest value depending on orientation */
            var smallval = 40;
            /* narrowest or shortest value depending on orientation */

            var tracksize = bigval - thumbsize;
            var fillsize = 20;
            var position = progress * tracksize;
            rangevalue.html(val);
            if (val < 20) {
                fill.css('background-color', '#f73030');
                rangevalue.css('color', '#f73030');
            } else if (val < 50) {
                fill.css('background-color', '#ff9800');
                rangevalue.css('color', '#ff9800');
            } else if (val < 75) {
                fill.css('background-color', '#1888e8');
                rangevalue.css('color', '#1888e8');
            } else {
                fill.css('background-color', '#34a539');
                rangevalue.css('color', '#34a539');
            }
            if(val==100)
                $('#ps-txt').text('Terminer !');
            else
                $('#ps-txt').text('Progression '+val+'%');

            rangevalue.css('left', position);
            thumb.css('left', position);
            fill.css('width', position + (thumbsize / 2));
            fill.css('left', 0);
            fill.css('height', fillsize);
            shell.css('height', smallval);
            shell.css('width', bigval);
            track.css('height', fillsize);
            track.css('width', bigval - 4);
        }

        /* we often need a function to set the slider values on page load */
        function setValue(val, vertical) {
            $(".progress-slider").val(val);
            showValue(val, vertical);
        }
    }

    $(document).on('change','.mt-checkbox.green>input',function () {
                $(this).parent().find('span').toggleClass('mt-checked-span')

    })
});