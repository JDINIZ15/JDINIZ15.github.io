<?php
    require_once __DIR__ . '/../../util/bdUtil.php'; 
    require_once __DIR__ . '/../../util/httpUtil.php';       
    require_once __DIR__ . '/../../model/funcoesProduto.php';
    require_once __DIR__ . '/../../service/produtoService.php';
    $pdo = getConexao();
    $input = json_decode(file_get_contents('php://input'),true);

    // Higienização básica (controller só ajusta formato, sem regra de negócio)
    $input = [
        'descricao'     => isset($input['descricao']) ? trim($input['descricao']) : '',
        'id'            => isset($input['id']) ? (int) trim($input['id']) : 0,
        'precoDeCusto'  => isset($input['precoDeCusto']) ? (float) trim($input['precoDeCusto']) : 0.0,
        'generoId'      => isset($input['generoId']) ? (int) trim($input['generoId']) : 0,
    ];

    try{
        if( produtoInserirService($input, $pdo) > 0 )
            responder( 201, ['Registro inserido com sucesso'] );
        else
            responder( 400, ['Nenhum registro foi inserido'] );
    }catch(ConflitoException $e){
        responder($e->getCode(), $e->getMessage());
    }catch(InfraException $e){
        responder($e->getCode(), $e->getMessage());
    }catch(RequisicaoRuimException $e){
        responder($e->getCode(), $e->getMessage());
    }catch(IntegridadeException $e){
        responder($e->getCode(), $e->getMessage());
    } 
?>

