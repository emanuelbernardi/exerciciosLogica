<?php
/*4.6.1 Média
Escrever um programa que leia até 20 números inteiros para um vetor e calcule a média dos valores. */
$i = 0; 
$vetor = [];
do{
  $numeros = readline('coloque até 20 numeros para calcular a média: ');
  $novamente = readline('Quer continuar s/n: ');
  $vetor[$i] = $numeros;
  
  $i++;
} while($novamente != 'n' &&  $i < 20);
$soma = array_sum($vetor);
echo ($soma/$i);


