<?php

class MyClass
{
    public $name;
    private $id;
    protected $lastName;

    public function method1(): void
    {

    }

    protected function method2(): void
    {
        
    }

    private function method3(): void
    {
        
    }
}

$obj = new MyClass;
//Retorna os Métodos da classe
//$methods = get_class_methods($obj);
//$methods = get_class_methods('MyClass');
//var_dump($methods);

//Retorna os Atributos públicos da classe
//$vars = get_class_vars('MyClass');
//var_dump($vars);

//Retorna os atributos passando um objeto da classe
//$vars = get_object_vars($obj);
//var_dump($vars);

//Retorna a classe do objeto.
var_dump(get_class($obj));




