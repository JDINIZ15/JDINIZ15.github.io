<?php
    declare(strict_types=1);
    function processaRequisicao(array $varSERVER):array{
        $metodo = $varSERVER['REQUEST_METHOD'] ?? 'GET';
        // Roteador procedural simples para /projeto/api
        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

        // Ex.: SCRIPT_NAME = "/projeto/api/generos"  -> "/projeto/api"
        $dirScript  = rtrim(str_replace('\\','/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
        $prefixoDaUri = $dirScript . '/';

        // Remove o prefixo base da API - Ex: "/projeto/api/generos" -> "generos"
        if( strpos($uri, $prefixoDaUri) === 0 )
            $uri = substr($uri, strlen($prefixoDaUri)); //substitui a partir do length
        else
            $uri = ltrim($uri, '/');// retira espaços à esquerda e a barra

        $logica = $uri; 
        if(mb_strpos($uri,'/')){
            $partes = explode('/',$uri);
            $logica = $partes[0];
        }
        //$logica vai ser generos, produtos etc
        //$uri vai ser generos/{id}, produtos/{id} etc
        //$metodo vai ser GET, POST, PUT, DELETE
        return [$uri, $logica, $metodo];
    }

    function responder(int $codStatus, $dados = null):void{
        http_response_code($codStatus);
        header("Content-Type: application/json; charset=utf-8");
        $flags = JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR;

        //$json = json_encode($dados, $flags);
        try {
            die(json_encode($dados, $flags));
        } catch (JsonException $e) {
            http_response_code(500);
            die(json_encode(['Erro ao gerar JSON'], $flags));
        }
    }
?>