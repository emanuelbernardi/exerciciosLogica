<?php

//4.3.5 Inserção de caractere 2 - 
//Implementar um programa que insere um caractere digitado entre as letras de uma palavra também digitada. Ele repete tudo enquanto o usuário digitar uma string. Se nada for digitado, o programa termina.
function addCaracter($x, $carac) {
    $y = '';
    for($i = 0; $i < strlen($x); $i++) {
        $y .= $x[$i].$carac;
    }
    return $y;

}

do { 
    $carac = readline('escreva um caracter: ');
    $x = readline('escreva uma palavra: ');

    if(isset($x)){
    echo substr(addCaracter($x, $carac), 0, -1)."\n";
    }

    

}while($x !== '');