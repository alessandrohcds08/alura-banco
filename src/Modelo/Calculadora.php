<?php

namespace Alura\Banco\Modelo;

class Calculadora
{

    public function calculaMedia($nota): ?float
    {

        //tamanho do array
        $quantidadeNotas = sizeof($nota);
        if ($quantidadeNotas > 0) {
            $soma = 0;
            for ($i = 0; $i < $quantidadeNotas; $i++) {
                $soma += $nota[$i];
            }
            $media = ($soma) / $quantidadeNotas;

            return $media;
        } else {
            return null;
        }
    }
}