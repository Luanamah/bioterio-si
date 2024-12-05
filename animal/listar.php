<?php
include 'conexao.php';

// Consultando os animais
$sql = "SELECT * FROM animais";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['especie'] . "</td>";
        echo "<td>
                <a href='editar.php?id=" . $row['id'] . "'>Editar</a> |
                <a href='excluir.php?id=" . $row['id'] . "' onclick='return confirm(\"Deseja excluir este animal?\")'>Excluir</a>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>Nenhum animal encontrado.</td></tr>";
}
?>
