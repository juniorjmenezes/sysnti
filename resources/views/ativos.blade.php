        @include('layouts.header')

        @include('layouts.menu')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">EQUIPAMENTOS ATIVOS</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">SYSNTI</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Inventário</a></li>
                                        <li class="breadcrumb-item active">Ativos</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-sm-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="font-size-14">INSERVÍVEIS</h5>
                                        </div>
                                        <div class="avatar-xs">
                                            <span class="rounded-circle">
                                                <img style="width: 100%" src="<?= asset('assets/images/icons/inservivel.svg'); ?>">
                                            </span>
                                        </div>
                                    </div>
                                    <h4 class="m-0 align-self-center">{{$inserviveis->count()}}</h4>
                                    <p class="mb-0 mt-3 text-muted">Último Patrimônio Inserido: <span class="text-primary">@isset($ult_inservivel){{$ult_inservivel->patrimonio }} @endisset</span></p>
                                    <div class="media-footer mt-3">
                                        <a href="{{url('equipamentos-inserviveis')}}" class="btn btn-info btn-sm waves-effect waves-light">LISTAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="font-size-14">MANUTENÇÃO</h5>
                                        </div>
                                        <div class="avatar-xs">
                                            <span class="rounded-circle">
                                                <img style="width: 100%" src="<?= asset('assets/images/icons/manutencao.svg'); ?>">
                                            </span>
                                        </div>
                                    </div>
                                    <h4 class="m-0 align-self-center">{{$manutencao->count()}}</h4>
                                    <p class="mb-0 mt-3 text-muted">Último Patrimônio Inserido: <span class="text-primary">@isset($ult_manutencao){{$ult_manutencao->patrimonio }} @endisset</span></p>
                                    <div class="media-footer mt-3">
                                        <a href="{{url('equipamentos-em-manutencao')}}" class="btn btn-info btn-sm waves-effect waves-light">LISTAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 class="font-size-14">REMANEJADOS</h5>
                                        </div>
                                        <div class="avatar-xs">
                                            <span class="rounded-circle">
                                                <img style="width: 100%" src="<?= asset('assets/images/icons/remanejado.svg'); ?>">
                                            </span>
                                        </div>
                                    </div>
                                    <h4 class="m-0 align-self-center">{{$remanejados->count()}}</h4>
                                    <p class="mb-0 mt-3 text-muted">Último Patrimônio Inserido: <span class="text-primary">@isset($ult_remanejado){{$ult_remanejado->patrimonio }} @endisset</span></p>
                                    <div class="media-footer mt-3">
                                        <a href="{{url('equipamentos-remanejados')}}" class="btn btn-info btn-sm waves-effect waves-light">LISTAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="header-title mb-0">LISTAGEM POR STATUS</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-4 text-muted text-right">TOTAL DE ATIVOS: <span class="text-primary">{{$ativos->count()}}</span></p>
                                        </div>
                                    </div>
                                    <div id="table-actions" class="form-group row">
                                        <div id="global_buttons" class="col-md-6">
                                            <button id="copy" class="btn btn-secondary buttons-html5" tabindex="0" aria-controls="datatable-equipamentos" type="button"><span><i class="fas fa-copy "></i></span></button>
                                            <button id="excel" class="btn btn-secondary buttons-html5" tabindex="0" aria-controls="datatable-equipamentos" type="button"><span><i class="fas fa-file-excel"></i></span></button>
                                            <button id="pdf" class="btn btn-secondary buttons-html5" tabindex="0" aria-controls="datatable-equipamentos" type="button"><span><i class="fas fa-file-pdf"></i></span></button>
                                            <button id="print" class="btn btn-secondary" tabindex="0" aria-controls="datatable-equipamentos" type="button"><span><i class="ti-printer"></i></span></button>
                                        </div>
                                        <label class="col-md-2 col-form-label">Buscar Equipamento</label>
                                        <div class="col-md-4">
                                            <input class="form-control global_filter" id="global_filter" type="text">
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="datatable-equipamentos" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Tipo</th>
                                                    <th scope="col">Série/Patrimônio</th>
                                                    <th scope="col">Marca/Modelo</th>
                                                    <th scope="col">Setor/Secretaria</th>
                                                    <th scope="col">Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ativos as $ativo)
                                                <tr>
                                                    <td>
                                                        <p class="mb-1 font-size-12">{{ $ativo->tipo_equipamento}}</p>
                                                        @if($ativo->tipo_computador == 'DESKTOP')
                                                            <h5 class="font-size-15 mb-0">DESKTOP</h5>
                                                        @elseif($ativo->tipo_computador == 'NOTEBOOK')
                                                            <h5 class="font-size-15 mb-0">NOTEBOOK</h5>
                                                        @elseif($ativo->tipo_computador == 'SERVIDOR')
                                                            <h5 class="font-size-15 mb-0">SERVIDOR</h5>
                                                        @elseif($ativo->tipo_impressora == 'JATO DE TINTA')
                                                            <h5 class="font-size-15 mb-0">JATO DE TINTA</h5>
                                                        @elseif($ativo->tipo_impressora == 'JATO DE TINTA')
                                                            <h5 class="font-size-15 mb-0">JATO DE TINTA</h5>
                                                        @elseif($ativo->tipo_impressora == 'LASER')
                                                            <h5 class="font-size-15 mb-0">LASER</h5>
                                                        @elseif($ativo->tipo_impressora == 'MATRICIAL')
                                                            <h5 class="font-size-15 mb-0">MATRICIAL</h5>
                                                        @elseif($ativo->tipo_impressora == 'DUPLICADOR')
                                                            <h5 class="font-size-15 mb-0">DUPLICADOR</h5>
                                                        @elseif($ativo->tipo_projetor == 'AVULSO')
                                                            <h5 class="font-size-15 mb-0">AVULSO</h5>
                                                        @elseif($ativo->tipo_projetor == 'INTEGRADO')
                                                            <h5 class="font-size-15 mb-0">INTEGRADO</h5>
                                                        @elseif($ativo->tipo_roteador == 'COM FIO')
                                                            <h5 class="font-size-15 mb-0">COM FIO</h5>
                                                        @elseif($ativo->tipo_roteador == 'SEM FIO')
                                                            <h5 class="font-size-15 mb-0">SEM FIO</h5>
                                                        @elseif($ativo->tipo_scanner == 'HORIZONTAL')
                                                            <h5 class="font-size-15 mb-0">HORIZONTAL</h5>
                                                        @elseif($ativo->tipo_scanner == 'PORTÁTIL')
                                                            <h5 class="font-size-15 mb-0">PORTÁTIL</h5>
                                                        @elseif($ativo->tipo_scanner == 'VERTICAL')
                                                            <h5 class="font-size-15 mb-0">VERTICAL</h5>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <p class="mb-1 font-size-12">{{ $ativo->serie}}</p>
                                                        <h5 class="font-size-15 mb-0">{{ $ativo->patrimonio}}</h5>
                                                    </td>
                                                    <td>
                                                        <p class="mb-1 font-size-12">{{ $ativo->marca}}</p>
                                                        <h5 class="font-size-15 mb-0">{{ $ativo->modelo}}</h5>
                                                    </td>
                                                    <td>
                                                        <p class="mb-1 font-size-12">{{ $ativo->setor->nome}}</p>
                                                        <h5 class="font-size-15 mb-0">{{ $ativo->secretaria->nome}}</h5>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-success btn-sm">D</button>
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
                    </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->
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
                                    <img src="<?= asset('assets/images/users/avatar-10.jpg'); ?>" class="rounded-circle avatar-xs" alt="user-pic">
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
                                    <img src="<?= asset('assets/images/users/avatar-1.jpg'); ?>" class="rounded-circle avatar-xs" alt="user-pic">
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
                                    <img src="<?= asset('assets/images/users/avatar-9.jpg'); ?>" class="rounded-circle avatar-xs" alt="user-pic">
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
                                    <img src="<?= asset('assets/images/users/avatar-2.jpg'); ?>" class="rounded-circle avatar-xs" alt="user-pic">
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
                                    <img src="<?= asset('assets/images/users/avatar-4.jpg'); ?>" class="rounded-circle avatar-xs" alt="user-pic">
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
                                    <img src="<?= asset('assets/images/users/avatar-5.jpg'); ?>" class="rounded-circle avatar-xs" alt="user-pic">
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
                                    <img src="<?= asset('assets/images/users/avatar-6.jpg'); ?>" class="rounded-circle avatar-xs" alt="user-pic">
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
                                    <img src="<?= asset('assets/images/users/avatar-7.jpg'); ?>" class="rounded-circle avatar-xs" alt="user-pic">
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
                                    <img src="<?= asset('assets/images/users/avatar-8.jpg'); ?>" class="rounded-circle avatar-xs" alt="user-pic">
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
        <!-- alertify -->
        <script src="<?= asset('assets/libs/alertifyjs/build/alertify.js'); ?>"></script>
        <!-- Required datatable js -->
        <script src="<?= asset('assets/libs/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
        <!-- Buttons examples -->
        <script src="<?= asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/jszip/jszip.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/pdfmake/build/pdfmake.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/pdfmake/build/vfs_fonts.js'); ?>"></script>
        <script src="<?= asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js'); ?>"></script>
        <!-- Datatable init js -->
        <script src="<?= asset('assets/js/pages/datatables.init.js'); ?>"></script>
        <script>
            $("#copy").click(function(){
            $(".buttons-copy").trigger('click');
            });
            $("#excel").click(function(){
            $(".buttons-excel").trigger('click');
            });
            $("#pdf").click(function(){
            $(".buttons-pdf").trigger('click');
            });
            $("#print").click(function(){
            $(".buttons-print").trigger('click');
            });
        </script>
    </body>
</html>
