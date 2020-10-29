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
                                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">SYSNTI</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
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
                                                <h5 class="font-size-14">CHAMADOS</h5>
                                            </div>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-danger">
                                                    <i class="dripicons-tags"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <h4 class="m-0 align-self-center">2</h4>
                                        <p class="mb-0 mt-3 text-muted"><span class="text-danger">4.35 % <i class="mdi mdi-trending-down mr-1"></i></span> From previous period</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14">COMPUTADORES</h5>
                                            </div>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-box"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <h4 class="m-0 align-self-center">107</h4>
                                        <p class="mb-0 mt-3 text-muted"><span class="text-success">1.23 % <i class="mdi mdi-trending-up mr-1"></i></span> From previous period</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14">IMPRESSORAS</h5>
                                            </div>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-briefcase"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <h4 class="m-0 align-self-center">99</h4>
                                        <p class="mb-0 mt-3 text-muted"><span class="text-success">2.73 % <i class="mdi mdi-trending-up mr-1"></i></span> From previous period</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14">PROJETORES</h5>
                                            </div>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-tags"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <h4 class="m-0 align-self-center">25</h4>
                                        <p class="mb-0 mt-3 text-muted"><span class="text-danger">4.35 % <i class="mdi mdi-trending-down mr-1"></i></span> From previous period</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14">ROTEADORES</h5>
                                            </div>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-box"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <h4 class="m-0 align-self-center">107</h4>
                                        <p class="mb-0 mt-3 text-muted"><span class="text-success">1.23 % <i class="mdi mdi-trending-up mr-1"></i></span> From previous period</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14">SCANNERS</h5>
                                            </div>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="dripicons-briefcase"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <h4 class="m-0 align-self-center">99</h4>
                                        <p class="mb-0 mt-3 text-muted"><span class="text-success">2.73 % <i class="mdi mdi-trending-up mr-1"></i></span> From previous period</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">ÚLTIMOS CHAMADOS</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Setor/Secretaria</th>
                                                        <th scope="col">Solicitante/Motivo</th>
                                                        <th scope="col">Previsão de Atendimento</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p class="mb-1 font-size-12">NTI</p>
                                                            <h5 class="font-size-15 mb-0">SEGAD</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">EVA MUNIZ DE SOUSA</p>
                                                            <h5 class="font-size-15 mb-0">INSTALAÇÃO DE IMPRESSORA</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">13/10/2020</p>
                                                            <h5 class="font-size-15 mb-0">14:00</h5>
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-danger mr-1"></i> EM ATRASO
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm">D</button>
                                                            <button type="button" class="btn btn-warning btn-sm">E</button>
                                                            <button type="button" class="btn btn-danger btn-sm">X</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p class="mb-1 font-size-12">NTI</p>
                                                            <h5 class="font-size-15 mb-0">SEGAD</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">EVA MUNIZ DE SOUSA</p>
                                                            <h5 class="font-size-15 mb-0">INSTALAÇÃO DE SCANNER</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">14/10/2020</p>
                                                            <h5 class="font-size-15 mb-0">14:00</h5>
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> EM PRAZO
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm">D</button>
                                                            <button type="button" class="btn btn-warning btn-sm">E</button>
                                                            <button type="button" class="btn btn-danger btn-sm">X</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                        <h4 class="header-title mb-4">ÚLTIMOS COMPUTADORES ADICIONADOS</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Série/Patrimônio</th>
                                                        <th scope="col">Marca/Modelo</th>
                                                        <th scope="col">Setor/Secretaria</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p class="mb-1 font-size-12">AP1234</p>
                                                            <h5 class="font-size-15 mb-0">29928</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">JAB COMPUTADORES</p>
                                                            <h5 class="font-size-15 mb-0">UDP JAB</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">NTI</p>
                                                            <h5 class="font-size-15 mb-0">SEGAD</h5>
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> ATIVO
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm">D</button>
                                                            <button type="button" class="btn btn-warning btn-sm">E</button>
                                                            <button type="button" class="btn btn-danger btn-sm">X</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p class="mb-1 font-size-12">AP1234</p>
                                                            <h5 class="font-size-15 mb-0">29930</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">JAB COMPUTADORES</p>
                                                            <h5 class="font-size-15 mb-0">UDP JAB</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">ALMOXARIFADO</p>
                                                            <h5 class="font-size-15 mb-0">SEGAD</h5>
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-warning mr-1"></i> MANUTENÇÃO
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm">D</button>
                                                            <button type="button" class="btn btn-warning btn-sm">E</button>
                                                            <button type="button" class="btn btn-danger btn-sm">X</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                        <h4 class="header-title mb-4">ÚLTIMAS IMPRESSORAS ADICIONADAS</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Série/Patrimônio</th>
                                                        <th scope="col">Marca/Modelo</th>
                                                        <th scope="col">Setor/Secretaria</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p class="mb-1 font-size-12">AP1234</p>
                                                            <h5 class="font-size-15 mb-0">15500</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">HP</p>
                                                            <h5 class="font-size-15 mb-0">LASERJET P1102W</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">ALMOXARIFADO</p>
                                                            <h5 class="font-size-15 mb-0">SEGAD</h5>
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> ATIVO
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm">D</button>
                                                            <button type="button" class="btn btn-warning btn-sm">E</button>
                                                            <button type="button" class="btn btn-danger btn-sm">X</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p class="mb-1 font-size-12">AP1234</p>
                                                            <h5 class="font-size-15 mb-0">14778</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">BROTHER</p>
                                                            <h5 class="font-size-15 mb-0">DCP-1160</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">DIGITALIZAÇÃO</p>
                                                            <h5 class="font-size-15 mb-0">SEGAD</h5>
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-danger mr-1"></i> INSERVÍVEL
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm">D</button>
                                                            <button type="button" class="btn btn-warning btn-sm">E</button>
                                                            <button type="button" class="btn btn-danger btn-sm">X</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                        <h4 class="header-title mb-4">ÚLTIMOS PROJETORES ADICIONADOS</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Série/Patrimônio</th>
                                                        <th scope="col">Marca/Modelo</th>
                                                        <th scope="col">Setor/Secretaria</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p class="mb-1 font-size-12">AP1234</p>
                                                            <h5 class="font-size-15 mb-0">10001</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">EPSON</p>
                                                            <h5 class="font-size-15 mb-0">POWERLITE S41+</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">CEB PAULO FREIRE</p>
                                                            <h5 class="font-size-15 mb-0">SEDUC</h5>
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> ATIVO
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm">D</button>
                                                            <button type="button" class="btn btn-warning btn-sm">E</button>
                                                            <button type="button" class="btn btn-danger btn-sm">X</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p class="mb-1 font-size-12">AP1234</p>
                                                            <h5 class="font-size-15 mb-0">09001</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">ACER</p>
                                                            <h5 class="font-size-15 mb-0">x1123H</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">EEF JOÃO PAULO DE L. MAGALHÃES</p>
                                                            <h5 class="font-size-15 mb-0">SEDUC</h5>
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-danger mr-1"></i> INSERVÍVEL
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm">D</button>
                                                            <button type="button" class="btn btn-warning btn-sm">E</button>
                                                            <button type="button" class="btn btn-danger btn-sm">X</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                        <h4 class="header-title mb-4">ÚLTIMOS ROTEADORES ADICIONADOS</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Série/Patrimônio</th>
                                                        <th scope="col">Marca/Modelo</th>
                                                        <th scope="col">Setor/Secretaria</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p class="mb-1 font-size-12">AP1234</p>
                                                            <h5 class="font-size-15 mb-0">00000</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">INTELBRAS</p>
                                                            <h5 class="font-size-15 mb-0">ACTION RG 1200</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">CEB PAULO FREIRE</p>
                                                            <h5 class="font-size-15 mb-0">SEDUC</h5>
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> ATIVO
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm">D</button>
                                                            <button type="button" class="btn btn-warning btn-sm">E</button>
                                                            <button type="button" class="btn btn-danger btn-sm">X</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p class="mb-1 font-size-12">AP1234</p>
                                                            <h5 class="font-size-15 mb-0">09001</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">ACER</p>
                                                            <h5 class="font-size-15 mb-0">x1123H</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">EEF JOÃO PAULO DE L. MAGALHÃES</p>
                                                            <h5 class="font-size-15 mb-0">SEDUC</h5>
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-danger mr-1"></i> INSERVÍVEL
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm">D</button>
                                                            <button type="button" class="btn btn-warning btn-sm">E</button>
                                                            <button type="button" class="btn btn-danger btn-sm">X</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                        <h4 class="header-title mb-4">ÚLTIMOS SCANNERS ADICIONADOS</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Série/Patrimônio</th>
                                                        <th scope="col">Marca/Modelo</th>
                                                        <th scope="col">Setor/Secretaria</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p class="mb-1 font-size-12">AP1234</p>
                                                            <h5 class="font-size-15 mb-0">12345</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">EPSON</p>
                                                            <h5 class="font-size-15 mb-0">ES-400</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">LICITAÇÃO</p>
                                                            <h5 class="font-size-15 mb-0">SEGAD</h5>
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> ATIVO
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm">D</button>
                                                            <button type="button" class="btn btn-warning btn-sm">E</button>
                                                            <button type="button" class="btn btn-danger btn-sm">X</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p class="mb-1 font-size-12">AP1234</p>
                                                            <h5 class="font-size-15 mb-0">05489</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">BROTHER</p>
                                                            <h5 class="font-size-15 mb-0">ADS-2800W</h5>
                                                        </td>
                                                        <td>
                                                            <p class="mb-1 font-size-12">DIGITALIZAÇÃO</p>
                                                            <h5 class="font-size-15 mb-0">SEGAD</h5>
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> ATIVO
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm">D</button>
                                                            <button type="button" class="btn btn-warning btn-sm">E</button>
                                                            <button type="button" class="btn btn-danger btn-sm">X</button>
                                                        </td>
                                                    </tr>
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
        <script src="<?= asset('assets/libs/metismenu/metisMenu.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/simplebar/simplebar.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/node-waves/waves.min.js'); ?>"></script>

        <!-- apexcharts -->
        <script src="<?= asset('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

        <script src="<?= asset('assets/libs/slick-slider/slick/slick.min.js'); ?>"></script>

        <!-- Jq vector map -->
        <script src="<?= asset('assets/libs/jqvmap/jquery.vmap.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>

        <script src="<?= asset('assets/js/pages/dashboard.init.js'); ?>"></script>

        <script src="<?= asset('assets/js/app.js'); ?>"></script>

    </body>
</html>
