<?php 
    include('interface.php');
        
    class Teste implements Interface1{

        public function printScreen($par){
            echo $par;
        }
    }


    $teste = new Teste;

    $teste->printScreen('Olá mundo');

?>