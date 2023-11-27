<?php 
     
     namespace Sessao1;
     class Class01
    {
        function __construct()
        {
            new \Sessao2\Class02();
            echo 'Classe instanciada';
        }
    }
    
?>