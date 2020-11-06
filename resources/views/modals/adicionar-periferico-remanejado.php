<div class="modal fade" id="adicionarRemanejado" tabindex="-1" role="dialog" aria-labelledby="adicionarRemanejado" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="teste">ADICIONAR DETALHES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Atenção!</strong> Antes de prosseguir, detalhe o Remanejamento do Periférico a ser cadastrado!
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <h5 class="font-size-14">Secretaria de Origem</h5>
                        <div class="chosen-select-act fm-cmp-mg">
                            <select class="chosen form-control" name="secretaria">
                                <option disabled selected>SELECIONE...</option>
                                <option>COG</option>
                                <option>PGM</option>
                                <option>SEGAD</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <h5 class="font-size-14">Setor de Origem</h5>
                        <div class="chosen-select-act fm-cmp-mg">
                            <select class="chosen form-control" name="setor">
                                <option disabled selected>SELECIONE...</option>
                                <option>NTI</option>
                                <option>OUVIDORIA GERAL</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <h5 class="font-size-14">Data do Remanejo</h5>
                        <div class="input-group">
                            <input type="text" class="form-control input-mask" name="data_remanejo" data-inputmask="'mask': '99/99/9999'">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <h5 class="font-size-14">Tipo de Remanejo</h5>
                        <div class="chosen-select-act fm-cmp-mg">
                            <select class="chosen form-control" name="tipo_remanejo">
                                <option disabled selected>SELECIONE...</option>
                                <option>DEFINITIVO</option>
                                <option>TEMPORÁRIO</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">PROSSEGUIR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
