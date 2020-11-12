@include('layouts.header')

@include('layouts.menu')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content adicionar-periferico">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">CADASTRAR NOVO PERIFÉRICO</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Inventário</a></li>
                                            <li class="breadcrumb-item active">Novo Periférico</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <form name="CadastrarPeriferico" id="CadastrarPeriferico" method="POST"
                        action="{{ url('adicionar-periferico') }}">
                        @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">DADOS GERAIS</h4>
                                            <p class="card-title-desc">Insira os dados de Alocação, Patrimônio e dados gerais do Periférico.</p>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Secretaria</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="id_secretaria">
                                                            <option disabled value="" selected>SELECIONE...</option>
                                                            @foreach($secretarias as $secretaria)
                                                            @if (old('id_secretaria') == $secretaria->id)
                                                            <option value="{{$secretaria->id}}" selected>{{$secretaria->nome}}</option>
                                                            @else
                                                            <option value="{{$secretaria->id}}">{{$secretaria->nome}}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Setor</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="id_setor">
                                                            <option disabled value="" selected>SELECIONE...</option>
                                                            @foreach($setores as $setor)
                                                            @if (old('id_setor') == $setor->id)
                                                            <option value="{{$setor->id}}" selected>{{$setor->nome}}</option>
                                                            @else
                                                            <option value="{{$setor->id}}">{{$setor->nome}}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Patrimônio</label>
                                                <div class="col-md-4">
                                                    <input id="patrimonio" class="form-control input-mask" name="patrimonio" type="text" value="" data-inputmask="'mask': '9', 'repeat': 5, 'greedy' : false" im-insert="true" maxlength="5">
                                                </div>
                                                <label class="col-md-2 col-form-label">Status</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select id="status" class="chosen custom-select form-control" name="status">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>ATIVO</option>
                                                            <option>INSERVÍVEL</option>
                                                            <option>MANUTENÇÃO</option>
                                                            <option>REMANEJADO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Tipo de Periférico</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select id="tipo_periferico" class="chosen custom-select form-control" name="tipo_periferico">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>AUTOTRANSFORMADOR</option>
                                                            <option>ESTABILIZADOR</option>
                                                            <option>NO-BREAK</option>
                                                            <option>MÓDULO ISOLADOR</option>
                                                            <option>MONITOR</option>
                                                            <option>WEBCAM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label for="example-text-input" class="col-md-2 col-form-label">Número de Série</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="serie" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Marca</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="marca" type="text" value="">
                                                </div>
                                                <label for="example-text-input" class="col-md-2 col-form-label">Modelo</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="modelo" type="text" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <!-- Modals -->
                            @include('modals.adicionar-periferico-remanejado')
                            @include('modals.adicionar-periferico-inservivel')
                            <!-- end Modals -->
                            <div id="autotransformador" class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">AUTOTRANSFORMADOR</h4>
                                            <p class="card-title-desc">Insira os dados necessários.</p>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Padrão de Tomadas</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="padrao_tomadas_atr">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>ANTIGO</option>
                                                            <option>NBR 14136</option>
                                                            <option>NEMA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">VA</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="va_atr" type="text" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div id="estabilizador" class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">ESTABILIZADOR</h4>
                                            <p class="card-title-desc">Insira os dados necessários.</p>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Padrão de Tomadas</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="padrao_tomadas_est">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>ANTIGO</option>
                                                            <option>NBR 14136</option>
                                                            <option>NEMA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">VA</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="va_est" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Voltagem Entrada</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="volt_entrada_est">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>110V</option>
                                                            <option>220V</option>
                                                            <option>BIVOLT</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Voltagem Saída</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="volt_saida_est">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>110V</option>
                                                            <option>220V</option>
                                                            <option>BIVOLT</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Quantidade Tomadas</label>
                                                <div class="col-md-4">
                                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                        <input data-toggle="touchspin" type="text" value="1" class="form-control" name="quantidade_tomadas_est">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div id="nobreak" class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">NO-BREAK</h4>
                                            <p class="card-title-desc">Insira os dados necessários.</p>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Padrão de Tomadas</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="padrao_tomadas_nbr">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>ANTIGO</option>
                                                            <option>NBR 14136</option>
                                                            <option>NEMA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">VA</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="va_nbr" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Voltagem Entrada</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="volt_entrada_nbr">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>110V</option>
                                                            <option>220V</option>
                                                            <option>BIVOLT</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Voltagem Saída</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="volt_saida_nbr">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>110V</option>
                                                            <option>220V</option>
                                                            <option>BIVOLT</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Quantidade Tomadas</label>
                                                <div class="col-md-4">
                                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                        <input data-toggle="touchspin" type="text" value="1" class="form-control" name="quantidade_tomadas_nbr">
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Quantidade Baterias</label>
                                                <div class="col-md-4">
                                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                        <input data-toggle="touchspin" type="text" value="1" class="form-control" name="quantidade_baterias_nbr">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div id="modulo_isolador" class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">MÓDULO ISOLADOR</h4>
                                            <p class="card-title-desc">Insira os dados necessários.</p>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Padrão de Tomadas</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="padrao_tomadas_mdi">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>ANTIGO</option>
                                                            <option>NBR 14136</option>
                                                            <option>NEMA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">VA</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="va_mdi" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Voltagem Entrada</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="volt_entrada_mdi">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>110V</option>
                                                            <option>220V</option>
                                                            <option>BIVOLT</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Voltagem Saída</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="volt_saida_mdi">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>110V</option>
                                                            <option>220V</option>
                                                            <option>BIVOLT</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Quantidade Tomadas</label>
                                                <div class="col-md-4">
                                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                        <input data-toggle="touchspin" type="text" value="1" class="form-control" name="quantidade_tomadas_mdi">
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Estabilizador</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="estabilizador_mdi">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>SIM</option>
                                                            <option>NÃO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div id="monitor" class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">MONITOR</h4>
                                            <p class="card-title-desc">Insira os dados necessários.</p>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Tipo de Tela</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="tipo_tela_mnt">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>CRT</option>
                                                            <option>LCD</option>
                                                            <option>LED</option>
                                                            <option>OLED</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Tamanho Tela</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="tamanho_tela_mnt" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Conexões</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="conexoes_mnt">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>VGA</option>
                                                            <option>VGA/DVI</option>
                                                            <option>VGA/HDMI</option>
                                                            <option>VGA/HDMI/DVI</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Padrão de Tomadas</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="padrao_tomadas_mnt">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>ANTIGO</option>
                                                            <option>NBR 14136</option>
                                                            <option>NEMA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div id="webcam" class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">WEBCAM</h4>
                                            <p class="card-title-desc">Insira os dados necessários.</p>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Resolução</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="resolucao_wbc">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>VGA</option>
                                                            <option>HD</option>
                                                            <option>FULL HD</option>
                                                            <option>4K OU SUPERIOR</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Microfone</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="microfone_wbc">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>SIM</option>
                                                            <option>NÃO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">TÉCNICO</h4>
                                            <p class="card-title-desc">Selecione o Técnico responsável pelo cadastro.</p>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Técnico</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="id_user">
                                                            <option disabled value="" selected>SELECIONE...</option>
                                                            @foreach($users as $tecnico)
                                                            @if (old('id_setor') == $tecnico->id)
                                                            <option value="{{$tecnico->id}}" selected>{{$tecnico->name}}</option>
                                                            @else
                                                            <option value="{{$tecnico->id}}">{{$tecnico->name}}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Data do Cadastro</label>
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input-mask" name="data_cadastro" data-inputmask="'mask': '99/99/9999'">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-8 mt-3">
                                                    <button type="submit" class="btn btn-primary mt-sm-0">SALVAR</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                        <!-- end row -->
                        </form>
                    </div>
                </div>
                <!-- End Page-content -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2019 © Apaxy.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom rightbar-nav-tab nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link py-3 active" data-toggle="tab" href="#chat-tab" role="tab">
                            <i class="mdi mdi-message-text font-size-22"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" data-toggle="tab" href="#tasks-tab" role="tab">
                            <i class="mdi mdi-format-list-checkbox font-size-22"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" data-toggle="tab" href="#settings-tab" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <i class="mdi mdi-settings font-size-22"></i>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="chat-tab" role="tabpanel">

                        <form class="search-bar py-4 px-3">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>

                        <h6 class="font-weight-medium px-4 mt-2 text-uppercase">Group Chats</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-success"></i>
                                <span class="mb-0 mt-1">App Development</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-warning"></i>
                                <span class="mb-0 mt-1">Office Work</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-danger"></i>
                                <span class="mb-0 mt-1">Personal Group</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                <span class="mb-0 mt-1">Freelance</span>
                            </a>
                        </div>

                        <h6 class="font-weight-medium px-4 mt-4 text-uppercase">Favourites</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-10.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Andrew Mackie</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Rory Dalyell</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-9.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Jaxon Dunhill</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <h6 class="font-weight-medium px-4 mt-4 text-uppercase">Other Chats</h6>

                        <div class="p-2 pb-4">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Jackson Therry</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Charles Deakin</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Ryan Salting</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">If several languages coalesce the grammar of the resulting.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Sean Howse</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Dean Coward</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-3">
                                        <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Hayley East</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="tab-pane" id="tasks-tab" role="tabpanel">
                        <h6 class="font-weight-medium px-3 mb-0 mt-4">Working Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">App Development<span class="float-right">75%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Database Repair<span class="float-right">37%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Backup Create<span class="float-right">52%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <h6 class="font-weight-medium px-3 mb-0 mt-4">Upcoming Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Sales Reporting<span class="float-right">12%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Redesign Website<span class="float-right">67%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">New Admin Design<span class="float-right">84%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <div class="p-3 mt-2">
                            <a href="javascript: void(0);" class="btn btn-success btn-block waves-effect waves-light">Create Task</a>
                        </div>

                    </div>
                    <div class="tab-pane" id="settings-tab" role="tabpanel">
                            <h6 class="font-weight-medium px-4 py-3 text-uppercase bg-light">General Settings</h6>

                        <div class="p-4">
                            <h6 class="font-weight-medium">Online Status</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check1" name="settings-check1" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check1">Show your status to all</label>
                            </div>

                            <h6 class="font-weight-medium mt-4">Auto Updates</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check2" name="settings-check2" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check2">Keep up to date</label>
                            </div>

                            <h6 class="font-weight-medium mt-4">Backup Setup</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check3" name="settings-check3">
                                <label class="custom-control-label font-weight-normal" for="settings-check3">Auto backup</label>
                            </div>

                        </div>

                        <h6 class="font-weight-medium px-4 py-3 mt-2 text-uppercase bg-light">Advanced Settings</h6>

                        <div class="p-4">
                            <h6 class="font-weight-medium">Application Alerts</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check4" name="settings-check4" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check4">Email Notifications</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check5" name="settings-check5">
                                <label class="custom-control-label font-weight-normal" for="settings-check5">SMS Notifications</label>
                            </div>

                            <h6 class="font-weight-medium mt-4">API</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check6" name="settings-check6">
                                <label class="custom-control-label font-weight-normal" for="settings-check6">Enable access</label>
                            </div>

                        </div>
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?= asset('assets/libs/jquery/jquery.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <!-- side menu -->
        <script src="<?= asset('assets/libs/metismenu/metisMenu.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/simplebar/simplebar.min.js'); ?>"></script>
        <!-- other menu bar -->
        <script src="<?= asset('assets/js/app.js'); ?>"></script>
        <!-- chosen jquery -->
        <script src="<?= asset('assets/js/chosen.jquery.js'); ?>"></script>
        <script src="<?= asset('assets/js/pages/chosen.init.js'); ?>"></script>
        <!-- bootstrap libs -->
        <script src="<?= asset('assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js'); ?>"></script>
        <!-- form mask -->
        <script src="<?= asset('assets/libs/inputmask/min/jquery.inputmask.bundle.min.js'); ?>"></script>
        <!-- form mask init -->
        <script src="<?= asset('assets/js/pages/form-mask.init.js'); ?>"></script>
        <!-- form advanced init -->
        <script src="<?= asset('assets/js/pages/form-advanced.init.js'); ?>"></script>
        <!-- alertify -->
        <script src="<?= asset('assets/libs/alertifyjs/build/alertify.js'); ?>"></script>
        <!-- sysnti addons -->
        <script src="<?= asset('assets/js/pages/adicionar-periferico.js'); ?>"></script>
        @if (session('mensagem'))
        <script>
            function alertas() {
                alertify.set('notifier','position', 'bottom-center');
                alertify.success("{{ session('mensagem') }}")
            }

            alertas();
        </script>
        @endif
    </body>

</html>
