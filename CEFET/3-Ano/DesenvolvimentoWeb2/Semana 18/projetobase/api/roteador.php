<?php
declare(strict_types=1);
require_once __DIR__ . '/util/httpUtil.php';

[$uri, $logica, $metodo] = processaRequisicao($_SERVER);
//Aqui só precisamos saber a lógica
switch( $logica ){
    case 'generos':require_once 'rotasGenero.php';break;
    case 'produtos':require_once 'rotasProduto.php';break;
    default:responder(404, 'Rota não encontrada');
}

