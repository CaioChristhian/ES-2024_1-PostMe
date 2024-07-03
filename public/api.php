<?php
header("Content-Type: application/json");
require_once __DIR__ . '/../app/controller/api/AuthApiController.php';
require_once __DIR__ . '/../app/controller/api/HomeApiController.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$prefix = '/api'; // Ajuste conforme necessário
$path = preg_replace("~^$prefix~", '', $path);

switch ($path) {
    case '/user/login':
        $controller = new AuthApiController();
        $controller->login();
        break;
    case '/user/register':
        $controller = new AuthApiController();
        $controller->register();
        break;
    case '/posts':
        $controller = new HomeApiController();
        $controller->getPosts();
        break;
    case '/post':
        $controller = new HomeApiController();
        $controller->addPost();
        break;
    case '/user/profile':
        $controller = new AuthApiController();
        $controller->getUserProfile();
        break;
    case '/user/updateBio':
        $controller = new AuthApiController();
        $controller->updateUserBio();
        break;
    default:
        echo json_encode(["message" => "Endpoint not found"]);
        http_response_code(404);
        break;
}
