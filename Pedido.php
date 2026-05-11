<?php
    class Pedido {
        private $id;
        private $quantidade;
        private $produtos;
        private $cliente;

        public function __construct($id,$cliente){
            $this->id = $id;
            $this->cliente = $cliente;
            $this->quantidade = 0;
        }

        public function adicionaProduto($produto) {
            $this->produtos = $produto;
            $this->quantidade++;
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getQuantidade() {
            return $this->quantidade;
        }

        public function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }

        public function getProdutos() {
            return $this->produtos;
        }

        public function setProdutos($produtos) {
            $this->produtos = $produtos;
            $this->quantidade = count($produtos);
        }

        public function getCliente() {
            return $this->cliente;
        }

        public function setCliente($cliente) {
            $this->cliente = $cliente;
        }

        public function listarPedido() {
            echo "Pedido #{$this->id} do cliente: " . $this->cliente->getNome() . "\n";
            echo "Quantidade de produtos: {$this->quantidade}\n";
            if (is_array($this->produtos)) {
                foreach ($this->produtos as $produto) {
                    echo "- {$produto->getDescricao()} ({$produto->getCategoria()->getDescricao()}) - R$ {$produto->getPreco()}\n";
                }
            }
        }
    }
?>
