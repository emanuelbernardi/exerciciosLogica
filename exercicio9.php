<?php
/*4.1.4 Caracteres progressivos 2 - Faça o mesmo que o exercício Caracteres Progressivos 1, para:

*
**
***
****
*****

(…) */

$linha = (int)readline('Quantas linhas: ');
$caracter = readline('Escolha um caracter: ');

for($i = 0; $i < $linha; $i++) {
  for ($e = 0; $e < $i; $e++) {
    echo $caracter;
  }   
  echo "\n";

}
