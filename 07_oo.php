<?php

class Cart
{
    private $items = [];

    public function add(Product $product)
    {
        array_push($this->items, $product);
    }

    public function all() : array
    {
        return $this->items;
    }
}

class Product
{
    public $name;
}

$p1= new Product;
$p1->name = 'DVD';

$p2= new Product;
$p2->name = 'Vazo';

$p3= new Product;
$p3->name = 'Roupa';

$cart = new Cart;
$cart->add($p1);
$cart->add($p2);
$cart->add($p3);
$items = $cart->all();
foreach ($items as $product){
    echo "Nome: {$product->name} <br>";
}
