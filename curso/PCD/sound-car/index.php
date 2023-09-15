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
  <title>Sound'car</title>
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
            <a class="nav-link" href="produtos.php">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="noticias.php">Noticias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Sair</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Outros
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#serviços">Serviços</a></li>
              <li>
                <a class="dropdown-item" href="#info">Como chegar</a>
              </li>
              <li>
                <a class="dropdown-item" href="#quem-somos">sobre</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br /><br /><br />
  <h1>Sound'car Website</h1>
  <p style="font-weight: 900; text-align: center;">seja bem-vindo(a) <?php echo $user['nome'] ?></p>
  <br><br><br>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="midia/p2.jpg" class="d-block w-100" alt="imagem de aparelhos" />
      </div>
      <div class="carousel-item">
        <img src="midia/p1.jpg" class="d-block w-100" alt="imagem de aparelhos" />
      </div>
      <div class="carousel-item">
        <img src="midia/p3.jpg" class="d-block w-100" alt="imagem de aparelhos" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <p id="absp"></p>

  <h2>Navegação</h2>

  <div class="card m-auto bg-dark" style="width: 18rem">
    <ul class="list-group bg-dak list-group-flush">
      <li class="list-group-item"><a href="#serviços">Serviço</a></li>
      <li class="list-group-item"><a href="#info">info</a></li>
      <li class="list-group-item"><a href="#quem-somos">quem somos</a></li>
      <li class="list-group-item"><a href="#contato">contato</a></li>
    </ul>
  </div>

  <h2 id="serviços">Serviços</h2>
  <ul class="list-group bg-dark m-auto col-6">
    <li class="list-group-item">Troca de Saida</li>
    <li class="list-group-item">Troca de Tela</li>
    <li class="list-group-item">Atualização de <em>GPS</em></li>
    <li class="list-group-item">Desbloquio</li>
    <li class="list-group-item">Instalação</li>
    <li class="list-group-item">
      Conserto de fonte e amplificadores (modulo)
    </li>
  </ul>

  <br />
  <h2 id="info">Info</h2>
  <div class="card bg-dark m-auto" style="width: 18rem">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        Endereço: R. Mal Floriano Peixoto, 727 - Vila Poty, Paulo Afonso - BA,
        48602-210
      </li>
      <li class="list-group-item">
        <a href="https://www.google.com/maps/dir//soundcar/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x709312e69723b7b:0x7c6f2841856cd3dc?sa=X&ved=2ahUKEwiNqfyR3Nj4AhWnjJUCHRNqCGsQ9Rd6BAgKEAU">como chegar</a>
      </li>
    </ul>
  </div>
  <br />
  <h2 id="quem-somos">quem somos?</h2>
  <details>
    <p>
      Somos uma empresa especializada em conserto automotivo, é contamos com
      mais de 30 anos de experiência na Area!!!
    </p>
  </details>
  <br /><br />
  <h2 id="contato">contato</h2>
  <div class="card m-auto col-8" style="width: 18rem">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <a href="tel:+5575988766035">entre em contato via telefone</a>
      </li>
      <li class="list-group-item">
        <a href="https://wa.me/5575988766035">entre em contato via whatsapp</a>
      </li>
      <li class="list-group-item">
        <a href="mailto:jurantec@gmail.com">entrar em contato via email</a>
      </li>
    </ul>
  </div>
  <br /><br /><br />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>