<?php
// Funcionário é uma pessoa
namespace Alura\Banco\Models\Pessoa;

use Alura\Banco\Cpf;
class Funcionario extends Pessoa
{
    private $cargo;

    public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function retornarCargo(): string
    {
        return $this->cargo;
    }

    public function alterarNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function retornarSalario(): float
    {
        return $this->salario;
    }

    public function calcularBonificacao(): float
    {
        return $this->salario * 0.1;
    }

}