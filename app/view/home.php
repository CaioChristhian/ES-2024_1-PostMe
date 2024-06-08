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
            <hr>
            <!-- Botão de Logout e Nome do Usuário -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="h5">Logado como: <?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest'; ?></span>
                <form action="/post-me/public/logout" method="post" style="display: inline-block;">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
             <!-- Teste de Pesquisa pelo Usuario -->
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <form action="/post-me/public/profile" method="get" class="form-inline">
                <input type="hidden" name="action" value="search">
                <label for="username" class="mr-2">Pesquise pelo Usuario:</label>
                <input type="text" id="username" name="username" class="form-control mr-2" required>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </nav>

            <hr>
            
            <!-- Formulário para postagem -->
            <form method="post" class="mb-5">
                <div class="form-group">
                    <label for="text">Texto do post:</label>
                    <textarea id="text" name="text" class="form-control" required></textarea>
                    <p> Limite de 280 caracteres</p>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <h2 class="text-center">Feed:</h2>
            <hr>
            <!-- Exibição dos posts -->
            <?php foreach ($posts as $post) {
                echo "<div class='card mb-3'>
                  <div class='card-body'>
                      <h5 class='card-title'>" . htmlspecialchars($post["username"]) . "</h5>
                      <p class='card-text'>" . htmlspecialchars($post["texto"]) . "</p>
                  </div>
                </div>";
            } ?>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
