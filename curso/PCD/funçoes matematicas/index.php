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
    <h1 id="titulo">Funçoes matematicas</h1>
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


        /* Assunto 😎

          turip ip ip ip, ip ip ip tska
           ip, ip ip tska ip ip ip ip enough
            enough tsuda e su disu 😣,
        */ 

        //codigo

        $array = [1, 2, 3, 4, 5, 10, 100, 1000, -10 ,-20, 15];
        $NUMERO = -10;
        $numero = 15;

        prints(min($array)); // menor numero de array
        prints(max($array)); // maior numero de array

        prints(abs($NUMERO)); //-10 absolto (positivo)

        prints(round(sqrt($numero))); //arredonda a raiz quadrada de 15 e mostra

        prints(sqrt($numero)); // raiz pura

        prints(rand(0, 10));


      ?>
    </div>
    <footer>
      <h2>Sobre</h2>
      <p>fala dev, hoje vamos ver funçoes matematicas,<br> e veremos os conceitos de:<br>
        <strong>min, max, abs, sqrt,<br> e entre outros</strong>
      </p>
    </footer>
  </body>
  <script src="script.js"></script>
</html>