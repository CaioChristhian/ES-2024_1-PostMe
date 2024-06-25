<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostMe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="text-center">PostMe</h2>
            <!-- Notificação de erro -->
            <?php if (isset($_SESSION['error_message'])): ?>
                <div class="alert alert-danger">
                    <?= htmlspecialchars($_SESSION['error_message']); ?>
                </div>
                <?php unset($_SESSION['error_message']); // Remove a mensagem após exibi-la ?>
            <?php endif; ?>
            <hr>
            <nav class="navbar navbar-light" style="background-color: #e3f2fd;" >

            <!-- Botão de Logout e Nome do Usuário -->
            <div class="d-flex justify-content-around "  >
                <span class="mr-5 h5">Logado como: <?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest'; ?></span>
                <form class="mr-5">
                </form>
                <form class="mr-5">
                </form>
                <form class="mr-5">
                </form>
                <form class="mr-5">
                </form>
                <form class="mr-5">
                </form>
                <form class="mr-5">
                </form>
                <form class="mr-5">
                </form>
                <form class="mr-5">
                </form>


                <form action="/post-me/public/logout" method="post" style="display: inline-block;">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
            </nav>
            <!-- Pesquisa pelo Usuário -->
            <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                <form action="/post-me/public/search" method="get" class="form-inline" >
                    <input type="hidden" name="action" value="search">
                    <label for="username" class="mr-2">Pesquise pelo Usuário:</label>
                    <input type="text" id="username" name="username" class="form-control mr-2" required>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </nav>
            <hr>

            <!-- Botão para abrir a modal de postagem -->
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#postModal">
                Novo Post
            </button>

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

            <h2 class="text-center">Feed</h2>
            <hr>
            
            <!-- Exibição dos posts -->
            <?php foreach ($posts as $post): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/post-me/public/search?username=<?= urlencode($post["username"]) ?>" style="text-decoration: none; color: inherit;">
                                <?= htmlspecialchars($post["username"]) ?>
                            </a>
                            <!-- Verificar se o usuário é administrador para exibir o botão de exclusão -->
                            <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>
                                <form action="/post-me/public/delete_post" method="POST" style="display: inline;">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($post["id"]) ?>">
                                    <button type="submit" class="btn btn-danger btn-sm" style="float: right;">
                                        Excluir Postagem
                                    </button>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
