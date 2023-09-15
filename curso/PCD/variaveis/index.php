<?php
  $cor = "azul";
  $cor  = "verde";
  $COR = "caba";


  echo $cor;

  $i = 30;
  $j = 10;

  function scopo() {

    global $i, $j, $z;
    $z = $i + $j;

    echo "<br>na função o i + j tem o valor de: $z<br>";
  }

  scopo();

  echo "valor de i + j fora da função: $z<br>";


  #echo "ola";
  // eu tambem
  /* ate eu kkk */
?>