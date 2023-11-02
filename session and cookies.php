<?php 
    session_start();
    $_SESSION['nome'] = 'Paulo';
    $_SESSION['idade'] = 23;

    setcookie('nome', 'Vinicius', time() - (60*60*24), '/');

    echo $_COOKIE['nome'];

?>