<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Conta\SaldoInsuficienteException;
use Alura\Banco\Modelo\CPF;

abstract class Pessoa
{
    use AcessoPropriedades;

    protected CPF $cpf;
    protected string $nome;

    public function __construct(CPF $cpf,string $nome)
    {
        $this->validaNome($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    final protected function validaNome(string $nome): void
    {

        if (strlen($nome) < 5) {
            throw new ValidaNomeException($nome);
        }
    }


}