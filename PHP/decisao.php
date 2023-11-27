<html>
    <body>
        <h1>
            <?php 
                //$var1 = 10;
            //$var2 = 10;

            /* if($var1 != $var2){
                echo "$var1 é diferente a $var2"; 
            }else{
                echo "$var1 não é diferente a $var2";
            } */

            //Forma alternativa 
            /*if($var1 == $var2):
                echo "\n\nForma alternativa \n\n";
                echo "$var1 é igual a $var2 \n\n";
            else:
                echo "$var1 não é igual a $var2\n\n";
            endif; */

            //Operador ternário
           /* echo "\n\nOperador ternário: \n\n";
            $comparacao =(($var1 === $var2)) ? "Iguais e do mesmo tipo" : "Apenas iguais";
            echo $comparacao;

            echo "\n\n"; */

            //elsif
            /* $nota_media = 4;

            if($nota_media >= 6){
                echo "A sua nota foi: $nota_media!! Você está Aprovado!!";
            }else if($nota_media <= 6 && $nota_media >= 4){
                echo "A sua nota foi: $nota_media, está na Recuperação";
            }else{
                echo "A sua nota foi: $nota_media, está Reprovado";
            } */ 

          /*  $idade = 10;

            if($idade >= 18){
                echo "Você é maior de idade";
            }else if($idade <= 18 && $idade >= 12){
                echo("Você é adolescente");
            }else{
                echo ("Você é uma criança");
            } */

            //switch
            echo "\n\n";

            $veiculo = "Carro";
            switch($veiculo){
                case("Carro");
                    echo "O veiculo selecionado é $veiculo";
                    break;
                case("Moto");
                    echo "O veiculo selecionado é $veiculo";
                    break;
                case("Avião");
                    echo("O veiculo selecionado é $veiculo");
                    break;
                default:
                    echo("Opção de veiculo inválido.");
                }

            ?>
        </h1>
    </body>
</html>