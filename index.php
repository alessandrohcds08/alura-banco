<?php declare(strict_types=1);

namespace Alura;


require_once('autoload.php');
use Alura\Banco\Modelo\ArrayUtils;
use Alura\Banco\Modelo\Calculadora;
/*
echo'<p>----------------------------------------------------------- Aula 1 array-----------------------------------------------------------</p>';
$nota = [8, 10, 10, 5, 10,10];
$calculadora = (new Calculadora())->calculaMedia($nota);
if($calculadora){
echo "Média é : $calculadora";

}else{

    echo "Não foi possivel calcular a média";

}



echo'<p>----------------------------------------------------------- Aula 2 array-----------------------------------------------------------</p>';
$saldos = [2500, 3000, 4400, 1000, 8700, 9000];
//ordena array :)
sort($saldos);
foreach ($saldos as $saldo) {
    echo "<p> O saldo é $saldo.";
}

echo "<p> O menor saldo é $saldos[0].";



echo'<p>----------------------------------------------------------- Aula 3 array-----------------------------------------------------------</p>';
$nomes = "Giovanni, João,Maria,Pedro";
$arrayNomes = explode(',',$nomes);
foreach ($arrayNomes as $nome){
 echo "<p>Olá $nome</p>";
}

$stringNome = implode(', ',$arrayNomes);
echo "<p>$stringNome</p>";



echo'<p>----------------------------------------------------------- Aula 4 array-----------------------------------------------------------</p>';

$correntistas_e_compras = [
    "Giovanni",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luisa",
    '12'
];
var_dump($correntistas_e_compras);
ArrayUtils::remover(12,$correntistas_e_compras);
var_dump($correntistas_e_compras);
*/


$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    'Rafael'
];
$saldos = [2500, 3000, 4400, 1000, 8700, 9000];
/*
$correntistasNaoPagantes = [
    "Luis",
    "Luisa",
    'Rafael'
];
//diferença de array
$correntistasPagantes = array_diff($correntistas,$correntistasNaoPagantes);
var_dump($correntistasPagantes);
*/

//junto dois array
$relacionados = array_merge($correntistas, $saldos);

//combina os arrays
$relacionados2 = array_combine($correntistas, $saldos);
$relacionados2['Matheus'] = 4500;
var_dump($relacionados2);

if(array_key_exists("João", $relacionados2)){
    echo "O saldo do João é: {$relacionados2["João"]}";
}else{
    echo "Não foi encontrado";
}

$saldoMaior = ArrayUtils::encontrarPessoasComSaldoMaior(3000,$relacionados2);

var_dump($saldoMaior);