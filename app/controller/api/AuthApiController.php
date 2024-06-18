<?php
require_once(__DIR__ . '/../../model/UserModel.php');

class AuthApiController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function login() {
        $data = json_decode(file_get_contents("php://input"), true);
        $username = $data['username'] ?? '';
        $password = $data['password'] ?? '';
        $user = $this->userModel->getUserByUsername($username);
        if ($user && password_verify($password, $user['password'])) {
            echo json_encode(["message" => "Login successful", "user" => $user]);
        } else {
            http_response_code(401);
            echo json_encode(["message" => "Login failed"]);
        }
    }

    public function register() {
        $data = json_decode(file_get_contents("php://input"), true);
        $username = $data['username'] ?? '';
        $password = $data['password'] ?? '';
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        if ($this->userModel->createUser($username, $passwordHash)) {
            echo json_encode(["message" => "Registration successful"]);
        } else {
            http_response_code(400);
            echo json_encode(["message" => "Registration failed"]);
        }
    }

    public function getUserProfile() {
        $username = $_GET['username'] ?? '';
        $user = $this->userModel->getUserByUsername($username);
        if ($user) {
            echo json_encode($user);
        } else {
            http_response_code(404);
            echo json_encode(["message" => "Usuário não encontrado"]);
        }
    }

    public function updateUserBio() {
        $data = json_decode(file_get_contents("php://input"), true);
        $username = $data['username'] ?? '';
        $bio = $data['bio'] ?? '';
        if ($this->userModel->updateUserBio($username, $bio)) {
            echo json_encode(["message" => "Biografia atualizada com sucesso"]);
        } else {
            http_response_code(400);
            echo json_encode(["message" => "Falha ao atualizar biografia"]);
        }
    }
}
