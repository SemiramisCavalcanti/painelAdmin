<html pt="br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Log in (v2)</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="painel/plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="painel/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="painel/dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>Painel</b> Administrativo</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">
                        Faça login para iniciar sua sessão</p>

                    <form action="?pg=verificarlogin" method="post">
                        <div class="input-group mb-3">
                            <input name="usuario" type="text" class="form-control" placeholder="Usuário">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="senha" type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">

                                    Lembre de mim
                                </label>
                            </div>                                              
                            <button type="submit" class="btn btn-primary btn-block mt-2">
                                Entrar</button>   
                        </div>
                    </form>


                    <div class="row social-auth-links text-center mt-2 mb-3">
                        <a href="?pg=inicial" class="btn btn-block btn-danger">
                            Voltar ao site
                        </a>
                    </div>
                    <!-- /.social-auth-links -->

                    <p class="mb-1">
                        <a href="forgot-password.html">
                            Esqueci a minha senha</a>
                    </p>
                    <p class="mb-0">
                        <a href="register.html" class="text-center">
                            Registre uma nova assinatura</a>
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->
        <hr />
            <footer>
                <strong>Copyright &copy; 2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.1.0-rc
                </div>
            </footer>

        <!-- jQuery -->
        <script src="painel/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="painel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="painel/dist/js/adminlte.min.js"></script>
    </body>
</html>