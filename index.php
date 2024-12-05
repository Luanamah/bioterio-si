<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Simples</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin-top: 20%;
    }
    button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 15px 30px;
      font-size: 16px;
      margin: 10px;
      cursor: pointer;
      border-radius: 5px;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <h1>Sistema de Biotério</h1>

  <button onclick="window.location.href='alimentacao/index.php'">
    Controle de Alimentação
  </button>

  <button onclick="window.location.href='animal/index.php'">
    Gestão de Animais
  </button>

</body>
</html>
