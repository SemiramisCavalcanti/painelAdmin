<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!--timeline box--> 
        <div class="row">
            <div class="col-md-12 mt-3">
                <!-- The time line -->
                <div class="timeline">
                    <!-- timeline time label -->
                    <div class="time-label">
                        <span class="bg-red ml-3">Login</span>
                    </div>
                    <!-- /.timeline-label -->

                    <div class="timeline-item hold-transition">
                        <div class="login-box  m-auto">                   
                            <!-- /.login-logo -->
                            <div class="card card-outline card-pink">
                                <div class="card-header text-center">
                                    <br />
                                    <h4 class="login-box-msg">
                                        Faça login para <br />iniciar sua sessão</h4>
                                </div>
                                <br />
                                <div class="card-body">
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
                                        <div class="icheck-primary mb-3">
                                            <input type="checkbox" id="remember">
                                            <label for="remember">

                                                Lembre de mim
                                            </label>
                                        </div>    

                                        <button type="submit" class="btn btn-outline-primary btn-block mt-2">
                                            Entrar</button>   

                                    </form>


                                    <div class="row social-auth-links text-center mt-2 mb-3">
                                        <a href="?pg=inicial" class="btn btn-block btn-outline-danger">
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

                        </div>
                    </div>
                    <!-- /.card -->
                    <!-- /.login-box -->

                    <br />
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-user-check bg-blue"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header"><a href="#">Cadastro</a> ...</h3>

                            <div class="timeline-body">
                                <form action="?pg=inserirContato" method="POST">
                                    <div class="card-body row">
                                        <div class="form-group col">
                                            <label for="nome">Nome completo</label>
                                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">

                                        </div>
                                        <div class="form-group col">
                                            <label for="tipo">Email</label>
                                            <input type="text" name="email" class="form-control" id="email" placeholder="nome@email.com">
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer row ">
                                        <div class="col text-left">
                                            <div class="icheck-primary">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">
                                                    Desejo receber notícias
                                                </label>
                                            </div></div>
                                        <div class="col text-right  ">
                                            <a href="?pg=produtos"><button type="submit" class="btn btn-primary"><i class="fas fa-plus" ></i> Enviar</button></a>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- END timeline item -->
                    <br />
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-road bg-info"></i>
                        <div class="timeline-item text-center">

                            <div class="timeline-header row">
                                <div class="col">
                                    <a href="?pg=login"><button class="btn btn-info btn-sm "><i class="fas fa-angle-double-up"></i> Topo</button></a>  
                                </div>
                                <div class="col">
                                    <a href="?pg=inicial"><button class="btn btn-info btn-sm "><i class="fas fa-home"></i> Home</button></a>
                                </div>
                                <div class="col">
                                    <a href="?pg=sobre"><button class="btn btn-info btn-sm "><i class="fas fa-book-open"></i> Sobre</button></a>
                                </div>
                                <div class="col">
                                    <a href="?pg=contatosite"><button class="btn btn-info btn-sm "><i class="fas fa-user-friends"></i> Contato</button></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                </div>

            </div>
        </div>

    </div>
</div>


