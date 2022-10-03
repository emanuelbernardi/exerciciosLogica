<?php

/*5.5.1 Nome do mês - 
Escrever uma função que recebe número do mês e retorna seu nome por
extenso */

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

  return $mesArray[$numeroM];

}

echo mesExtenso(2);