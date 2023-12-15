<?php

// Funcionário é uma pessoa
class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct(string $nome, Cpf $cpf, string $cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function retornarCargo(): string
    {
        return $this->cargo;
    }


}