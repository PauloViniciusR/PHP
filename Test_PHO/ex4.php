<?php 
//Herança

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Soltando embreagem...";
    }

    public function Parar(){
        echo "Apertando o freio...";
    }
}

    class Carro extends Veiculo{
        public function Volante(){
            echo "Girando volante...";
        }
    }

    class Moto extends Veiculo{
        public function Freiodemao(){
            echo "Apertando freio de mão...";
        }
    }

$carro = New Carro();
$carro->modelo = 'Hb20';
$carro->cor = 'Preto';
$carro->ano = '2021';
$carro->Volante();
echo '<br>';
$carro->Andar();
echo '<br>';

echo '<hr>';

$moto = new Moto();
$moto->modelo = 'Fan';
$moto->cor = 'Vermelha';
$moto->ano = '2023';
$moto->Parar();
echo '<br>';
$moto->Freiodemao();
echo '<br>';


?>