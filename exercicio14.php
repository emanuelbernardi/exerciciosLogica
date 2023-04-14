<?php
/*
$i = 0; 
$vetor = [];
do{
  $numeros = readline('coloque até 20 numeros: ');
  $novamente = readline('Quer continuar s/n: ');
  $vetor[$i] = $numeros;
  
  $i++;
} while($novamente != 'n' &&  $i < 20);
$ordenar = readline('1 - Ordenar crescente | 2 - Decrescente: ');
if($ordenar == '1') {
  asort($vetor);
  foreach($vetor as $key => $val) 
  {
    echo "$key = $val \n";
  }
} else {
  arsort($vetor);
  foreach($vetor as $key => $val) 
  {
    echo "$key = $val \n";
  }
}
*/

  $y = 0; 
  $vetor = [];
do{
  $numeros = readline('coloque até 20 numeros: ');
  $novamente = readline('Quer continuar s/n: ');
  $vetor[$y] = $numeros;
  
  $y++;
} while($novamente != 'n' &&  $y < 20);

$decisao = readline('crescente || decrescente: ');
$x = [];

if($decisao == 'crescente'){
    foreach($vetor as $i ) {
        if($vetor[$i] > $vetor[$i + 1]) {
          
        }

      }
      
    } elseif($decisao == 'decrescente') {
      
    foreach($vetor as $i ) {
      if($i > $i + 1) {
        $x = [$i];
        
      }
    }
    
  }
  print_r($vetor);



  /*
  $decisao = readline('escreva se que em ordem : crescente || decrescente');
if($decisao == 'crescente'){

  
  } elseif($decisao == 'decrescente') {

  }
  */