<?php 
//Constante , Self e Parent

class Pessoa {
    const nome = "Vinicius";
    
    public function MostrarNome(){
        echo self::nome;
    }
}
class Vinicius extends Pessoa{
    const nome = "Paulo";
    public function MostrarNome(){
        echo parent::nome;
    }

}


$vinicius = new Vinicius();
$vinicius->MostrarNome();


?>