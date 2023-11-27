<?php 
    class Pessoa{
        //Objeto pessoa
        private $nome = 'Paulo';
        private $idade = '23';
        private $cargo = 'TI';

        public function crescer(){
            $this->comer();
            echo 'Estou crescendo';
        }

        private function comer(){
            echo 'Estou comendo';
        }
    }

    //Instanciar
    $pessoa = new Pessoa;

    $pessoa->crescer();

?>