<?php

class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function retornarCidade(): string
    {
        return $this->cidade;
    }

    public function retornarBairro(): string
    {
        return $this->bairro;
    }

    public function retornarRua(): string
    {
        return $this->rua;
    }

    public function retornarNumero(): string
    {
        return $this->numero;
    }


}