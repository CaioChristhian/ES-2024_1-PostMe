<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #90D0DF; /* Cor de fundo do body */
            color: #202020; /* Cor do texto principal */
        }
        .card {
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15); /* Sombra suave no card */
            background-color: #FFFFFF; /* Cor de fundo do card */
        }
        .card-title {
            font-weight: 700; /* Texto do título do card em negrito */
            color: #202020; /* Cor do título do card */
        }
        .btn-primary, .btn-danger {
            border-radius: 0.5rem; /* Borda arredondada nos botões */
        }
        .btn-primary {
            background-color: #FDD983; /* Cor de fundo do botão primário */
            border: none;
        }
        .btn-primary:hover {
            background-color: #EB8462; /* Cor de fundo do botão primário ao passar o mouse */
        }
        .alert {
            border-radius: 0.5rem; /* Borda arredondada nas alertas */
        }
        .alert-danger {
            background-color: #F8D7DA; /* Cor de fundo da alerta de erro */
            border-color: #F5C6CB; /* Cor da borda da alerta de erro */
            color: #721C24; /* Cor do texto da alerta de erro */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="text-center">
                        <a href="/app/view/home.php" class="text-decoration-none text-dark">
                            <img src="/logo.png" alt="Logo do PostMe" style="height: 100px;">
                        </a>
                    </h2>

                    <!-- Notificação de erro -->
                    <?php if (isset($_SESSION['error_message'])): ?>
                        <div class="alert alert-danger text-center">
                            <?= htmlspecialchars($_SESSION['error_message']); ?>
                        </div>
                        <?php unset($_SESSION['error_message']); // Limpa a mensagem de erro após exibi-la ?>
                    <?php endif; ?>

                    <h3 class="card-title text-center">Cadastre-se</h3>
                    <form action="/post-me/public/register" method="post">
                        <input type="hidden" name="action" value="register">
                        <div class="form-group">
                            <label for="username">Usuário:</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Senha:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                        <div class="text-center mt-2">
                            <a href="/post-me/public/login">Já tem uma conta? Faça Login aqui!</a>
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
