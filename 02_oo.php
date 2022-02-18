<?php

class Product
{
    var $name;
    var $description;
    var $price;

    //Construct: Automaticamente chamado primeiro.
    function __construct(String $name, String $desc, float $pri)
    {
        $this->name         = $name;
        $this->description  = $desc;
        $this->price        = $pri;
    }

    function get()
    {
        return "{$this->name}, {$this->description}, {$this->price} <hr>"; 
    }

    //Método destrutor
    function __destruct()
    {
        echo 'Entrei no destrutor... hehehe';
    }
}

$product1 = new Product('TV', 'Amoled', 4.909);
echo $product1->get();

$product2 = new Product('Geladeira', 'Super Gelada', 2.999);
echo $product2->get();