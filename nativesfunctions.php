<html>
    <body>
        <?php 
            function mostraNome($nome, $idade){
                echo "Nome é: $nome";
                echo '<hr>';
                echo "Idade é: $idade";
            }

            function calculadora($numero1 = 10, $numero2 = 20){
                 echo ($numero1+$numero2);
            }
            
            function verdade(){
                return true;
            }

            function retornarString(){
                return 'Paulo';
            }

            echo retornarString();

            $variavel = verdade();
        ?>
    </body>
</html>