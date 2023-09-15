<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saida</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <?php

    function prints($mensagem)
    {

      if (is_bool($mensagem)) {
        if ($mensagem == true) {
          print "<br>true<br>";
        } else {
          print "<br>false<br>";
        }
      } else {

        print "<br>$mensagem<br>";
      }
    }

        function print_alert($mensagem) {
      if (is_bool($mensagem)) {
        if ($mensagem == true) {
          print '<br><div class="alert alert-warning" role="alert">
  true
</div><br>';
        } else {
          print '<br><div class="alert alert-warning" role="alert">
  false
</div><br>';
        }
      } else {

        print '<br><div class="alert alert-warning" role="alert">
  '.$mensagem.'
</div><br>';
      }
    }

    function print_erro($mensagem)
    {
      if (is_bool($mensagem)) {
        if ($mensagem == true) {
          print '<br><div class="alert alert-danger" role="alert">
  true
</div><br>';
        } else {
          print '<br><div class="alert alert-danger" role="alert">
  false
</div><br>';
        }
      } else {

        print '<br><div class="alert alert-danger" role="alert">
  '.$mensagem.'
</div><br>';
      }
    }

    function print_success($mensagem)
    {
      if (is_bool($mensagem)) {
        if ($mensagem == true) {
          print '<br><div class="alert alert-success" role="alert">
  true
</div><br>';
        } else {
          print '<br><div class="alert alert-success" role="alert">
  false
</div><br>';
        }
      } else {

        print '<br><div class="alert alert-success" role="alert">
  '.$mensagem.'
</div><br>';
      }
    }
    function print_info($mensagem)
    {
      if (is_bool($mensagem)) {
        if ($mensagem == true) {
          print '<br><div class="alert alert-info" role="alert">
  true
</div><br>';
        } else {
          print '<br><div class="alert alert-info" role="alert">
  false
</div><br>';
        }
      } else {

        print '<br><div class="alert alert-info" role="alert">
  '.$mensagem.'
</div><br>';
      }
    }


    //             |
    //codigo aqui  V


    if (isset($_POST['enviar'])) {
      //prints("<pre>".var_dump($_FILES)."</pre>");  

      // validações
      $tamanhoMax = 2097152 /* 2mb */;
      $permitido = array("jpg", "png", "jpeg", "mp4", "html", "php", "zip");
      $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

      if ($_FILES['arquivo']['size'] >= $tamanhoMax) {
        prints("tamanho maximo de 2 MB, não foi posssivel fazer upload");
      } else {
        if (in_array($extensao, $permitido)) {
          //prints("permitido ");

          $pasta = "imagens/";

          if (!is_dir($pasta)) {
            mkdir($pasta, 0755);
          }

          $tmp = $_FILES['arquivo']['tmp_name'];
          $novo_nome = uniqid() . ".$extensao";

          if (move_uploaded_file($tmp, $pasta . $novo_nome)) {
            print_success("upload realizado com sucesso");
            prints('<img src="' . $pasta . $novo_nome . '" id="img" alt"imagem de $tmp">
          ');
          } else {
            print_erro("Erro: não foi possivel fazer o upload");
          }
        } else {
          print_erro("Erro: extenção ($extensao) não permitido");
        }
      }
    }


    ?>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</html>