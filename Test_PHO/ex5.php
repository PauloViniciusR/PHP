<?php 
//Abstração

abstract class Banco{
    protected $saldo;
    protected $limitesaldo;
    protected $juros;

        public function setSaldo($s){
            $this->saldo = $s;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        abstract protected function Sacar($s);
        abstract protected function Depositar($d);
}

class Nubank extends Banco{
    public function Sacar($s){
        $this->saldo -= $s;
        echo " <br> Sacando valor de: " .$s;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo "<br> Depositando valor de: " .$d;
    }
}

$nubank = new Nubank();
$nubank->setSaldo(1000);
echo "<hr> O seu saldo é de: " .$nubank->getSaldo();
$nubank->Sacar(300);
echo "<hr> O seu saldo é de: " .$nubank->getSaldo();
$nubank->Depositar(500);
echo "<hr> O seu saldo é de: " .$nubank->getSaldo();



?>