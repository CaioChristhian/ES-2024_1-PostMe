<?php
require_once(__DIR__ . '/../../model/PostModel.php');

class HomeApiController {
    private $postModel;

    public function __construct() {
        $this->postModel = new PostModel();
    }

    public function getPosts() {
        $posts = $this->postModel->getPosts();
        echo json_encode($posts->fetch_all(MYSQLI_ASSOC));
    }

    public function addPost() {
        $data = json_decode(file_get_contents("php://input"), true);
        $username = $data['username'] ?? '';
        $text = $data['text'] ?? '';
        if ($this->postModel->addPost($username, $text)) {
            echo json_encode(["message" => "Post added successfully"]);
        } else {
            http_response_code(400);
            echo json_encode(["message" => "Failed to add post"]);
        }
    }
}
