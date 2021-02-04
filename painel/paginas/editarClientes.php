
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar Cliente </h1>
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
                        <form action="?pg=editarClientes" method="POST">
                            <?php foreach ($dados as $dado) { ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nome">Nome do completo</label>
                                        <input value="<?php echo $dado ['nome']; ?>" type="text" name="nome" class="form-control" id="nome">

                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input value="<?php echo $dado ['email']; ?>" type="text" name="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="mensagem">Mensagem</label>
                                        <input value="<?php echo $dado ['mensagem']; ?>" type="text" name="mensagem" class="form-control" id="mensagem" disabled>
                                    </div>
                                    <input type="hidden" value="<?php echo $dado ['id']; ?>" name="id" />

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-right">
                                    <a href="?pg=contato"><button type="submit" class="btn btn-success"><i class="fas fa-save" ></i> Atualizar</button></a>
                                </div>
                            <?php } ?>
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
    <a href="?pg=contato"><button class="btn btn-success ml-3"><i class="fas fa-save"></i> Voltar a lista de produtos</button></a>

</div>