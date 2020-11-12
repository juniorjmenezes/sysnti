$(document).ready(function() {
    // Tipo de Equipamento
    $('#computador').hide();
    $('#tipo_equipamento').change(function() {
    if ($('#tipo_equipamento').val() == 'COMPUTADOR') {
        $('#computador').show();
    } else {
        $('#computador').hide();
    }
    });

    $('#impressora').hide();
    $('#tipo_equipamento').change(function() {
    if ($('#tipo_equipamento').val() == 'IMPRESSORA') {
        $('#impressora').show();
    } else {
        $('#impressora').hide();
    }
    });

    $('#projetor').hide();
    $('#tipo_equipamento').change(function() {
    if ($('#tipo_equipamento').val() == 'PROJETOR') {
        $('#projetor').show();
    } else {
        $('#projetor').hide();
    }
    });

    $('#roteador').hide();
    $('#tipo_equipamento').change(function() {
    if ($('#tipo_equipamento').val() == 'ROTEADOR') {
        $('#roteador').show();
    } else {
        $('#roteador').hide();
    }
    });

    $('#scanner').hide();
    $('#tipo_equipamento').change(function() {
    if ($('#tipo_equipamento').val() == 'SCANNER') {
        $('#scanner').show();
    } else {
        $('#scanner').hide();
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

    // Desktops (Discos adicionais)

    $('#hd1').hide();
    $('#discos').change(function() {
    if ($('#discos').val() == '2') {
        $('#hd1').show();
    } else {
        $('#hd1').hide();
    }
    });

    // Impressoras (Cartuchos adicionais)
    $('#coloridos').hide();
    $('#cartuchos').change(function() {
    if ($('#cartuchos').val() == 'KIT C/ 4') {
        $('#coloridos').show();
    } else {
        $('#coloridos').hide();
    }
    });

    // Tipo de Projetor
    $('#integrado').hide();
    $('#tipo_projetor').change(function() {
    if ($('#tipo_projetor').val() == 'INTEGRADO') {
        $('#integrado').show();
    } else {
        $('#integrado').hide();
    }
    });

    // Tipo de Roteador
    $('#sem_fio').hide();
    $('#tipo_roteador').change(function() {
    if ($('#tipo_roteador').val() == 'SEM FIO') {
        $('#sem_fio').show();
    } else {
        $('#sem_fio').hide();
    }
    });

    // Tipo de Conexao
    //Detalhes Conexao USB
    $('#conexao').hide();
    $('#tipo_conexao').change(function() {
    if ($('#tipo_conexao').val() == 'USB') {
        $('#conexao').show();
    } else {
        $('#conexao').hide();
    }
    });

    // Tipo de Endereçamento
    $('#ip-mascara').hide();
    $('#enderecamento').change(function() {
    if ($('#enderecamento').val() == 'ESTÁTICO') {
        $('#ip-mascara').show();
    } else {
        $('#ip-mascara').hide();
    }
    });

    // Detalhes Conexao Rede/Internet
    $('#rede').hide();
    $('#tipo_conexao').change(function() {
        if ($('#tipo_conexao').val() == 'ETHERNET') {
            $('#rede').show();
        } else if ($('#tipo_conexao').val() == 'WI-FI') {
            $('#rede').show();
        } else {
        $('#rede').hide();
    }
    });

});
