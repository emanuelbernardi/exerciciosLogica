<?php

$i = 0; 
$vetor = [];
do{
  $numeros = readline('coloque até 20 numeros: ');
  $novamente = readline('Quer continuar s/n: ');
  $vetor[$i] = $numeros;
  
  $i++;
} while($novamente != 'n' &&  $i < 20);
$ordenar = readline('1 - Ordenar crescente | 2 - Decrescente: ');
if($ordenar == '1') {
  asort($vetor);
  foreach($vetor as $key => $val) 
  {
    echo "$key = $val \n";
  }
} else {
  arsort($vetor);
  foreach($vetor as $key => $val) 
  {
    echo "$key = $val \n";
  }
}