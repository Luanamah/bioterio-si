<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM alimentos WHERE id=$id";
    if ($conexao->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao excluir: " . $conexao->error;
    }
}
?>
