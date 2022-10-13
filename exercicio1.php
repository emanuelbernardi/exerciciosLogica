<?php

function addhifen($string) {
  $x = '';
  for($i = 0; $i < strlen($string);$i++) {
    
    $x .= $string[$i].'-';

  }
  return $x;
  
}

$palavra = readline('coloque o uma palavra: ');

$str = addhifen($palavra);
echo substr($str, 0, -1);

