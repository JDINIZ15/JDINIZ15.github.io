<?php
    if ($uri === 'produtos')
        switch( $metodo ){
            case 'GET': require __DIR__ . '/controller/produto/listar.php'; break;
            case 'POST':require __DIR__ . '/controller/produto/inserir.php'; break;
            case 'PUT': require __DIR__ . '/controller/produto/alterar.php'; break;
        }

    //produtos/{id}
    //Não aceita nada antes de produtos. 
    //Só aceita números depois de produtos e guarda em $paramtros[1]
    if (preg_match('#^produtos/([0-9]+)/?$#', $uri, $parametros)===1){
        $_GET['id'] = (int)$parametros[1]; // disponibiliza para os controllers
        switch( $metodo ){
            case 'GET': require __DIR__ . '/controller/produto/obter.php'; break;
            case 'DELETE':require __DIR__ . '/controller/produto/remover.php'; break;
        }
    }
    
?>