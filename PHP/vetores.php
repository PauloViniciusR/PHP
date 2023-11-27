<html>
    <body>
        <h1>
            <?php
            //formas de atribuir valores
           /* $carros = array(); //declarando array vazio

            $carros = Array("Hb20", "Citroen", "Ferrari");

            $carros = ["Hb20". "Citroen", "Ferrari"];

            $carros[0] = "Hb20";
            $carros[1] = "Citroen";
            $carros[3] = "Ferrari";

            $carros[] = "Hb20";
            $carros[] = "Citroen";
            $carros[] = "Ferrari"; */


            /* Os arrays anteriores são numéricos. Vejamos outros exemplos, agora com vetores associativos.
            Repare que a principal diferença é a utilização de strings no lugar de números para definir os seus índices. */

          /*  $carros = array (
                "vw" => "Fusca",
                "chevrolet" => "Monza",
                "fiat" => "Tempra"
            );

            $carros = [
                "vw" => "Fusca",
                "chevrolet" => "Monza",
                "fiat" => "Tempra"
            ];

            $carros["vw"] = "Fusca";
            $carros["chevrolet"] = "Monza";
            $carros["fiat"] = "Tempra"; */

           /* $carros = array (
                'vw' => "Fusca",
                0 => "Passat",
                'chevrolet' => "Monza",
                1 => "Chevette",
                'fiat' => "Tempra",
                2 => "Uno" 
            ); */

            /* print_r($carros);
                echo "O tamanho atual do array é: " . count($carros);
                echo "\n\n"; */
            
                //definindo o valor do indice 0 vazio
              /*  $carros[0] = '';
                    print_r($carros);
                        echo "O tamanho atual do array é: " . count($carros); 
                        echo "\n\n"; */
                
                //removendo elementos do array com unset
                /* unset($carros[1], $carros["fiat"]);
                    print_r($carros);
                        echo "O tamanho atual do array é: " . count($carros);
                        echo "\n\n"; */
                
                //removendo elementos do array com array_splice
              /*  array_splice($carros, 1, 2);
                    print_r($carros);
                        echo "O tamnaho atual do array é: " . count($carros);
                        echo "\n\n"; */

                
            //Criar um array para armazenar frutas de acordo com o tipo:
           $frutasVermelhas = array (
                "melancia", "morango",
                "framboesa", "cereja",
            );

            $frutasVermelhas2 = [
                "melancia", "cereja",
                "morango", "framboesa",
            ];

            $frutasCitricas[0] = "laranja";
            $frutasCitricas[1] = "limão";
            $frutasCitricas[2] = "abacaxi";
            $frutasCitricas[3] = "mexerica";
           

           $frutasTropicais[] = "banana";
           $frutasTropicais[] = "goiaba";
           $frutasTropicais[] = "manga";
           $frutasTropicais[] = "maracujá";

            echo "\n\nFrutas Vermelhas\n";
                print_r($frutasVermelhas);
            echo "\n\nFrutas Vermelhas2\n";
                print_r($frutasVermelhas2);
            echo "\n\nFrutas Citricas\n";
                print_r($frutasCitricas);
            echo "\n\nFrutas Tropicais\n";
                print_r($frutasTropicais); 

            //array multidimensional
            $arrayMultidimensional = array(
                "vermelhas" => array(
                    "melancia",
                    "morango",
                    "cereja",
                    "framboesa"
                ),

                "citricas" => array(
                    "laranja",
                    "limão",
                    "abacaxi",
                    "mexerica"
                ),
            );

            echo "Array multidimensionais\n";
                print_r($arrayMultidimensional);



            ?>
        </h1>
    </body>
</html>