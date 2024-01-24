<?php 
//Associação

class Restaurante{
    public $pedido;
    public $total;
}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Thor Odisson";
$cliente->endereco = "Asgard, 305";

$restaurante = new Restaurante();
$restaurante->pedido = "700 pizzas";
$restaurante->cliente = $cliente;

$dados = array(
    'Dados 1:'=> $cliente->nome->endereco,
    'Dados 2:'=> $restaurante->pedido->total
);

var_dump($dados);

class Pedido{
    public $numero;
    public $cliente;

}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Paulo";
$cliente->endereco = "São Paulo";

$pedido = new Pedido();
$pedido->numero = "68";
$pedido->cliente = $cliente;

$dados = array(
    'numero' => $pedido->numero ."<br>",
    'nome_cliente' => $pedido->cliente->nome ."<br>",
    "endereco_cliente" => $pedido->cliente->endereco ."<br>"

);

var_dump($dados);





