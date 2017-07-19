/**
 * Created by medna on 27/04/2017.
 */
$(document).ready(function () {
    $('.images').viewer();
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
    $('.btn-create-new-version').click(function () {
        var url=$(this).data('url');
        $('<form action="'+url+'" method="post"></form>').appendTo('body').submit();
    });
    $('[data-toggle="popover"]').popover({html: true});
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
                    var parent=elem.closest('tr').data('parent');
                    var shbtn=$('.btn-show-children[data-id="'+parent+'"]');
                    elem.closest('tr').remove();
                    if($('tr[data-parent="'+parent+'"]').length<1)
                        shbtn.remove();
                    $('#block_'+id).remove();
                    $('#model-'+id).remove();
                    swal("Terminer", "Ce bloc a été supprimer", "success");
                }
            })
        });
    });
    syncPositionStyle();
    function syncPositionStyle() {
        $.each($('td[data-pdl]'), function (i, o) {
            var level =$(this).data('level');
            var paddingLeft=(level*$(o).data('pdl'));
            $(o).css('padding-left',paddingLeft+10);
        });
    }
});