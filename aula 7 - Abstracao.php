<?php 

abstract class Banco{
    protected $saldo;
    protected $limieSaque;
    protected $juros;

    public function setSaldo($s){
        $this->saldo = $s;
        echo "Setou o saldo para " . $s;
    }

    public function getSaldo(){
        echo "Saldo total: " . $this->saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);

}

class Itau extends Banco{

    public function Sacar($s){
    /*$this->saldo = $this->saldo - $s;
    (é a mesma coisa da linha de baixo)
    chama operador combinado
    */
       $this->saldo -= $s;
       echo "Sacou " . $s;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo "Depositou " . $d;
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<br>";
$itau->getSaldo();
echo "<br>";
$itau->Sacar(100);
echo "<br>";
$itau->getSaldo();
echo "<br>";
$itau->Sacar(100);
echo "<br>";
$itau->getSaldo();
echo "<br>";
$itau->Depositar(100);
echo "<br>";
$itau->getSaldo();