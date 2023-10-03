<html>
    <body>
        <?php 
        $conteudo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, et dignissimos? 
        Quos nemo voluptatum cum harum? Modi velit neque, sequi nostrum facere vero ex totam. Nulla provident unde ex deleniti.';

        //Cortar uma string
        //echo substr($conteudo, 0, 20);

        $nome = 'Paulo Vinicius Rodrigues';

        $nomes = explode(' ',$nome);

        //print_r($nomes);

        //Serve para juntar um arrray com um  delimitador
        $nomes = implode(' ',$nomes);

        //echo($nomes);

        //Strip para tirar codigo HTLM
        $conteudo = '<h1>Paul<h1>';
        echo strip_tags ($conteudo);
        ?>
    </body>
</html>