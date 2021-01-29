<?php
include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';

$pg = isset($_GET['pg']);

if ($pg) {

    include_once 'painel/paginas/includes/header.php';
    include_once 'painel/paginas/includes/menus.php';

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
            include_once 'painel/paginas/produtos.php';
            break;
        
        case 'itens':
            $id = $_GET ['id'];
            
            $resultDados = new conexao;
            $dados = $resultDados->selecionaDados('SELECT *  FROM produtos WHERE id = '. $id);
            include_once 'painel/paginas/produtosItem.php';
            break;
        
        case 'servicos':
            $resultDados = new conexao;
            $dados = $resultDados->selecionaDados('SELECT *  FROM servicos');
            include_once 'painel/paginas/servicos.php';
            break;
        
        case 'servico':
            $id = $_GET ['id'];
            
            $resultDados = new conexao;
            $dados = $resultDados->selecionaDados('SELECT *  FROM servicos WHERE id = '. $id);
            include_once 'painel/paginas/servico.php';
            break;
        
        case 'contato':
            $resultDados = new conexao;
            $dados = $resultDados->selecionaDados('SELECT *  FROM contato');
            include_once 'painel/paginas/contato.php';
            break;
        
        case 'cliente':
            $resultDados = new conexao;
            $dados = $resultDados->selecionaDados('SELECT *  FROM contato WHERE id = '. $id);
            include_once 'painel/paginas/cliente.php';
            break;
        
        case 'dashboard':
            include_once 'painel/paginas/dashboard.php';
            break;


        case 'dashboard':
            if (verificarlogin()) {

               
                include_once 'painel/paginas/dashboard.php';
               
            } else {
                echo 'Login ou Senha inválido';
            }
            break;

        default:
            include_once 'painel/paginas/erro.php';
            break;
    }
    include_once 'painel/paginas/includes/footer.php';
} else {
//não existes    
    include_once 'painel/paginas/includes/header.php';
    include_once 'painel/paginas/includes/menus.php';
    include_once 'painel/paginas/erro.php';
    include_once 'painel/paginas/includes/footer.php';
}

        
        
        
        
        
        