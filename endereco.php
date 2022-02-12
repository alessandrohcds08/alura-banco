<?php
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';


$endereco = new Endereco('São Paulo','SP','Jardim Umarizal','Rua Jaracatia', '165', 'BL 42 AP 83');

$endereco1 = new Endereco('São Paulo','SP','Jardim Faria Lima','Rua Onésio Garcia', '37', '');




//$endereco->complemento = '';

echo $endereco->complemento;