<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos de dados em PHP</title>
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1 id="titulo">Tipo de dados em PHP</h1>
  <div id="container">
    <?php

      //STRING
      $exemplo1 = "<h1>ola mundo</h1>";


      $exemplo2 = 345;
      $exemplo2_1 = 100;

      //FLOAT
      $exemplo3 = 3.5;

      //BOOLEAN
      $sou_rico = true;

      //ARRAY (MATRIZES)
      $carros = array("ferrari", "lamborguine", "opala");

      //OBJETOS

      class carro {
        public $cor;
        public $modelo;
        public function __construct($cor, $modelo)
        {
          $this->cor = $cor;
          $this->modelo = $modelo;
        }
        public function mensagem() {
          return "<p>o carro é $this->cor e o modelo é $this->modelo</p><br>
          ";
        }
        
      }
      
      
      $carro1 = new carro("branco", $carros[0]);

      $carro2 = new carro("preto", $carros[2]);

      echo $carro1->mensagem();
      echo $carro2->mensagem();






    ?>
  </div>
  <footer>
    <h2>Sobre</h2>
    <p>hoje aprenderemos sobre <strong>tipos de dados 🎲🎲</strong> em PHP,<br> pode começar a se preparar porque isso vai ser insano,<br> veremos os tipos:<br>
      <strong>
        
        Int,
        Float,
        String,
        Boolean,<br>
        entre outros 😀
      </strong>
      <br>
    </p>
  </footer>
</body>
<script src="script.js"></script>
</html>