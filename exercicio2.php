<?php
/*4.3.6 Substituição de caractere - Elabore um programa que troca todos os espaços de uma cadeia lida por um caractere também lido. O programa repete isso até que seja lida uma cadeia nula (neste caso o caractere não é lido).*/

$palavra = readline('coloque o uma palavra: ');

$troca = readline('coloque o um caracter: ');


$x = str_replace(' ' ,$troca, $palavra);

echo $x;
