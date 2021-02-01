
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar do produto </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">           
                         <?php
                                foreach ($dados as $dado) {
                                    echo $dado ['nome'] . '<br />';
                                }
                                ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form  action="?pg=editarItem" method="POST">
                            
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nome">Cliente</label>
                                    <input value="<?php echo $dado ['nome'];?>" type="text" name="nome" class="form-control" id="nome" placeholder="Cliente">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">E-mail</label>
                                    <input value="<?php echo $dado ['email'];?>" type="text" name="tipo" class="form-control" id="tipo" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mensagem</label>
                                    <input value="<?php echo $dado ['mensagem'];?>" type="text" name="valor" class="disabled form-control" id="valor" placeholder="Mensagem"  disabled readonly="">
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-success"><i class="fas fa-save" ></i> Atualizar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <hr />
    <a href="?pg=produtos"><button class="btn btn-success ml-4"><i class="fas fa-reply" ></i> Voltar a lista de serviços</button></a>

</div>