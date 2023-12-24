<?php 
    include("config.php");

    $conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die("Deu erro " . mysqli_connect_error());
    

?>