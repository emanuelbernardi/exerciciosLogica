<?php
//4.3.10 Inversão de cadeia
//Elaborar um programa que lê uma string e mostra ela invertida no terminal. Após, o programa volta pra ler outra string, também apresentando invertida no terminal, repete o processo até que não seja digitado nenhum caractere
/*
do{
    $x = readline('escreva uma palavra: ');

    
   for($i = strlen($x)-1; $i >= 0  ;$i--) {

     echo $x[$i];

 
   }

   echo "\n";
    
    $pare = readline('$se quiser parar digite n: ');

}while($pare !== 'n');*/

$var = readline();

$array = explode(" ", $var);

print_r($array);

if($array[0] + $array[1] > $array[2] && $array[1] + $array[2] > $array[0] && $array[0] + $array[2] > $array[1]) {
  echo "Perimetro =".number_format((array_sum($array)), 1, '.', ',');
} else {
  echo "Area =".number_format(((($array[0] + $array[1])*$array[2])/2), 1, '.', ',');
}

