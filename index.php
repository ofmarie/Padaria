<?php
    require "Cliente.php";
    require "Produto.php";
    require "Pedido.php";
    require "Categoria.php";

    $mensagem = ""; // variável para guardar o resultado

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

        // guarda o resultado em vez de imprimir diretamente
        ob_start();
        echo "<h2>Pedido criado com sucesso!</h2>";
        $pedido->listarPedido();
        $mensagem = ob_get_clean();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos</title>
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        button {
            background-color: #e9699a;
            color: white;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #d85789;
        }
        .mensagem {
            margin-top: 15px;
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Novo Pedido</h1>
        <form method="POST">
            <input type="number" name="id" placeholder="ID do Pedido" required>
            <input type="text" name="cliente" placeholder="Nome do Cliente" required>
            <input type="text" name="produto" placeholder="Nome do Produto" required>
            <input type="number" name="preco" placeholder="Preço" step="0.01" required>
            <input type="text" name="categoria" placeholder="Categoria" required>
            <button type="submit">Criar Pedido</button>
        </form>

        <!-- Exibe a mensagem dentro do escopo -->
        <div class="mensagem">
            <?php echo $mensagem; ?>
        </div>
    </div>
</body>
</html>
