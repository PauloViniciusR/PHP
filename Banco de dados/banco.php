<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,'Paulo Vinicius','Rodrigues','2023-11-24 19:00:00')");
   
    $sql->execute();

?> 