<?php
/*5.2.1 Menor cadeia - 
Escrever uma função que recebe duas cadeias de caracteres e retorna a menor
em ordem alfabética.  */


function ordemAlfa($var1,$var2)
{
  if($var1 == $var2) return "Ambos tem a mesma quantidade de caracteres";
  
  $text = (strlen($var1) < strlen($var2)) ?  $var1  : $var2;
    
  $x = [];
  
  for ($i = 0; $i < strlen($text); $i++) {
    $x[$i] = $text[$i];
  }

  sort($x);

  $result = '';
  foreach( $x as $chave => $valor ) {
    $result .= "$chave = $valor\n";
  }
  return $result;
  
}
$cadeia1 = readline('coloque algumas letras para ordenar por ordem alfabética: ');
$cadeia2 = readline('coloque algumas letras para ordenar: ');

print_r( ordemAlfa($cadeia1,$cadeia2));