<?php
// Configuração do banco de dados
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "animais";

// Criando a conexão
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verifica se houve erro
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>
