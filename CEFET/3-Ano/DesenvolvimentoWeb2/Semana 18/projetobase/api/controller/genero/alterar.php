<?php
    require_once __DIR__ . '/../../util/bdUtil.php'; 
    require_once __DIR__ . '/../../util/httpUtil.php';       
    require_once __DIR__ . '/../../model/funcoesGenero.php';
    require_once __DIR__ . '/../../service/generoService.php';
    $pdo = getConexao();
    $input = json_decode(file_get_contents('php://input'),true);

    // Higienização básica (controller só ajusta formato, sem regra de negócio)
    $input = [
    'descricao' => isset($input['descricao']) ? trim($input['descricao']) : '',
    'id'        => isset($input['id']) ? (int) trim($input['id']) : 0
    ];

    try{
        if( generoAlterarService($input, $pdo) > 0 )
            responder( 200, ['Registro alterado com sucesso'] );
        else
            responder( 400, ['Nenhum registro foi alterado'] );
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
