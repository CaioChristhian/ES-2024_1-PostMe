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
    
    public function addbio($bio) {
        if (!empty($bio)) {
            $user_id = $_SESSION['user_id'];  
            $this->postModel->addbio($bio, $user_id);
            echo "<script type='text/javascript'>
            document.addEventListener('DOMContentLoaded', function() {
                // Recarregar a página após 2 segundos
                setTimeout(function() {
                    window.location.reload();
                }, 2000);
            });
          </script>"    ;
        require_once ("../app/view/profile.php");
            
        } else {
            echo "A bio do post não pode ser vazio.";
            require_once ("../view/profile.php");

        }
}

}


