<?php

//Crie um array com pelo menos 10 itens, de tipo de dados diferentes e faça um laço de repetição para exibir apenas os dados que são strings

$array = [1,'opa', 10, true, 'fala manito', false, 2, 'habla comigo', 9, 10 ];

foreach ($array as $value) {
    if(is_string($value)) {
       echo $value."\n";
    }
}