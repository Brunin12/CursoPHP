<?php

require_once('crud.php');

class Usuario extends Crud {
  protected string $tabela = 'usuarios';


  public function __construct(
  public string $nome, 
  private string $email,
  private string $senha,
  private string $repete_senha = "",
  private string $recupera_senha = "",
  private string $token = "",
  private string $codigo_confirmacao = "",
  private string $status = "",
  private string $erro = []
  ) {

  {
    $this->nome = $nome;
    $this->email = $email;
    $this->senha = $senha;
    $this->repete_senha = $repete_senha;
  }
  }
}

?>