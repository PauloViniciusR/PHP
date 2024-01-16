<?php 
//Class, Abrituto e Métodos

class Pessoa {
    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome. "de" .$this->idade. "acabou de falar";
    }
}

    $paulo = new Pessoa();
    $paulo->nome = "Paulo";
    $paulo->idade = 24;

    $paulo->Falar();


?>