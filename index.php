<?php

include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';

$pg = isset($_GET['pg']);


if ($pg) {


    switch ($_GET['pg']) {

        case 'inicial':
            include_once 'site/paginas/include/header.php';
            include_once 'site/paginas/include/navegacao.php';
            include_once 'site/paginas/inicio.php';
            include_once 'site/paginas/include/footer.php';
            break;

        case 'login':
            include_once 'site/paginas/include/header.php';
            include_once 'site/paginas/include/navegacao.php';
            include_once 'painel/paginas/acesso/login.php';
            include_once 'site/paginas/include/footer.php';

            break;


        case 'contatosite':
            include_once 'site/paginas/include/header.php';
            include_once 'site/paginas/include/navegacao.php';
            include_once 'site/paginas/contato.php';
            include_once 'site/paginas/include/footer.php';
            break;

        case 'sobre':
            include_once 'site/paginas/include/header.php';
            include_once 'site/paginas/include/navegacao.php';
            include_once 'site/paginas/sobre.php';
            include_once 'site/paginas/include/footer.php';
            break;

        case 'produtossite':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/produtos.php';
            include_once 'site/paginas/includes/footer.php';
            break;

        case 'verificarlogin':
            if (verificarlogin()) {
                include_once 'painel/paginas/includes/header.php';
                include_once 'painel/paginas/includes/menus.php';
                include_once 'painel/paginas/dashboard.php';
                include_once 'painel/paginas/includes/footer.php';
            } else {
                include_once 'site/paginas/includes/header.php';
                include_once 'site/paginas/includes/menus.php';
                include_once 'painel/paginas/senhaerro.php';
                include_once 'site/paginas/includes/footer.php';
            }
            break;



        case 'produtos':
            include_once 'painel/paginas/includes/header.php';

            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'itens':
            $id = $_GET ['id'];

            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT *  FROM produtos WHERE id = ' . $id);
            include_once 'painel/paginas/includes/header.php';
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
                include_once 'painel/paginas/includes/header.php';
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
                    include_once 'painel/paginas/includes/header.php';
                    include_once 'painel/paginas/includes/menus.php';
                    include_once 'painel/paginas/editarItem.php';
                    include_once 'painel/paginas/includes/footer.php';
                } else {
                    include_once 'painel/paginas/includes/header.php';
                    include_once 'painel/paginas/includes/menus.php';
                    include_once 'painel/paginas/erro.php';
                    include_once 'painel/paginas/includes/footer.php';
                }
            }
            break;

        case 'excluirItem' :
            $parametros = array(
                ':id' => $_GET ['id'],
            );
            $resultDados = new conexao();
            $resultDados->intervencaoNoBanco(''
                    . 'DELETE FROM produtos WHERE id = :id', $parametros);
            header('Location: ?pg=produtos');
            break;

        case 'inserirItem':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/inserirItem.php';
            include_once 'painel/paginas/includes/footer.php';
            break;



        case 'servicos':
            $resultDados = new conexao;
            $dados = $resultDados->selecionaDados('SELECT *  FROM servicos');
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/servicos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'servico':
            $id = $_GET ['id'];

            $resultDados = new conexao;
            $dados = $resultDados->selecionaDados('SELECT *  FROM servicos WHERE id = ' . $id);
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/servico.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'editarServico':
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
                $atualizarServico = new Conexao();
                $atualizarServico->intervencaoNoBanco(''
                        . 'UPDATE servicos SET '
                        . 'nome = :nome, '
                        . 'tipo = :tipo, '
                        . 'valor = :valor '
                        . 'WHERE id = :id', $parametros);
                include_once 'painel/paginas/includes/header.php';
                include_once 'painel/paginas/includes/menus.php';
                include_once 'painel/paginas/servicos.php';
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
                $ideditarServico = isset($_GET['id']);
//                die ($ideditarItem); ele "mata" o que tem abaixo dele - para saber o que esta executando até ele
                if ($ideditarServico) {
                    $resultDados = new conexao();
                    $dados = $resultDados->selecionaDados('SELECT * FROM'
                            . ' servicos WHERE id = ' . $_GET['id']);
                    include_once 'painel/paginas/includes/header.php';
                    include_once 'painel/paginas/includes/menus.php';
                    include_once 'painel/paginas/editarServico.php';
                    include_once 'painel/paginas/includes/footer.php';
                } else {
                    include_once 'painel/paginas/includes/header.php';
                    include_once 'painel/paginas/includes/menus.php';
                    include_once 'painel/paginas/erro.php';
                    include_once 'painel/paginas/includes/footer.php';
                }
            }
            break;

        case 'excluirServico' :
            $parametros = array(
                ':id' => $_GET ['id'],
            );
            $resultDados = new conexao();
            $resultDados->intervencaoNoBanco(''
                    . 'DELETE FROM servicos WHERE id = :id', $parametros);
            header('Location: ?pg=servicos');
            break;


        case 'contato':
            $resultDados = new conexao;
            $dados = $resultDados->selecionaDados('SELECT *  FROM contato');
            include_once 'painel/paginas/includes/header.php';
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
        case 'editarCliente':
            if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
//                funçao para atualização do produto
//                    criando as variaveis
                $id = $_POST ['id'];
                $nome = $_POST ['nome'];
                $email = $_POST ['email'];
                $mensagem = $_POST ['mensagem'];
//                       criando os "parametros" ou "p"
//                   ''-> '', (sintaxe do array)               
                $parametros = array(
                    ':id' => $id,
                    ':nome' => $nome,
                    ':email' => $email,
                    ':mensagem' => $mensagem
                );
//                atualização banco de dados
                $atualizarCliente = new Conexao();
                $atualizarCliente->intervencaoNoBanco(''
                        . 'UPDATE contato SET '
                        . 'nome = :nome, '
                        . 'email = :email, '
                        . 'mensagem = :mensagem '
                        . 'WHERE id = :id', $parametros);
                include_once 'painel/paginas/includes/header.php';
                include_once 'painel/paginas/includes/menus.php';
                include_once 'painel/paginas/conato.php';
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
                $ideditarCliente = isset($_GET['id']);
//                die ($ideditarItem); ele "mata" o que tem abaixo dele - para saber o que esta executando até ele
                if ($ideditarCliente) {
                    $resultDados = new conexao();
                    $dados = $resultDados->selecionaDados('SELECT * FROM'
                            . ' contato WHERE id = ' . $_GET['id']);
                    include_once 'painel/paginas/includes/header.php';
                    include_once 'painel/paginas/includes/menus.php';
                    include_once 'painel/paginas/editarClientes.php';
                    include_once 'painel/paginas/includes/footer.php';
                } else {
                    include_once 'painel/paginas/includes/header.php';
                    include_once 'painel/paginas/includes/menus.php';
                    include_once 'painel/paginas/erro.php';
                    include_once 'painel/paginas/includes/footer.php';
                }
            }
            break;

        case 'excluirCliente' :
            $parametros = array(
                ':id' => $_GET ['id'],
            );
            $resultDados = new conexao();
            $resultDados->intervencaoNoBanco(''
                    . 'DELETE FROM contato WHERE id = :id', $parametros);
            header('Location: ?pg=contato');
            break;



        case 'dashboard':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;




        default:
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/erro.php';
            include_once 'painel/paginas/includes/footer.php';
            break;
    }
} else {
//não existes    
    include_once 'painel/paginas/includes/header.php';
    include_once 'painel/paginas/includes/menus.php';
    include_once 'painel/paginas/erro.php';
    include_once 'painel/paginas/includes/footer.php';
}



        
        
        
        
        
        