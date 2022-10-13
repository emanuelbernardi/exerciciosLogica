<?php

/*3.3.4 Validação de data - Escrever um programa que lê uma data no formato 'DD/MM/AAAA' e
verifica se as barras estão nas posições corretas, se o dia está entre 1 e 31 e se o mês está entre 1 e
12, mostrando mensagens de erro apropriadas ou que a data está correta. 
 */

$a = readline();


$b = explode(" ", $a);


echo "TRIANGULO: ".number_format(($b[0]*$b[2])/2, 3,".", " ")."\n";
echo "CIRCULO: ".number_format((3.14159*($b[2]*$b[2])), 3,".", " ")."\n";
echo "TRAPEZIO: ".number_format(((($b[0]+$b[1])*$b[2])/2), 3,".", " ")."\n";
echo "QUADRADO: ".number_format(($b[1]*$b[1]), 3,".", " ")."\n";
echo "RETANGULO: ".number_format(($b[0]*$b[1]), 3,".", " ")."\n";