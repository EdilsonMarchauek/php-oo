<?php

class MyClassDad
{

}

class MyClass extends MyClassDad
{
    public $name = 'Qualquer';
    private $id;
    protected $lastName;

    public function method1(): void
    {

    }

    public function method2(): void
    {
        
    }

    public function method3(): void
    {
        
    }
}

$obj = new MyClass;
//var_dump(get_parent_class($obj));
//var_dump(is_subclass_of($obj, 'MyClassDad'));
//var_dump(method_exists($obj, 'method1')); //true
//var_dump(property_exists($obj, 'name')); //true


