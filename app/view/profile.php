<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Perfil do Usuário</h2>
                <?php
                // Verificar se o usuário está logado
                session_start();
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    require_once '../model/UserModel.php';
                    require_once '../model/PostModel.php';

                    $userModel = new UserModel();
                    $postModel = new PostModel();

                    // Verificar se o usuário está visualizando o seu próprio perfil
                    $isCurrentUser = false;
                    if (isset($_GET['user'])) {
                        $currentUser = $_SESSION['username'];
                        $viewedUser = $_GET['user'];
                        if ($currentUser === $viewedUser) {
                            $isCurrentUser = true;
                        }
                    }

                    // Exibir nome do usuário
                    echo "<h3>Usuário: $viewedUser</h3>";

                    // Exibir botão para alterar nome de usuário (se for o próprio usuário)
                    if ($isCurrentUser) {
                        echo "<form action='/app/controller/AuthController.php' method='post'>";
                        echo "<input type='hidden' name='action' value='change_username'>";
                        echo "<input type='text' name='new_username' placeholder='Novo Nome de Usuário'>";
                        echo "<input type='password' name='password' placeholder='Senha'>";
                        echo "<button type='submit'>Alterar Nome de Usuário</button>";
                        echo "</form>";
                    }

                    // Exibir postagens do usuário
                    echo "<h4>Postagens Anteriores:</h4>";
                    $userPosts = $postModel->getUserPosts($viewedUser);
                    if ($userPosts) {
                         foreach ($userPosts as $post) {
                            echo "<p><strong>{$post['username']}</strong>: {$post['texto']}</p>";
                        }
                    } else {
                        echo "<p>Nenhuma postagem encontrada.</p>";
                    }

                    // Exibir seguidores do usuário
                    echo "<h4>Seguidores:</h4>";
                    $followers = $userModel->getFollowers($viewedUser);
                    if ($followers) {
                        foreach ($followers as $follower) {
                            echo "<p>{$follower['follower_username']}</p>";
                        }
                    } else {
                        echo "<p>Nenhum seguidor encontrado.</p>";
                    }

                    // Exibir usuários que o perfil está seguindo
                    echo "<h4>Seguindo:</h4>";
                    $following = $userModel->getFollowing($viewedUser);
                    if ($following) {
                        foreach ($following as $followed) {
                            echo "<p>{$followed['followed_username']}</p>";
                        }
                    } else {
                        echo "<p>Nenhum usuário sendo seguido.</p>";
                    }
                } else {
                    echo "<p>Por favor, faça login para visualizar este perfil.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
