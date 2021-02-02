
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Inserir do produto </h1>
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
                            <h3 class="card-title">Inserir Produto</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="?pg=inserirItem" method="POST">
                           
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nome">Nome do produto</label>
                                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do Produto">

                                    </div>
                                    <div class="form-group">
                                        <label for="tipo">Classificação</label>
                                        <input type="text" name="tipo" class="form-control" id="tipo" placeholder="Tipo do produto">
                                    </div>
                                    <div class="form-group">
                                        <label for="valor">Preço</label>
                                        <input type="text" name="valor" class="form-control" id="valor" placeholder="R$" >
                                    </div>
                 
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer text-right">
                                    <a href="?pg=produtos"><button type="submit" class="btn btn-success"><i class="fas fa-plus" ></i> Criar</button></a>
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
    <a href="?pg=produtos"><button class="btn btn-success ml-4"><i class="fas fa-reply" ></i> Voltar a lista de produtos</button></a>

</div>
