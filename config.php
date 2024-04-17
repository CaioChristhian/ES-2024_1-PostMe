<?php
$servername = "localhost";
$username = "root"; // Substitua pelo seu nome de usuário do MySQL
$password = "kronoscaio"; // Substitua pela sua senha do MySQL
$dbname = "postme"; // Substitua pelo nome do seu banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
