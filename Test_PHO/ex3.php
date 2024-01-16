<?php 
//Construct

class Dados {
    private $nome;
    private $cpf;
    private $idade;

    public function __construct($nome, $cpf, $idade){
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->idade = $idade;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($n){
        $this->nome = $n;
    }

    public function getCpf(){
       return $this->cpf;
    }

    public function setCpf($c){
        $this->cpf = $c;
    }

    public function getIdade(){
       return $this->idade;
    }

    public function Cadastro(){
        if($this->nome == "Paulo Vinicius" and $this->cpf == "123456789"):
            echo "Cadastro aprovado!";
        else:
            echo "Cadastro inválido";
        endif;
    }
}

$cadastro = new Dados("Paulo Vinicius", "123456789", 24);
$cadastro->Cadastro();
echo '<br>';
echo $cadastro->getNome();
?>