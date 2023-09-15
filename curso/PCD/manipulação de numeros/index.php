<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manipulação de Numeros</title>
  <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1 id="titulo">Manipulação de Numeros</h1>
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

    /* manipulação de numeros */



    $valor = "150" + 20;
    prints($valor);

    $valor = "2.5";
    $valor_convertido = (float) $valor;
    prints($valor_convertido);


    $valor1 = 100;
    $valor2 = 5.75;
    $valor3 = "teste";

    prints(is_int($valor1));
    prints(is_string($valor2));
    prints(is_numeric($valor3));
    ?>
  </div>
  <footer>
    <h2>Sobre</h2>
    <p>fala dev, hoje tem manipulação de numeros e veremos os conceitos de:
      <strong>is_string, is_numeric, is_int,<br> soma de strings e numeros, e entre outros</strong>
    </p>
  </footer>
</body>
<script src="script.js"></script>

</html>