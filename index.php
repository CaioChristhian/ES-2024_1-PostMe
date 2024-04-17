<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostMe</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap JavaScript e jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa; /* Cor de fundo claro */
        }
        .card {
            background-color: #e9ecef; /* Cor de fundo escuro para os posts */
            border-color: #dee2e6; /* Cor de borda para os posts */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="text-center">PostMe</h2>
            <hr>
            <!-- Formulário para criar um novo post -->
            <form method="post" class="mb-5">
                <div class="form-group">
                    <label for="user">Nome do usuário:</label>
                    <input type="text" id="user" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="text">Texto do post:</label>
                    <textarea id="text" name="text" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <!-- Listagem de Posts -->
            <?php
            include 'config.php';

            // Verifica se o formulário foi enviado
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Salva o novo post no banco de dados
                $user = $_POST['user'];
                $text = $_POST['text'];
                $sql = "INSERT INTO posts (username, texto) VALUES ('$user', '$text')";

                if ($conn->query($sql) === TRUE) {
                    echo "Novo post criado com sucesso.";
                } else {
                    echo "Erro: " . $sql . "<br>" . $conn->error;
                }
            }

            // Carrega os posts do banco de dados
            $sql = "SELECT id, username, texto FROM posts ORDER BY id DESC";
            $result = $conn->query($sql);

            // Exibe os posts
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='card mb-3'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$row["username"]."</h5>
                                <p class='card-text'>".$row["texto"]."</p>
                            </div>
                          </div>";
                }
            } else {
                echo "Nenhum post encontrado.";
            }
            $conn->close();
            ?>
        </div>
    </div>
</div>
</body>
</html>
