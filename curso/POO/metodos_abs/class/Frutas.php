<?php

class Frutas {

  public function __construct(public $tipo = "")
  {
    $this->tipo = $tipo;
  }

  public function mostra() {
    prints($this->tipo);
  }
}