<?php
    //Aqui só precisamos saber a uri (generos ou generos/id)
    //e o método (GET,POST,PUT,DELETE)
    //Os parâmetros virão sempre no PUT e no DELETE via $_GET
    if ($uri === 'generos' ){
        
        switch( $metodo ){
            case 'GET': require __DIR__ . '/controller/genero/listar.php'; break;
            case 'POST': require __DIR__ . '/controller/genero/inserir.php'; break;
            case 'PUT': require __DIR__ . '/controller/genero/alterar.php'; break;
        }
        //Sinaliza p/ o cliente os métodos aceitos
        header('Allow: GET, POST, PUT'); 
        http_response_code(405); 
        die( json_encode(['Método não permitido']) );

    }
      
    //Aqui $uri vai ser generos/{id}
    //Não aceita nada antes de generos. 
    //Só aceita números depois de generos e guarda em $paramtros[1]
    if (preg_match('#^generos/([0-9]+)/?$#', $uri, $parametros)===1){
        $_GET['id'] = (int)$parametros[1]; // disponibiliza para os controllers
        switch( $metodo ){
            case 'GET': require __DIR__ . '/controller/genero/obter.php'; break;
            case 'DELETE':require __DIR__ . '/controller/genero/remover.php'; break;
        }
        header('Allow: GET, DELETE'); 
        http_response_code(405); 
        die( json_encode(['Método não permitido']) );
    }
    
?>