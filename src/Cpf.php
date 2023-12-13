<?php

class Cpf
{
    //Desafio: Criar uma classe CPF que possa ser usado em outras classes no futuro além de titular

    private string $numeroDoCpf;

    public function __construct(string $cpf)
    {
        $this->numeroDoCpf = $cpf;
    }

    public function retornarCpf(): string
    {
        return $this->numeroDoCpf;
    }
}