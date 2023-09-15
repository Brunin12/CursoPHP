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
  <title>Sound'car - Produtos</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="midia/favicon.ico" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <style>
    body {
      color: white;
    }

    a {
      text-decoration: none;
      color: rgb(0, 81, 255);
      text-shadow: none;
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
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="noticias.html">Noticias</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <h1>Sound'car Produtos</h1>
  <p style="font: 15pt Arial; color:white;">
    aqui ficam as peças, aparelhos, placas,<br />
    amplificadores, sons, arduinos e componentes em geral...
  </p>
  <h2>Sonoff</h2>
  <div class="card m-auto" style="width: 18rem;">
    <div class="card-header bg-dark">
      Sonoffs
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item bg-dark">Sonoff pequeno</li>
      <li class="list-group-item bg-dark">
        <details>
          <p>preço: R$ 70</p>
          <p>
            descrição:<br />
            um pouco menos funcionalidades que o sonoff grande <br />
            mais velocidade<br />
            consome menos espaço, cria
            <strong>rotinas automatizadas,<br />
              intgração com alexa e google
            </strong>
          </p>
          <br />
          <img src="midia/sonoff-pequeno.jpg" alt="sonoff pequeno" />
        </details>
        </p>
      <li class="list-group-item bg-dark">Sonoff grande</li>
      <li class="list-group-item bg-dark">
        <details>
          <p>preço: R$ 70</p>
          <p>
            descrição:<br />
            mais funcionalidades e custo-beneficio <br />
            mais facil de ser configurado <br />
            cria
            <strong>rotinas automatizadas,<br />
              intgração com alexa e google
            </strong>
          </p>
          <img src="midia/sonoff-grande.jpg" alt="sonoff grande" />
        </details>
      </li>


    </ul>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>