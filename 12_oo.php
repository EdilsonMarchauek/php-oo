<?php

class Str
{
    public function __call($name, $arguments)
    {
        if($name == 'upper'){
            return strtoupper($arguments[0]);
        }
    }

    static function __callStatic($name, $arguments)
    {
        if($name == 'upper'){
            return strtoupper($arguments[0]);
        }
    }

    public function __toString()
    {
        return '__toString';
    }
}

$obj = new Str;
echo $obj->upper('Valor');
echo '<hr>';
echo $obj;
echo '<hr>';
echo Str::upper('Value');