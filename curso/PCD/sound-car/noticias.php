<?php

require('login/db/conexao.php');

$user = auth($_SESSION['TOKEN']);
if (!$user) {
  header("location: login/index.php");
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sound'car - Noticias</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="midia/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <style>
    body {
      color: white;
    }

    a {
      text-decoration: none;
      color: rgb(255, 255, 255);
    }
  </style>
</head>

<body>
  <nav class="navbar col-12 position-fixed navbar-expand-lg navbar-dark bg-dark" style="z-index: 999">
    <div class="container-fluid col-11 m-auto">
      <a class="navbar-brand">Sound'car</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="produtos.html">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <h1>Sound'car Noticias</h1>
  <figure>
    <figcaption>
      <h3>as informaçoes a seguir foram retiradas do <cite><a href="https://www.techmundo.com.br">techmundo.com.br</a></cite> e estão disponiveis no site <a href="https://www.tecmundo.com.br/eletronica">https://www.tecmundo.com.br/eletronica</a></h3>
    </figcaption>
    </h3>
    <bloquote><iframe src="https://www.tecmundo.com.br/eletronica" height="3000px" width="100%"></iframe></bloquote>
  </figure>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>