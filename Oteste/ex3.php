<?php

/*
4.6.2 Maior e menor - Escrever um programa que preencha um array de 100 elementos com valores inteiros aleatórios,
e identifique o maior e o menor número gerados, e respectivas posições.
 */
$rand = [];
for($i = 0 ; $i <= 100; $i++) {
 $rand[$i] = mt_rand();
}
print_r($rand);

$x = min($rand);
$y = max($rand);
echo "\n";

$arrayMenor = array_search($x, $rand);
$arrayMaior = array_search($y, $rand);

echo $arrayMenor. ' => '. $x;
echo "\n";
echo $arrayMaior.' => '. $y;

