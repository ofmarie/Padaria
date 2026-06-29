<?php
    abstract class PadariaItem {
        protected $descricao;
        protected $preco;

        public function __construct($descricao, $preco) {
            $this->descricao = $descricao;
            $this->preco = $preco;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function setPreco($preco) {
            $this->preco = $preco;
        }

        public function __toString() {
            return $this->descricao;
        }
    }
?>