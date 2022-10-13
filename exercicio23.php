<?php
/*
4.2.15 Adivinhe 1 - Implemente um programa que sorteia um número de 1 a 10 e dá ao usuário 3
tentativas de acertá-lo. A cada tentativa errada, o programa informa se o número a adivinhar está
abaixo ou acima. */

$numeroSecreto = rand(1,10);
$i = 0;
$content = TRUE;
do {
  $i++;

  $tentativa = readline('tente acertar o número: ');
  if($tentativa == $numeroSecreto) {
    echo 'acertou'."\n";
    $content = FALSE;
  }elseif($tentativa < $numeroSecreto) {
    echo "está abaixo do numero"."\n";
  }elseif($tentativa > $numeroSecreto) {
    echo "está acima do numero"."\n";
  }

}while($i < 3 && $content != FALSE); 



