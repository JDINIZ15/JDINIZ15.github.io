<?php
    require_once __DIR__ . '/../../util/bdUtil.php'; 
    require_once __DIR__ . '/../../util/httpUtil.php';     
    require_once __DIR__ . '/../../model/funcoesGenero.php';
    require_once __DIR__ . '/../../service/generoService.php';
    $pdo = getConexao();
    
    try{
        $registros = generoListarService( $pdo );
        responder(200, $registros);
    }catch(InfraException $e){
        responder($e->getCode(), $e->getMessage());
    }
?>
