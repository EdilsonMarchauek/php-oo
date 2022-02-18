<?php

/*
Visibilidade:
Public - os métodos são públicos.
Protected - somente a própria classe e as que herdam podem acessar os seus atributos.
Private - somente a própria classe tem acesso aos atributos
*/

class Pessoa
{
    private $name;

    public function setName(String $name)
    {
        $this->name = $name;
    }

    public function getName(): String
    {
        return $this->name;
    }
}

$carlos = new Pessoa;
$carlos->setName('Carlos');
echo $carlos->getName();


