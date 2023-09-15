<?php
//CONFIG GERAIS PARA SQL
$servidor="localhost";
$usuario="root";
$senha="";
$banco="votos";

//CONEXAO
$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);



function limpar_post($dados) {
  $dados = trim($dados);
  $dados = stripslashes($dados);
  $dados = htmlspecialchars($dados);

  return $dados;
}




?>