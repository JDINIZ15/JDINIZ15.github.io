<?php
    require_once('../model/funcoesProdutoBD.php');
    header("Content-Type: application/json; charset=utf-8");
    
    $registros = $listar();

    http_response_code( 200 );//Sucesso via get
    die( json_encode( $registros ) );
?>
