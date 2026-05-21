<?php
    declare(strict_types=1);

    function getConexao():PDO{
        $dsn = "mysql:host=localhost;dbname=teste;charset=utf8";
        $opcoes = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_EMULATE_PREPARES => false, // modo estrito
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        $pdo = null;
        try{
            $pdo = new PDO($dsn, "root", "", $opcoes);
        }catch(PDOException $e){
            http_response_code(500);
            header("Content-Type: application/json; charset=utf-8");
            die(json_encode(["erro ao conectar com o BD. {$e->getMessage()}"]
            , JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        }
        return $pdo;
    }
?>