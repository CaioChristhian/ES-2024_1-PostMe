<?php
require_once(__DIR__ . '/../model/UserModel.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function login($username, $password) {
        $user = $this->userModel->getUserByUsername($username);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: /post-me/public/home");
            exit;
        } else {
            return false;
        }
    }

    public function logout() {
        session_destroy();
        header("Location: /post-me/public/login");
        exit;
    }

    public function register($username, $password) {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        if ($this->userModel->createUser($username, $passwordHash)) {
            header("Location: /post-me/public/login");  // Redireciona para a página de login após o registro bem-sucedido
            exit;
        } else {
            return false;
        }
    }
}


  
