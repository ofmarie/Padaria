<?php
    class Categoria {
        protected $descricao;

        public function __construct($descricao) {
            $this->descricao = $descricao;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }
    }
?>