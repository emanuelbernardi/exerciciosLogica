<?php
/*3.1.3 Múltipla escolha 2 -
 Enriqueça o programa acima da questão de múltipla escolha (mas crie um novo arquivo),
  incluindo uma outra questão de outro tema. 
  No início do programa, ofereça ao usuário a escolha de qual tema quer responder. */


  echo <<<EOL
  *************
  Matérias:
  1-Geopolitica
  2-Quimica
  *************
  \n
  EOL; 

  $Materia = readline('Sobre qual matéria deseja responder: ');

if($Materia == 1) {

  echo "Qual é o bloco econômico que o brasil faz parte atualmente"."\n";


    echo <<<EOL

    Alternarivas:
    1-União Europeia
    2-USMCA
    3-APEC
    4-Mercosul
    5-ASEAN
    \n
    EOL;

    $alternativa = readline('A alternativa correta é: ');

    if ($alternativa == 4) {
      echo "Acertou"."\n";
    } else {
      echo "Errou"."\n";
    }

} else {
echo "Companhias que fabricam jeans usam cloro para o clareamento, 
seguido de lavagem. 
Algumas estão substituindo o cloro por substâncias ambientalmente mais seguras como peróxidos, 
que podem ser degradados por enzimas chamadas peroxidases.
Pensando nisso, pesquisadores inseriram genes codificadores de peroxidases 
em leveduras cultivadas nas condições de clareamento e lavagem dos jeans e 
selecionaram as sobreviventes para produção dessas enzimas."."\n";

    echo <<<EOL
    
    Nesse caso, o uso dessas leveduras modificadas objetiva ?

    Alternarivas:
    1-reduzir a quantidade de resíduos tóxicos nos efluentes da lavagem.

    2-eliminar a necessidade de tratamento da água consumida

    3-elevar a capacidade de clareamento dos jeans.

    4-aumentar a resistência do jeans a peróxidos.

    5-associar ação bactericida ao clareamento.
    \n
    EOL;

    $alternativa = readline('A alternativa correta é: ');

    if ($alternativa == 1) {
      echo "Acertou"."\n";
    } else {
      echo "Errou"."\n";
    }

}