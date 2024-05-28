<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #000;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button[type="submit"]:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <div class="register-container" role="main">
        <h1>Post Me</h1>
        <p class="text-center">Preencha um nome de usuário e senha</p>
        <form action="/app/controller/AuthController.php" method="post">
            <input type="hidden" name="action" value="register">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required aria-required="true">
            </div>
            <div class="form-group">
                <label for="mensagem1">Senha:</label>
                <input type="text" id="password" name="mensagem1" required aria-required="true">
            </div>
            <button type="submit">Registre-se</button>
        </form>
        <p class="text-center">Já tem uma conta? <a href="/app/view/login.php">Realize o login aqui</a>.</p>
    </div>
</body>
</html>
