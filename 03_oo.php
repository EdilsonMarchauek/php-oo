<?php

//As classes abstratas são as que não permitem realizar qualquer tipo de instância. 
//São classes feitas especialmente para serem modelos para suas classes derivadas. 

abstract class Conta
{

var $number;
var $name;

    public function setName(String $name)
    {
        $this->name = $name;
    }

    public function getName(): String
    {
        return $this->name;
    } 

    //Métodos finais: quando um método é declarado como final, a sobreposição desse método não pode ser realizada.
    final public function setNumber(String $number)
    {
        $this->number = $number;
    }

    public function getNumber(): String
    {
        return $this->number;
    }

    //Assinatura do Método Abstrato: Obriga que seja implementado nas classes derivadas.
    abstract public function getData(): String;

}

// Classes finais podem ser definidas como classes que não podem ser estendidas, 
// ou seja, não pode ser uma superclasse.
final class ContaPfis extends Conta

{
    
    var $cpf;

    public function setCPF(String $cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCPF(): String
    {
        return $this->cpf;
    } 

     //Implementação do método abstrato
    public function getData(): String
    {
        return "Nome: {$this->name}, Número: {$this->number}, CPF: {$this->cpf}";  
    }
}

// Classes finais podem ser definidas como classes que não podem ser estendidas, 
// ou seja, não pode ser uma superclasse.
final class ContaPJUR extends Conta
{
    var $cnpj;

    public function setCNPJ(String $cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getCNPJ(): String
    {
        return $this->cnpj;
    } 

    //Polimorfismo é a capacidade que uma classe tem de sobrepor métodos da classe abstrata, modificando-os.
    //Para tanto, é necessário que ela possua a mesma assinatura de método.
    public function setName(String $name)
    {
        $this->name = strtoupper($name);
    }

     //Implementação do método abstrato
    public function getData(): String
    {
        return "Nome: {$this->name}, Número: {$this->number}, CNPJ: {$this->cnpj}";  
    }
}

$carlos = new ContaPfis;
$carlos->setNumber('13213143');
$carlos->setName('Carlos Ferreira');
$carlos->setCPF('05426587595');
echo $carlos->getData();

echo '<hr>';

$especializati = new ContaPJUR;
$especializati->setNumber('111111111');
$especializati->setName('Especializa Ti');
$especializati->setCNPJ('000000000000');
echo $especializati->getData();

echo '<hr>';



