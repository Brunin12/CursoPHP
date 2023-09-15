<?php

$pasta = "nova-pasta";


if (!is_dir($pasta)) {
  mkdir($pasta, 0755);
  rename($pasta, 'new pasta of turip');
} else {
  rename($pasta, 'turip renomeado');
  //rmdir($pasta);
}





?>
