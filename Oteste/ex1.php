<?php
//4.3.10 Inversão de cadeia
//Elaborar um programa que lê uma string e mostra ela invertida no terminal. Após, o programa volta pra ler outra string, também apresentando invertida no terminal, repete o processo até que não seja digitado nenhum caractere

do{
    $x = readline('escreva uma palavra: ');
    
    echo strrev($x)."\n";
    
    $pare = readline('$se quiser parar digite n: ');

}while($pare !== 'n');