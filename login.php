<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa; /* Cor de fundo claro */
        }
        .wrapper {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <h2 class="text-center">Login</h2>
            <p class="text-center">Preencha com seu nome de usuário e senha.</p>

            <form action="index.php" method="post">
                <div class="form-group">
                    <label>Nome de Usuário</label>
                    <input type="text" name="username" class="form-control" required>
                </div>    

                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="password" class="form-control" required>
                </div>  
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Login">
                </div>
            </form>
            <p class="text-center">Não tem uma conta? <a href="register.php">Cadastre-se</a>.</p>
        </div>
    </div>
</body>
</html>
