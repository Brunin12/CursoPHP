<?php

use PHPMailer\PHPMailer\PHPMailer;

require('db/conexao.php');


if ((isset($_POST['nome'])) &&
  (isset($_POST['email'])) &&
  (isset($_POST['senha'])) &&
  (isset($_POST['senha_2'])) &&
  (isset($_POST['termos']))
) {

  //VERIFICAR SE FOI TUDO PREENCHIDO

  if (empty($_POST['nome']) or empty($_POST['email']) or empty($_POST['senha']) or empty($_POST['senha_2']) or empty($_POST['termos'])) {
    $erro_geral = "<strong>todos</strong> os campos são obrigatorios";
  } else {
    //RECEBER VALORES DO POST E LIMPAR

    $nome = limpa($_POST['nome']);
    $email = limpa($_POST['email']);
    $senha = limpa($_POST['senha']);
    $senha_cript = sha1($senha);
    $senha_2 = limpa($_POST['senha_2']);
    $checkbox = limpa($_POST['termos']);


    //VERIICAR VALIDADE DO EMAIL
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_erro = "Formato de <strong>email Invalido</strong>!";
    }

    //VERIFICAR LETRAS DO NOME
    if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
      $nome_erro = "So aceitamos <strong>letras e espaços em branco</strong>!";
    }

    //VERIFICAR TAMANHO DA SENHA <= 6
    if (strlen($senha) < 6) {
      $senha_erro = "senha deve ter <strong>6 caracteres</strong> ou mais!";
    }

    //VERIFICAR SE A REPETIÇÃO E IGUAL A ORIGINAL
    if ($senha !== $senha_2) {
      $senha2_erro = "a repetição da senha deve ser igual senha <strong>original</strong>! ";
    }

    //VERIFICAR SE CHECKBOX FOI MARCADO
    if ($checkbox !== "on") {
      $checkbox_erro = "checkbox <strong>não</strong> foi marcada!";
    }
  }
}
















?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" required />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" required />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" required />
  <link rel="stylesheet" href="css/style.css" required />
  <link rel="shortcut icon" href="img/lock.png" type="image/x-icon" required />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" required />
  <title>Cadastro - Sound'car</title>
</head>

