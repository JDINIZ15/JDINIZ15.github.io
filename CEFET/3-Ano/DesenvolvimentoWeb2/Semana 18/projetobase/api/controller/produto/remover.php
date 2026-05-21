<?php
    require_once __DIR__ . '/../../util/bdUtil.php'; 
    require_once __DIR__ . '/../../util/httpUtil.php';        
    require_once __DIR__ . '/../../model/funcoesProduto.php';
    require_once __DIR__ . '/../../service/produtoService.php';
    $pdo = getConexao();
    $input = $_GET;

    // Higienização básica (controller só ajusta formato, sem regra de negócio)
    $input['id'] = ['id' => isset($input['id']) ? (int) trim($input['id']) : 0];
    
    try{
        if(produtoRemoverService($input['id'], $pdo)>0)
            responder( 204 );
    }catch(ConflitoException $e){
        responder($e->getCode(), $e->getMessage());
    }catch(InfraException $e){
        responder($e->getCode(), $e->getMessage());
    }catch(RequisicaoRuimException $e){
        responder($e->getCode(), $e->getMessage());
    } 
?>
