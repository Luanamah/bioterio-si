<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Alimentação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffefd5; /* Fundo em tom vibrante de pêssego claro */
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff; /* Fundo branco para contraste */
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
            color: #ff4500; /* Laranja vibrante */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #ffdab9; /* Fundo vibrante da tabela */
        }
        th, td {
            padding: 12px;
            border: 1px solid #fff;
            text-align: left;
        }
        th {
            background-color: #ff6347; /* Vermelho tomate vibrante */
            color: white;
        }
        tr:nth-child(even) {
            background-color: #ffe4b5; /* Bege claro vibrante */
        }
        tr:hover {
            background-color: #ff7f50; /* Coral vibrante */
        }
        .add-btn {
            display: block;
            padding: 12px;
            background-color: #32cd32; /* Verde vivo */
            color: white;
            text-align: center;
            text-decoration: none;
            margin-bottom: 20px;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .add-btn:hover {
            background-color: #228b22; /* Verde escuro vibrante */
        }
        .actions a {
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
            margin-right: 5px;
            font-weight: bold;
            color: white;
        }
        .edit-btn {
            background-color: #1e90ff; /* Azul vibrante */
        }
        .delete-btn {
            background-color: #dc143c; /* Vermelho vibrante */
        }
        .edit-btn:hover {
            background-color: #104e8b; /* Azul escuro */
        }
        .delete-btn:hover {
            background-color: #8b0000; /* Vermelho escuro */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestão de Alimentação</h1>
        <a href="adicionar.php" class="add-btn">Adicionar Item</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Calorias</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'listar.php'; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
