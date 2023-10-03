<?php 
    $nome = 'Paulo';
    /*
    switch($nome){
        case 'Paulo':
            echo 'Minha variavel é Paulo';
            break;
        case 'João':
            echo 'Minha variavel é João';
            break;
    } */

    for($i = 0; $i < 10; $i++){
        echo $i;
        echo '<hr>';
        if($i == 5)
            break;
    }



?>