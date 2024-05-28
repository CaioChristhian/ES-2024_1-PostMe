<?php
session_start();
require_once BASE_PATH . '/app/controller/HomeController.php';

$controller = new HomeController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->addPost($_POST['user'], $_POST['text']);
} else {
    $controller->index();
}
