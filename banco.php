<?php 

    date_default_timezone_set('America/Sao_Paulo');

    $pdo = new PDO('mysql:host=localhost;dbname=modulo8','root','');

    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $registro = date('Y-m-d H:i:s');

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");

        $sql->execute();
        echo 'Cadastro inserido com sucesso';
    }

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>
    </head>
    <body>
        <form method="post">
        <input type="text" name="nome" required>
        <input type="text" name="sobrenome" required>
        <input type="submit" name="acao" value="Enviar">
        </form>
    </body>
    </html>