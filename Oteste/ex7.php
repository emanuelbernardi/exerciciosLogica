<?php
/*Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número. */

function mesExtenso($numeroM) {

    $mesArray = [
    1 => 'Janeiro',
    2 => 'fevereiro',
    3 => 'Março',
    4 => 'Abril',
    5 => 'Maio',
    6 => 'Junho',
    7 => 'Julho',
    8 => 'Agosto',
    9 => 'Septembro',
    10 => 'Outubro',
    11 => 'Novembro',
    12 => 'Dezembro'
    ];

    if(array_key_exists($numeroM, $mesArray)){
    return $mesArray[$numeroM];

    }else {
        echo 'Esse mês não existe';
        
    }
}

$x = readline('escreva o numero do mes: ');

echo mesExtenso($x);