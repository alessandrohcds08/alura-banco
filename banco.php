<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

$endereco = new Endereco('Sao paulo', 'SP', 'jardim umarizal', 'rua jaracatia', '165', 'bl 42 ap 83');
$titular = new Titular(new CPF('417.071.818-61'), 'alesandro', $endereco);
$primeiraConta = new ContaCorrente($titular);
var_dump($primeiraConta);
$primeiraConta->depositar(300);
$primeiraConta->sacar(10);
$titular1 = new Titular(new CPF('397.902.528-46'), 'talita', $endereco);
$segundaConta = new ContaCorrente($titular1);


echo $segundaConta->recuperarSaldo() . PHP_EOL;

echo $segundaConta->recuperarCpf() . PHP_EOL;
echo $segundaConta->recuperarNome() . PHP_EOL;
var_dump($segundaConta);

echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta->recuperarCpf() . PHP_EOL;
echo $primeiraConta->recuperarNome() . PHP_EOL;
/*
$titular2 = new Titular('111.111.111-11', 'conta3');
$outra = new Conta($titular2);
unset($segundaConta);9*/
echo Conta::recuperaNumeroDeContas();


$funcionario = new Desenvolvedor(new CPF('135.110.318-00'), 'rosana', 'chefe');

var_dump($funcionario);
echo $funcionario->recuperarNome() . PHP_EOL;
echo $funcionario->recuperarCpf() . PHP_EOL;