<?php
// Inclui a conexão com o banco de dados
include 'conexao.php';

// Verifica a conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Consulta SQL para buscar todos os animais
$sql = "SELECT * FROM animais";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Animais</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5dc; /* Bege claro */
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background: #fff8e7; /* Fundo branco suave para contraste */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #6a1b9a; /* Roxo forte */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #f9f3e1; /* Rosa-bege claro para o fundo da tabela */
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #7b1fa2; /* Roxo escuro para cabeçalho */
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f5f0d0; /* Bege mais claro */
        }
        tr:hover {
            background-color: #e8e1d7; /* Bege suave ao passar o mouse */
        }
        .actions button {
            margin: 0 5px;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .add-btn {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #388e3c; /* Verde escuro */
            color: white;
            text-align: center;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .add-btn:hover {
            background-color: #2c6e2f; /* Verde mais escuro */
        }
        .edit-btn {
            background-color: #5e35b1; /* Roxo claro */
            color: white;
        }
        .delete-btn {
            background-color: #212121; /* Preto */
            color: white;
        }
        .edit-btn:hover {
            background-color: #512da8; /* Roxo mais intenso */
        }
        .delete-btn:hover {
            background-color: #424242; /* Preto mais suave */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestão de Animais</h1>
        <button class="add-btn" onclick="window.location.href='adicionar.php'">Adicionar Animal</button>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Espécie</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Exibe os registros do banco de dados dinamicamente
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['nome'] . "</td>
                                <td>" . $row['especie'] . "</td>
                                <td class='actions'>
                                    <button class='edit-btn' onclick='window.location.href=\"editar.php?id=" . $row['id'] . "\"'>Editar</button>
                                    <button class='delete-btn' onclick='deleteAnimal(" . $row['id'] . ")'>Excluir</button>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Nenhum animal cadastrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        function deleteAnimal(id) {
            if (confirm("Tem certeza que deseja excluir o animal com ID " + id + "?")) {
                window.location.href = "excluir.php?id=" + id;
            }
        }
    </script>
</body>
</html>
