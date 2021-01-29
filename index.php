<?php

include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';

$pg = isset($_GET['pg']);

if ($pg) {



    switch ($_GET['pg']) {
        case 'login':
            include_once 'painel/paginas/acesso/login.php';

            break;

        case 'inicial':
            include_once 'painel/site/inicio.php';
            break;

        case 'produtos':
            $resultDados = new conexao;
            $dados = $resultDados->selecionaDados('SELECT *  FROM produtos');
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'itens':
            $id = $_GET ['id'];

            $resultDados = new conexao;
            $dados = $resultDados->selecionaDados('SELECT *  FROM produtos WHERE id = ' . $id);
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtosItem.php';
            include_once 'painel/paginas/includes/footer.php';
            break;
        
        case 'editarItem':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            
            if ($_SERVER ['REQUEST_METHOD']=='POST') {
//                funçao para atualização do produto
                
            } else{
//                mostrar dados do produto
            }
            include_once 'painel/paginas/editarItem.php';
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

        case 'dashboard':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;


        case 'verificarlogin':
            if (verificarlogin()) {

                include_once 'painel/paginas/includes/header.php';
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
    include_once 'painel/paginas/includes/header.php';
    include_once 'painel/paginas/includes/menus.php';
    include_once 'painel/paginas/erro.php';
    include_once 'painel/paginas/includes/footer.php';
}

        
        
        
        
        
        