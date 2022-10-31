<?php 

    class Usuario {

        private $id_usuario;
        public $nome;
        private $endereco;
        public $telefone;


        function getID(){
            return $this->id_usuario;
        }

        function getNome(){
            return $this->nome;
        }

        function getEndereco(){
            return $this->endereco;
        }

        function getTelefone(){
            return $this->telefone;
        }
        
        function setID($id_usuario){
            $this->$id_usuario = $id_usuario;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        
    }


?>