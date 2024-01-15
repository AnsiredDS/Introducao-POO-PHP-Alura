<?php

abstract class Conta
{
    //Atributos quase sempre serão privados
    private Titular $titular;
    private float $saldo;
    //Estático: Não é um valor atribuido a um objeto, e sim a classe em si, portanto é igual em todas as classes
    private static $numeroContas;

    //Métodos quase sempre serão públicos

    /*
     * Método construtor: O construct é um método chamado assim que um objeto é criado. Através dele pode-se passar
     * parâmetros para a criação de um objeto de alguma classe.
     * Método destrutor: O método destrutor é um método que é chamado assim que o PHP usa o seu Garbage Collection
     * para deletar da memória um objeto.
    */

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroContas++;
    }

    public function __destruct()
    {
        self::$numeroContas--;
    }

    //Se não tiver nenhum tipo de visibilidade explicito, o PHP assume que o método é público.
    //É sempre bom deixar explicito qual a visibilidade do método.
    public function sacar(float $valorASacar): void
    {
        $taxa = $valorASacar * $this->taxaSaque();
        $valorSaque = $valorASacar + $taxa;
        //Métodos podem possuir suas regras. No caso do saque, o valor do saque não pode ser maior que o saldo e
        //também não pode ser 0 nem negativo.
        if($this->saldo < $valorASacar)
        {
            echo 'Valor de saque maior que saldo disponível!';
            return;
        }

        if($valorASacar <= 0)
        {
            echo 'Valor de saque tem que ser maior que 0!';
            return;
        }


        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar <= 0)
        {
            echo 'Valor de depósito tem que ser maior que 0!' . PHP_EOL;
            return;
        }

        $this->saldo += $valorADepositar;
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

    //Como saldo é uma varíavel privada, essa função pública permite que o usuário visualize o seu saldo sem
    //ter a possibilidade de modifica-lo por fora. O saldo é apenas modificado pela função depositar e sacar.
    public function retornarSaldo(): float
    {
        return $this->saldo;
    }

    //Função estática: Uma função associada a classe, e não aos objetos instanciados por ela

    public static function retornarNumeroDeContas(): int
    {
        return self::$numeroContas;
    }

    abstract protected function taxaSaque(): float;

}
