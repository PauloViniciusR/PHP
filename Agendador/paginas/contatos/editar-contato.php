<?php 
    $idContato = $_GET["idContato"];

    $sql = "SELECT * FROM tbcontatos WHERE ID= {$idContato}";
    $rs = mysqli_query($conexao, $sql) or die ("Erro ao alterar dados. " . mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
?>
<header>
    <h3>Editar contatos</h3>
</header>
<div>
    <form action="index.php?menuop=atualizar-contato" method="post">
    <div>
        <label for="ID">ID</label>
        <input type="text" name="ID" value="<?=$dados["ID"]?>">
    </div>

    <div>
        <label for="nomeContato">Nome</label>
        <input type="text" name="nomeContato" value="<?=$dados["nomeContato"]?>">
    </div>

    <div>
        <label for="emailContato">E-mail</label>
        <input type="email" name="emailContato" value="<?=$dados["emailContato"]?>">
    </div>

    <div>
        <label for="telefoneContato">Telefone</label>
        <input type="text" name="telefoneContato" value="<?=$dados["telefoneContato"]?>">
    </div>

    <div>
        <label for="enderecoContato">Endereço</label>
        <input type="text" name="enderecoContato" value="<?=$dados["enderecoContato"]?>">
    </div>

    <div>
        <label for="sexoContato">Genero</label>
        <input type="text" name="sexoContato" value="<?=$dados["sexoContato"]?>">
    </div>

    <div>
        <label for="dataNascContato">Data de nascimento</label>
        <input type="date" name="dataNascContato" value="<?=$dados["dataNascContato"]?>">
    </div>

    <div>
        <input type="submit" value="Atualizar" name="btn-atualizar">
    </div>
</div>
</form> 