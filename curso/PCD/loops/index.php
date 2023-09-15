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
    <h1 id="titulo">Loops</h1>
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
        /* Loops 😎 */
        
        
        
        //WHILE

        $x = 1;

        while ($x <= 5) {
          prints("o numero é: $x");
          $x+=1;
        }
        print "paro :(";

        //DO... WHILE

        $x = 6;

        do {
          prints( "o numero é: $x");
          $x++;
        } while ($x <= 5);
        prints("paro :(");


        //FOR
        for ($x = 0; $x <= 10; $x++) {
          prints("o numero é: $x");
        }
      prints("paro :(");

      //FOREACH

      $cores = ["azul", "amarelo", "verde", "vermelho"];

      foreach ($cores as $valor) {
        prints("A cor é $valor");
      }
      prints("paro :(");
        
        
        
        



      ?>
    </div>
    <footer>
      <h2>Sobre</h2>
      <p>fala dev, hoje vamos ver Loops<br> e veremos os conceitos de:<br>
        <strong>While, For, Do While, Foreach,<br> e entre outros</strong>
      </p>
    </footer>
  </body>
  <script src="script.js"></script>
</html>