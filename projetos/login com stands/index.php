<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>figurante question's</title>
</head>

<body>
  <php require('script.php'); ?>
    <form method="post" action="script.php">
      <br>
      <div id="container">
        <h1>Perguntas</h1>
        <h2>Nome</h2>
        <input type="text" placeholder="ex: juninho" name="nome" required>
        <h2>Idade</h2>
        <input type="number" placeholder="ex: 12" name="idade" required>
        <br>
        <h2>Cor favorita</h2>
        <input type="color" placeholder="ex: #ff0000" name="cor" required>
        <br>
        <h2>Altura</h2>
        <input type="number" placeholder="ex: 160" required>
        <br>
        <h2>nome do pai</h2>
        <input type=" text" placeholder="ex: cleber" name="nomeP" required>
        <br>
        <h2>nome da mãe</h2>
        <input type="text" placeholder="ex: maria" name="nomeM" required>
        <br>
        <h2>nome do stand</h2>
        <input type="text" placeholder="ex: star platina" name=" nomeS" required>
        <br><br>
        <hr>
        <br><br>
        <div id="classing">

          <button type="submit">Enviar</button>
        </div>
      </div>
    </form>
</body>

</html>