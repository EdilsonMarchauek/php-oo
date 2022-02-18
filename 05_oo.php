<?php

class Escola
{
    const PID='AJDH52TSD';
    private static $saldo = 0.0;

    static public function getSaldo() : Float
    {
        return self::$saldo;
    }

    static public function addSaldo(float $saldo)
    {
        self::$saldo += $saldo;
    }
}

class Aluno
{
    public $name;
    private $saldo = 0.0;

    public function addSaldo(float $saldo)
    {
        $this->saldo = $saldo;
    }

    public function getSaldo(): Float
    {
        return $this->saldo;
    }

    public function novaCompra(float $valor)
    {
        if($this->saldo >= $valor){
            $this->saldo -= $valor;

            //Escola::$saldo += $valor;
            Escola::addSaldo($valor);

            return true;
        } else {
            return false;
        }
    }
}

echo '<hr>';
$aluno01= new Aluno;
$aluno01->name = 'Carlos';
echo $aluno01->getSaldo();
echo '<br>';
$aluno01->addSaldo(50.00);
echo $aluno01->getSaldo();
$response = $aluno01->novaCompra(20);
if(!$response){
    echo ' Saldo insuficiente';
}
echo '<br>';
echo $aluno01->getSaldo();

echo '<hr>';

$aluno02 = new Aluno;
$aluno02->name = 'Outro Aluno';
echo $aluno02->getSaldo();
echo '<br>';
$aluno02->addSaldo(100.00);
echo $aluno02->getSaldo();
echo '<br>';
$aluno02->novaCompra(30);
echo $aluno02->getSaldo();

echo '<hr>';
//echo Escola::$saldo;
echo Escola::getSaldo();