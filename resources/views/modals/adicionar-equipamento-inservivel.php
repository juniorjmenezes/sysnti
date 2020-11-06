<div class="modal fade" id="adicionarInservivel" tabindex="-1" role="dialog" aria-labelledby="adicionarInservivel" aria-hidden="true">
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
                    <strong>Atenção!</strong> Antes de prosseguir, detalhe o Equipamento Inservível a ser cadastrado.
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <h5 class="font-size-14">Motivo</h5>
                        <div class="chosen-select-act fm-cmp-mg">
                            <select class="chosen form-control" name="motivo">
                                <option disabled selected>SELECIONE...</option>
                                <option>ALTO CUSTO</option>
                                <option>IRRECUPERÁVEL</option>
                                <option>OBSOLETO</option>
                                <option>OUTRO</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <h5 class="font-size-14">
                            Declarado Inservível em</h5>
                        <div class="input-group">
                            <input type="text" class="form-control input-mask" name="data_inservivel" data-inputmask="'mask': '99/99/9999'">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <h5 class="font-size-14">Leilão</h5>
                        <div class="chosen-select-act fm-cmp-mg">
                            <select class="chosen form-control" name="tipo_remanejo">
                                <option disabled selected>CATALOGADO PARA LEILÃO?</option>
                                <option>SIM</option>
                                <option>NÃO</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <h5 class="font-size-14">Mais Detalhes</h5>
                        <textarea class="form-control" name="mais_detalhes" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">PROSSEGUIR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
