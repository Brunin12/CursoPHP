<?php

  require('db/conexao.php');


  if (isset($_POST['email']) && isset($_POST['senha']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    //RECEBER OS DADOS E LIMPAR

    $email = limpa($_POST['email']);
    $senha = limpa($_POST['senha']);
    $senha_cript = sha1($senha);

  //VERIFICAR SE USUARIO EXISTE

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=? AND senha=? LIMIT 1");

    $sql->execute(array($email, $senha_cript));
    $usuario = $sql->fetch();


    if ($usuario) {
      // USUARIO EXISTE
      if ($usuario['status'] == "confirmado") {
      // CRIAR UM TOKEN
      $token = sha1(uniqid() . date("d-m-Y-H-i-s"));

      //ATUALIZAR TOKEN DO USUARIO NO BANCO
      $sql = $pdo->prepare("UPDATE usuarios SET token=? 
      WHERE email=? AND senha=?");

      $sql->execute(array($token, $email, $senha_cript));


      $_SESSION['TOKEN'] = $token;

      echo '<script>alert("Parabens!!! seu Login foi conluido com sucesso, agora você sera re-direcionado para apaguina original")</script>';

      header("location: ../index.php");
    } else {
      $erro_login = "Por Favor confirme se cadastro no seu email cadastrado";
    }
  } else {
    //USUARIO NÃO EXISTE
    $erro_login = "usuario e/ou senha incorretas!";
  }

      
  }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="img/unlock.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title>Login - Sound'car</title>
</head>

<body>
  <form method="POST">
    <h1>Log-in</h1>

    <?php if (isset($erro_login)) {?>
    <div style="text-align: center;" class="erro-geral">
      <?php echo $erro_login?>
    </div>
    <?php }?>

    <div class="input-group">
      <img class="input-icon" src="img/user.png" alt="usuario" />
      <input type="email" name="email" id="email" placeholder="digite seu email" required />
    </div>
    <div class="input-group">
      <img class="input-icon" src="img/lock.png" alt="cadeado" />
      <input type="password" name="senha" id="senha" placeholder="digite sua senha" required />
    </div>

    <br />

    <br />
    <hr />
    <button class="btn-blue" type="submit">Entrar</button>

    <a href="cadastro.php">ainda não tenho cadastro</a>
  </form>
</body>

</html>

<?php
if (isset($_GET['result'])) {
  $result = limpa($_GET['result']);
  if ($result == "ok") {

    echo '<script>alert("Parabens!!! seu Cadastro foi conluido com sucesso")</>';
  }
}
?>