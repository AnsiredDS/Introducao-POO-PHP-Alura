<?php

namespace Alura\Banco\Models\Pessoa\Funcionario;

use Alura\Banco\Models\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calcularBonificacao(): float
    {
       return $this->retornarSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}