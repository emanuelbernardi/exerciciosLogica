<?php

 /*Implemente um programa que leia um nome de aluno, e uma nota pra esse aluno.

Depois mostre na tela todos os nomes com suas respectivas notas, juntamente com a quantidade de alunos e a média de todas as notas.

A quantidade total de alunos é de critério do usuário.
É limitado a 1 nota por aluno.
 */

$i = 0; 
$vetor = [];

do {
  
  $nome = readline('Qual o nomme do aluno: ');
  $nota = readline('Sua Nota: ');
  $novamente = readline('Quer continuar s/n: '); 
  $vetor[$i] = [$nome => $nota];
  ;  
  $i++;
}while($novamente != 'n');
//print_r($vetor);
foreach($vetor as $key => $val1){
  foreach($val1 as $nomes => $val2)
  {
    print_r($nomes.'-');
    print_r($val2);
    echo "\n";
    $valores = [];
    $notas[$key] = $val2;
    $soma = array_sum($notas);
  }
  
}
echo "média ".($soma/$i)."\n";
echo "quatidade alunos ".count($vetor)."\n";
