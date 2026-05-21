<?php
   require_once('../model/funcoesProdutoBD.php');

    header("Content-Type: application/json; charset=utf-8");

    $registro = json_decode(file_get_contents("php://input"), true);
     
    if(!isset($registro['precoDeCusto']) || !isset($registro['descricao']) ){
        http_response_code(400);
        die(json_encode(['Algum elemento não foi preenchido']));

    }

    if($inserir($registro['descricao'], $registro['precoDeCusto']) > 0){
        http_response_code(201);
        die(json_encode(['Registro inserido com sucesso']));
    }
?>

