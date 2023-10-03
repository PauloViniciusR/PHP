<?php 

    //Serve para unir 1 ou mais arrays
   
    $array1 = array('chave1'=>'valor1', 'chave2'=>'valor2');
    $array2 = array('chave3'=>'valor3', 'chave4'=>'valor4');
    $array3 = array('chave5'=>'valor5');
    
    $result = array_merge($array1, $array2, $array3);
    print_r($result); 

    //Serve para retornar valores na mesma chave em 1 ou mais arrays
    $array1 = array('chave1'=>'valor1', 'chave2'=>'valor2');
    $array2 = array('chave3'=>'valor3', 'chave2'=>'outro valor');

    print_r(array_intersect_key($array1, $array2)); 

    
    //Serve para aplicar uma função em todos os valores do array
    $arr = ['<p>Paulo<p>', 'Thiago', '<h1>Mandy<h1>'];

    print_r(array_map('strip_tags',$arr))


?>