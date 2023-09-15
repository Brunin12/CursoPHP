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

  function print_alert($mensagem)
  {
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
  ' . $mensagem . '
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
  ' . $mensagem . '
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
  ' . $mensagem . '
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
  ' . $mensagem . '
</div><br>';
    }
  }

  //             |
  //codigo aqui  V


  class Exemplo  
  {
    private const nome = "aqui vai o texto kkk k hjvcyfh xdjkhrxkvvhgikxrkhitn,, teste teste Teste123 TEST123 teste123?/\|^~`´".'"'."!";

    function teste() {
      prints(self::nome);
    }
  }

  $ex = new Exemplo();

  //prints($ex::nome);
  //prints(Exemplo::nome);
  $ex->teste();
  


  ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</html>