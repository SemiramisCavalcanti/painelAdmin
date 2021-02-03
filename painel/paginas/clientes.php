
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detalhes do cliente </h1>
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
        <div class="container-fluid">
            <?php
            foreach ($dados as $dado) {
                 echo $dado ['nome'] . '<br />';
                 echo $dado ['email'] . '<br />';
                 echo $dado ['mensagem'] . '<br />';
            }
            ?>

        </div>
    </section>
    <hr />
    <a href="?pg=contato"><button class="btn btn-success ml-3"><i class="fas fa-save"></i> Voltar a lista de produtos</button></a>


</div>

