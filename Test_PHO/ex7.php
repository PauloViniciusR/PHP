<?php 
//Métodos e Atributos estáticos

class Login{
    public static $user;

    public static function VerificarLogin(){
        echo "User ".self::$user." está logado!";
    }

    public function Sairsistema(){
        echo "User deslogou";
    }

}

$login = new Login();
$login->Sairsistema();

?>