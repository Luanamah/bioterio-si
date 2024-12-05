<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM alimentos WHERE id=$id";
    $resultado = $conexao->query($sql);
    $item = $resultado->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $calorias = $_POST['calorias'];

    $sql = "UPDATE alimentos SET nome='$nome', categoria='$categoria', calorias=$calorias WHERE id=$id";
    if ($conexao->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao editar: " . $conexao->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Item</title>
</head>
<body>
    <h1>Editar Item</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $item['nome']; ?>" required><br><br>
        <label>Categoria:</label>
        <input type="text" name="categoria" value="<?php echo $item['categoria']; ?>" required><br><br>
        <label>Calorias:</label>
        <input type="number" name="calorias" value="<?php echo $item['calorias']; ?>" required><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
