<?php

//Feito no PHP Storm
//Importação dos arquivos necessários
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

//Criação de novs objetos do tipo CPF
$primeiroCpf = new Cpf('525.151.643-76');
$segundoCpf = new Cpf('535.316.357-82');

//Criação de um objeto do tipo Titular
$primeiroTitular = new Titular($primeiroCpf, 'Bruno');

//Criação de um objeto do tipo Conta
$primeiraConta = new Conta($primeiroTitular);

//Retornar as informações do primeiro titular
echo 'Primeiro titular: ' . PHP_EOL;
echo $primeiroTitular->retornarNome() . PHP_EOL;
echo $primeiroTitular->retornarCpf() . PHP_EOL;

//Criar segundo titular e segunda conta
$segundoTitular = new Titular($primeiroCpf, 'Felipe');
$segundaConta = new Conta($segundoTitular);

//Realizar um depósito na primeira conta e na segunda conta, sacar somente na segunda e transferir da primeira para
//a segunda conta
$primeiraConta->depositar(500);
//Exibir erro de valor negativo
$primeiraConta->depositar((-500));
$segundaConta->depositar(1000);
$segundaConta->sacar(250);
$segundaConta->transferirSaldo($primeiraConta, 250);
echo 'Saldo primeira conta: ' . $primeiraConta->retornarSaldo() . PHP_EOL;
echo 'Saldo segunda conta: ' . $segundaConta->retornarSaldo() . PHP_EOL;


//Quando não se salva um objeto numa variável, o método destrutor é automaticamente chamado
new Conta($segundoTitular);

//Método estático para retornar o número de contas criadas
echo 'Total de contas antes do método destrutor: ' . $primeiraConta->retornarNumeroDeContas() . PHP_EOL;

//Valor após o método destrutor ser chamado
unset($primeiraConta);
unset($segundaConta);
echo 'Total de contas após o método destrutor: ' . Conta::retornarNumeroDeContas();