<?php
require_once(__DIR__ . '/../../config/Database.php');

class PostModel {
  private $conn;

  public function __construct() {
    $this->conn = (new Database())->getConnection();
  }

  public function getPosts() { //Pegar Post dos Usuarios
    $query = "SELECT id, username, texto FROM posts ORDER BY id DESC";
    $result = $this->conn->query($query);
    return $result;
  }

  public function addPost($username, $text) { //Adicionar Post
    $query = "INSERT INTO posts (username, texto) VALUES (?, ?)";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("ss", $username, $text);
    $stmt->execute();
    return $stmt->affected_rows > 0;
  }
  
  public function addbio($bio, $user_id) { //Adicionar Bio

    $stmt = $this->conn->prepare("UPDATE users SET bio = ? WHERE id = ?");
    $stmt->execute([$bio, $user_id]);
    return $stmt->affected_rows > 0;
  }

  public function getPostsUser($username) { //Pegar Post apenas do Usuario pesquisado [INCOMPLETO]
    $query = "SELECT id, username, texto FROM posts ORDER BY id DESC";
    $result = $this->conn->query($query);
    return $result;
  }
  
  public function deletePostById($post_id) {
    $sql = "DELETE FROM posts WHERE id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param('i', $post_id); // 'i' indica que o parâmetro é um inteiro
    $stmt->execute();
    return $stmt->affected_rows > 0;
}

}
