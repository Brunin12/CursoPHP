<?php
require('db/conexao.php');

if (isset($_COOKIE['votou'])) {
  echo '
  <!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <title>votou</title>
    </head>
    <body>
      <h1>você ja votou</h1>
      <div id="container">
        <h2>você votou nas ultimas 24h volte mas tarde</h2>
        <br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br>
      </div>
    </body>
  </html>
  ';
  exit();
} else {
  

  $nome = "";






  if (isset($_POST['bruno'])) {
    $sql = $pdo->prepare("SELECT * FROM candidatos");
    $sql->execute();

    $dados = $sql->fetchAll();
    $nome = "bruno";
    $id = 1;

    foreach ($dados as $valor) {
      if (($valor['nome'] == $nome)) {
        $votos = $valor['votos'];
      }
    }

    $votos = $votos + 1;

    $sql = $pdo->prepare("UPDATE candidatos SET votos=? WHERE id=?");
    $sql->execute(array($votos, $id));

    header("Location: votou.php");
  }


  if (isset($_POST['davi'])) {
    $sql = $pdo->prepare("SELECT * FROM candidatos");
    $sql->execute();

    $dados = $sql->fetchAll();
    $nome = "davi";
    $id = 2;

    foreach ($dados as $valor) {
      if (($valor['nome'] == $nome)) {
        $votos = $valor['votos'];
      }
    }

    $votos = $votos + 1;

    $sql = $pdo->prepare("UPDATE candidatos SET votos=? WHERE id=?");
    $sql->execute(array($votos, $id));

    header("Location: votou.php");
  }


  if (isset($_POST['enzo'])) {
    $sql = $pdo->prepare("SELECT * FROM candidatos");
    $sql->execute();

    $dados = $sql->fetchAll();
    $nome = "enzo";
    $id = 3;

    foreach ($dados as $valor) {
      if (($valor['nome'] == $nome)) {
        $votos = $valor['votos'];
      }
    }

    $votos = $votos + 1;

    $sql = $pdo->prepare("UPDATE candidatos SET votos=? WHERE id=?");
    $sql->execute(array($votos, $id));

    header("Location: votou.php");
  }


  if (isset($_POST['gabriel'])) {
    $sql = $pdo->prepare("SELECT * FROM candidatos");
    $sql->execute();

    $dados = $sql->fetchAll();
    $nome = "gabriel";
    $id = 4;

    foreach ($dados as $valor) {
      if (($valor['nome'] == $nome)) {
        $votos = $valor['votos'];
      }
    }

    $votos = $votos + 1;

    $sql = $pdo->prepare("UPDATE candidatos SET votos=? WHERE id=?");
    $sql->execute(array($votos, $id));

    header("Location: votou.php");
  }


  if (isset($_POST['helena'])) {
    $sql = $pdo->prepare("SELECT * FROM candidatos");
    $sql->execute();

    $dados = $sql->fetchAll();
    $nome = "helena";
    $id = 5;

    foreach ($dados as $valor) {
      if (($valor['nome'] == $nome)) {
        $votos = $valor['votos'];
      }
    }

    $votos = $votos + 1;

    $sql = $pdo->prepare("UPDATE candidatos SET votos=? WHERE id=?");
    $sql->execute(array($votos, $id));

    header("Location: votou.php");
  }


  if (isset($_POST['iasmin'])) {
    $sql = $pdo->prepare("SELECT * FROM candidatos");
    $sql->execute();

    $dados = $sql->fetchAll();
    $nome = "iasmin";
    $id = 6;

    foreach ($dados as $valor) {
      if (($valor['nome'] == $nome)) {
        $votos = $valor['votos'];
      }
    }

    $votos = $votos + 1;

    $sql = $pdo->prepare("UPDATE candidatos SET votos=? WHERE id=?");
    $sql->execute(array($votos, $id));

    header("Location: votou.php");
  }


  if (isset($_POST['icaro'])) {
    $sql = $pdo->prepare("SELECT * FROM candidatos");
    $sql->execute();

    $dados = $sql->fetchAll();
    $nome = "icaro";
    $id = 7;

    foreach ($dados as $valor) {
      if (($valor['nome'] == $nome)) {
        $votos = $valor['votos'];
      }
    }

    $votos = $votos + 1;

    $sql = $pdo->prepare("UPDATE candidatos SET votos=? WHERE id=?");
    $sql->execute(array($votos, $id));

    header("Location: votou.php");
  }


  if (isset($_POST['julio'])) {
    $sql = $pdo->prepare("SELECT * FROM candidatos");
    $sql->execute();

    $dados = $sql->fetchAll();
    $nome = "julio";
    $id = 8;

    foreach ($dados as $valor) {
      if (($valor['nome'] == $nome)) {
        $votos = $valor['votos'];
      }
    }

    $votos = $votos + 1;

    $sql = $pdo->prepare("UPDATE candidatos SET votos=? WHERE id=?");
    $sql->execute(array($votos, $id));

    header("Location: votou.php");
  }


  if (isset($_POST['matheus'])) {
    $sql = $pdo->prepare("SELECT * FROM candidatos");
    $sql->execute();

    $dados = $sql->fetchAll();
    $nome = "matheus";
    $id = 9;

    foreach ($dados as $valor) {
      if (($valor['nome'] == $nome)) {
        $votos = $valor['votos'];
      }
    }

    $votos = $votos + 1;

    $sql = $pdo->prepare("UPDATE candidatos SET votos=? WHERE id=?");
    $sql->execute(array($votos, $id));

    header("Location: votou.php");
  }


  if (isset($_POST['miguel'])) {
    $sql = $pdo->prepare("SELECT * FROM candidatos");
    $sql->execute();

    $dados = $sql->fetchAll();
    $nome = "miguel";
    $id = 10;

    foreach ($dados as $valor) {
      if (($valor['nome'] == $nome)) {
        $votos = $valor['votos'];
      }
    }

    $votos = $votos + 1;

    $sql = $pdo->prepare("UPDATE candidatos SET votos=? WHERE id=?");
    $sql->execute(array($votos, $id));

    header("Location: votou.php");
  }



}

