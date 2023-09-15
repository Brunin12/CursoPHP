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
    <h1 id="titulo">if else</h1>
    <div id="container">
      
      <?php

      function prints($mensagem)
      {

        if (is_bool($mensagem)) {
          if ($mensagem == true) {
            print("true");
          } else {
            print("false");
          }
        } else {

          print("<br>$mensagem<br>");
        }
      }
        /* If Else 😎
        
        
        if (condição) {
          se for true execulta aqui
        } elseif (condição) {                              (opicional)
          
          se a ultima for false e
          eu for true execulta aqui

        } else {                                           (opicional)    
          
          se todas forem false execulta aqui

        }
        
        
        
        */


        $hora = 17;

        if ($hora < 12) {
          prints("boa bom dia");
        } elseif ($hora < 18) {
          prints("boa tarde");
        } else {
          prints("boa noite");
        }


        /* Switch */
        $nome = "jurandir";
        switch ($nome) {
          case "bruno":
            prints("mestre 😭");
            break;
          case "jurandir":
            prints("vovô 😳");
            break;
          default:
            prints("vaza mlk 😡");
        }




      ?>
    </div>
    <footer>
      <h2>Sobre</h2>
      <p>fala dev, hoje vamos ver ASSUNTO<br> e veremos os conceitos de:<br>
        <strong>if, else, elseif, swithc,<br> e entre outros</strong>
      </p>
    </footer>
  </body>
  <script src="script.js"></script>
</html>