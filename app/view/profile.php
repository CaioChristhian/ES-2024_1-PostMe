<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Perfil do <?= isset($_SESSION['usernamesearch']) ? htmlspecialchars($_SESSION['usernamesearch']) : 'Guest'; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
        <h2 class="text-center"><a href="/app/view/home.php" style="text-decoration: none; color: inherit;">PostMe</a></h2>
         <hr>
            <!-- Notificação de erro -->
            <?php if (isset($_SESSION['error_message'])): ?>
                <div class="alert alert-danger">
                    <?= htmlspecialchars($_SESSION['error_message']); ?>
                </div>
                <?php unset($_SESSION['error_message']); // Remove a mensagem após exibi-la ?>
            <?php endif; ?>
            <!-- Botão de para pagina Principal & Botão de Logout -->
            <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                <form action="/post-me/public/home" method="get" style="display: inline-block;">
                    <button type="submit" class="btn btn-primary">Página Principal</button>
                </form>
                <form action="/post-me/public/logout" method="post" style="display: inline-block;">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </nav>
            <!-- Informações sobre o Usuario Logado -->
            <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                <form action="/post-me/public/profile" method="get" class="form-inline w-100">
                    <div class="h6">Logado como: <?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest'; ?></div>
                </form>

            <!-- Pesquisa pelo Usuario -->
                <form action="/post-me/public/search" method="get" class="form-inline w-100">
                    <input type="hidden" name="action" value="search">
                    <label for="username" class="h6 mr-2">Pesquise pelo Usuario:</label>
                    <input type="text" id="username" name="username" class="form-control mr-2" required>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </nav>
            <hr>
            <!-- Informações sobre o Usuario Pesquisado -->
            <h3>Informações sobre: </h3>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="h5"><?= isset($_SESSION['usernamesearch']) ? htmlspecialchars($_SESSION['usernamesearch']) : 'Guest'; ?></span>
            </div>
            <!-- Biografia do Usuario Pesquisado -->
            <div>
                <h4>Bio:</h4>
                <p><?= isset($_SESSION['searchbio']) && trim($_SESSION['searchbio']) !== '' ? htmlspecialchars($_SESSION['searchbio']) : 'Nenhuma biografia disponível'; ?></p>
                <?php if (isset($_SESSION['usernamesearch']) && $_SESSION['usernamesearch'] === $_SESSION['username']) : ?>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editBioModal">Editar Biografia</button>
                <?php endif; ?>
            </div>
            <hr>
            <!-- Exibição dos posts apenas do Usuario Pesquisado-->
            <h2 class="text-center">Post's Anteriores do <?= isset($_SESSION['usernamesearch']) ? htmlspecialchars($_SESSION['usernamesearch']) : 'Guest'; ?></h2>
            <hr>
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
