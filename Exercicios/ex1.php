
<html>

<script>
    //input de quantidade
        prompt('Digite a quantidade de patinhos: ');
</script>

    <?php 
        $patinhos = '';
        //validaçaõ de quantidade

        if(!is_numeric($patinhos) || ($patinhos <=1) || ($patinhos >= 10)){
            echo 'Numero digitado inválido. Insira um valor maior que 1 e menor que 10';
            exit;
        }

        for($i = $patinhos; $i = 0; $i--){
            echo $i;
        }




        ?>
</html>
