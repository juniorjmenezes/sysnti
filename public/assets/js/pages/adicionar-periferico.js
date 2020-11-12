$(document).ready(function() {
    // Tipo de Equipamento
    $('#autotransformador').hide();
    $('#tipo_periferico').change(function() {
    if ($('#tipo_periferico').val() == 'AUTOTRANSFORMADOR') {
        $('#autotransformador').show();
    } else {
        $('#autotransformador').hide();
    }
    });

    $('#estabilizador').hide();
    $('#tipo_periferico').change(function() {
    if ($('#tipo_periferico').val() == 'ESTABILIZADOR') {
        $('#estabilizador').show();
    } else {
        $('#estabilizador').hide();
    }
    });

    $('#nobreak').hide();
    $('#tipo_periferico').change(function() {
    if ($('#tipo_periferico').val() == 'NO-BREAK') {
        $('#nobreak').show();
    } else {
        $('#nobreak').hide();
    }
    });

    $('#modulo_isolador').hide();
    $('#tipo_periferico').change(function() {
    if ($('#tipo_periferico').val() == 'MÓDULO ISOLADOR') {
        $('#modulo_isolador').show();
    } else {
        $('#modulo_isolador').hide();
    }
    });

    $('#monitor').hide();
    $('#tipo_periferico').change(function() {
    if ($('#tipo_periferico').val() == 'MONITOR') {
        $('#monitor').show();
    } else {
        $('#monitor').hide();
    }
    });

    $('#webcam').hide();
    $('#tipo_periferico').change(function() {
    if ($('#tipo_periferico').val() == 'WEBCAM') {
        $('#webcam').show();
    } else {
        $('#webcam').hide();
    }
    });

    // Se Remanejado, identificar origem
    $('#status').change(function() { //jQuery Change Function
        var opval = $(this).val(); //Get value from select element
        if(opval=="REMANEJADO"){ //Compare it and if true
            $('#adicionarRemanejado').modal("show"); //Open Modal
        }
    });

    // Se Inservível, informar detalhes
    $('#status').change(function() { //jQuery Change Function
        var opval = $(this).val(); //Get value from select element
        if(opval=="INSERVÍVEL"){ //Compare it and if true
            $('#adicionarInservivel').modal("show"); //Open Modal
        }
    });

});