<body>
  <form method="POST">
    <h1>Cadastro</h1>


    <?php
    if (isset($erro_geral)) {
      echo '    <div class="erro-geral animate__animated animate__rubberBand">
        ' . $erro_geral . '
    </div>';
    }
    ?>

    <div class="input-group">
      <img class="input-icon" src="img/card.png" alt="usuario" />
      <input type="text" name="nome" <?php if (isset($_POST['nome'])) {
                                        echo 'value="' . limpa($_POST['nome']) . '"';
                                      } ?> id="nome" placeholder="nome completo" <?php if (isset($erro_geral) or isset($nome_erro)) {
                                                                                    echo 'class="erro-input"';
                                                                                  } ?> required />
      <?php
      if (isset($nome_erro)) {
        echo '<div class="erro">' . $nome_erro . '</div>';
      }
      ?>
    </div>


    <div class="input-group">
      <img class="input-icon" src="img/user.png" alt="usuario" required />

      <input type="email" <?php if (isset($_POST['email'])) {
                            echo 'value="' . limpa($_POST['email']) . '"';
                          } ?> <?php if (isset($erro_geral) or isset($email_erro)) {
                                  echo 'class="erro-input"';
                                } ?> name="email" id="email" placeholder="digite seu email" required />
      <?php
      if (isset($email_erro)) {
        echo '<div class="erro">' . $email_erro . '</div>';
      }
      ?>
    </div>


    <div class="input-group">
      <img class="input-icon" src="img/lock.png" alt="cadeado" />

      <input type="password" <?php if (isset($_POST['senha'])) {
                                echo 'value="' . limpa($_POST['senha']) . '"';
                              } ?> name="senha" id="senha" placeholder="digite sua senha" <?php if (isset($erro_geral) or isset($senha_erro)) {
                                                                                            echo 'class="erro-input"';
                                                                                          } ?> required />
      <?php
      if (isset($senha_erro)) {
        echo '<div class="erro">' . $senha_erro . '</div>';
      }
      ?>
    </div>
    <div class="input-group">
      <img class="input-icon" src="img/unlock.png" alt="cadeado" />
      <input type="password" name="senha_2" <?php if (isset($_POST['senha_2'])) {
                                              echo 'value="' . limpa($_POST['senha_2']) . '"';
                                            } ?> id="senha_2" placeholder="repita sua senha" <?php if (isset($erro_geral) or isset($senha2_erro)) {
                                                                                                echo 'class="erro-input"';
                                                                                              } ?> required />
      <?php
      if (isset($senha2_erro)) {
        echo '<div class="erro">' . $senha2_erro . '</div>';
      }
      ?>
    </div>

    <br />

    <br />
    <div class="input-group <?php if (isset($erro_geral) or isset($checkbox_erro)) {
                              echo 'erro-input"';
                            } ?>">
      <input type="checkbox" <?php if (isset($_POST['checkbox'])) {
                                echo 'value="' . limpa($_POST['checkbox']) . '"';
                              } ?> name="termos" id="termos" required />
      <label for="termos">ao fazer o cadastro você aceita nossas
        <a class="link" href="#poli">politicas de privacidade</a> e os
        <a class="link" href="#">termos de uso</a></label>
    </div>
    <?php
    if (isset($checkbox_erro)) {
      echo '<div class="erro">' . $checkbox_erro . '</div>';
    }
    ?>
    <hr />
    <button class="btn-blue" type="submit">Cadastrar</button>

    <a href="index.php">ja tenho uma conta</a>
  </form>
</body>

</html>

<?php
if (isset($email) && isset($nome) && isset($senha) && isset($senha_2) && isset($checkbox)) {

  $cond = ((isset($nome_erro)) or (isset($email_erro)) or (isset($senha_erro)) or (isset($senha_erro)) or (isset($senha2_erro)));

  if (!$cond) {
    //VERIFICAR SE USUARIO JA ESTA CADASTRADO NO BANCO
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=? LIMIT 1");

    $sql->execute(array($email));
    $usuario = $sql->fetch();


    if (!$usuario) {
      $recupera_senha = "";
      $token = "";
      $confirm = uniqid();
      $status = "novo";
      $data = date("d/m/Y");




      $sql = $pdo->prepare("INSERT INTO usuarios VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?)");

      if ($sql->execute(array($nome, $email, $senha_cript, $recupera_senha, $token, $confirm, $status, $data))) {

        if ($producao == false) {
          header("location: index.php?result=ok");
        } else {
          

          $mail = new PHPMailer(true);

          try {
            $mail->setFrom('brunoparreira77@gmail.com', "Sound'car"); // QUEM ESTA MANDANDO O EMAIL
            $mail->addAddress($email, $nome); // QUEM RECEBE
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Confirmação site Sound'car";
            $mail->Body = '<h1>Por Favor confirme seu email abaixo:</h1><br><br><a href="https://bit.ly/soundcarpa?confirm='.$confirm. '" style="  width: 90%;
  margin: 20px 0px 20px 0px;
  padding: 20px;
  cursor: pointer;
  background-color: #00c3ff;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  font-weight: bold;
  color: white;
  transition: 500ms ease;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.342);">Enviar Confirmação</a>';

            $mail->send();
            header("location: index.php");
          } catch (Exception $e) {
            echo "Houve um problema ao enviar o email de confirmação {$mail->ErrorInfo}";
          }


        }
      }
    } else {
      // JA EXISTE USUARIO, DIGA ERRO
      $erro_geral = "Usuario ja cadastrado";
    }
  }
}
?>