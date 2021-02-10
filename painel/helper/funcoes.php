<?php

function verificarlogin() {
//    no futuro as informações são trazidas pelo banco de dados
    
    $usuario = 'Sesse';
    $senha = '123';
//    verificar se as informações passadas pelo usuario é igual a 
//    que estão no banco

    
    if ($_POST) {

        if ($_POST ['usuario'] == $usuario &&
                $_POST ['senha'] == $senha) {
//        criar dados na session
            $_SESSION ['usuario'] = $usuario;
            return TRUE;
        } else {
            return FALSE;
       
        }
    } else { 
        if (isset ($_SESSION ['usuario'])){
            return TRUE;
        } else {
            return FALSE;
        }      
    }
}
