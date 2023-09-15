<?php
$id = "id";
$nome = "nome";
$votos = "votos";
if (!isset($_COOKIE['votou'])) {
  setcookie("votou", true, time() + (18000));
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parabens</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    #container {
      color: white;
    }
  </style>
</head>

<body>
  <h1>você votou!!!!!</h1>
  <div id="container">
    <p>parabens por votar, em 5h você podera votar novamente</p>
    <br><br><br><br><br><br><br><br>
    <?php
    require('db/conexao.php');

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

      echo "
    </table>";
    } else {
    echo "<p>nenhum candidato cadastrado</p>";
    }

    ?>
  </div>
</body>

</html>