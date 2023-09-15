<?php

require_once('DB.php');

abstract class crud extends DB{
  protected string $tabela;
  
  abstract public function insert();
  abstract public function update($id);
  
  
  public function delete($id) {
    $sql = "DELETE * FROM $this->tabela WHERE id=?";
    $sql = DB::prepare($sql);
    return $sql->execute(array($id));
  }
  
  public function get($id) {
    $sql = "SELECT * FROM $this->tabela WHERE id=?";
    $sql = DB::prepare($sql);
    $sql->exeute(array($id));
    $valor = $sql->fetch();
    return $valor;
  }

  public function getAll()
  {
    $sql = "SELECT * FROM $this->tabela ";
    $sql = DB::prepare($sql);
    $sql->exeute();
    $valor = $sql->fetchAll();
    return $valor;
  }
}