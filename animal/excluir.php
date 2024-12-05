<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM animais WHERE id = $id";

if ($conexao->query($sql) === TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "Erro ao excluir: " . $conexao->error;
}
?>
