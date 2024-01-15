<?php

namespace Alura\Banco\Models\Conta;

class ContaPoupanca extends Conta
{
    protected function taxaSaque(): float
    {
        return 0.03;
    }

}