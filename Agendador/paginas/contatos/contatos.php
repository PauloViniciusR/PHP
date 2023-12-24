<header>
    <h3>Página de contatos</h3>
</header>
<div>
    <a href="index.php?menuop=cad-contato">Novo contato</a>
</div>

<table border = "1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Sexo</th>
            <th>Data Nasc</th>
            <th>Ediçao</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $sql = "SELECT 
            ID,
            upper(nomeContato) AS nomeContato,
            lower(emailContato) AS emailContato,
            telefoneContato,
            upper(enderecoContato) AS enderecoContato,
            CASE
                WHEN sexoContato='F' THEN 'FEMININO'
                WHEN sexoContato='M' THEN 'MASCULINO'
            ELSE 
                'NÃO ESPECIFICADO'
            END AS sexoContato,
            date_format(dataNascContato, '%d/%m/%Y') AS dataNascContato
            FROM tbcontatos";
            
            $rs = mysqli_query($conexao,$sql) or die('Erro de conexão ' . mysqli_error($conexao));
            while($dados = mysqli_fetch_assoc($rs)){

            
        ?>
        <tr>
            <td><?=$dados["ID"]?></td>
            <td><?=$dados["nomeContato"]?></td>
            <td><?=$dados["emailContato"]?></td>
            <td><?=$dados["telefoneContato"]?></td>
            <td><?=$dados["enderecoContato"]?></td>
            <td><?=$dados["sexoContato"]?></td>
            <td><?=$dados["dataNascContato"]?></td>
            <td><a href="index.php?menuop=editar-contato&idContato=<?=$dados["ID"] ?>">Editar</a> </td>
        </tr>
    <?php 
        }
    ?>
        
    </tbody>
</table>