<?php
    class Produto extends Categoria {
        private $preco;

        public function __construct($descricao, $preco){
            parent::__construct($descricao);
            $this->preco = $preco;
        }  

        public function getPreco(){
            return $this->preco;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function __toString(){
            return $this->getDescricao();
        }
    }
?>
