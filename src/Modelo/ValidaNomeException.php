<?php

namespace Alura\Banco\Modelo;

class ValidaNomeException extends \DomainException
{

    public function __construct(string $nome)
    {
        $mensagem = "Nome precisa ter mais que 5 caracteres.";
        parent::__construct($mensagem);
    }
}