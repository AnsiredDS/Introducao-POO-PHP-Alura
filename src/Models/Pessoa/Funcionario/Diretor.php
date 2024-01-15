<?php

namespace Alura\Banco\Models\Pessoa\Funcionario;

use Alura\Banco\Models\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calcularBonificacao(): float
    {
        return $this->retornarSalario() * 2;
    }
    //Método novo exclusivo da classe "Diretor".
    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }


}

