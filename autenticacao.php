<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Gerente,Diretor};
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Gerente(
    new CPF('417.071.818-61'),
    'Alessandro',
    30000
);

$autenticador->tentaLogin($diretor, '4321');
