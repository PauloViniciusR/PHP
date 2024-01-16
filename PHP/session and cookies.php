<?php 
    session_start();
    $_COOKIE['nome'] = 'Paulo';
    $_COOKIE['idade'] = 23;

    setcookie('nome', 'Vinicius', time() - (60*60*24), '/');

    echo $_COOKIE['idade'];

?>