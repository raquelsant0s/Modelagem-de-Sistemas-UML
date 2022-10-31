<?php 

    class Marca {

        private $id_marca;
        private $nome;
        private $CNPJ;


        function getID(){
            return $this->id_marca;
        }

        function getNome(){
            return $this->nome;
        }

        function getCNPJ(){
            return $this->CNPJ;
        }
        
        function setID($id_marca){
            $this->id_marca = $id_marca;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        function setCNPJ($CNPJ){
            $this->CNPJ = $CNPJ;
        }
        
    }


?>
