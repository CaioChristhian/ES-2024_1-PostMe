<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>PostMe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #90D0DF; /* Cor do fundo */
        }
        .card {
            border-radius: 1rem;
            background-color: #FFFFFF; /* Cor do cartão */
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .card-title {
            font-weight: 700;
            color: #202020; /* Cor do título do cartão */
        }
        .btn-primary, .btn-danger {
            border-radius: 0.5rem;
        }
        .btn-primary {
            background-color: #FDD983; /* Nova cor do botão primário */
            border-color: #FDD983;
        }
        .btn-primary:hover {
            background-color: #EB8462; /* Cor do botão primário ao passar o mouse */
            border-color: #FDD983;
        }
        .btn-danger {
            background-color: #EB8462; /* Cor do botão de logout */
            border: none;
        }
        .btn-danger:hover {
            background-color: #D65353; /* Cor do botão de logout ao passar o mouse */
        }
        .alert {
            border-radius: 0.5rem;
        }
        .navbar {
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="text-center">
                        <a href="/app/view/home.php" class="text-decoration-none text-dark">
                            <img src="/logo.png" alt="Logo do PostMe" style="height: 100px;">
                        </a>
                    </h2>
                    <h2 class="text-center"><a href="/app/view/home.php" class="text-decoration-none text-dark">PostMe</a></h2>

                    <!-- Notificação de erro -->
                    <?php if (isset($_SESSION['error_message'])): ?>
                        <div class="alert alert-danger">
                            <?= htmlspecialchars($_SESSION['error_message']); ?>
                        </div>
                        <?php unset($_SESSION['error_message']); // Remove a mensagem após exibi-la ?>
                    <?php endif; ?>

                    <!-- Pesquisa pelo Usuário -->
                    <div class="d-flex justify-content-center mb-4">
                        <form action="/post-me/public/search" method="get" class="form-inline">
                            <input type="hidden" name="action" value="search">
                            <label for="username" class="h6 mr-2">Pesquise pelo Usuário:</label>
                            <input type="text" id="username" name="username" class="form-control mr-2" required>
                            <button type="submit" class="btn btn-primary">Pesquisar</button>
                        </form>
                    </div>
                    <hr>

                    <!-- Botões de Logout e Nome do Usuário -->
                    <div class="d-flex justify-content-between mb-3">
                        <span class="h5">Logado como: <?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest'; ?></span>
                        <form action="/post-me/public/logout" method="post">
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                    <hr>
                    <h2 class="text-center mb-4">Feed</h2>

                    <!-- Botão para abrir a modal de postagem -->
                    <div class="d-flex justify-content-center mb-4">
                    <button type="button" class="btn btn-danger mb-3" data-toggle="modal" data-target="#postModal">Novo Post</button>
                    </div>

                    <!-- Modal de postagem -->
                    <div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="postModalLabel">Novo Post</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="text">Post:</label>
                                            <textarea id="text" name="text" class="form-control" required></textarea>
                                            <small class="form-text text-muted">Limite de 280 caracteres</small>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Exibição dos posts -->
                    <?php foreach ($posts as $post): ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="/post-me/public/search?username=<?= urlencode($post["username"]) ?>" class="text-decoration-none text-dark">
                                        <?= htmlspecialchars($post["username"]) ?>
                                    </a>
                                    <!-- Verificar se o usuário é administrador para exibir o botão de exclusão -->
                                    <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>
                                        <form action="/post-me/public/delete_post" method="POST" style="display: inline;">
                                            <input type="hidden" name="id" value="<?= htmlspecialchars($post["id"]) ?>">
                                            <button type="submit" class="btn btn-danger btn-sm float-right">Excluir Postagem</button>
                                        </form>
                                    <?php endif; ?>
                                </h5>
                                <p class="card-text"><?= htmlspecialchars($post["texto"]) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
