<?php
/*Dessa vez, seguindo a mesma base dos demais, construa:

(…….)

*********
*******
*****
***
* */
$quantidade = (int)readline('Quantas linhas: ');
  for ($f = 0; $quantidade != 0 ; $f++){

  $caracter = readline('Escolha um caracter: ');

  for($i = 0; $i < $quantidade; $i++) {
    for ($e = $quantidade; $e > $i; $e--) {
      echo $caracter.$caracter;
    }   
    echo "\n";

  }
  $quantidade = (int)readline('digite novamente: ');

}

