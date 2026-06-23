<?php
    class Pix implements Pagamento {
        private $nome;

        public function __construct($nome) {
            $this->nome = $nome;
        }

        public function pagar($preco){
            echo"<p>Pagamento no valor de R$" . number_format($preco) . " , realizado com sucesso via Pix!";
        }
    }
?>