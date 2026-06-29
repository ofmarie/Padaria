<?php
    class Pix implements Pagamento {
        private $chave;

        public function __construct($chave) {
            $this->chave = $chave;
        }

        public function pagar($preco) {
            echo "<p>Pagamento no valor de R$" . number_format($preco, 2, ',', '.') . " realizado com sucesso via Pix usando a chave: {$this->chave}</p>";
        }
    }
?>