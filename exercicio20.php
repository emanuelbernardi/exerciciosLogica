<?php
/*Leia 2 valores com uma casa decimal (x e y), que devem representar as coordenadas de um ponto em um plano. A seguir, determine qual o quadrante ao qual pertence o ponto, ou se está sobre um dos eixos cartesianos ou na origem (x = y = 0).

Se o ponto estiver na origem, escreva a mensagem “Origem”.

Se o ponto estiver sobre um dos eixos escreva “Eixo X” ou “Eixo Y”, conforme for a situação.
*/

$read = readline('Coloque coordenadas: ');
echo <<<EOL
      X
      |
   Q2 | Q1
 -----|------Y
   Q3 | Q4
      |

EOL;
$valor = explode(" ", $read);
$x = (float)$valor[0];
$y = (float)$valor[1];
if($x == 0.0 || $y == 0.0){
  if ($x == 0.0 && $y != 0.0){
    echo "Eixo X\n";
  } else if ($x != 0.0 && $y == 0.0){
    echo "Eixo Y\n";
  } else {
    echo 'Origem'."\n";
  }
}elseif($x > 0.0 && $y > 0.0 ){
  echo 'Q1'."\n";
}elseif($x < 0.0 && $y > 0.0){
  echo 'Q2'."\n";
}elseif($x < 0.0 && $y < 0.0 ){
  echo 'Q3'."\n";
}elseif($x > 0.0 && $y < 0.0){
  echo 'Q4'."\n";
}