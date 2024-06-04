<?php
require_once(__DIR__ . '/../../config/Database.php');

class PostModel {
  private $conn;

  public function __construct() {
    $this->conn = (new Database())->getConnection();
  }

  public function getPosts() {
    $query = "SELECT id, username, texto FROM posts ORDER BY id DESC";
    $result = $this->conn->query($query);
    return $result;
  }

  public function addPost($username, $text) {
    $query = "INSERT INTO posts (username, texto) VALUES (?, ?)";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("ss", $username, $text);
    $stmt->execute();
    return $stmt->affected_rows > 0;
  }
}
