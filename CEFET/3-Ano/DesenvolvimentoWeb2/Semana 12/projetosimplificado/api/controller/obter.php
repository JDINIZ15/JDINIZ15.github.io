<?php
    require_once('../model/funcoesProdutoBD.php');
    header("Content-Type: application/json; charset=utf-8");

    $input = $_GET;
    if( !isset($input['id']) || $input['id'] === ''){
        http_response_code( 400 );//Erro de domínio
        die( json_encode( ['Alguma informação não foi enviada.'] ) );
    }

    $registro = $obter( (int) $input['id']);
    
    http_response_code( 200 );//Sucesso via get
    die( json_encode( $registro ) );
?>