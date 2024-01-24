<?php 
//Referencia e clonagem de objetos

class Pessoa{
    public $idade;

    public function __clone(){
        echo "Clonagem de objetos ";
    }

}

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 30;

echo $pessoa2->idade;

?>