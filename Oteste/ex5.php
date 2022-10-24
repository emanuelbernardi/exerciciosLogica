<?php
/*4.6.9 Validação de senha

Implementar um programa que lê um nome e uma senha (entre 4 e 8 caracteres) e verifica se o usuário está autorizado ou não.
Para essa verificação, o programa mantém uma lista de nomes e respectivas senhas.
O programa mostra mensagens de erro se o nome ou a senha estiverem incorretos. São permitidas até 3 tentativas. */

/*
$i = 0;
do{
    $Nome = readline('escreva o nome do usuario: ');
    $senha = readline('escreva sua senha: '); 
    
    if (strlen($senha) >= 4 && strlen($senha) <= 8) {
        echo 'Deve ser uma senha de entre 4 e 8 digitos'."\n";
    }
    
    if($usuarios[$User] == $Psswd && array_key_exists($Nome, $usuarios)) {
        echo 'usuario logado';
        $content = FALSE;
    } else {
        echo "Usuario ou senha Invalidos"."\n"; 
    }
    
    $i++;
}while($i < 3 && $content == TRUE);
*/

//outra forma 

$usuarios =
 [
  'Emanuel' => '1234',
  'Thiago' => '223445',
  'Patrick' => '8776698'
 ];
 $content = TRUE;

  for($j = 0; $j < 3 && $content == TRUE; $j++) {

    $User = readline('escreva o nome do usuario: ');
    $Psswd = readline('escreva sua senha: '); 

    if(strlen($Psswd) >= 4 && strlen($Psswd) <= 8) {

        if($usuarios[$User] == $Psswd) {
            echo 'usuario logado';
            $content = FALSE;
          } 

    }else {
        echo "Usuario ou senha Invalidos"."\n"; 
      }


  }