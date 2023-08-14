<?php

class Pessoa{
    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome." de ".$this->idade." acabou de falar";
    }
}

$gabriel = new Pessoa();
$gabriel->nome = "Gabriel Godoy";
$gabriel->idade = 18;
$gabriel->Falar();
//echo $gabriel->nome;