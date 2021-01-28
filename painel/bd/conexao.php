<?php

class conexao {
    
    private $db_server = 'localhost';
    private $db_name = 'paineladm';
    private $db_charset = 'utf8' ;
    private $db_username = 'root';
    private $db_password = '';
    
//==================================================================
    public function selecionaDados($query, $parameters = null, $debug = true, $close_connection = true) {
        //Faz seleção de dados(SELECT)
        $results = null;

        //conexão com o banco
        $connection = new PDO(
                'mysql:host=' . $this->db_server .
                ';dbname=' . $this->db_name .
                ';charset=' . $this->db_charset, $this->db_username, $this->db_password, array(PDO::ATTR_PERSISTENT => true)
        );

        if ($debug) {
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }

        //Executando a consulta
        try {
            if ($parameters != null) {
                $gestor = $connection->prepare($query);
                $gestor->execute($parameters);
                $results = $gestor->fetchAll(PDO::FETCH_ASSOC);
            } else {
                $gestor = $connection->prepare($query);
                $gestor->execute();
                $results = $gestor->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            return false;
        }

        //Finalizando a conexão
        if ($close_connection) {
            $connection = null;
        }

        //retornando os resultados
        return $results;
    }

    //==================================================================
    public function intervencaoNoBanco($query, $parameters = null, $debug = true, $close_connection = true) {
        //FAzendo intervenção no banco (INSERT, UPDATE, DELETE)
        //criando conexão
        $connection = new PDO(
                'mysql:host=' . $this->db_server .
                ';dbname=' . $this->db_name .
                ';charset=' . $this->db_charset, $this->db_username, $this->db_password, array(PDO::ATTR_PERSISTENT => true)
        );

        if ($debug) {

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }

        //Executando a conexão
        $connection->beginTransaction();
        try {
            if ($parameters != null) {
                $gestor = $connection->prepare($query);
                $gestor->execute($parameters);
            } else {
                $gestor = $connection->prepare($query);
                $gestor->execute();
            }
            $connection->commit();
        } catch (PDOException $e) {
            $connection->rollBack();
            return false;
        }

        //Finalizando a conexão
        if ($close_connection) {
            $connection = null;
        }

        return true;
    }

}