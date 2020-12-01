<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>SYSNTI | Efetue Login para continuar...</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- Bootstrap Css -->
        <link href="<?= asset('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= asset('assets/css/icons.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?= asset('assets/css/app.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- Sysnti Css-->
        <link href="<?= asset('assets/css/sysnti.css'); ?>" rel="stylesheet" type="text/css" />
    </head>

    <body style="background-color: #73757A">
        <div class="account-pages my-4 pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <img src="<?= asset('assets/images/sysnti.svg'); ?>" height="80" alt="logo">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center login">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <p class="mb-5 text-center">- RECUPERAR SENHA DE ACESSO -</p>
                                    @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-warning alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    Insira o seu <b>Email</b> e siga as instruções enviadas!
                                                </div>
                                                <div class="form-group mb-4">
                                                    <input type="email" id="email" class="form-control" name="email" placeholder="E-MAIL CADASTRADO" :value="old('email')" required autofocus>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">ENVIAR LINK</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <p class="text-white">Desenvolvido pelo Núcleo de Tecnologia da Informação <br><i class="mdi mdi-copyright mr-1"></i>2020 - Prefeitura de Cruz/CE</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->
        <!-- JAVASCRIPT -->
        <script src="<?= asset('assets/libs/jquery/jquery.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/metismenu/metisMenu.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/simplebar/simplebar.min.js'); ?>"></script>
        <script src="<?= asset('assets/libs/node-waves/waves.min.js'); ?>"></script>
        <script src="<?= asset('assets/js/app.js'); ?>"></script>
    </body>
</html>
