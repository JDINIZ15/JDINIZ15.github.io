<?php
    require_once __DIR__ . '/../../util/bdUtil.php'; 
    require_once __DIR__ . '/../../util/httpUtil.php';     
    require_once __DIR__ . '/../../model/funcoesProduto.php';
    require_once __DIR__ . '/../../service/produtoService.php';
    $pdo = getConexao();
    
    try{
        $registros = produtoListarService( $pdo );
        responder(200, $registros);
    }catch(InfraException $e){
        responder($e->getCode(), $e->getMessage());
    }
?>
