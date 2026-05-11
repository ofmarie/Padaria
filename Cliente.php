<?php
    class Cliente{
        private $nome;
        
        
        public function __construct($nome){
            $this->nome = $nome;
        }  

        public function comprar(){
            echo"<p>" . $this->nome . " realizou a compra.";
        }

        public function getNome(){
            return $this->nome;
        }

        public function __toString(){
            return $this->nome;
        }
    }
?>
