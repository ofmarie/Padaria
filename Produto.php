<?php
    class Produto{
        private $preco;
        private $categoria;
        private $descricao;

        public function __construct($descricao, $preco, $categoria){
            $this->descricao = $descricao;
            $this->preco = $preco;
            $this->categoria = $categoria;
        }  

        public function getDescricao(){
            return $this->descricao;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        public function getPreco(){
            return $this->preco;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }
        public function getCategoria(){
            return $this->categoria;
        }

        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }

        public function __toString(){
            return $this->descricao;
        }
    }
?>
