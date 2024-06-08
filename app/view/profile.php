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
            <h2 class="text-center">PostMe</h2>
            <hr>    
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
                <div class="h7">Logado como: <?= isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest'; ?></span>
            </form>
        </nav>
        <!-- Pesquisa pelo Usuario -->  
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <form action="/post-me/public/profile" method="get" class="form-inline w-100">
                <input type="hidden" name="action" value="search">
                <label for="username" class="mr-2">Pesquise pelo Usuario:</label>
                    <input type="text" id="username" name="username" class="form-control mr-2" required>
                    <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </nav>                
        <hr><!-- Informações sobre o Usuario Pesquisado -->
            <h3>Informações sobre: </h3>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="h5"><?= isset($_SESSION['usernamesearch']) ? htmlspecialchars($_SESSION['usernamesearch']) : 'Guest'; ?></span>
                <span- class="h5 mr-1">Seguidores: <?= isset($_SESSION['followingsearch']) ? htmlspecialchars($_SESSION['followingsearch']) : 'Guest'; ?></span>
                <gap>     
                <span class="h5">Seguindo: <?= isset($_SESSION['followerssearch']) ? htmlspecialchars($_SESSION['followerssearch']) : 'Guest'; ?></span>
            </div>
            <hr>
            
            <!-- Exibição dos posts apenas do Usuario Pesquisado--> 
            </form>
            <h2 class="text-center">Feed's Anteriores do  <?= isset($_SESSION['usernamesearch']) ? htmlspecialchars($_SESSION['usernamesearch']) : 'Guest'; ?></h2>
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


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
