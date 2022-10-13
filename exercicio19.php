<?php
/*4.6.5 Soma em vetor  - 
Elabore um programa  que em apenas um
vetor, soma os valores de dois campos e armazena o resultado em um terceiro campo de um
registro. */

$numero1 = readline('escreva um numero: ');
$numero2 = readline('escreva um segundo numero: ');


$vetor = [$numero1, $numero2];
$soma = $vetor[0] + $vetor[1];

$vetor[2] = $soma;

foreach ($vetor as $key => $val) {
  echo "Campo $key = $val"."\n";
}


print_r($vetor);