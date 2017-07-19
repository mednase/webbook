/**
 * Created by medna on 31/05/2017.
 */
$(document).ready(function () {
    $('.dlt-img').click(function (e) {
        e.preventDefault();
        $(this).parent().find('input').prop('checked', true);
        $(this).parent().hide("slow");
        $(this).remove();
    });
    $('.images').viewer();
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover({html: true});
    });
    $('.images').slick({
        centerPadding: '80px',
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 1250,
                settings: {
                    arrows: true,
                    centerPadding: '80px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 900,
                settings: {
                    arrows: false,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 550,
                settings: {
                    arrows: false,
                    centerPadding: '80px',
                    slidesToShow: 1
                }
            }
        ]
    });
    $('#addBookEdition').click(function () {
        if($('#saveBookEdition').length==0){
            line='<tr id="newVersion"><td colspan="2">' +
                '<input id="bookVersionTitle" placeholder="Titre de l\'édition " class="form-control " type="text"></td>' +
                '<td><button type="button" id="saveBookEdition" class="btn btn-sm blue disabled"><i class="fa fa-save">  </i> Enregistrer </button>' +
                '<button class="btn btn-sm yellow" onclick="$(this).closest(\'tr\').remove()" <i class="fa fa-times">  Annuler </i></button></td></tr>';
            $('#table-book-versions').append(line);
        }
    });
    $(document).on('click','.publishBookEdition:not(.disabled)',function () {
        var id=$(this).data('id');
        var elem=$(this);
        $.ajax({
            url:Routing.generate('administrator_publish_book_edition',{id:id}),
            method:'POST',
            dataType:'JSON',
            beforeSend:function () {
                $(this).addClass('disabled');
                toastr.options.progressBar = true;
                toastr.info("","Veuillez patienter pendant le chargement de l'édition");
            },
            success:function (data) {
                toastr.options.progressBar = false;
                toastr.clear();
                if(data.success){
                    toastr.success("","Cette édition a été publié avec succès");
                    $('.publishBookEdition').removeClass('disabled');
                    elem.addClass('disabled');
                }else{
                    toastr.error("",data.msg);
                }
            }
        });
    })
    $(document).on('keyup','#bookVersionTitle',function () {
        if($(this).val().length>0)
            $('#saveBookEdition').removeClass('disabled');
        else
            $('#saveBookEdition').addClass('disabled');

    });
    $(document).on('click','#saveBookEdition:not(.disabled)',function () {
        var elem = $('#addBookEdition');
        var title = $('#bookVersionTitle').val();
        var token = elem.data('token');
        $.ajax({
            url:  Routing.generate('administrator_add_book_edition',{token:token}),
            method: 'POST',
            dataType:'JSON',
            data: {title: title},
            beforeSend: function () {
                elem.off();
                elem.addClass('disabled');
            },
            success: function (data) {
                $('.activate-book-edition.disabled').removeClass('disabled');
                $('#newVersion').html('<td class="text-center">'+data.created_at+'</td><td>'+data.title+'</td>' +
                    '<td class="text-center"><button type="button" class="btn blue btn-sm disabled">Activer</button><button type="button" data-token="'+data.token+'" class="btn red btn-sm deleteBookVersion">Supprimer</button></td>');
                toastr.success('Cette Edition du livre a été enregistrer !');
            }
        })
    });
    $(document).on('click','.activate-book-edition:not(.disabled)',function () {
        var elem=$(this);
        var token=$(this).data('token');
        $.ajax({
            url: Routing.generate('administrator_activate_book_edition',{token:token}),
            method: 'POST',
            beforeSend: function () {
                elem.closest('tr').find('.deleteBookEdition').addClass('disabled').off();
                elem.off();
                elem.addClass('disabled');
            },
            success: function () {
                location.reload();
            }
        })
    });
    $(document).on('click','.deleteBookEdition',function () {
        var elem=$(this);
        var token=$(this).data('token');
        $.ajax({
            url: Routing.generate('administrator_delete_book_edition',{token:token}),
            method: 'POST',
            beforeSend: function () {
                elem.closest('tr').find('.activate-book-edition').addClass('disabled').off();
                elem.off();
                elem.addClass('disabled');
            },
            success: function () {
                $(elem).closest('tr').remove();
            }
        })
    })
})