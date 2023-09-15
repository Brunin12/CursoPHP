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
    <h1 id="titulo">Super Globais</h1>
    <div id="container">
      
      <?php

      function prints($mensagem)
      {

        if (is_bool($mensagem)) {
          if ($mensagem == true) {
            print "<br>true<br>";
          } else {
            print "<br>false<br>";
          }
        } else {

          print "<br>$mensagem<br>";
        }
      }
          /* Super Globais 😎 

          PRINTS($_SERVER['PHP_SELF']);
          prints($_SERVER['SERVER_NAME']);
          prints($_SERVER['HTTP_HOST']);
          PRINTS($_SERVER['REMOTE_ADDR']);
          PRINTS($_SERVER['HTTP_USER_AGENT'])
          
          */

          foreach ($_SERVER as $chave => $valor) {
            prints("<em>$chave</em>   ==> $valor");
          }


      ?>
    </div>
    <footer>
      <h2>Sobre</h2>
      <p>fala dev, hoje vamos ver as Super Globais<br> e veremos os conceitos de:<br>
        <strong>$GLOBALS, $_SERVER, $_REQUEST, $_POST,<br> e entre outros</strong>
      </p>
    </footer>
  </body>
  <script src="script.js"></script>
</html>