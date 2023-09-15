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
    <h1 id="titulo">Data e Hora</h1>
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
        /* MANIPULANDO A DATA E A HORA 😎 */

        //DATA COMPLETA
        prints(date('d/m/Y'));
        //MES
        prints(date('F'));
        //HORA
        prints(date('H:1:s'));


        //brasil 😎🤑🥵
        //dia/mes/ano
        //06/09/2022

        //estados unidos 😒
        //ano/mes/dia
        //2022/09/06

        $hoje = date('Y-m-d');
        $vencimento = '2022-7-29';
        $diferença = strtotime($vencimento) - strtotime($hoje);
        $dias = floor($diferença / (60*60*24));

        //converção para o padrao br

        $data_hoje = explode('-', $hoje);
        $hoje_formatado = $data_hoje[2] . "/" . $data_hoje[1] . "/" . $data_hoje[0];

        $venci =
      explode('-', $vencimento);


      $vencimento_formatado = $venci[2] . "/" . $venci[1] . "/" . $vnci[0];


        prints("hoje é <strong>$hoje_formatado</strong> <br>o vencimento é <strong>$vencimento_formatado</strong><br>diferençã é de $dias dias entre as datas!!!");



      ?>
    </div>
    <footer>
      <h2>Sobre</h2>
      <p>fala dev, hoje vamos ver Manipulação De Data e Hora em PHP<br> e veremos os conceitos de:<br>
        <strong>date('d/m/Y'), date('F'), date('H:i:s'), ,<br> e entre outros</strong>
      </p>
    </footer>
  </body>
  <script src="script.js"></script>
</html>