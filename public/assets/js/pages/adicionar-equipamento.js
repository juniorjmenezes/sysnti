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
        if(opval =="REMANEJADO"){ //Compare it and if true
            $('#adicionarRemanejado').modal("show"); //Open Modal
        }
    });

    // Se Inservível, informar detalhes
    $('#status').change(function() { //jQuery Change Function
        var opval = $(this).val(); //Get value from select element
        if(opval =="INSERVÍVEL"){ //Compare it and if true
            $('#adicionarInservivel').modal("show"); //Open Modal
        }
    });

    // Desktops (Armazenamento)
    $('#hd0').attr('disabled', true);
    $('#hd1').attr('disabled', true);
    $('#hd2').attr('disabled', true);
    $('#hd3').attr('disabled', true);
    $('#hd4').attr('disabled', true);
    $("input[name='discos']").change(function() {
    if ($("input[name='discos']").val() == '0') {
        $('#hd0').attr('disabled', true);
        $('#hd0').attr('placeholder', '');
        $('#hd1').attr('disabled', true);
        $('#hd1').attr('placeholder', '');
        $('#hd2').attr('disabled', true);
        $('#hd2').attr('placeholder', '');
        $('#hd3').attr('disabled', true);
        $('#hd3').attr('placeholder', '');
        $('#hd4').attr('disabled', true);
        $('#hd4').attr('placeholder', '');
    } else if ($("input[name='discos']").val() == '1') {
        $('#hd0').attr('disabled', false);
        $('#hd1').attr('disabled', true);
        $('#hd1').attr('placeholder', 'NÃO POSSUI');
        $('#hd2').attr('disabled', true);
        $('#hd2').attr('placeholder', 'NÃO POSSUI');
        $('#hd3').attr('disabled', true);
        $('#hd3').attr('placeholder', 'NÃO POSSUI');
        $('#hd4').attr('disabled', true);
        $('#hd4').attr('placeholder', 'NÃO POSSUI');
    } else if ($("input[name='discos']").val() == '2') {
        $('#hd0').attr('disabled', false);
        $('#hd1').attr('disabled', false);
        $('#hd1').attr('placeholder', '');
        $('#hd2').attr('disabled', true);
        $('#hd2').attr('placeholder', 'NÃO POSSUI');
        $('#hd3').attr('disabled', true);
        $('#hd3').attr('placeholder', 'NÃO POSSUI');
        $('#hd4').attr('disabled', true);
        $('#hd4').attr('placeholder', 'NÃO POSSUI');
    } else if ($("input[name='discos']").val() == '3') {
        $('#hd0').attr('disabled', false);
        $('#hd1').attr('disabled', false);
        $('#hd1').attr('placeholder', '');
        $('#hd2').attr('disabled', false);
        $('#hd2').attr('placeholder', '');
        $('#hd3').attr('disabled', true);
        $('#hd3').attr('placeholder', 'NÃO POSSUI');
        $('#hd4').attr('disabled', true);
        $('#hd4').attr('placeholder', 'NÃO POSSUI');
    } else if ($("input[name='discos']").val() == '4') {
        $('#hd0').attr('disabled', false);
        $('#hd1').attr('disabled', false);
        $('#hd1').attr('placeholder', '');
        $('#hd2').attr('disabled', false);
        $('#hd2').attr('placeholder', '');
        $('#hd3').attr('disabled', false);
        $('#hd3').attr('placeholder', '');
        $('#hd4').attr('disabled', true);
        $('#hd4').attr('placeholder', 'NÃO POSSUI');
    } else if ($("input[name='discos']").val() == '5') {
        $('#hd0').attr('disabled', false);
        $('#hd1').attr('disabled', false);
        $('#hd1').attr('placeholder', '');
        $('#hd2').attr('disabled', false);
        $('#hd2').attr('placeholder', '');
        $('#hd3').attr('disabled', false);
        $('#hd3').attr('placeholder', '');
        $('#hd4').attr('disabled', false);
        $('#hd4').attr('placeholder', '');
        }
    });

    // Impressoras (Suprimentos)
    $('#preto').attr('disabled', true);
    $('#tricolor').attr('disabled', true);
    $('#amarelo').attr('disabled', true);
    $('#azul').attr('disabled', true);
    $('#magenta').attr('disabled', true);
    $('#cartuchos').change(function(){
    if ($('#cartuchos').val() == '01 CARTUCHO') {
        $('#preto').attr('disabled', false);
        $('#tricolor').attr('disabled', true);
        $('#tricolor').attr('placeholder', 'NÃO UTILIZA');
        $('#amarelo').attr('disabled', true);
        $('#amarelo').attr('placeholder', 'NÃO UTILIZA');
        $('#azul').attr('disabled', true);
        $('#azul').attr('placeholder', 'NÃO UTILIZA');
        $('#magenta').attr('disabled', true);
        $('#magenta').attr('placeholder', 'NÃO UTILIZA');
    } else if ($('#cartuchos').val() == '02 CARTUCHOS') {
        $('#preto').attr('disabled', false);
        $('#tricolor').attr('disabled', false);
        $('#amarelo').attr('disabled', true);
        $('#amarelo').attr('placeholder', 'NÃO UTILIZA');
        $('#azul').attr('disabled', true);
        $('#azul').attr('placeholder', 'NÃO UTILIZA');
        $('#magenta').attr('disabled', true);
        $('#magenta').attr('placeholder', 'NÃO UTILIZA');
    } else if ($('#cartuchos').val() == '04 CARTUCHOS') {
        $('#preto').attr('disabled', false);
        $('#tricolor').attr('disabled', true);
        $('#tricolor').attr('placeholder', 'NÃO UTILIZA');
        $('#amarelo').attr('disabled', false);
        $('#azul').attr('disabled', false);
        $('#magenta').attr('disabled', false);
        }
    });

    $('#modelo_fotocondutor').attr('disabled', true);
    $('#fotocondutor').change(function(){
        if ($('#fotocondutor').val() == 'SIM') {
            $('#modelo_fotocondutor').attr('disabled', false);
        } else if ($('#fotocondutor').val() == 'NÃO') {
            $('#modelo_fotocondutor').attr('disabled', true);
            $('#modelo_fotocondutor').attr('placeholder', 'Não Possui');
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
    $('#adaptador').prop('disabled', true).trigger("chosen:updated");
    $('#tipo_conexao').change(function(){
        if ($('#tipo_conexao').val() == 'NENHUM') {
            $('#adaptador').prop('disabled', true).trigger("chosen:updated");
        } else if ($('#tipo_conexao').val() == 'ETHERNET') {
            $('#adaptador').prop('disabled', false).trigger("chosen:updated");
        } else if ($('#tipo_conexao').val() == 'LPT') {
            $('#adaptador').prop('disabled', false).trigger("chosen:updated");
        } else if ($('#tipo_conexao').val() == 'USB') {
            $('#adaptador').prop('disabled', false).trigger("chosen:updated");
        } else if ($('#tipo_conexao').val() == 'WI-FI') {
            $('#adaptador').prop('disabled', false).trigger("chosen:updated");
        }
    });

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
