<html>
    <body>
        <h1>
            <?php 
            //while
            /* $i = 1;
                while($i <= 10){
                    echo" $i \n";
                    $i++;
                } */

            //do-while 
          /*  $j = 1;
            do{
                echo"$j";
                $j++;
            }

            while ($j <= 1); */

            //for
            /* for($cont = 0; $cont < 10; $cont++){
                echo"$cont \n";
            } */

            //for com array
           $arrayVeiculos = Array("Carro", "Moto", "Bike", "Caminhão");
               /* for($i = 0; $i < count($veiculos); $i++){
                    echo"$veiculos[$i]" . "\n";
                } */

            //foreach com array 
               foreach($arrayVeiculos as $veiculos){
                  echo"$veiculos" . "\n";
               }
                    




            ?>
        </h1>
    </body>
</html>