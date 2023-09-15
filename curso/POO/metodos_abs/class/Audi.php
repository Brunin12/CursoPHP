<?php

abstract class Carro {
  abstract function getCarro();
}

class Audi extends Carro {
  public function __construct(public $carro = "")
  {
    $this->carro = $carro;
  }

  function getCarro($return = false) {
    if ($return){
      return $this->carro;
    } else{
      prints("seu audi é do modelo ".$this->carro);
    }
  }
}