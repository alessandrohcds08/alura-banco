<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente,Titular,ContaPoupanca,SaldoInsuficienteException};
use Alura\Banco\Modelo\{CPF,Endereco};


require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('417.071.818-61'),
        'Alessandro',
        new Endereco('São Paulo', 'SP', 'Jardim Umarizal', 'Rua Jaracatia', '165', 'BL 42 AP 83')
    )
);

/*
$conta = new ContaPoupanca(
    new Titular(
        new CPF('417.071.818-61'),
        'Alessandro',
        new Endereco('São Paulo', 'SP', 'Jardim Umarizal', 'Rua Jaracatia', '165', 'BL 42 AP 83')
    )
);*/


$conta->depositar(500);
try{
$conta->sacar(600);
}catch (SaldoInsuficienteException $exception){
    echo "Você não tem saldo para realizar o saque";
    echo $exception->getMessage();
}
echo $conta->recuperarSaldo();