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
    <h1 id="titulo">Metodo Post</h1>
    <div id="container">
      
            <form action="post.php" method="POST">
              <input type="text" name="nome" id="1" placeholder="digite o nome">
              <br>
              <input type="number" name="idade" id="2" placeholder="digite a idade">
              <br><hr><br>
              <input type="submit" value="enviar">
            </form>
    </div>
    <footer>
      <h2>Sobre</h2>
      <p>fala dev, hoje estudar o Metodo Post<br> e veremos os conceitos de:<br>
        <strong>$_POST, segurança,<br> mandar infos para outras paguinas,<br> converçar entre paguinas,<br> e entre outros</strong>
      </p>
    </footer>
  </body>
  <script src="script.js"></script>
</html>