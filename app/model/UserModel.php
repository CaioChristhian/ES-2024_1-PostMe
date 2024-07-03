<?php
require_once(__DIR__ . '/../../config/Database.php');

class UserModel {
    private $conn;

    public function __construct() {
        $this->conn = (new Database())->getConnection();
    }

    public function getUserByUsername($username) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->get_result()->fetch_assoc();
    }

    public function createUser($username, $password) {
        // Verifica se o usuário já existe
        if ($this->getUserByUsername($username)) {
            return false; // Retorna false se o usuário já existir
        }

        // Cria um novo usuário se ele não existir
        $stmt = $this->conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }
}

