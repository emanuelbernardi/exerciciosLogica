<?php

//Gere um array com 50 elementos com valores aleatórios de -100 até 100, e imprima na tela o array e junto, imprima quantos números foram gerados negativos, e quantos foram gerados positivos


for ($i = 0 ; $i <= 10 ; $i++) {
    $rand[$i] = mt_rand(-100, 100);

}
print_r($rand);

$positivos = [];

$negativos = [];

foreach($rand as $i => $val) {
    if($val < 0) {
        $negativos[$i] = $val;
    }else {
        $positivos[$i] = $val;
    }

}

echo 'positivos '.count($positivos);
echo "\n";
echo 'negativos '.count($negativos);