<?php

/*
4.6.2 Maior e menor - Escrever um programa que preencha um array de 100 elementos com valores inteiros aleatórios,
e identifique o maior e o menor número gerados, e respectivas posições.
 */
$rand = [];
for($i = 0 ; $i <= 10; $i++) {
 $rand[$i] = mt_rand(1,10);
}
$valMin = '';
$valMax = ' ';

print_r($rand);

foreach($rand as $i => $val) {
    if($val < $valMin) {
        $valMin = $val;
    }
    if($val > $valMax) {
        $valMax = $val;
    }
}

print_r($valMax);
echo "\n";
print_r($valMin);
/*

$x = min($rand);
$y = max($rand);

$arrayMenor = array_search($x, $rand);
$arrayMaior = array_search($y, $rand);

echo $arrayMenor. ' => '. $x;
echo "\n";
echo $arrayMaior.' => '. $y;
*/
