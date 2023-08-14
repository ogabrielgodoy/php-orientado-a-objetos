<?php
/* 
public - Fará com que nao haja ocultacao nenhuma, toda propriedade ou método declarado com public
serao acessíveis por todos que quiserem acessá-los.

protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos
protegidos como se fossem público.

private - Ao contrário do public, esse modificador faz co mque qualquer método ou propriedade seja visível
só e somente só pela classe que a declarou.
*/

class Veiculo {
    protected $modelo;
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
    
    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getModelo(){
        return $this->modelo;
    }

}

class Moto extends Veiculo {

    public function darGrau(){
        echo "Empinando ligado";
    }

}

$veiculo = new Carro();
$veiculo->setModelo("Gol");
echo $veiculo->getModelo();