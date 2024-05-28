<?php
require_once BASE_PATH . '/app/model/PostModel.php';

class HomeController {
  private $postModel;

  public function __construct() {
    $this->postModel = new PostModel();
  }

  public function index() {
    $posts = $this->postModel->getPosts();
    require_once BASE_PATH . '/app/view/login.php';
  }

  public function addPost($username, $text) {
    $this->postModel->addPost($username, $text);
    header("Location: /");
  }
}
