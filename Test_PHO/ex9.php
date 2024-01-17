<?php 
//Interface

interface Crud{
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud{
    public function create(){
        //Logica para criar uma noticia
    }

    public function read(){
        //Logica para criar uma noticia 
    }

    public function update(){
        //Logica para atualizar uma noticia
    }

    public function delete(){
        //Logica para deletar uma noticia
    }
}

?>