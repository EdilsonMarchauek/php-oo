<?php

class MyClassDad
{

}

class MyClass extends MyClassDad
{
    public $name = 'Qualquer';
    private $id;
    protected $lastName;

    public function method1($prm = 'method1', $prm2 = 'Default'): string
    {
        return "$prm - $prm2";
    }

    public function method2(): void
    {
        
    }

    public function method3(): void
    {
        
    }
}

$obj = new MyClass;

/*
function teste($prm1, $prm2, $prm3)
{
    return "{$prm1} - {$prm2} - {$prm3}";
}

$functionN = 'teste';
$className = 'MyClass';
$params = [2, 3, 4];
echo call_user_func($functionN, ...$params);
*/

//$functionN = 'method1';
//echo call_user_func_array([$obj, $functionN], [123,456]);

//$className = 'MyClass';
//var_dump(class_exists($className));

//var_dump(is_a($obj, 'MyClassDad'));

var_dump($obj instanceof Myclass);