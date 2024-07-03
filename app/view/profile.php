<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Perfil de <?= isset($_SESSION['usernamesearch']) ? htmlspecialchars($_SESSION['usernamesearch']) : 'Guest'; ?></title>
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
        .btn-warning {
            background-color: #FDD983; /* Cor do botão de editar biografia */
            border: none;
            color: #202020; /* Cor do texto do botão de editar biografia */
        }
        .btn-warning:hover {
            background-color: #e0a800; /* Cor do botão de editar biografia ao passar o mouse */
        }
        .btn-primary, .btn-danger {
            border-radius: 0.5rem;
        }
        .btn-primary {
            background-color: #FDD983; /* Nova cor do botão primário */
            border-color: #FDD983; /* Cor da borda do botão primário */
        }
        .btn-primary:hover {
            background-color: #EB8462; /* Cor do botão primário ao passar o mouse */
            border-color: #EB8462; /* Cor da borda do botão primário ao passar o mouse */
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
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    <div class="d-flex justify-content-between mb-4">
                        <form action="/post-me/public/home" method="get">
                            <button type="submit" class="btn btn-primary">Página Principal</button>
                        </form>
                        <form action="/post-me/public/search" method="get" class="form-inline">
                            <input type="hidden" name="action" value="search">
                            <label for="username" class="h6 mr-2">Pesquise pelo Usuário:</label>
                            <input type="text" id="username" name="username" class="form-control mr-2" required>
                            <button type="submit" class="btn btn-primary">Pesquisar</button>
                        </form>
                    </div>

                    <!-- Botões de Logout e Nome do Usuário -->
                    <div class="d-flex justify-content-between mb-3">
                        <span class="h5">Logado como: <?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest'; ?></span>
                        <form action="/post-me/public/logout" method="post">
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                    <hr>

                    <!-- Informações sobre o Usuário Pesquisado -->
                    <h3>Informações sobre: <span class="font-weight-bold"><?= isset($_SESSION['usernamesearch']) ? htmlspecialchars($_SESSION['usernamesearch']) : 'Guest'; ?></span></h3>

                    <!-- Biografia do Usuário Pesquisado -->
                    <div class="mb-3">

                        <h4>Bio:</h4>
                        <div class='card mb-3'>
                        <div class='card-body'>
                        <p><?= isset($_SESSION['searchbio']) && trim($_SESSION['searchbio']) !== '' ? htmlspecialchars($_SESSION['searchbio']) : 'Nenhuma biografia disponível'; ?></p>
                        <?php if (isset($_SESSION['usernamesearch']) && $_SESSION['usernamesearch'] === $_SESSION['username']) : ?>
                            </div>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#editBioModal">Editar Biografia</button>
                        <?php endif; ?>
                        </div>

                    </div>
                    <hr>

                    <!-- Exibição dos posts do Usuário Pesquisado -->
                    <h2 class="text-center mb-4">Postagens de <?= isset($_SESSION['usernamesearch']) ? htmlspecialchars($_SESSION['usernamesearch']) : 'Guest'; ?></h2>
                    <?php 
                    $Postsencontrados = false;
                    foreach ($posts as $post) {
                        if ($_SESSION['usernamesearch'] === $post["username"]) {
                            echo "<div class='card mb-3'>
                            <div class='card-body'>
                                <h5 class='card-title'>" . htmlspecialchars($post["username"]) . "</h5>
                                <p class='card-text'>" . htmlspecialchars($post["texto"]) . "</p>
                            </div>
                            </div>";
                            $Postsencontrados = true; 
                        }
                    }
                    if (!$Postsencontrados) {
                        echo "<p>Usuário não realizou nenhuma publicação</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para editar a biografia -->
<div class="modal fade" id="editBioModal" tabindex="-1" role="dialog" aria-labelledby="editBioModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBioModalLabel">Editar Biografia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="bio">Nova Biografia:</label>
                        <textarea class="form-control" id="bio" name="bio" rows="3" required><?= htmlspecialchars($_SESSION['searchbio'] ?? '') ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button name="save" type="submit" class="btn btn-primary">Salvar mudanças</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
