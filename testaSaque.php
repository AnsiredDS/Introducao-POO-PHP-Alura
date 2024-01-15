<?php

use Alura\Banco\Models\Pessoa\Titular;
use Alura\Banco\Models\Conta\{ContaPoupanca, ContaCorrente};
use Alura\Banco\{CPF, Endereco};


require_once 'src/autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Rogério',
        new Endereco('Metrópolis', 'Bairro 90', 'Rua 9', '9')
    )
);
$conta->depositar(500);
$conta->sacar(100);

echo $conta->retornarSaldo();