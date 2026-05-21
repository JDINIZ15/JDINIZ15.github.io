<?php

class InfraException extends Exception{
    function __construct(string $msg, int $codigo, Exception $excecaoOriginal)
    {
        parent::__construct($msg, $codigo, $excecaoOriginal);
    }
}