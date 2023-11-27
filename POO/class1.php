<?php 
    include('magicMethod.php');
    $teste = new Class1('Paulo',23);

    echo $teste->getName();
    echo '<hr />';
    echo $teste->getIdade();
    
?>