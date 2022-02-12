<?php
require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Gerente,Desenvolvedor,Diretor,EditorVideo};

$funcionario = new Gerente(
    new CPF('417.071.818-61'),
    'Alessandro',
    15000.00
);

$funcionario1 = new Desenvolvedor(
    new CPF('417.071.818-41'),
    'Teste',
    2000.00
);
$funcionario1->sobeDeNivel();


$funcionario2 = new Diretor(
    new CPF('397.902.528-46'),
    'Talita',
    30000.00
);


$funcionario3 = new EditorVideo(
    new CPF('135.110.318-00'),
    'Rosana',
    1500.00
);
$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($funcionario);
$controlador->adicionaBonificacaoDe($funcionario1);
$controlador->adicionaBonificacaoDe($funcionario2);
$controlador->adicionaBonificacaoDe($funcionario3);

echo $controlador->recuperaTotal();