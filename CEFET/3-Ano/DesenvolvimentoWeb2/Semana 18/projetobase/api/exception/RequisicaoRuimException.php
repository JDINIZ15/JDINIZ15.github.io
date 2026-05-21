<?php

class RequisicaoRuimException extends Exception{
    function __construct(string $msg, int $codigo)
    {
        parent::__construct($msg, $codigo);
    }
}