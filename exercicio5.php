<?php
/*3.1.2 Múltipla escolha 1 - Elaborar uma questão de múltipla escolha de uma disciplina 
que esteja cursando ou um tema de interesse, com um enunciado e cinco alternativas, 
sendo uma correta ou incorreta. Escrever um programa que mostra a questão na tela, 
pede a resposta correta e informa ao usuário se este acertou ou errou. */

echo "Qual é o bloco econômico que o brasil faz parte atualmente";


echo <<<EOL

Alternarivas:
1-União Europeia
2-USMCA
3-APEC
4-Mercosul
5-ASEAN
"\n"
EOL;

$alternativa = readline('A alternativa correta é: ');

if ($alternativa == 4) {
  echo "Acertou";
} else {
  echo "Errou";
}
