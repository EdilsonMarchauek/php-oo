<?php

class Endereco
{
    public $rua;
    public $bairro;
}

class User
{
    public $name;
    private $endereco;

    public function setEndereco(String $rua, String $bairro)
    {
        $endereco = new Endereco();
        $endereco->rua = $rua;
        $endereco->bairro = $bairro;

        $this->endereco = $endereco;
    }

    public function getEndereco() : String
    {
        return "<br>Endereço: rua {$this->endereco->rua}, bairro: {$this->endereco->bairro}";
    }
}

$carlos = new User;
$carlos->name = 'Carlos';
echo $carlos->name;
$carlos->setEndereco('Rua xx', 'Bairro: yy');
echo $carlos->getEndereco();


