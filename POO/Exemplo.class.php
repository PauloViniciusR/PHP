<?php 
    class Exemplo{
        private $var1;
        public $var2;

       /* public static $var3 = 'static';
        public function metodo(){

        }

        public static function metodoStatic(){
            echo 'static method';
        }

        private function metodo2(){

        } */

        public function setVar1($var1){
            $this->var1 = $var1;
        
        }

        public function pegarVar1(){
            return $this->var1;
        }
    }


?>