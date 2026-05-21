<?php
    require_once('../model/funcoesProdutoBD.php');
    header("Content-Type: application/json; charset=utf-8");

    $input = json_decode(file_get_contents('php://input'),true);
    if( ! isset( $input['descricao']) || ! isset( $input['precoDeCusto'])
     || ! isset( $input['id']) || $input['id'] === '' ){
        http_response_code( 400 );//Erro de domínio
        die( json_encode( ['Alguma informação não foi enviada corretamente.'] ) );
    }

    if( $alterar( $input ) > 0 ){
        http_response_code( 200 );//UPDATE bem sucedido.
        die( json_encode( ['Registro alterado com sucesso!'] ) );
    }
    else{
        http_response_code( 400 );//Erro de domínio
        die( json_encode( ['Nenhum registro foi alterado'] ) );
    }

?>
