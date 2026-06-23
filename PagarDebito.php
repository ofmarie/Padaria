<?php
    class Debito implements Pagamento {
        private $cartao;

        public function __construct($cartao) {
            $this->cartao = $cartao;
        }

        public function pagar($preco){
            echo"<p>Pagamento no valor de R$" . number_format($preco) . " realizado com sucesso no cartão de débito!</p>";
        }
    }
?>