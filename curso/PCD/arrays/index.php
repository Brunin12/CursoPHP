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
    <h1 id="titulo">Arrays</h1>
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
        /* Arrays 😎 */

        $carros = ["Fusca", "Uno", "Fusion", "Brasilia", "Prisma", "Marea Turbo", "Gol"];
        sort($carros);
        $tamanho = count($carros);

        prints($carros[1]);
        prints("O tamanho da matriz é: $tamanho");

        /*
        for ($i = 0; $i < $tamanho; $i++) {
          prints($carros[$i]);
        }
        */

        foreach ($carros as $carro) {
          prints("carro: $carro");
        }


        $idade_de = array("bruno"=>"12", "dimitri"=>"30", "maria"=>"15", "pedro"=>"26");

        foreach ($idade_de as $chave => $valor) {
          prints("O nome é $chave, a idade é $valor");
        }




      ?>
    </div>
    <footer>
      <h2>Sobre</h2>
      <p>fala dev, hoje vamos ver Arrays<br> e veremos os conceitos de:<br>
        <strong>sort, rsort, asort, count,<br> e entre outros</strong>
      </p>
    </footer>
  </body>
  <script src="script.js"></script>
</html>