var oTable = $(".table-admin-ca").DataTable({
    "language": {
        "url": '/assets/js/plugins/DataTables/media/lang/fr.json'
    },
    "oLanguage": {
        "sProcessing": "Traitement en cours...",
        "sSearch": "",
        "sLengthMenu": "Afficher _MENU_ &eacute;l&eacute;ments",
        "sInfo": "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
        "sInfoEmpty": "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
        "sInfoFiltered": "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        "sInfoPostFix": "",
        "sLoadingRecords": "Chargement en cours...",
        "sZeroRecords": "Aucun &eacute;l&eacute;ment &agrave; afficher",
        "sEmptyTable": "Aucune donn&eacute;e disponible dans le tableau",
        "oPaginate": {
            "sFirst": "Premier",
            "sPrevious": "Pr&eacute;c&eacute;dent",
            "sNext": "Suivant",
            "sLast": "Dernier"
        },
        "oAria": {
            "sSortAscending": ": activer pour trier la colonne par ordre croissant",
            "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
        }
    },
    "ordering": true,
    "order": [[0, "asc"]],
    rowReorder: {
        selector: 'td:not(.no-sort)'
    },
    columnDefs: [
        {orderable: false, targets: '_all'}
    ],
    paging: false,
    bInfo: true,
    fnDrawCallback: function () {
        // update rows num text (used for fixing order server side)
        update_table_rows_num();
    }
});


$('#DataTables_Table_0_filter > label > input').attr('placeholder', 'Rechercher').after('<i class="glyphicon glyphicon-search"></i>');

function update_table_rows_num() {
    $('td.num-row').each(function (i, el) {
        $(this).html(i + 1);
    });
}
function toggleAll(source) {
    var aInputs = document.getElementsByClassName('checkAll');
    for (var i = 0; i < aInputs.length; i++) {
        if (aInputs[i] != source && aInputs[i].className == source.className) {
            aInputs[i].checked = source.checked;
        }
    }
    if (source.checked) {
        document.getElementById('bulkSubmitBtn').disabled = false;
    } else {
        document.getElementById('bulkSubmitBtn').disabled = true;

    }
}

function bulkSubmitBtnManage() {
    var checkboxs = document.getElementsByClassName("checkAll");
    var selected = false;
    for (var i = 0, l = checkboxs.length; i < l; i++) {
        if (checkboxs[i].checked) {
            selected = true;
            break;
        }
    }
    if (selected) {
        document.getElementById('bulkSubmitBtn').disabled = false;
    } else {
        document.getElementById('bulkSubmitBtn').disabled = true;

    }
}

$('#list_actions').selectpicker({
    iconBase: 'fa',
    tickIcon: 'fa-check',
});
$('#formActions_subFamily').selectpicker({
    iconBase: 'fa',
    tickIcon: 'fa-check',
});
$('#list_actions').on('change', function (e) {
    e.preventDefault();
    if ($(this).val() == 'move') {
        $('.subFamilySelector').removeClass('hide');
    } else {
        $('.subFamilySelector').addClass('hide');
    }
})
$('#bulkSubmitBtn').click(function (e) {
    e.preventDefault();
    resultat = window.confirm('Voulez-vous continuer?');
    console.log(resultat);
    if (resultat) {
        $('#bulk_form').submit();
    }
})
$('.bootstrap-select').removeClass('form-control').children('button').removeClass('btn-default btn').addClass('btn-bootstrap-select');