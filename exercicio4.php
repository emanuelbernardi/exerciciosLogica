<?php

/*4.3.9 Iniciais - Escreva um programa que lê um nome de pessoa e identifica suas iniciais, segundo o seguinte critério: uma inicial é o primeiro caractere ou o caractere que segue um espaço. */



$nome = readline('coloque o seu nome: ');

$x = explode(' ', $nome);
$i = 0;
for ($i; $i < count($x); $i++){
  echo substr($x[$i],0, 1);
}

