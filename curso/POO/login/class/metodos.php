<?php

function prints($mensagem)
{

  if (is_bool($mensagem)) {
    if ($mensagem == true) {
      print "<br>true<br>";
    } else {
      print "<br>false<br>";
    }
  } else {

    print "<br>$mensagem<br>";
  }
}

function print_alert($mensagem)
{
  if (is_bool($mensagem)) {
    if ($mensagem == true) {
      print '<br>
<div class="alert alert-warning" role="alert">
  true
</div><br>';
    } else {
      print '<br>
<div class="alert alert-warning" role="alert">
  false
</div><br>';
    }
  } else {

    print '<br>
<div class="alert alert-warning" role="alert">
  ' . $mensagem . '
</div><br>';
  }
}

function print_erro($mensagem)
{
  if (is_bool($mensagem)) {
    if ($mensagem == true) {
      print '<br>
<div class="alert alert-danger" role="alert">
  true
</div><br>';
    } else {
      print '<br>
<div class="alert alert-danger" role="alert">
  false
</div><br>';
    }
  } else {

    print '<br>
<div class="alert alert-danger" role="alert">
  ' . $mensagem . '
</div><br>';
  }
}

function print_success($mensagem)
{
  if (is_bool($mensagem)) {
    if ($mensagem == true) {
      print '<br>
<div class="alert alert-success" role="alert">
  true
</div><br>';
    } else {
      print '<br>
<div class="alert alert-success" role="alert">
  false
</div><br>';
    }
  } else {

    print '<br>
<div class="alert alert-success" role="alert">
  ' . $mensagem . '
</div><br>';
  }
}
function print_info($mensagem)
{
  if (is_bool($mensagem)) {
    if ($mensagem == true) {
      print '<br>
<div class="alert alert-info" role="alert">
  true
</div><br>';
    } else {
      print '<br>
<div class="alert alert-info" role="alert">
  false
</div><br>';
    }
  } else {

    print '<br>
<div class="alert alert-info" role="alert">
  ' . $mensagem . '
</div><br>';
  }
}
