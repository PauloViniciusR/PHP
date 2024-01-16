<?php 
    //$content = 'teste atraves da manipulação de arquivos';
    //file_put_contents('teste.txt', $content);
   
    $content = file_get_contents('https://cursos.dankicode.com/');
    echo($content);

?>