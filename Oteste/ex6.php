<?php
/*
Desenvolver um algorítimo fatorial, isso é:

Se for digitado o número 8, deve ser printado na tela: “!8 = 40320”.

A fórmula: é X * X-1 * X-2 * X - 3….

8*7*6*5*4*3*2*1 
*/

$num = (int)readline('escreva um numero : ');
$i = 1;

for($j = $num; $j >= 1; $j--) {
    $i *= $num;
    $num--;
}

echo $i;