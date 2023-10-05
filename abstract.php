<?php 

    abstract class teste{
        public function func1(){
            echo 'chamando função 1';
        }

        abstract function func2();
    }

    class principal extends teste{
        public function func2(){
            echo 'estou declarando o modo abstrato';
        }

        public static function metodo(){
            echo 'metodo estatico';
        }
        
        public function funcao(){
            //Principal::metodo();
            self::metodo();
        }
    }

    $principal = new Principal;
    $principal->funcao();
    //$principal->func1();
    //echo '<br />';
    //$principal->func2();

?>