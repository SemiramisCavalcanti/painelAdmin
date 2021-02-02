<?php

include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';

$pg = isset($_GET['pg']);
include_once 'painel/paginas/includes/header.php';

if ($pg) {


    switch ($_GET['pg']) {
        case 'login':
            include_once 'painel/paginas/acesso/login.php';

            break;

        case 'inicial':
            include_once 'painel/site/inicio.php';
            break;

        case 'produtos':
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'itens':
            $id = $_GET ['id'];

            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT *  FROM produtos WHERE id = ' . $id);

            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtosItem.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'editarItem':


            if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
//                funçao para atualização do produto
//                    criando as variaveis
               $id = $_POST ['id'];
                $nome = $_POST ['nome'];
                $tipo = $_POST ['tipo'];
                $valor = $_POST ['valor'];
//                       criando os "parametros" ou "p"
//                   ''-> '', (sintaxe do array)
                
                $parametros = array(
                    ':id' => $id,
                    ':nome' => $nome,
                    ':tipo' => $tipo,
                    ':valor' => $valor
                );
//                atualização banco de dados
                $atualizarProduto = new Conexao();

                $atualizarProduto->intervencaoNoBanco(''
                        . 'UPDATE produtos SET '
                        . 'nome = :nome, '
                        . 'tipo = :tipo, '
                        . 'valor = :valor '
                        . 'WHERE id = :id', $parametros);

               
                include_once 'painel/paginas/includes/menus.php';
                include_once 'painel/paginas/produtos.php';
                include_once 'painel/paginas/includes/footer.php';
//                Banco de Dados -> Consulta -> (teste)
//                UPDATE produtos SET
//                nome = 'teclado numérico',
//                tipo = 'periferico',
//                valor = 55.25
//                WHERE
//                id = 2
            } else {
//                mostrar dados do produto
                $ideditarItem = isset($_GET['id']);
//                die ($ideditarItem); ele "mata" o que tem abaixo dele - para saber o que esta executando até ele
                if ($ideditarItem) {
                    $resultDados = new conexao();
                    $dados = $resultDados->selecionaDados('SELECT * FROM'
                            . ' produtos WHERE id = ' . $_GET['id']);
                    include_once 'painel/paginas/includes/menus.php';
                    include_once 'painel/paginas/editarItem.php';
                    include_once 'painel/paginas/includes/footer.php';
                } else {
                    include_once 'painel/paginas/includes/menus.php';
                    include_once 'painel/paginas/erro.php';
                    include_once 'painel/paginas/includes/footer.php';
                }
            }
            break;



        case 'servicos':
            $resultDados = new conexao;
            $dados = $resultDados->selecionaDados('SELECT *  FROM servicos');
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/servicos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'servico':
            $id = $_GET ['id'];

            $resultDados = new conexao;
            $dados = $resultDados->selecionaDados('SELECT *  FROM servicos WHERE id = ' . $id);
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/servico.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

//        case 'editarServico':
//            break;

        case 'contato':
            $resultDados = new conexao;
            $dados = $resultDados->selecionaDados('SELECT *  FROM contato');
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'cliente':
            $id = $_GET ['id'];

            $resultDados = new conexao;
            $dados = $resultDados->selecionaDados('SELECT *  FROM contato WHERE id = ' . $id);
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/clientes.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

//        case 'editarClientes':
//            break;

        case 'dashboard':
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;


        case 'verificarlogin':
            if (verificarlogin()) {
                include_once 'painel/paginas/includes/menus.php';
                include_once 'painel/paginas/dashboard.php';
                include_once 'painel/paginas/includes/footer.php';
            } else {
                include_once 'painel/paginas/senhaerro.php';
            }
            break;

        default:
            include_once 'painel/paginas/erro.php';
            break;
    }
} else {
//não existes    
    include_once 'painel/paginas/includes/menus.php';
    include_once 'painel/paginas/erro.php';
    include_once 'painel/paginas/includes/footer.php';
}

        
        
        
        
        
        