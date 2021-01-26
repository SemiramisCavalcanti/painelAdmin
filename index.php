<?php

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
            include_once 'painel/paginas/produtos.php';
            break;
        
        case 'servicos':
            include_once 'painel/paginas/servicos.php';
            break;
        
        case 'contato':
            include_once 'painel/paginas/contato.php';
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
            include_once 'painel/paginas/dashboard.php';
            break;
    }
    include_once 'painel/paginas/includes/footer.php';
} else {
//não existes    
    include_once 'painel/paginas/includes/header.php';
    include_once 'painel/paginas/includes/menus.php';
    include_once 'painel/paginas/dashboard.php';
    include_once 'painel/paginas/includes/footer.php';
}

        
        
        
        
        
        