<?php
$resultDados = new Conexao();
$dados = $resultDados->selecionaDados('SELECT * FROM produtos');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Produtos </h1>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable com recursos mínimos e estilos de foco</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card">
                            <div class="card-header text-right">
             
                                <!-- Navbar Search -->
                                <div id="example1_filter" class="dataTables_filter">
                                    <label><input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="tabela-produtos" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Cod</th>
                                            <th>Produto</th>
                                            <th>Tipo</th>
                                            <th>Valor</th>
                                            <th><a href="?pg=inserirItem" class="btn btn-warning"> 
                                                    <span class="fa fa-plus"></span> <strong> Criar produto</strong>
                                                </a> </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        foreach ($dados as $dado) {
                                            ?>
                                            <tr>
                                                <td><?php echo $dado ['id']; ?></td>
                                                <td><?php echo $dado ['nome']; ?></td>
                                                <td><?php echo $dado ['tipo']; ?></td>
                                                <td><?php echo $dado ['valor']; ?></td>
                                                <td>
                                                    <!--vizualiza-->
                                                    <a href="?pg=itens&id=<?php echo $dado['id']; ?>" class="btn btn-success">
                                                        <span class="fa fa-eye"></span>
                                                    </a>
                                                    <!--editar-->
                                                    <a href="?pg=editarItem&id=<?php echo $dado['id']; ?>" class="btn btn-primary">
                                                        <span class="fa fa-edit"></span>
                                                    </a>
                                                    <!--apagar-->
                                                    <a href="?pg=excluirItem&id=<?php echo $dado['id']; ?>" class="btn btn-secondary">
                                                        <span class="fa fa-trash"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>




                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Cod</th>
                                            <th>Produto</th>
                                            <th>Tipo</th>
                                            <th>Valor</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>