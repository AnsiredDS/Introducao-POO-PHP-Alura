<?php

namespace Alura\Banco\Pessoa;
class Pessoa
{
    protected string $nome;
    protected Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function retornarNome(): string
    {
        return $this->nome;
    }
    public function retornarCpf(): string
    {
        return $this->cpf->retornarCpf();
    }

    protected function validarNome(string $nome):void
    {
        if(strlen($nome) < 5)
        {
            echo 'Nome precisa ter ao menos 5 caracteres';
            exit();
        }
    }

}