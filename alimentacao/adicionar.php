<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $calorias = $_POST['calorias'];

    $sql = "INSERT INTO alimentos (nome, categoria, calorias) VALUES ('$nome', '$categoria', $calorias)";
    if ($conexao->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao adicionar: " . $conexao->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Item</title>
</head>
<body>
    <h1>Adicionar Novo Item</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>
        <label>Categoria:</label>
        <input type="text" name="categoria" required><br><br>
        <label>Calorias:</label>
        <input type="number" name="calorias" required><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
