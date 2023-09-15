
<?php

if (isset($_GET['nome'])) {
  $nome = htmlspecialchars($_GET['nome']);

} else {
  $nome = "Mundo";
}

if (isset($_GET['cor'])) {
  $cor = htmlspecialchars($_GET['cor']);
} else {
  $cor = "green";
}


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site PHP</title>
  <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">

  <style>
    div {
      background-color: <?php echo $cor?>;
    }
  </style>
</head>

<body>
  <h1 id="titulo">Get</h1>
  <div id="container">

    <?php

    function prints($mensagem)
    {

      if (is_bool($mensagem)) {
        if ($mensagem == true) {
          prints("true");
        } else {
          prints("false");
        }
      } else {

        print "<br>$mensagem<br>";
      }
    }
    /* $_GET 😎 */


    prints("<h2 id='msg'>Ola, " . $nome . "</h2>");

    ?>

    <a href="index.php?nome=brunin das quebrada">hello brunin das kebrada</a>
    <br>
    <a href="index.php?nome=dimiutri das quebrada">hello dimiutri das kebrada</a>
    <br>
    <a href="index.php?nome=gabriel&cor=pink">hello gabriel 😳😏</a>

    <br><br><br>
    <form method="get">

    <input type="text" name="nome" placeholder="digite seu nome">
    <br><br>
    <input type="color" value="green" name="cor">
    <br><br>
    <hr><br>
    <input type="submit" value="enviar">


    </form>


  </div>
  <footer>
    <h2>Sobre</h2>
    <p>fala dev, hoje vamos ver o metodo $_GET<br> e veremos os conceitos de:<br>
      <strong>isset, paguina personalizada,<br> htmlspecialchars,<br> envio de informações por formulario,<br> e entre outros</strong>
    </p>
  </footer>
</body>
<script src="script.js"></script>

</html>