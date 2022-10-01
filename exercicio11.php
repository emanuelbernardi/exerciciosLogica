<?php

/*4.1.6 Caracteres progressivos 3 - Idem acima, para o formato abaixo seguindo a seguinte regra:

1               -> *
2 + 1 (de cima) -> ***
3 + 3 (de cima) -> ******
4 + 6 (de cima) -> **********
5 + 10 ( cima)  -> ***************
6 + 15 = 21
7 + 21 = 28
8 + 28 = 36
9 + 36 = 45
(……) */

do {
  $linha = (int)readline("Digite a quantidade de linhas: ");

  $caracter = '*';

  $quantidade = 0;

  for ($y = 0; $y <= $linha; $y++) {

    for($x = 1; $x <= $quantidade; $x++) {

      echo $caracter;
    
    }
    
    $quantidade = $x + $y;

    echo "\n";
    
  }
} while ($linha != 0);