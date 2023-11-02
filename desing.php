<?php 

    //Fatory Desing Patters
    class Cachorro{
        public function __construct(){
            echo 'Chamando DOG';
        }
    }

    class Gato{
        public function __construct(){
            echo 'Chamndo CAT';
        }
    }

    class Animal{
        public static function build($nomeClass){
            if(class_exists($nomeClass)){
                return new $nomeClass;
            }else{
                die('Ops, chamada não encontrada');
            }
            
        }
    }

    Animal::build('hs');
?>