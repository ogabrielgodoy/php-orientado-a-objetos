<?php
/* Heranca é um recurso que permite que classes compartilhem atributos e metodos
a fim de reaproveitar códigos ou comportamentos generalizados */

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou";
    }

    public function Parar(){
        echo "Parou";
    }
}

//extends é usado para herdar uma oura classe
class Carro extends Veiculo {    

    public function ligarLimpador(){
        echo "Limpador ligado";
    }

}

class Moto extends Veiculo {

    public function darGrau(){
        echo "Empinando ligado";
    }

}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
echo "<br>";
echo $carro->ligarLimpador();
//var_dump($carro);

echo "<br>";

$moto = new Moto();
$moto->modelo = "Honda";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->Parar();
echo "<br>";
echo $moto->darGrau();
