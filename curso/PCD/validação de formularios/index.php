<?php

$erroNome = "";
$erroEmail = "";
$erroSenha = "";
$erroSenha2 = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //verifica se o tem algum post no nome
  if (empty($_POST['nome'])) {

    //erro
    $erroNome = "Por Favor informe um nome";
  } else {

    //limpa o nome
    $nome = limpa_post($_POST['nome']);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
      $erroNome = "Apenas aceitamos letras e espaços em branco";
    }
  }

  //verifica se tem algum post no email
  if (empty($_POST['email'])) {

    //erro
    $erroEmail = "Por Favor informe um email";
  } else {
    $email = limpa_post($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      //erro
      $erroEmail = "E-mail inválido";
    }
  }
}


//verifica se tem algum post na senha
if (empty($_POST['senha'])) {

  //erro
  $erroSenha = "Por Favor informe uma senha";
} else {
  $senha = limpa_post($_POST['senha']);
  if (strlen($senha) < 6) {
    //erro
    $erroSenha = "senha inválida, precisa ter no mínimo 6 digitos";
  }
}

//verifica se tem algum post no repete senha
if (empty($_POST['senha2'])) {

  //erro
  $erroSenha2 = "Por Favor repita a senha";
} else {
  $senha2 = limpa_post($_POST['senha2']);
  if ($senha2 != $senha) {
    //erro
    $erroSenha2 = "a repetição da senha e diferente da senha";
  }


  if (($erroNome == "") && ($erroEmail == "") && ($erroSenha == "") && ($erroSenha2 == "")) {
    header("Location: https://bit.ly/soundcarpa");
  }


}

function limpa_post($valor)
{
  $valor = trim($valor);
  $valor = stripslashes($valor);
  $valor = htmlspecialchars($valor);

  return $valor;
}


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Formulario</title>
  </head>

  <body>
    <main>
      <form method="post" action="">
        <mark>
          <h1>AULA PHP</h1>
        </mark>
        <h2>Validação de Formulário</h2>

        <!-- NOME COMPLETO -->
        <h3>Nome Completo</h3>
        <input type="text" name="nome"
        <?php if (!empty($erroNome)) {
                                        echo "class='invalido'";
                                      } ?>
        <?php if (isset($_POST['nome'])) {
                                              echo "value='" . $_POST['nome'] . "'";
                                            } ?>
        placeholder="Digite Seu Nome" title="Digite seu Nome" required>
        <br /><span class="erro"><?php echo $erroNome ?></span>

        <!-- E-MAIL -->
        <h3>E-mail</h3>
        <input type="email" name="email"
        <?php if (!empty($erroEmail)) {
          echo "class='invalido'";
        } ?>
        <?php if (isset($_POST['email'])) {
          echo "value='" . $_POST['email'] . "'";
        } ?>
        placeholder="email@gmail.com" title="Digite seu E-mail" required>
        <br /><span class="erro"><?php echo $erroEmail ?></span>

        <!-- SENHA -->
        <h3>Senha</h3>
        <input type="password" name="senha"
        <?php if (!empty($erroSenha)) {
          echo "class='invalido'";
        } ?>
        <?php if (isset($_POST['senha'])) {
          echo "value='" . $_POST['senha'] . "'";
        } ?>
        placeholder="Digite uma Senha" title="Digite uma Senha" required>
        <br /><span class="erro"><?php echo $erroSenha ?></span>

        <!-- REPITA SENHA -->
        <h3>Repita a Senha</h3>
        <input type="password" name="senha2"
        <?php if (!empty($erroSenha2)) {
            echo "class='invalido'";
        } ?>
        <?php if (isset($_POST['senha2'])) {
          echo "value='" . $_POST['senha2'] . "'";
        } ?>
        placeholder="Repita a Senha required" title="Repita a Senha Anterior"
        required> <br /><span class="erro"><?php echo $erroSenha2 ?></span
        ><br />
        <hr />
        <br /><br />

        <!-- ENVIO -->
        <button type="submit">Enviar Formulario</button>
      </form>
    </main>
  </body>
</html>
