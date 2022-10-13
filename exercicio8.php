<?php

/*4.1.3 Caracteres progressivos 1 - Escrever um programa que produza a saída abaixo na tela, para N
linhas e usando um caractere lido do teclado (no exemplo, *). Após mostrar uma vez, o programa
repete o processo (perguntando, e mostrando o resultado), só parando quando N for zero.

**

****

******

******** 
*/

$linha = (int)readline('Quantas linhas: ');
$caracter = readline('Escolha um caracter: ');

for($i = 0; $i < $linha; $i++) {
  for ($e = 0; $e < $i; $e++) {
    echo $caracter.$caracter;
  }   
  echo "\n";

}





