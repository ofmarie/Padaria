<?php
    class Cliente {
        private $nome;

        public function __construct($nome) {
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function comprar() {
            echo "<p>" . $this->getNome() . " realizou a compra.";
        }

        public function __toString() {
            return $this->nome;
        }
    }
?>