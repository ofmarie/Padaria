<?php
    class Cliente{
        private $nome;
        private $total;
        
        public function __construct($nome, $total){
            $this->nome = $nome;
            $this->total = $total;
        }  

        public function comprar(){
            echo"<p>" . $this->nome . " realizou a compra.";
        }

        public function __toString(){
            return $this->nome();
        }
    }
?>