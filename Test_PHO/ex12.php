<?php 
//Ocorrencia anormal que afecta o funcionamento da aplicação
//Exception é a classe base para todas as Exceptions
//Message, code, file, line

class Newsletter{
    public function cadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Email inválido", 121);
        else:
            echo "Email cadastrado com sucesso";
        endif;
    }
}

$newsletter = new Newsletter();

try{
    $newsletter->cadastrarEmail("contato@");
} catch(Exception $e){
    echo "Mensagem: " .$e->getMessage() ."<br>";
    echo "Código: " .$e->getCode() ."<br>";
    echo "Linha: " .$e->getLine() ."<br>";
    echo "Arquivos: " .$e->getFile() ."<br>";
}



