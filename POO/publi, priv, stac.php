<?php 
    include('Exemplo.class.php');

    $exemplo = new Exemplo();
    $exemplo->setVar1('Paulo');
    echo $exemplo->pegarVar1();
   // $exemplo->var2 = 'Paulo';

    echo '<hr />';
    $exemplo2 = new Exemplo;
    $exemplo2->setVar1('João');
    echo $exemplo2->pegarVar1();
   // $exemplo2->var2 = 'Joao';

   /* echo $exemplo->var2;
    echo '<br />';
    echo $exemplo2->var2; */

    /* Exemplo::$var3 = 'Outra variável';
    echo Exemplo::$var3; */

    //echo Exemplo::metodoStatic();


?>