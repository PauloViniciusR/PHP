<html>
    <body>
        <h1>
            <?php 
            $num1 = 1010;
            $num2 = 2255;

            $num3 = soma($num1, $num2);

            imprimir_resultado($num3);

            function soma($numero1, $numero2){
                return $numero1 +$numero2;
            }

            function imprimir_resultado($numero){
                echo "O numero da operação é igual a: " . $numero;
            }

            ?>
        </h1>
    </body>
</html>