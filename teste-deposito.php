<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\ValidaNomeException;

require_once 'autoload.php';

try {
    $conta = new ContaCorrente(
        new Titular(
            new CPF('417.071.818-61'),
            'Ale',
            new Endereco('São Paulo', 'SP', 'Jardim Umarizal', 'Rua Jaracatia', '165', 'BL 42 AP 83')
        )
    );


    try {
        $conta->depositar(100);
    } catch (InvalidArgumentException $exception) {
        echo "Valor a depositar precisa ser positivo.";
    }

} catch (InvalidArgumentException $exception) {
    echo "CPF inválido";
} catch (ValidaNomeException $exceptions) {
    echo "Nome precisa ter mais que 5 caracteres.";
    echo $exceptions->getMessage();
}