?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Votar Boa Ideia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h1>votar</h1>
  <div id="container">
    <nav>
      <ul>
        <li><a href="#votar">votar</a></li>
        <li><a href="#placar">placar dos votos</a></li>
      </ul>
    </nav>
    <br><br><br>
    <form action="" method="POST" id="votar">
      <div class="card" style="width: 18rem;">
        <img src="img/bruno.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Bruno</h5>
          <p class="card-text">vote em mim e eu acabarei com a fome em um raio de 5 metros!!!</p>
          <button type="submit" name="bruno" class="btn btn-primary">Votar</button>
        </div>
      </div>
      <br>
      <br>
      <div class="card" style="width: 18rem;">
        <img src="img/davi.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Davi</h5>
          <p class="card-text">vote em mim que eu te dou 5 pila!!!</p>
          <button type="submit" name="davi" class="btn btn-primary">Votar</button>
        </div>
      </div>
      <br>
      <br>
      <div class="card" style="width: 18rem;">
        <img src="img/enzo.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Enzo</h5>
          <p class="card-text">vote em mim e eu te upo no blox fruits!!!</p>
          <button type="submit" name="enzo" class="btn btn-primary">Votar</button>
        </div>
      </div>
      <br>
      <br>
      <div class="card" style="width: 18rem;">
        <img src="img/gabriel.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Gabriel (GB)</h5>
          <p class="card-text">vote em mim e eu deixarei minecraft de graça por 10 minutos!!!</p>
          <button type="submit" name="gabriel" class="btn btn-primary">Votar</button>
        </div>
      </div>
      <br>
      <br>
      <div class="card" style="width: 18rem;">
        <img src="img/helena.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Helena</h5>
          <p class="card-text">vote em mim e eu acabarei com as escolas do brasil!!!</p>
          <button type="submit" name="helena" class="btn btn-primary">Votar</button>
        </div>
      </div>
      <br>
      <br>
      <br>
      <div class="card" style="width: 18rem;">
        <img src="img/iasmin.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Iasmin</h5>
          <p class="card-text">vote em mim e eu adicion arei anime como materia nas escolas!!!</p>
          <button type="submit" name="iasmin" class="btn btn-primary">Votar</button>
        </div>
      </div>
      <br>
      <br>
      <div class="card" style="width: 18rem;">
        <img src="img/icaro.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">icaro</h5>
          <p class="card-text">vote em mim e eu erradicarei as vacinas!!!</p>
          <button type="submit" name="icaro" class="btn btn-primary">Votar</button>
        </div>
      </div>
      <br>
      <br>
      <div class="card" style="width: 18rem;">
        <img src="img/julio.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Julio</h5>
          <p class="card-text">vote em mim e eu acabarei a pirataria de jogos ruims!!!</p>
          <button type="submit" name="julio" class="btn btn-primary">Votar</button>
        </div>
      </div>
      <br>
      <br>
      <div class="card" style="width: 18rem;">
        <img src="img/matheus.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Matheus</h5>
          <p class="card-text">vote em mim e eu poderei comprar outra casa!!!</p>
          <button type="submit" name="matheus" class="btn btn-primary">Votar</button>
          <br>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="img/miguel.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">miguel</h5>
          <p class="card-text">vote em mim e eu acabarei com a pobreza na minha rua!!!</p>
          <button type="submit" name="miguel" class="btn btn-primary">Votar</button>
        </div>
      </div>
      <br>
      <br>
    </form>
  </div>
  <br><br>
  <div id="placar">
    <?php

    $sql = $pdo->prepare("SELECT * FROM candidatos");
    $sql->execute();

    $dados = $sql->fetchAll();


    if (count($dados) > 0) {
      echo "<table>";
      echo "
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>VOTOS</th>
    </tr>
    ";

      foreach ($dados as $chave => $valor) {
        echo "
          <tr>
      <td>" . $valor['id'] . "</td>
      <td>" . $valor['nome'] . "</td>
      <td>" . $valor['votos'] . "</td>
    </tr>
      ";
      }

      echo "</table>";
    } else {
      echo "<p>nenhum candidato cadastrado</p>";
    }

    ?>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</body>

</html>