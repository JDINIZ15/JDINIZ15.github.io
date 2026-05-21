<?php
spl_autoload_register(callback: function (string $classe){
    
    $prefixo = 'cefet\\banco';
    $baseDir = 'src';

    $caminhoRelativo = str_replace($prefixo,  $baseDir, $classe);
    $caminhoRelativo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoRelativo);

    $arquivo = $caminhoRelativo . '.php';

    if(file_exists($arquivo)){
        require_once $arquivo;
    }
});