<?php
    //Para respeitar a tipagem de dados (1ª instrução SEMPRE!)
    declare(strict_types=1);

    function getConexao():PDO{
        //Avisa ao cliente que todas as respostas serão nesse formato
        header("Content-Type: application/json; charset=utf-8");
        /* Aqui começam os parâmetros para obter um objeto PDO (conexão com o BD)
        ** dsn = string de conexão com driver, host, db e charset
        ** Os outros argumentos são usuário (root) e senha ('') do banco
        ** Nas opções (4º parâmetro) definimos que ao detectar um erro o PDO
        ** vai lançar uma exceção (Exception) e que vai sempre devolver a mesma conexão 
        */
        $dsn = "mysql:host=localhost;dbname=teste;charset=utf8";
        $op = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true
        ];

        $pdo = null;
        try{
            $pdo = new PDO($dsn, 'root', '', $op);
        }catch(PDOException $e){
            http_response_code( 500 );//Erro de servidor(500)
            die( json_encode( ["erro ao conectar com o BD. {$e->getMessage()}"] ) );
        }
        return $pdo;
    }
?>