<?php
    require "PadariaItem.php";
    require "Cliente.php";
    require "Produto.php";
    require "Pedido.php";
    require "Categoria.php";
    require "Pagamento.php";
    require "pagarDebito.php";
    require "pagarPix.php";

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
            background-color: #121212;
            color: #fff;
        }
        form {
            background-color: #1e1e1e;
            padding: 24px;
            border-radius: 16px;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.28);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        input, button {
            width: 100%;
            padding: 14px 16px;
            margin: 12px 0;
            border: none;
            border-radius: 12px;
            font-size: 14px;
            box-sizing: border-box;
        }
        input {
            background-color: rgba(255, 255, 255, 0.08);
            color: #fff;
            outline: none;
        }
        input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }
        button {
            background-color: #c94b86;
            color: white;
            cursor: pointer;
            transition: background-color 0.25s ease;
        }
        button:hover {
            background-color: #b33f77;
        }
        h1 {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
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