<?php
foreach ($dados as $dado) {
    
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detalhes do serviço </h1>
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
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">       
                    <strong> <?php echo $dado['nome']; ?></strong></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <!--                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                            <i class="fas fa-times"></i>
                                        </button>-->
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for=""> Nome do Serviço:</label>
                    <input type="text" disabled="" 
                           value="<?php echo $dado['nome']; ?>" class="input-block-level w-75"/>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for=""> Tipo:</label>
                            <input type="text" disabled="" 
                                   value="<?php echo $dado['tipo']; ?>" class="input-block-level"/>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for=""> Valor R$</label>
                            <input type="text" disabled="" 
                                   value="<?php echo $dado['valor']; ?>" class="input-block-level"/>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.card-body -->
            <div class="card-footer text-right">
                <?php
                    foreach ($dados as $dado) {
                        ?>
                                <!--vizualiza-->
                                <a href="?pg=inserirServico" class="btn btn-warning">
                                    <span class="fa fa-plus"></span>
                                </a>
                                <!--editar-->
                                <a href="?pg=editarServico&id=<?php echo $dado['id']; ?>" class="btn btn-primary">
                                    <span class="fa fa-edit"></span>
                                </a>
                                <!--apagar-->
                                <a href="?pg=excluirServico&id=<?php echo $dado['id']; ?>" class="btn btn-secondary mr-5">
                                    <span class="fa fa-trash"></span>
                                </a>
                        <?php
                    }
                    ?>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <hr />
    <a href="?pg=servicos"><button class="btn btn-success ml-3"><i class="fas fa-save"></i> Voltar a lista de produtos</button></a>


</div>

