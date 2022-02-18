<?php

class Product
{
    //Atributos
    var $name;
    var $description;
    var $price;
    var $peso;

    //Método
    function get(): String
    {
        return "{$this->name}, {$this->description}, {$this->price}, {$this->peso}  <hr>";
    }

    function setName(String $name)
    {
        $this->name = $name;
    }

    function getName(): String
    {
        return strtoupper($this->name);
    }

    function setDescription(String $description)
    {
        $this->description = $description;
    }

    function getDescription(): String
    {
        return ucfirst($this->description);
    }

    function setPrice(int $price)
    {
        $this->price = $price;
    }

    function getPrice(): int
    {
        return $this->price;
    }
}

$tv = new Product;
$tv->setName('TV');
$tv->setDescription('Smart TV');
$tv->setPrice(4500);
echo $tv->getName();
echo $tv->getDescription();
echo $tv->getPrice();
echo $tv->get();

$geladeira = new Product;
$geladeira->setName('Geladeira');
$geladeira->setDescription('Degelo Automático');
$geladeira->setPrice(2900);
echo $geladeira->getName();
echo $geladeira->get();

$microondas = new Product;
$microondas->setName('Microondas');
$microondas->setDescription('1500 W');
$microondas->setPrice(800);
$microondas->peso= 1900;
echo $microondas->getName();
echo $microondas->get();