<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];

    $sql = "INSERT INTO animais (nome, especie) VALUES ('$nome', '$especie')";
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
    <title>Adicionar Animal</title>
</head>
<body>
    <h1>Adicionar Novo Animal</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>
        <label>Espécie:</label>
        <input type="text" name="especie" required><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
