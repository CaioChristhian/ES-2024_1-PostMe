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
        <?php foreach ($posts as $post) {
            echo "<div class='card mb-3'>
              <div class='card-body'>
                  <h5 class='card-title'>".$post["username"]."</h5>
                  <p class='card-text'>".$post["texto"]."</p>
              </div>
            </div>";
        } ?>
    </div>
  </div>
</div>
</body>
</html>
