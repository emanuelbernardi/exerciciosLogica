<?php

/*
 1.2.7 Conversão de temperatura - Faça um programa que calcula e mostra uma tabela de graus
Celsius/Fahrenheit de 1 a 10 [fórmula: C = 5/9(F-32)]. Por enquanto (sem comandos de repetição),
você deverá escrever as instruções para calcular e mostrar cada resultado. 
 */

// Errado pra cacete

$tamanho = readline('digite um numero');

$F = 1;  
$Celsius = number_format((($F - 32) * 5/9),3,'.',' ');  
$Celsius2 = number_format((($F=2 - 32) * 5/9),3,'.',' ');
$Celsius3 = number_format((($F=3 - 32) * 5/9),3,'.',' ');
$Celsius4 = number_format((($F=4 - 32) * 5/9),3,'.',' ');
$Celsius5 = number_format((($F=5 - 32) * 5/9),3,'.',' ');
$Celsius6 = number_format((($F=6 - 32) * 5/9),3,'.',' ');
$Celsius7 = number_format((($F=7 - 32) * 5/9),3,'.',' ');
$Celsius8 = number_format((($F=8 - 32) * 5/9),3,'.',' ');
$Celsius9 = number_format((($F=9 - 32) * 5/9),3,'.',' ');
$Celsius10 = number_format((($F=10 - 32) * 5/9),3,'.',' ');

echo <<<EOL
Tabela 
****************************
1 $Celsius
2 $Celsius2
3 $Celsius3
4 $Celsius4
5 $Celsius5
6 $Celsius6
7 $Celsius7
8 $Celsius8
9 $Celsius9
10 $Celsius10
\n
EOL; 

echo <<<EOL
Tabela 
****************************

EOL;
for($i=1; $i < $tamanho; $i++ ) {
  echo "$i ".$Celsius = number_format((($F = $i - 32) * 5/9),3,'.',' ')."\n";
}

echo <<<EOL
Tabela 
****************************

EOL;

$i = 0;

do {
  $i++; 
  echo "$i ".$Celsius = number_format((($F = $i - 32) * 5/9),3,'.',' ')."\n";

}while( $i < 10 );

echo <<<EOL
Tabela 
****************************

EOL;

$e = 0;

while( $e < 10)
{
  $e++;
  echo "$e ".$Celsius = number_format((($F = $e - 32) * 5/9),3,'.',' ')."\n";

}