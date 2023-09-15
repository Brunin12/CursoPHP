<?php

interface Func_Fruta
{
  function getFruits($return = false);
  function Create($tipo = "maça", $nome, $cor, $show = false);
}

class Maça implements Func_Fruta
{
  public function __construct(public string $tipo = "maça",public string $nome, public $cor)
  {
    $this->nome = $nome;
    $this->cor = $cor;
  }

  function getFruits($return = false)
  {
      if ($return) {
        return $this;
      } else {
        prints("sua/seu ".$this->tipo." que tem o nome de <em>".$this->nome."</em> é da cor " . $this->cor);
      }
  }

  function Create($tipo = "maça", $nome, $cor, $show = false) {
    if ($show) {
      prints("seu/sua $tipo que tem o nome de <em>$nome</em> é da cor $cor");
    }
    return new Maça("Mouse","Adalberto", "roxa");
  }

}
