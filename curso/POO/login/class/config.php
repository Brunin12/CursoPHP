<?php

define('SERVIDOR', "localhost");
define('USUARIO', "root");
define('SENHA', "");
define('BANCO', "login_poo");


function limpaPost($valor) {
  $valor = trim($valor);
  $valor = stripslashes($valor);
  $valor = htmlspecialchars($valor);

  return $valor;
}




?>