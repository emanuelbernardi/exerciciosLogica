<?php

/*4.1.7 Tudo junto - Faça um programa que junte os 4 exercícios. Ele repetidamente oferece um
menu com a opção 0 para terminar e outras 4 opções 1, 2, 3,e 4, cada uma correspondendo a um
tipo de figura em todos os casos exceto 0 o menu é oferecido novamente. Tente estruturar o

1
**
****
******
******** 
2
*
**
***
****
*****
3
**
****
******
********
4
*****
***
* 

*/
do{
echo <<< EOL
1
**
****
******
******** 
2
*
**
***
****
*****
3
**********
********
******
****
**
4
*
***
******
**********
***************

caso queira parar digite 0

EOL;
$opcao = readline('escolha a forma que deseja: ');

switch ($opcao) {
  case 1:
          $linha = (int)readline('Quantas linhas: ');
      $caracter = readline('Escolha um caracter: ');

      for($i = 0; $i < $linha; $i++) {
        for ($e = 0; $e < $i; $e++) {
          echo $caracter.$caracter;
        }   
        echo "\n";

      }
      break;
  case 2:
          $linha = (int)readline('Quantas linhas: ');
      $caracter = readline('Escolha um caracter: ');

      for($i = 0; $i < $linha; $i++) {
        for ($e = 0; $e < $i; $e++) {
          echo $caracter;
        }   
        echo "\n";

      }
      break;
  case 3:
        $quantidade = (int)readline('Quantas linhas: ');
        for ($f = 0; $quantidade != 0 ; $f++){
      
        $caracter = readline('Escolha um caracter: ');
      
        for($i = 0; $i < $quantidade; $i++) {
          for ($e = $quantidade; $e > $i; $e--) {
            echo $caracter.$caracter;
          }   
          echo "\n";
      
        }
        $quantidade = (int)readline('digite novamente: ');
      
      }
      break;
  case 4:
      do {
        $linha = (int)readline("Digite a quantidade de linhas: ");
        $caracter = '*';
        $quantidade = 0;
        for ($y = 0; $y <= $linha; $y++) {
          for($x = 1; $x <= $quantidade; $x++) {
            echo $caracter;
          }
          $quantidade = $x + $y;
          echo "\n";
        }
      } while ($linha != 0);
      break;    
}

}while($opcao != 0);