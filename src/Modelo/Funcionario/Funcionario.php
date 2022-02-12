<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(CPF $cpf, string $nome, float $salario)
    {
        parent::__construct($cpf, $nome);
        $this->salario = $salario;
    }


    public function recuperaCargo(): string
    {
        return $this->cargo;
    }


    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    abstract function calculaBonificacao(): float;

    public function recebeAumento(float $valorAumento): void{
        if($valorAumento < 0){
            echo 'Aumento deve ser positivo';
            return;
        }
        $this->salario += $valorAumento;
    }

}