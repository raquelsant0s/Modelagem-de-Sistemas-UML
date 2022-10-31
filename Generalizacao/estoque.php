<?php 

    class Estoque extends Produto {

        public $qtdEstoque;

        function qtd_Estoque(Produto $item) {

            $this->qtdEstoque[] = $item;

        }

        function numEstoque() {

            $total = 0;

            foreach ($this->qtdEstoque as $item) {

               $total = $total + $item->qtd_estoque;
            }

            return $total;

        }

    }

?>