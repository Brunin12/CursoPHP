<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site PHP</title>
  <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1 id="titulo">Cookies 🍪</h1>
  <div id="container">
    <?php
    
    if (isset($_COOKIE['nome'])) {
      echo "ola, ".$_COOKIE['nome'];
    } else {
      echo "não existe nome";
      setcookie('nome', $_POST['nome'], time() + (86400));
    }
    ?>

    <form action="" method="POST">

    <input type="text" placeholder="qual seu nome" name="nome">
    <button type="submit">enviar</button>

    </form>



  </div>
  <footer>
    <h2>Sobre</h2>
    <p>fala dev, hoje vamos estudar Cookies 🍪<br> e veremos os conceitos de:<br>
      <strong>$_COOKIE, setcookie, time(), isset,<br> e entre outros</strong>
    </p>
  </footer>
</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</html>