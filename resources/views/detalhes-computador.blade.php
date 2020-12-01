@include('layouts.header')

@include('layouts.menu')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content addEquipment">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">DETALHES DO COMPUTADOR</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Inventário</a></li>
                                            <li class="breadcrumb-item active">Detalhes do Equipamento</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#alocacao" role="tab">
                                                    <i class="ti-home mr-1 align-middle"></i>
                                                    <span class="d-none d-md-inline-block">ALOCAÇÃO</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#cadastro" role="tab">
                                                    <i class="ti-clipboard mr-1 align-middle"></i>
                                                    <span class="d-none d-md-inline-block">DETALHES DO CADASTRO</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content p-3">
                                            <div class="tab-pane active" id="alocacao" role="tabpanel">
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">SECRETARIA</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->secretaria->nome}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">SETOR</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->setor->nome}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">PATRIMÔNIO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->patrimonio}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">STATUS</p>
                                                        @php
                                                        switch ($computador['status'])
                                                        {
                                                            case 'ATIVO':
                                                                $class = 'text-success';
                                                            break;
                                                            case 'REMANEJADO':
                                                                $class = 'text-primary';
                                                            break;
                                                            case 'MANUTENÇÃO':
                                                                $class = 'text-danger';
                                                            break;
                                                            case 'INSERVÍVEL':
                                                                $class = 'text-danger';
                                                            break;
                                                        }
                                                        @endphp
                                                        <h5 class="font-size-15 mb-0"><i class="mdi mdi-checkbox-blank-circle @php echo $class @endphp mr-1"></i>{{$computador->status}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="cadastro" role="tabpanel">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <p class="mb-1 font-size-12">ADICIONADO POR</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->tecnico->name}}</h5>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="mb-1 font-size-12">ADICIONADO EM</p>
                                                        <h5 class="font-size-15 mb-0">{{ date('d/m/Y h:i:s', strtotime($computador->created_at)) }}</h5>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="mb-1 font-size-12">ÚLTIMA ALTERAÇÃO</p>
                                                        <h5 class="font-size-15 mb-0">{{ date('d/m/Y h:i:s', strtotime($computador->updated_at)) }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#hardware" role="tab">
                                                    <i class="ti-desktop mr-1 align-middle"></i>
                                                    <span class="d-none d-md-inline-block">HARDWARE</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#software" role="tab">
                                                    <i class="ti-save mr-1 align-middle"></i>
                                                    <span class="d-none d-md-inline-block">SOFTWARE</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#perifericos" role="tab">
                                                    <i class="ti-package mr-1 align-middle"></i>
                                                    <span class="d-none d-md-inline-block">PERIFÉRICOS</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#rede" role="tab">
                                                    <i class="ti-world mr-1 align-middle"></i>
                                                    <span class="d-none d-md-inline-block">REDE E CONEXÃO</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#servicos" role="tab">
                                                    <i class="ti-settings mr-1 align-middle"></i>
                                                    <span class="d-none d-md-inline-block">SERVIÇOS</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#observacoes" role="tab">
                                                    <i class="ti-comment-alt mr-1 align-middle"></i>
                                                    <span class="d-none d-md-inline-block">OBSERVAÇÕES</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content p-3">
                                            <div class="tab-pane active" id="hardware" role="tabpanel">
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">TIPO DE COMPUTADOR</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->tipo_computador}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">MARCA</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->marca}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">MODELO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->modelo}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">SÉRIE</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->serie}}</h5>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">CPU</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->cpu}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">MEMÓRIA RAM</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->ram}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">HD0</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->hd0}}</h5>
                                                    </div>
                                                    @if($computador->hd1 != null)
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">HD1</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->hd1}}</h5>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="software" role="tabpanel">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <p class="mb-1 font-size-12">SISTEMA OPERACIONAL</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->so}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="perifericos" role="tabpanel">
                                                <form name="InserirPeriferico" id="InserirPeriferico" method="POST"
                                                action="{{url("inserir-periferico")}}">
                                                <input type="hidden" name="id_equipamento" value="@php echo $computador->id; @endphp">
                                                @csrf
                                                    <div class="form-group row">
                                                        <div class="col-md-2">
                                                            <input class="form-control" id="buscar-perifericos" type="text">
                                                            <input type="hidden" id="id-periferico" name="id_periferico" readonly>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input class="form-control" id="tipo-periferico" type="text" readonly>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <button type="submit" class="btn btn-primary mt-2 mt-sm-0">+</button>
                                                        </div>
                                                        <label class="col-md-2 col-form-label">Buscar Periférico</label>
                                                        <div class="col-md-4">
                                                            <input class="form-control global_filter" id="global_filter" type="text">
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <div class="table-responsive">
                                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Tipo</th>
                                                                        <th scope="col">Série/Patrimônio</th>
                                                                        <th scope="col">Marca/Modelo</th>
                                                                        <th scope="col">Secretaria/Setor</th>
                                                                        <th scope="col">Status</th>
                                                                        <th scope="col">Ações</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($perifericos_computador as $pc)
                                                                    <tr>
                                                                        <td>{{$pc->tipo_periferico}}</td>
                                                                        <td>
                                                                            <p class="mb-1 font-size-12">{{$pc->serie}}</p>
                                                                            <h5 class="font-size-15 mb-0">{{$pc->patrimonio}}</h5>
                                                                        </td>
                                                                        <td>
                                                                            <p class="mb-1 font-size-12">{{$pc->marca}}</p>
                                                                            <h5 class="font-size-15 mb-0">{{$pc->modelo}}</h5>
                                                                        </td>
                                                                        <td>
                                                                            <p class="mb-1 font-size-12">{{$pc->secretaria->nome}}</p>
                                                                            <h5 class="font-size-15 mb-0">{{$pc->setor->nome}}</h5>
                                                                        </td>
                                                                        <td>
                                                                            @php
                                                                                switch ($pc['status'])
                                                                                {
                                                                                    case 'ATIVO':
                                                                                        $class = 'text-success';
                                                                                    break;
                                                                                    case 'REMANEJADO':
                                                                                        $class = 'text-primary';
                                                                                    break;
                                                                                    case 'MANUTENÇÃO':
                                                                                        $class = 'text-danger';
                                                                                    break;
                                                                                    case 'INSERVÍVEL':
                                                                                        $class = 'text-danger';
                                                                                    break;
                                                                                }
                                                                            @endphp
                                                                            <i class="mdi mdi-checkbox-blank-circle @php echo $class; @endphp mr-1"></i> {{$pc->status}}
                                                                        </td>
                                                                        <td>
                                                                        <a href="{{url('computers-details')}}">
                                                                            <button type="button" class="btn btn-success btn-sm">D</button>
                                                                        </a>
                                                                            <button type="button" class="btn btn-warning btn-sm">E</button>
                                                                            <button type="button" class="btn btn-danger btn-sm">X</button>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="rede" role="tabpanel">
                                                @if($computador->tipo_conexao == 'NENHUM')
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <p class="mb-1 font-size-12">TIPO DE CONEXÃO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->tipo_conexao}}</h5>
                                                    </div>
                                                </div>
                                                @elseif($computador->tipo_conexao == 'ETHERNET' && $computador->enderecamento == 'ESTÁTICO')
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">TIPO DE CONEXÃO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->tipo_conexao}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ENDEREÇAMENTO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->enderecamento}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ENDEREÇO IP</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->ip}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">MÁSCARA</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->mascara}}</h5>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                    <p class="mb-1 font-size-12">HOSTNAME</p>
                                                    <h5 class="font-size-15 mb-0">{{$computador->hostname}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">GRUPO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->grupo}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ID TEAMVIEWER</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->id_teamviewer}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ID SUPREMO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->id_supremo}}</h5>
                                                    </div>
                                                </div>
                                                @elseif($computador->tipo_conexao == 'ETHERNET' && $computador->enderecamento == 'DINÂMICO')
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">TIPO DE CONEXÃO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->tipo_conexao}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ENDEREÇAMENTO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->enderecamento}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ENDEREÇO IP</p>
                                                        <h5 class="font-size-15 mb-0">FORNECIDO POR DHCP</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">MÁSCARA</p>
                                                        <h5 class="font-size-15 mb-0">FORNECIDO POR DHCP</h5>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                    <p class="mb-1 font-size-12">HOSTNAME</p>
                                                    <h5 class="font-size-15 mb-0">{{$computador->hostname}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">GRUPO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->grupo}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ID TEAMVIEWER</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->id_teamviewer}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ID SUPREMO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->id_supremo}}</h5>
                                                    </div>
                                                </div>
                                                @elseif($computador->tipo_conexao == 'WI-FI' && $computador->enderecamento == 'ESTÁTICO')
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">TIPO DE CONEXÃO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->tipo_conexao}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ENDEREÇAMENTO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->enderecamento}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ENDEREÇO IP</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->ip}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">MÁSCARA</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->mascara}}</h5>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                    <p class="mb-1 font-size-12">HOSTNAME</p>
                                                    <h5 class="font-size-15 mb-0">{{$computador->hostname}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">GRUPO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->grupo}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ID TEAMVIEWER</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->id_teamviewer}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ID SUPREMO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->id_supremo}}</h5>
                                                    </div>
                                                </div>
                                                @elseif($computador->tipo_conexao == 'WI-FI' && $computador->enderecamento == 'DINÂMICO')
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">TIPO DE CONEXÃO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->tipo_conexao}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ENDEREÇAMENTO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->enderecamento}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ENDEREÇO IP</p>
                                                        <h5 class="font-size-15 mb-0">FORNECIDO POR DHCP</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">MÁSCARA</p>
                                                        <h5 class="font-size-15 mb-0">FORNECIDO POR DHCP</h5>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                    <p class="mb-1 font-size-12">HOSTNAME</p>
                                                    <h5 class="font-size-15 mb-0">{{$computador->hostname}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">GRUPO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->grupo}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ID TEAMVIEWER</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->id_teamviewer}}</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <p class="mb-1 font-size-12">ID SUPREMO</p>
                                                        <h5 class="font-size-15 mb-0">{{$computador->id_supremo}}</h5>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="tab-pane" id="servicos" role="tabpanel">
                                                <p class="mb-0">
                                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                    mi whatever gluten-free.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="observacoes" role="tabpanel">
                                                <p class="mb-0">
                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                    art party before they sold out master cleanse gluten-free squid
                                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral,
                                                    mustache.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        <script src="<?= asset('assets/libs/metismenu/metisMenu.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/simplebar/simplebar.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/node-waves/waves.min.js'); ?>"></script>
        <script src="<?= asset('assets/js/app.js'); ?>"></script>
        <script src="<?= asset('assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js'); ?>"></script>
        <!-- form mask -->
        <script src="<?= asset('assets/libs/inputmask/min/jquery.inputmask.bundle.min.js'); ?>"></script>
        <!-- form mask init -->
        <script src="<?= asset('assets/js/pages/form-mask.init.js'); ?>"></script>
        <!-- Jquery autocomplete -->
        <script src="<?= asset('assets/libs/jquery-ui-dist/jquery-ui.min.js'); ?>"></script>
        <!-- form advanced init -->
        <script src="<?= asset('assets/js/pages/form-advanced.init.js'); ?>"></script>
        <!-- Required datatable js -->
        <script src="<?= asset('assets/libs/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
        <!-- Datatable init js -->
        <script src="<?= asset('assets/js/pages/datatables.init.js'); ?>"></script>
        <script>
            $("#buscar-perifericos").autocomplete({
                source: function( request, response ) {
                // Fetch data
                $.ajax({
                    url:"{{url('api/perifericos')}}",
                    dataType: "json",
                    data: {
                    search: request.term
                    },
                    success: function( data ) {
                    response( data );
                    }
                });
                },
                select: function (event, ui) {
                // Set selection
                $('#id-periferico').val(ui.item.id); // save selected id to input
                $('#buscar-perifericos').val(ui.item.label); // display the selected text
                $('#tipo-periferico').val(ui.item.desc);
                return false;
                }
            });
        </script>
    </body>
</html>
