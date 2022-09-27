<?php
/*3.2.15 Ano bissexto -
 Um ano é bissexto se for divisível por 4 exceto os séculos, 
 que são bissextos se forem múltiplos de 400. Escreva um programa que determina se um ano é bissexto.*/

  $ano = readline('veja se é bissexto: ');

if($ano % 4 == 0 && $ano % 100 != 0 || $ano % 400 == 0) {
  echo "É bissexto";
} else {
  echo "Não é";
}