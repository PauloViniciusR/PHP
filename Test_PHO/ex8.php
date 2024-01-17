<?php 
//Polimorfismo

class Animal{
    public function Andar(){
        echo "Andando...";
    }

    public function Dormir(){
        echo "Dormindo...";
    }

    public function Comendo(){
        echo "Comendo...";
    }
}

class Cachorro extends Animal{
    public function Andar(){
        $this->Dormir();
    }
}

class Gato extends Animal{
    public function Andar(){
        $this->Comendo();
    }
}

$animal = new Cachorro();
$animal->Andar();

echo "<hr>";

$animal = new Gato();
$animal->Andar();

?>