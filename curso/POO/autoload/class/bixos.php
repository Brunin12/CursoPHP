<?php

trait Comer
{
  function comer()
  {
    prints("humm que fome da pega!");
  }
}

class Human
{
  use Comer;
}

class Animal
{
  use Comer;
}