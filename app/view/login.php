<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .btn-primary {
            background-color: #FDD983; /* Cor do botão primário */
            border: none;
        }
        .btn-primary:hover {
            background-color: #EB8462; /* Cor do botão primário ao passar o mouse */
        }
        .alert {
            border-radius: 0.5rem;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="text-center">
                        <a href="/app/view/home.php" class="text-decoration-none text-dark">
                            <img src="/logo.png" alt="Logo do PostMe" style="height: 100px;">
                        </a>
                    </h2>

                    <!-- Notificação de erro -->
                    <?php if (isset($_SESSION['error_message'])): ?>
                        <div class="alert alert-danger">
                            <?= htmlspecialchars($_SESSION['error_message']); ?>
                        </div>
                        <?php unset($_SESSION['error_message']); // Remove a mensagem após exibi-la ?>
                    <?php endif; ?>

                    <h3 class="card-title text-center">Login</h3>
                    <form action="/post-me/public/login" method="post">
                        <input type="hidden" name="action" value="login">
                        <div class="form-group">
                            <label for="username">Usuário:</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Senha:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                        <div class="text-center mt-3">
                            <a href="/post-me/public/register">Não tem uma conta ainda? Faça seu cadastro aqui!</a>
                        </div>
                    </form>
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
