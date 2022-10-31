<?php 

    class Vendido extends Produto {

        public $qtdvendas;

        function incluirVendas(Produto $item) {

            $this->qtdvendas[] = $item;

        }

        function qtdTotal() {

            $total = 0;

            foreach ($this->qtdvendas as $item) {

               $total = $total + $item->qtd_produto;
            }

            return $total;

        }


    }

?>