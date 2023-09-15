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
  <h1 id="titulo">Sesscions</h1>
  <div id="container">
    <?php session_start();
    

    $_SESSION['nome'] = "bruno";
    $_SESSION['profissao'] = "programador";
    
    
    
    ?>



  </div>
  <footer>
    <h2>Sobre</h2>
    <p>fala dev, hoje vamos estudar $_SESSION<br> e veremos os conceitos de:<br>
      <strong>session_start, session_destroy, session_name, session_status,<br> e entre outros</strong>
    </p>
  </footer>
</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</html>