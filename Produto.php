<?php
    class Produto extends PadariaItem {
        private $categoria;

        public function __construct($descricao, $preco, $categoria) {
            parent::__construct($descricao, $preco);
            $this->categoria = $categoria;
        }

        public function getCategoria() {
            return $this->categoria;
        }

        public function setCategoria($categoria) {
            $this->categoria = $categoria;
        }
    }
?>