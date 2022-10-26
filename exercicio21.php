<?php



$cardapio = [
    1 => 4.00,
    2 => 4.50,
    3 => 5.00,
    4 => 2.00,
    5 => 1.50
];

//exercicio de lanche
echo $cardapio[3] * 2;

$pedido = readline();

$var = explode(' ', $pedido);

$vt = "Total: R$ ".number_format(($cardapio[$var[1]] * $var[0]), 2, '.', ' ')."\n";


//
$vars = readline();

$arr = explode(' ', $vars);


for($i = 0; $i < count($arr); $i++) {
    sort($arr);

    echo $arr[$i]."\n";
}

echo "\n";


$arr2 = explode(' ', $vars);

for($i = 0; $i < count($arr2); $i++) {

    echo $arr2[$i]."\n";
}


