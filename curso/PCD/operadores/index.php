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
    <h1 id="titulo">Operadores</h1>
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
        /* Opradores 😎 */

        /* 
          adição: +
          subtração: -
          multiplicação: *
          divisão: /
          resto: % 
          concatenação: .


          maior: >
          menor: <

          igual: ==
          igual e mesmo tipo: ===


        */

        $nome = "bruno ";
        $sobrenome = "parreira";

        echo $nome . $sobrenome;
 


      ?>
    </div>
    <footer>
      <h2>Sobre</h2>
      <p>fala dev, hoje vamos ver Operadores<br> e veremos os conceitos de:<br>
        <strong>+, -, /, *,<br> e entre outros</strong>
      </p>
    </footer>
  </body>
  <script src="script.js"></script>
</html>