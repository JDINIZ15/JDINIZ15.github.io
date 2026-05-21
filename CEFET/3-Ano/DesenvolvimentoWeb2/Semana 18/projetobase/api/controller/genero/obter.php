<?php
    require_once __DIR__ . '/../../util/bdUtil.php'; 
    require_once __DIR__ . '/../../util/httpUtil.php';     
    require_once __DIR__ . '/../../model/funcoesGenero.php';
    require_once __DIR__ . '/../../service/generoService.php';
    $pdo = getConexao();
    $input = $_GET;

    // Higienização básica (controller só ajusta formato, sem regra de negócio)
    $input = ['id' => isset($input['id']) ? (int) trim($input['id']) : 0];
    try{
        $registro = obterGenero( $input['id'], $pdo);
        responder(200, $registro);
    }catch(RequisicaoRuimException $e){
        responder($e->getCode(), $e->getMessage());
    }catch(InfraException $e){
        responder($e->getCode(), $e->getMessage());
    }  
?>