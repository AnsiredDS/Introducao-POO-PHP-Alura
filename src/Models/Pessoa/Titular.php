<?php
// Titular é uma pessoa
namespace Alura\Banco\Models\Conta;

use Alura\Banco\Pessoa\Pessoa;

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function retornarNome(): string
    {
        return $this->nome;
    }

    public function retornarCpf(): string
    {
        return $this->cpf->retornarCpf();
    }



    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

}