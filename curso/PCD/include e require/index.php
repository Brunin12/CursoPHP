<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site PHP</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1 id="titulo">Include_once & Require</h1>
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
        /* Include_once e Require 😎 */

        include_once('teste.php');
        require('teste.php');

        prints("continua");

        //da warming caminho inexistente
        include_once('aqui_não_existe.php');
        echo "continuou<br>";
        require('aqui_não_existe.php');
        echo "continuou <br>"



      ?>
    </div>
    <footer>
      <h2>Sobre</h2>
      <p>fala dev, hoje vamos ver Include_onces e Requires<br> e veremos os conceitos de:<br>
        <strong>include_once('caminho'), require('caminho'),<br> include_once_once('caminho'), require('caminho'),<br> e entre outros</strong>
      </p>
    </footer>
  </body>
  <script src="script.js"></script>
</html>