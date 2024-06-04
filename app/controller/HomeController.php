<?php
require_once(__DIR__ . '/../model/PostModel.php');

class HomeController {
  private $postModel;

  public function __construct() {
      $this->postModel = new PostModel();
  }

  public function index() {
      $posts = $this->postModel->getPosts();
      require_once(__DIR__ . '/../view/home.php');
  }

  public function addPost($text) {
    if (!empty($text)) {
        $username = $_SESSION['username'];  // Supondo que o nome de usuário esteja armazenado na sessão
        $this->postModel->addPost($username, $text);
        header("Location: /");
    } else {
        echo "O texto do post não pode ser vazio.";
    }
}

}


