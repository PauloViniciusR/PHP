<?php 

//Facade Patters

//Adicionar/Fechar Carrinho 
//Calcular Frete
//Fechar pedido
   

    class Carrinho{
        public function fecharCarrinho(){
            echo 'Carrinho fechado';    
        }
    }

    class Frete{
        public function calcularFrete(){
            echo '<hr/>';
            echo 'Calculando Frete...';
        }
    }

    class Pedido{
        public function fecharPedido(){
            echo '<hr/>';
            echo 'Pedido Concluido!';
        }
    }

    class Loja{
        public function finalizarCompra(){
            $this->fecharCarrinho();
            $this->calcularFrete();
            $this->fecharPedido();
            
        }

        public function fecharCarrinho(){
            $carrinho = new Carrinho();
            $carrinho->fecharCarrinho();
        }

        public function calcularFrete(){
            $frete = new Frete();
            $frete->calcularFrete();
        }

        public function fecharPedido(){
            $pedido = new Pedido();
            $pedido->fecharPedido();
        }
    }

    $loja = new Loja();
    $loja->finalizarCompra();

?>