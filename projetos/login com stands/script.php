<?php
$nome = "não definido";
$nomeP = "não definido";
$nomeM = "não definido";
$nomeS = "não definido";
$altura = "não definido";
$idade = "não definido";
$cor = "não definido";

function limpa($valor)
{
  $valor = trim($valor);
  $valor = htmlspecialchars($valor);
  $valor = stripslashes($valor);

  return $valor;
}
if (!empty($_POST['nome'])) {
  $nome = limpa($_POST['nome']);
} else {
  echo "<br>erro digite um nome <br>";
}
if (!empty($_POST['nomeP'])) {
  $nomeP = limpa($_POST['nomeP']);
} else {
  echo "<br>erro digite um nome <br>";
}
if (!empty($_POST['nomeM'])) {
  $nomeM = limpa($_POST['nomeM']);
} else {
  echo "<br>erro digite um nome <br>";
}
if (!empty($_POST['nomeS'])) {
  $nomeS = limpa($_POST['nomeS']);
} else {
  echo "<br>erro digite um stand <br>";
}
if (!empty($_POST['altura'])) {
  $altura = limpa($_POST['altura']);
} else {
  echo "<br>erro digite uma altura <br>";
}

if (!empty($_POST['cor'])) {
  $cor = limpa($_POST['cor']);
} else {
  echo "<br>erro digite uma cor <br>";
}
if (!empty($_POST['idade'])) {
  $idade = limpa($_POST['idade']);
} else {
  echo "<br>erro digite uma idade <br>";
}





?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Resultado</title>
</head>

<body>
  <div id="container">
    <h1>Site massa pra <?php if (isset($_GET['nome'])) {
                          echo $_GET['nome'];
                        } else {
                          echo $nome;
                        } ?></h1>
    <h2>nome: <?php echo $nome ?></h2>
    <h2>idade: <?php echo $idade ?></h2>

    <h2>cor favorita: <?php echo '<input type="color" value="' . $cor . '"?>'; ?></h2>

    <h2>altura: <?php echo $altura ?></h2>

    <h2>nome do pai: <?php echo $nomeM ?></h2>

    <h2>nome da mãe: <?php echo $nomeM ?></h2>

    <h2>nome do stand: <?php if ($nomeS == "the world") {
                          echo "ZA WARDOOOOO";
                        } else {
                          echo $nomeS;
                        } ?></h2>
    <br>
    <a href="index.php"><img src="https://cdn-icons-png.flaticon.com/512/60/60577.png?w=740&t=st=1658431872~exp=1658432472~hmac=cb366754409c08533e2c228320f8f9701270f8f3d7f67188cd67e3a4bbdb4b52" id="chamera" alt="ceta voltar"></a>
  </div>
  <br> <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

</body>

</html>