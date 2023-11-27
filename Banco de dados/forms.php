<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php 
   /* if(isset($GET['acao'])){
        $nome = @$_GET['nome'];
        $email = @$_GET['email'];
        echo $nome;
        echo '<br>';
        echo $email; 
    } */

    /* if(isset($_POST['acao'])){
        echo $_POST['numero1'] + $_POST['numero2'];
    } */

    if(isset($_POST['acao'])){
        foreach ($_POST['valor'] as $key => $value) {
            echo $key;
            echo '=>';
            echo $value;

            echo '<hr>';
        }
    }
    
    ?>
    <form method="post">
        <select name="nome">
            <option value="Paulo">Paulo</option>
            <option value="Bia">Bia</option>
        </select>
        <input type="checkbox" name="valor[]" value="10">10
        <input type="checkbox" name="valor[]" value="20">20
        <input type="checkbox" name="valor[]" value="30">30
        <input type="checkbox" name="valor[]" value="40">40
        <input type="checkbox" name="valor[]" value="40">50
        <input type="submit" name="acao" value="Enviar!" />
    </form>
</body>
</html>