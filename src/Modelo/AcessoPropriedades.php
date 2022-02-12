<?php


namespace Alura\Banco\Modelo;


trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' .ucfirst($nomeAtributo);
        echo $this->$metodo();
    }

    public function __set($nomeAtributo, $valor)
    {
        $metodo = 'altera' .ucfirst($nomeAtributo);
        echo $this->$metodo();
    }
}