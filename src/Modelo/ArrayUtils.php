<?php declare(strict_types=1);

namespace Alura\Banco\Modelo;

class ArrayUtils
{
    public static function remover(int $elemento, array &$array)
    {
        //procura posicao do elemento, não faz a busca estrita
        $posicao = array_search($elemento, $array, true);
        if (is_int($posicao)) {
            unset($array[$posicao]);
        } else {
            echo 'Não foi encontrado no array';
        }
    }

    public static function encontrarPessoasComSaldoMaior(int $saldo, array $array): array
    {
        $correntistasComSaldoMaior = [];
        foreach ($array as $chave => $valor) {
            if ($valor > $saldo) {
                $correntistasComSaldoMaior[] = $chave;
            }
        }
        return $correntistasComSaldoMaior;
    }
}