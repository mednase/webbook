/**
 * Created by medna on 20/05/2017.
 */
$(document).ready(function () {
    $('select[name="book[category]"]').select2({
        placeholder: "Choisir une Categorie",
        allowClear: true
    });
    $('select[id="book_mainAuthors"]').select2({
        placeholder: "Choisir les auteurs principaux",
        allowClear: true
    });
    $('.fileinput').fileinput({
        showUpload:false,
        language:'fr'
    });
    $('.form-control , .select2 ').hover(function () {
        $(this).closest('.form-group').find('label').toggleClass('focused');
    })
    // form validation
    $('.form-control.rq').on('keyup',function () {
        minlength=$(this).data('minln')!==undefined?$(this).data('minln'):1;
        $(this).val().length >=minlength?
            $(this).closest('.form-group').removeClass('has-error'):
            $(this).closest('.form-group').addClass('has-error')
    });
    $('select.rq').change(function () {
        $(this).val()? $(this).closest('.form-group').removeClass('has-error'):
            $(this).closest('.form-group').addClass('has-error')
    });

    $('form').on('submit',function (e) {
        $('.form-control.rq , select.rq').each(function () {
            minlength=$(this).data('minln')!==undefined?$(this).data('minln'):1;
            $(this).val() && $(this).val().length >=minlength?
                $(this).closest('.form-group').removeClass('has-error'):
                $(this).closest('.form-group').addClass('has-error')
        });
        if($(this).find('.has-error').length)
            e.preventDefault();
    });
    $('.imageBook').fileinput({
        allowedFileExtensions: ["jpg", "png"],
        maxFileSize:2000,
        maxImageHeight:650,
        minImageHeight:600,
        maxImageWidth:450,
        minImageWidth:400
    })
});