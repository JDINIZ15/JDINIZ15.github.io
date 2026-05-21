<?php
    require_once('../model/funcoesProdutoBD.php');
    header("Content-Type: application/json; charset=utf-8");

    $input = json_decode(file_get_contents('php://input'),true);
    if( ! isset( $input['id']) || $input['id'] === '' ){
        http_response_code( 400 );//Erro de domínio
        die( json_encode( ['Alguma informação não foi enviada.'] ) );
    }

    if( $remover( (int) $input['id']) > 0 )
        http_response_code( 204 );//DELETE bem sucedido. Já devolve p/ o cliente
    else{
        http_response_code( 400 );//Erro de domínio
        die( json_encode( ['Nenhum registro foi removido'] ) );
    }
?>
