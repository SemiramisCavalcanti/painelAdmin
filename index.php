<?php
include_once 'painel/helper/funcoes.php';

$pg = isset( $_GET['pg']);

if ($pg) {
    switch ($_GET['pg']) {
        case 'login':
            include_once 'painel/paginas/acesso/login.php';

            break;
            include_once 'painel/paginas/dashboard.php';

            break;
        
        case 'inicial':
            include_once 'painel/site/inicio.php';

            break;
            include_once 'painel/paginas/dashboard.php';

            break;
        
        case 'dashboard':
            if (verificarlogin()){
                
            include_once 'painel/paginas/dashboard.php';
            }
            break;
        
        default:
            include_once 'painel/paginas/dashboard.php';
            break;
    }
} else {
//não existes    
            include_once 'painel/paginas/dashboard.php';
}

        
        
        
        
        
        