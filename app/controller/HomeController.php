<?php
require_once '../model/PostModel.php';

class HomeController {
  private $postModel;

  public function __construct() {
    $this->postModel = new PostModel();
  }

  public function index() {
    $posts = $this->postModel->getPosts();
    require_once '../view/home.php';
  }

  public function addPost($username, $text) {
    $this->postModel->addPost($username, $text);
    header("Location: /");
  }
}
