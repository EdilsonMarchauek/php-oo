<?php

class MyClass
{
    private $name;
    private $cpf;
    private $age;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}

$obj = new Myclass;
$obj->name = 'Carlos';
$obj->cpf = '1484524112';
$obj->age = 85;
//echo $obj->name;
//echo $obj->cpf;
echo $obj->age;