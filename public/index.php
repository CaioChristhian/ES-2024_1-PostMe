<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function redirectToLoginIfNotLoggedIn() {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: /post-me/public/login');
        exit;
    }
}

require_once '../app/controller/HomeController.php';
require_once '../app/controller/AuthController.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$prefix = '/post-me/public'; // Ajuste conforme necessário
$path = preg_replace("~^$prefix~", '', $path);
$path = preg_replace('/\.php$/', '', $path);

switch ($path) {
    case '/profile':
        $controller = new AuthController();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $usernamesearch = $_GET['username'];
            $controller->search($usernamesearch);
        }
        break;

    case '/login':
    case '/register':
        $controller = new AuthController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($path === '/login' && $_POST['action'] === 'login') {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $controller->login($username, $password);
            } elseif ($path === '/register' && $_POST['action'] === 'register') {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $controller->register($username, $password);
            }
        } else {
            require "../app/view{$path}.php";
        }
        break;
    case '/logout':
        session_destroy();
        header("Location: /post-me/public/login");
        exit;
    default:
        redirectToLoginIfNotLoggedIn();
        $controller = new HomeController();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->addPost($_POST['text']);
        } else {
            $controller->index();
        }
        break;
}
