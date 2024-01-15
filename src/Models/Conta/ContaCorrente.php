<?php

namespace Alura\Banco\Models\Conta;

class ContaCorrente extends Conta
{
    protected function taxaSaque(): float
    {
        return 0.05;
    }

    public function transferirSaldo(Conta $contaParaTransferir, float $valorParaTransferir): void
    {
        if($valorParaTransferir <= 0)
        {
            echo 'Valor de transferência tem que ser maior que 0!' . PHP_EOL;
            return;
        }

        $this->sacar($valorParaTransferir);
        $contaParaTransferir->depositar($valorParaTransferir);
    }
}