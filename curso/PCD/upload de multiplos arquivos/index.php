<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site PHP</title>
  <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1 id="titulo">Upload de Arquivos</h1>
  <div id="container">
    <form method="post" enctype="multipart/form-data" action="script.php">

      <div class="input-group">
        <input type="file" class="form-control" id="arquivo" name="arquivo[]" multiple aria-describedby="enviar" aria-label="Upload" required>
        <button class="btn btn-primary" type="submit" name="enviar" id="enviar">Enviar</button>
      </div>

    </form>
  </div>
  <footer>
    <h2>Sobre</h2>
    <p>fala dev, hoje vamos estudar Upload de Arquivos<br> e veremos os conceitos de:<br>
      <strong>post, in_array, pathinfo, uniqid,<br> e entre outros</strong>
    </p>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>

</html>