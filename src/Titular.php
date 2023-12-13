<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validarNome($nome);
        $this->nome = $nome;
    }

    public function retornarNome(): string
    {
        return $this->nome;
    }

    public function retornarCpf(): string
    {
        return $this->cpf->retornarCpf();
    }

    public function validarNome(string $nome):void
    {
        if(strlen($nome) < 5)
        {
            echo 'Nome precisa ter ao menos 5 caracteres';
            exit();
        }
    }

}