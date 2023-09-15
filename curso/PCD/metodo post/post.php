      <?php

      function prints($mensagem)
      {

        if (is_bool($mensagem)) {
          if ($mensagem == true) {
            prints("true");
          } else {
            prints("false");
          }
        } else {

          print "<br>$mensagem<br>";
        }
      }
      /* Metodo Post 😎 */

      if (isset($_POST['nome']) && isset($_POST['idade'])) {
        $nome = limpa_post($_POST['nome']);
        $idade = limpa_post($_POST['idade']);

        prints("<h1>Nome: $nome <br> Idade: $idade</h2>");
      }

      function limpa_post($valor) {
        $valor = trim($valor);
        $valor = stripslashes($valor);
        $valor = htmlspecialchars($valor);

        return $valor;
      }



      ?>

      <a href="index.php">voltar</a>