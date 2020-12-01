var eTable = $('#datatable-equipamentos').DataTable({
        lengthChange: !1,
        buttons: ["copy", "excel", "pdf", "print", "colvis"],
        "bFilter": true,
        "language": {
            "sSearch": "Buscar",
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "Nenhum Equipamento encontrado...",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Sem registros",
            "infoFiltered": "(de _MAX_ Equipamentos)",
            "paginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior"
            },

        }
    })

eTable.buttons().container().appendTo("#datatable-equipamentos_wrapper .col-md-6:eq(0)")

$('#global_filter').keyup(function(){
    eTable.search($(this).val()).draw();
});
$('#filtro_status').on('change', function(){
    eTable.search(this.value).draw();
});
$('#filtro_secretaria').on('change', function(){
    eTable.search(this.value).draw();
});
$('#fitro_setor').on('change', function(){
    eTable.search(this.value).draw();
});
$('#filtro_tipo').on('change', function(){
    eTable.search(this.value).draw();
});

var pTable = $('#datatable-perifericos').DataTable({
    lengthChange: !1,
    buttons: ["copy", "excel", "pdf", "print", "colvis"],
    "bFilter": true,
    "language": {
        "sSearch": "Buscar",
        "lengthMenu": "Display _MENU_ records per page",
        "zeroRecords": "Nenhum Périferico encontrado...",
        "info": "Mostrando página _PAGE_ de _PAGES_",
        "infoEmpty": "Sem registros",
        "infoFiltered": "(de _MAX_ Periféricos)",
        "paginate": {
            "sNext": "Próximo",
            "sPrevious": "Anterior"
        },

    }
})

pTable.buttons().container().appendTo("#datatable-perifericos_wrapper .col-md-6:eq(0)")

$('#global_filter').keyup(function(){
    pTable.search($(this).val()).draw();
});
$('#filtro_status').on('change', function(){
    pTable.search(this.value).draw();
});
$('#filtro_secretaria').on('change', function(){
    pTable.search(this.value).draw();
});
$('#fitro_setor').on('change', function(){
    pTable.search(this.value).draw();
});
$('#filtro_tipo').on('change', function(){
    pTable.search(this.value).draw();
});

$('.dt-buttons').hide();
$('.dataTables_filter').hide();
