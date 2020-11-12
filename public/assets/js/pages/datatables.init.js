$(document).ready(function() {
    $("#datatable").DataTable({
        lengthChange: !1,
        buttons: ["copy", "excel", "pdf", "print", "colvis"],
        "bFilter": true,
        "language": {
            "sSearch": "Buscar",
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "Nenhum registro encontrado para os termos pesquisados.",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Não há registro disponível",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "paginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior"
            },
        }
    }),
    $("#datatable-buttons").DataTable({
        lengthChange: !1,
        buttons: ["copy", "excel", "pdf", "print", "colvis"],
        "bFilter": false,
        "language": {
            "sSearch": "Buscar",
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "Nenhum registro encontrado para os termos pesquisados.",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Não há registro disponível",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "paginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior"
            },
        }
    }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")
});
