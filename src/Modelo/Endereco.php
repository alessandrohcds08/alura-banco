<?php

namespace Alura\Banco\Modelo;

final class Endereco
{
    use AcessoPropriedades;

    private string $cidade;
    private string $estado;
    private string $bairro;
    private string $logradouro;
    private string $numero;
    public string $complemento;

    public function __construct($cidade, $estado, $bairro, $logradouro, $numero, $complemento)
    {
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->bairro = $bairro;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->complemento = $complemento;
    }

    public function recuperaCidade()
    {
        return $this->cidade;
    }

    public function recuperaEstado()
    {
        return $this->estado;
    }

    public function recuperaBairro()
    {
        return $this->bairro;
    }

    public function recuperaLogradouro()
    {
        return $this->logradouro;
    }

    public function recuperaNumero()
    {
        return $this->numero;
    }

    public function recuperaComplemento()
    {
        return $this->complemento;
    }
    
    public function alteraCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }
    
    public function alteraEstado(string $estado): void
    {
        $this->estado = $estado;
    }

    public function alteraBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }

    public function alteraLogradouro(string $logradouro): void
    {
        $this->logradouro = $logradouro;
    }

    public function alteraNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    public function __toString()
    {
        return "$this->logradouro, $this->numero,$this->complemento,$this->bairro,$this->cidade,$this->estado";
    }


}