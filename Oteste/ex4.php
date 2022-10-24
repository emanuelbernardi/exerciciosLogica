<?php

/*4.6.7 Pesquisa notas

Elaborar um programa que lê 10 notas em um array,
 todas de 0 a 10. Após ter lido todas as notas, deve ser possível o usuário pesquisar alguma nota dentro desse array, e caso exista, 
 mostrar a nota e a posição que ela se encontra no array. Caso não exista, emitir uma mensagem de erro e tentar novamente.

A pesquisa da nota no array deve se repetir até que o usuário não queira mais*/ 
function search($x, $y) 
{
    if(in_array($x, $y)){
    return array_search($x, $y);
    }else{
    return 'NAO';
    }
}

$i = 0;
$array = [];


for ($i; count($array) < 10;) {
    $notas = readline('de a nota: ');
    if($notas < 0 || $notas > 10 || $notas == ''){
        echo "nota invalida tem que ser de 0 a 10". "\n";
    }else{
        $array[$i] = $notas;
        $i++;
    }
}
print_r($array);

do {
    $pesquisa = readline('pesquisa nota: ');
    if(search($pesquisa, $array) !== 'NAO'){
    echo search($pesquisa, $array).' => '.$pesquisa."\n";
    }else {
        echo 'erro '."\n";
    }
    $pare = readline('se quiser parar digite n: ')."\n";


}while($pare !== 'n');

