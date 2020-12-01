<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="mySmallModalLabel">FILTRAR...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Atenção!</strong> A utilização dos filtros combinados ainda não é possível nesta versão. Utilize-os em separado!
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="chosen-select-act fm-cmp-mg">
                            <select id="filtro_tipo" class="chosen custom-select form-control">
                                <option selected>POR TIPO...</option>
                                @foreach ($p_ativos as $ativo)
                                <option>{{$ativo->tipo_impressora}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="chosen-select-act fm-cmp-mg">
                            <select id="filtro_secretaria" class="chosen custom-select form-control">
                                <option value="" selected>POR SECRETARIA...</option>
                                @foreach($secretarias as $secretaria)
                                <option>{{$secretaria->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="chosen-select-act fm-cmp-mg">
                            <select id="filtro_setor" class="chosen custom-select form-control">
                                <option value="" selected>POR SETOR...</option>
                                @foreach($setores as $setor)
                                <option>{{$setor->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary waves-effect" type="button" data-dismiss="modal">APLICAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
