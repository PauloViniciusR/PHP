<?php 
    class Filha{
        /* protected function funcaoTest(){
            echo 'chamando função teste';
        } */

        private function funcaoTest(){
            echo 'chamando funcão teste';
        }

        public function printHello(){
            $this->funcaoTest();
            echo '<br />';
            echo 'Hello world!!'; 
        }
    }

    class Pai extends Filha{

        public function printHello(){
            parent::printHello();
            echo '<br />';
            echo 'nova função';
        }
        public function mostrarTchau(){
            echo 'Bye world!!';
            echo '<br />';
            $this->funcaoTest();
        }
    }
    
    $pai = new Pai;
    $pai->printHello();




?>