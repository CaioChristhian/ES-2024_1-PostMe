<?php
require_once '../model/UserModel.php';
session_start();

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
          header("Location: /app/view/home.php");
          exit;
      } else {
          return "Invalid username or password";
      }
  }

  public function logout() {
      session_destroy();
      header("Location: /app/view/login.php");
      exit;
  }

  public function register($username, $password) {
      $passwordHash = password_hash($password, PASSWORD_DEFAULT);
      return $this->userModel->createUser($username, $passwordHash);
  }
}
