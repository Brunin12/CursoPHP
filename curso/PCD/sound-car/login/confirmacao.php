<?php

require('login/db/conexao.php');

if (isset($_GET['confirm']) && !empty($_GET['confirm'])) {
  $confirma = limpa($_GET['confirm']);


  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE confirm_code=? LIMIT 1");


  $sql->execute(array($confirma));
  $usuario = $sql->fetch();
  if ($usuario) {
    $status = "confirmado";
    //ATUALIZAR STATUS DO USUARIO NO BANCO
    $sql = $pdo->prepare("UPDATE usuarios SET status=? 
      WHERE confirm_code=?");

    $sql->execute(array($status, $confirma));


    echo '<script>alert("Parabens!!! seu Email foi confirmado com sucesso, agora você sera re-direcionado para apaguina original")</script>';

    header("location: index.php?result=ok");
  }
}

?>