<?php

/*4.3.8 Prenome -
 Escrever um programa que lê um nome completo e mostra na tela o prenome, isto é, o primeiro nome. 
Suponha que o nome nunca começa com um espaço. 
O programa repete esses passos até que o nome lido seja uma cadeia nula (o usuário não digitou nada).*/ 

$nome = readline('coloque o seu nome: ');

$x = explode(' ', $nome);
echo $x[0];