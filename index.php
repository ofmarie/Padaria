<?php
    require "Cliente.php";
    require "Produto.php";
    require "Pedido.php";
    require "Categoria.php";

    // Processa formulário POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idPedido = $_POST['id'];
        $nomeCliente = $_POST['cliente'];
        $nomeProduto = $_POST['produto'];
        $preco = $_POST['preco'];
        $nomeCategoria = $_POST['categoria'];

        $cliente = new Cliente($nomeCliente);
        $categoria = new Categoria($nomeCategoria);
        $produto = new Produto($nomeProduto, $preco, $categoria);

        $pedido = new Pedido($idPedido, $cliente);
        $pedido->adicionaProduto($produto);
        
        echo "<h2>Pedido criado com sucesso!</h2>";
        $pedido->listarPedido();
        echo "<hr>";
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
        }
        button:hover {
            background-color: #45a049;
        }
        h1 {
            color: #333;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Criar Novo Pedido</h1>
    <form method="POST">
        <input type="number" name="id" placeholder="ID do Pedido" required>
        <input type="text" name="cliente" placeholder="Nome do Cliente" required>
        <input type="text" name="produto" placeholder="Nome do Produto" required>
        <input type="number" name="preco" placeholder="Preço" required>
        <input type="text" name="categoria" placeholder="Categoria" required>
        <button type="submit">Criar Pedido</button>
    </form>
</body>
</html>