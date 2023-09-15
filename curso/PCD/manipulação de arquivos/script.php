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



  $pasta = "arquivos/";

  if (!is_dir($pasta)) {
    mkdir($pasta, 0755);
  }

  $nome = "paguina.html";
  prints($nome." foi criado com sucesso 😋");
  
  $caminho = $pasta.$nome;
  file_put_contents($caminho, '
  <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>site legal</title>
    <style>
      body {
        background: black;
      }

      section {
        max-width: 900px;
        min-height: 900px;
        background: white;
        box-shadow: 5px 5px 10px white;
        padding: 70px;
        border: 1px solid black;
        border-radius: 5px;
        color: black;
        cursor: default;
        margin: auto;
        margin-top: 100px;
        margin-botttom: 100px;
        font-family: system-ui, sans-serif;
        font-size: 11pt;
      }

      section h1 {
        text-align: center;
        font-size: 50px;
        margin: auto;
      }

      #sobre {
        text-align: center;
        font-size: 13pt;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <section>
      <h1>site</h1>
      <p id="sobre">site legal que foi feito e<br> injetado pelo php automaticamente 😎😎😎😎</p>
      <h2>categoria1</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt laudantium
        incidunt perspiciatis repudiandae cumque suscipit architecto magni
        possimus quam. Reiciendis voluptas quis optio rem velit ipsam ipsum eum.
        Exercitationem, distinctio.
      </p>
      <br />
      <h2>categoria 1</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt laudantium
        incidunt perspiciatis repudiandae cumque suscipit architecto magni
        possimus quam. Reiciendis voluptas quis optio rem velit ipsam ipsum eum.
        Exercitationem, distinctio.
      </p>
      <p>parreira, bruno, 2202</p>
      <br />

      <h2>categoria 2</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt laudantium
        incidunt perspiciatis repudiandae cumque suscipit architecto magni
        possimus quam. Reiciendis voluptas quis optio rem velit ipsam ipsum eum.
        Exercitationem, distinctio.
      </p>
      <br />

      <h2>categoria 3</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt laudantium
        incidunt perspiciatis repudiandae cumque suscipit architecto magni
        possimus quam. Reiciendis voluptas quis optio rem velit ipsam ipsum eum.
        Exercitationem, distinctio.
      </p>
      <br />

      <h2>categoria 4</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt laudantium
        incidunt perspiciatis repudiandae cumque suscipit architecto magni
        possimus quam. Reiciendis voluptas quis optio rem velit ipsam ipsum eum.
        Exercitationem, distinctio.
      </p>
      <br />

      <h2>categoria 5</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt laudantium
        incidunt perspiciatis repudiandae cumque suscipit architecto magni
        possimus quam. Reiciendis voluptas quis optio rem velit ipsam ipsum eum.
        Exercitationem, distinctio.
      </p>
      <br />
    </section>
  </body>
</html>

  ');


  if (file_exists($caminho) && is_file($caminho)) {

    prints(file_get_contents($caminho));


  }
  /*

  if (is_dir($pasta)) {
    foreach (scandir($pasta) as $arquivos) {
      $caminho_arquivo = $pasta.$arquivos;
      if (is_file($caminho_arquivo)) {
        unlink($caminho_arquivo);
      }
    }
    rmdir($pasta);
  }

  */


  


?>

