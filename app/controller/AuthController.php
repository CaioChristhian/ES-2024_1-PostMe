<?php
require_once(__DIR__ . '/../model/UserModel.php');
require_once(__DIR__ . '/../model/PostModel.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class AuthController {
    private $userModel;
    private $postModel;

    public function __construct() {
        $this->userModel = new UserModel();
        $this->postModel = new PostModel ();
    }

    public function search($usernamesearch) {
        $posts = $this->postModel->getPosts();
        $user = $this->userModel->getUserByUsername($usernamesearch);
        if ($user) { //Informações do Usuario Pesquisado
            $_SESSION['search_id'] = $user['id'];
            $_SESSION['usernamesearch'] = $user['username'];
            $_SESSION['followerssearch'] = $user['followers'];
            $_SESSION['followingsearch'] = $user['following'];
            require_once ("../app/view/profile.php");
        } else {
            echo ("Usuário não existe"); //Caso não venha a encontrar [Mudar depois]
            require_once ("../app/view/profile.php");
        }
    }

    public function login($username, $password) {
        $user = $this->userModel->getUserByUsername($username);
        if ($user && password_verify($password, $user['password'])) { //Informações do Usuario para login
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: /post-me/public/home");
            exit;
        } else {
            echo ("Usuário não existe"); //Caso não venha a encontrar [Mudar depois]
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


  
