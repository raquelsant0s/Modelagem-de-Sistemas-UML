<?php 

    class Carrinho {

        private $itens;

        function incluirItens(Produto $item) {

            $this->itens[] = $item;

        }

        function exibirCarrinho() {

            foreach ($this->itens as $item) {
               
                $item->listarDados();
            }

        }

        function totalCompra() {

            $total = 0;

            foreach ($this->itens as $item) {

               $total = $total + $item->preco;
               
            }

            return number_format($total,2);

        }
    }
?>