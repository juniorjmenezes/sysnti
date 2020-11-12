@include('layouts.header')

@include('layouts.menu')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content adicionar-equipamento">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">CADASTRAR NOVO EQUIPAMENTO</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Inventário</a></li>
                                            <li class="breadcrumb-item active">Novo Equipamento</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <form name="CadastarEquipamento" id="CadastrarEquipamento" method="POST"
                        action="{{ url('adicionar-equipamento') }}">
                        @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">DADOS GERAIS</h4>
                                            <p class="card-title-desc">Insira os dados de Alocação, Patrimônio e dados gerais do Equipamento.</p>
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
                                                <label class="col-md-2 col-form-label">Tipo de Equipamento</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select id="tipo_equipamento" class="chosen custom-select form-control" name="tipo_equipamento">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>COMPUTADOR</option>
                                                            <option>IMPRESSORA</option>
                                                            <option>PROJETOR</option>
                                                            <option>ROTEADOR</option>
                                                            <option>SCANNER</option>
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
                            @include('modals.adicionar-equipamento-remanejado')
                            @include('modals.adicionar-equipamento-inservivel')
                            <!-- end Modals -->
                            <div id="computador" class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">COMPUTADOR</h4>
                                            <p class="card-title-desc">Selecione o tipo de Computador e insira os dados necessários.</p>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Tipo de Computador</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="tipo_computador">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>DESKTOP</option>
                                                            <option>NOTEBOOK</option>
                                                            <option>SERVIDOR</option>
                                                            <option>OUTRO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Sistema Operacional</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="so">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>LINUX</option>
                                                            <option>MS WINDOWS XP PROFESSIONAL</option>
                                                            <option>MS WINDOWS 7 PROFESSIONAL</option>
                                                            <option>MS WINDOWS 10 Pro</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">CPU</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="cpu" type="text" value="">
                                                </div>
                                                <label class="col-md-2 col-form-label">Memória RAM</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="ram" type="text" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Quantidade HD(s)</label>
                                                <div class="col-md-4">
                                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                        <input id="discos" class="form-control" name="discos" type="text" value="1">
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">HD0</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="hd0" type="text" value="">
                                                </div>
                                            </div>
                                            <div id="hd1" class="form-group row">
                                                <label class="col-md-2 col-form-label">HD1</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="hd1" type="text" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div id="impressora" class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">IMPRESSORA</h4>
                                            <p class="card-title-desc">Selecione o tipo de Impressora e insira os dados necessários.</p>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Tipo de Impressora</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select id="tipo_impressora" class="chosen custom-select form-control" name="tipo_impressora">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>DUPLICADOR</option>
                                                            <option>JATO DE TINTA</option>
                                                            <option>LASER</option>
                                                            <option>MATRICIAL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Tipo de Cartucho</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="tipo_cartucho">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>FITA</option>
                                                            <option>TINTA</option>
                                                            <option>TONER</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Quantidade Cartuchos</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select id="cartuchos" class="chosen custom-select form-control" name="cartuchos">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>ÚNICO</option>
                                                            <option>KIT C/ 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Cartucho Preto</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="preto" type="text" value="">
                                                </div>
                                            </div>
                                            <div id="coloridos">
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Cartucho Azul</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control" name="preto" type="text" value="">
                                                    </div>
                                                    <label class="col-md-2 col-form-label">Cartucho Amarelo</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control" name="amarelo" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Cartucho Magenta</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control" name="magenta" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div id="projetor" class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">PROJETOR</h4>
                                            <p class="card-title-desc">Selecione o tipo de Projetor e insira os dados necessários.</p>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Tipo de Projetor</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select id="tipo_projetor" class="chosen custom-select form-control" name="tipo_projetor">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>AVULSO</option>
                                                            <option>INTEGRADO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Lâmpada</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="lampada" type="text" value="">
                                                </div>
                                            </div>
                                            <div id="integrado">
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Sistema Operacional</label>
                                                    <div class="col-md-4">
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen custom-select form-control" name="so_projetor">
                                                                <option disabled selected>SELECIONE...</option>
                                                                <option>LINUX</option>
                                                                <option>MS WINDOWS XP PROFESSIONAL</option>
                                                                <option>MS WINDOWS 7 PROFESSIONAL</option>
                                                                <option>MS WINDOWS 10 PRO</option>
                                                                <option>NÃO SE APLICA</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <label class="col-md-2 col-form-label">CPU</label>
                                                    <div class="col-md-4">
                                                        <input id="cpu_projetor" class="form-control input-mask" name="cpu_projetor" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Memória RAM</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control" name="ram_projetor" type="text" value="">
                                                    </div>
                                                    <label class="col-md-2 col-form-label">HD0</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control" name="hd0_projetor" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div id="roteador" class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">ROTEADOR</h4>
                                            <p class="card-title-desc">Selecione o tipo de Roteador e insira os dados necessários.</p>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Tipo de Roteador</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select id="tipo_roteador" class="chosen custom-select form-control" name="tipo_roteador">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>COM FIO</option>
                                                            <option>SEM FIO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Porta Externa</label>
                                                <div class="col-md-4">
                                                    <input class="form-control" name="porta" type="text" value="">
                                                </div>
                                            </div>
                                            <div id="sem_fio">
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Quantidade Antenas</label>
                                                    <div class="col-md-4">
                                                        <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                            <input data-toggle="touchspin" type="text" value="1" class="form-control" name="quantidade_antenas">
                                                        </div>
                                                    </div>
                                                    <label class="col-md-2 col-form-label">SSID</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control" name="ssid" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Tipo de Criptografia</label>
                                                    <div class="col-md-4">
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen custom-select form-control" name="tipo_criptografia">
                                                                <option disabled selected>SELECIONE...</option>
                                                                <option>ABERTO</option>
                                                                <option>WEP</option>
                                                                <option>WPA-PSK</option>
                                                                <option>WPA2-PSK</option>
                                                                <option>WPA/WPA2-PSK</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <label class="col-md-2 col-form-label">Senha da Rede</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control" name="senha_rede" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Usuário</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control" name="usuario" type="text" value="">
                                                    </div>
                                                    <label class="col-md-2 col-form-label">Senha</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control" name="senha" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div id="scanner" class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">SCANNER</h4>
                                            <p class="card-title-desc">Selecione o tipo de Scanner e insira os dados necessários.</p>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Tipo de Scanner</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select class="chosen custom-select form-control" name="tipo_scanner">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>HORIZONTAL</option>
                                                            <option>PORTÁTIL</option>
                                                            <option>VERTICAL</option>
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
                                            <h4 class="header-title">REDE E CONEXÃO</h4>
                                            <p class="card-title-desc">Selecione o tipo de Conexão principal (ativo) e insira os dados necessários.</p>
                                            <div id="ethernet-wifi" class="form-group row">
                                                <label class="col-md-2 col-form-label">Tipo de Conexão</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select id="tipo_conexao" class="chosen custom-select form-control" name="tipo_conexao">
                                                            <option disabled selected>SELECIONE...</option>
                                                            <option>NENHUM</option>
                                                            <option>ETHERNET</option>
                                                            <option>USB</option>
                                                            <option>WI-FI</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 col-form-label">Adaptador</label>
                                                <div class="col-md-4">
                                                    <div class="chosen-select-act fm-cmp-mg">
                                                        <select id="adaptador" class="chosen custom-select form-control" name="adaptador">
                                                            <option disabled selected>UTILIZA ADAPTADOR EXTERNO?</option>
                                                            <option>SIM</option>
                                                            <option>NÃO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="conexao">
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Versão USB</label>
                                                    <div class="col-md-4">
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select id="versao_usb" class="chosen custom-select form-control" name="versao_usb">
                                                                <option disabled selected>SELECIONE...</option>
                                                                <option>2.0</option>
                                                                <option>3.0</option>
                                                                <option>OUTRO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <label class="col-md-2 col-form-label">Ethernet</label>
                                                    <div class="col-md-4">
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select id="ethernet" class="chosen custom-select form-control" name="ethernet">
                                                                <option disabled selected>POSSUI PORTA ETHERNET?</option>
                                                                <option>SIM</option>
                                                                <option>NÃO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="rede">
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Endereçamento</label>
                                                    <div class="col-md-4">
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select id="enderecamento" class="chosen form-control" name="enderecamento">
                                                                <option disabled selected>SELECIONE...</option>
                                                                <option>DINÂMICO</option>
                                                                <option>ESTÁTICO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <label class="col-md-2 col-form-label">Internet</label>
                                                    <div class="col-md-4">
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select id="internet" class="chosen custom-select form-control" name="internet">
                                                                <option disabled selected>SE CONECTA À INTERNET?</option>
                                                                <option>SIM</option>
                                                                <option>NÃO</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="ip-mascara" class="form-group row">
                                                    <label class="col-md-2 col-form-label">Endereço IP</label>
                                                    <div class="col-md-4">
                                                        <input id="input-ip" class="form-control input-mask" name="ip" data-inputmask="'alias': 'ip'">
                                                    </div>
                                                    <label class="col-md-2 col-form-label">Máscara</label>
                                                    <div class="col-md-4">
                                                        <input id="input-ip" class="form-control input-mask" name="mascara" data-inputmask="'alias': 'ip'">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">Hostname</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control" name="hostname" type="text" value="">
                                                    </div>
                                                    <label class="col-md-2 col-form-label">Grupo</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control" name="grupo" type="text" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-2 col-form-label">ID TeamViewer</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control" name="id_teamviewer" type="text" value="">
                                                    </div>
                                                    <label class="col-md-2 col-form-label">ID Supremo</label>
                                                    <div class="col-md-4">
                                                        <input class="form-control" name="id_supremo" type="text" value="">
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
                                                    <button type="submit" class="btn btn-primary mt-5 mt-sm-0">SALVAR</button>
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
        <script src="<?= asset('assets/js/pages/adicionar-equipamento.js'); ?>"></script>
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
