/**
 * Created by medna on 27/04/2017.
 */
$(document).ready(function () {
    tinymce.init({
        selector: '.tinyMince',  // change this value according to your HTML
        theme: 'modern',
        height: 400,
        table_default_attributes: {
            cellspacing: '0',
            width:200,
        },
        image_caption: true,
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
        toolbar1: "insertfile undo redo | styleselect | forecolor backcolor | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify" +
        " | bullist numlist outdent indent | link image | print preview fullscreen | ",
        fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt'
    });
    $('#cancelVersionCreation').click(function () {
        var url = $(this).data('url');
        $(this).off();
        $.ajax({
            url: url,
            method: 'POST',
            type: 'JSON',
            success: function (data) {
                if (data.done == true)
                    window.location = data.url;
            }
        })
    });
});