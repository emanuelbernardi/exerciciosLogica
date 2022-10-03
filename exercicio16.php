<?php
/*4.6.9 Validação de senha -
 Implementar um programa que lê um nome e uma senha (entre 4 e 8 caracteres) 
 e verifica e o usuário está autorizado ou não. Para essa verificação, o programa mantém
uma lista de nomes e respectivas senhas. O programa mostra mensagens de erro se o nome ou a
senha estiverem incorretos. São permitidas até 3 tentativas.  */ 
 $usuarios =
 [
  'Emanuel' => '1234',
  'Thiago' => '223445',
  'Patrick' => '8776698'
 ];
 $content = TRUE;
  for($i = 0; $i < 3 && $content == TRUE; ){
    $Nome = readline('escreva o nome do usuario: ');
    
    $senha = readline('escreva sua senha: '); 
    if (preg_match('/[^0-8A-Za-z]/',$senha)) {
      echo 'Deve ser uma senha de entre 4 e 8 digitos'."\n";
    }
    $i++;

    if(array_search($senha, $usuarios) && array_key_exists($Nome, $usuarios)) {
      echo 'usuario logado';
      $content = FALSE;
    } else {
      echo "Usuario não existe tente novamente"."\n"; 
    }
  

  }