<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM animais WHERE id = $id";
$result = $conexao->query($sql);
$animal = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];

    $sql = "UPDATE animais SET nome='$nome', especie='$especie' WHERE id=$id";
    if ($conexao->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao atualizar: " . $conexao->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Animal</title>
</head>
<body>
    <h1>Editar Animal</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $animal['nome']; ?>" required><br><br>
        <label>Espécie:</label>
        <input type="text" name="especie" value="<?php echo $animal['especie']; ?>" required><br><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
