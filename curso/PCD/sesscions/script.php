<?php

session_start();

foreach ($_SESSION as $item) {
  print $item."<br>";
}

?>