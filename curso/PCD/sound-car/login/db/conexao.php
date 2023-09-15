<?php
session_start();


// USANDO PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



// Modos: local, producao

$producao = false;

if ($producao == false) {
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $banco = "login";

}

if ($producao == true) {
  $servidor = "";
  $usuario = "";
  $senha = "";
  $banco = "login";
}

try {
  $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "deu bom!!!";
} catch (PDOException $erro) {
  include("404.html");
}

function limpa($post) {
  $post = trim($post);
  $post = stripslashes($post);
  $post = htmlspecialchars($post);

  return $post;
}

function auth($token) {

  global $pdo;

  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE token=? LIMIT 1");
  $sql->execute(array($token));
  $usuario = $sql->fetch();

  if (!$usuario) {
    return false;
  } else {
    return $usuario;
  }


}



?>