<?php
/*
//Difícil 4 –    Faça um programa que leia um valor n, inteiro e positivo, calcule e mostre a seguinte soma: S = 1 + 1/2 + 1/3 + 1/4 + … + 1/n.

$linha = (int)readline("Digite a quantidade de vezes que a soma vai repetir: ");

$n = (int)readline('escreva um valor inteiro:  ');

for ($y = 0; $y <= $linha; $y++) {

        echo ($n + $y) .' +'.' 1 ';
    
    
}

//Fácil  1 – Faça um programa que receba um número e usando laços de repetição calcule e mostre a tabuada desse número.
$var = readline();

for ($i = 2 ; $i <= 10 ; $i++) {
    $tabuada =  $var * $i;
    echo  $tabuada."\n";
} 

echo '**************'."\n";
//Fácil  2 –  Faça um programa que mostre as tabuadas dos números de 1 a 10 usando laços de repetição.

for($i = 1; $i<= 10; $i++) {
for( $y = 1; $y <= 10; $y++) {
    echo $i * $y."\n";
}
echo"\n";

}


//Fácil 3 –    Faça um programa que verifique e mostre os números entre 1.000 e 2.000 (inclusive) que, quando divididos por 11 produzam resto igual a 2.
$x = 2000;
$y = 1000;

for($i = $y; $i <= $x; $i++) {
if($i % 11 == 2) {
    echo $i."\n";
}

}

//Intermediário 5 –    Faça um programa que leia três valores (A, B, C) e mostre-os na ordem lida.  Em seguida, mostre-os em ordem crescente e decrescente.
$x = readline();

$arr = explode(' ', $x);

print_r($arr);

sort($arr) ;

print_r($arr);

rsort($arr);

print_r($arr);


//Fácil 6 – Uma loja deseja cadastrar 5 clientes e verificar se o faturamento da loja foi superior a loja B (faturamento = 54000). 
//Se o faturamento atingir esse valor mostre na tela uma mensagem contendo em quanto foi superado o faturamento.
$i = 0;
$faturamento = [];
while($i < 5) {
    $i++;
    $valor = (int)readline('cadastre até 5 clientes:' );
    $faturamento[$i] = $valor;
}

if (array_sum($faturamento) > '54000') {
    echo "Faturamento é superior a loja B\n";
    
}else {
    echo "Faturamento não é maior\n";
}



Intermediário 7- Uma loja tem uma política de descontos de acordo com o valor da compra do cliente. 
Os descontos começam acima dos R$500. A cada 100 reais acima dos R$500,00 o cliente ganha 1% de desconto cumulativo até 25%. 

Por exemplo: R$500 = 1% || R$600,00 = 2% … etc…

Faça um programa que exiba essa tabela de descontos no seguinte formato:  

Valordacompra – porcentagem de desconto – valor final

$valor = 500;

for($d = 1; $d <= 25; $d++){
    $desconto = ($valor * $d / 100);
    $valorFinal = $valor - $desconto;
    echo "valor compra: ".$valor." Desconto ".$d."% ".$valorFinal."\n";
    $valor = $valor + 100;
}


Intermediário 8 –    Uma companhia de teatro deseja dar uma série de espetáculos. 
a) A direção calcula que a R$5,00 o ingresso. 
b) Serão vendidos 120 ingressos, e que as despesas serão R$ 200,00. 
c) Diminuindo-se R$ 0,50 o preço dos ingressos espera-se que as vendas aumentem em 26 ingressos. 
$ingresso = 5.00;
$quantidade = 120;
$i = 0;

while( $ingresso > 1){ 
    echo 'lucro max '. ($quantidade * $ingresso - 200 ).' preco de ingresso '. $ingresso;
    $ingresso =  $ingresso - 0.5;
    $quantidade = $quantidade + 26;
}



//Fácil 9-  Faça um programa que receba a idade de dez pessoas e que calcule e mostre a quantidade de pessoas com idade maior ou igual a 18 anos.
$i = 0;
$arr = [];

do{
    $i++;
    $idade = (int)readline('escreva até 10 idade : ');
    if($idade >= 18) {
        $arr[$i] = [$idade]; 
    }

    

}while($i < 10);

echo count($arr);



Intermediário 10-    Faça um programa que receba a idade de 15 pessoas e que calcule e mostre:
a) A quantidade de pessoas em cada faixa etária;
b) A percentagem de pessoas na primeira e na última faixa etária, com relação ao total de pessoas: 

Até 15 anos
De 16 a 30 anos
De 31 a 45 anos
De 46 a 60 anos
Acima de 61 anos

$faixa1 = 0;
$faixa2 = 0;
$faixa3 = 0;
$faixa4 = 0;
$faixa5 = 0;

for ($i = 0; $i < 5; $i++) {
    $idade = (int)readline('escreva até 10 idade : ');

    if($idade <= 15 ) {
        $faixa1 += 1;
    }else if($idade > 15 && $idade < 30) {
        $faixa2 += 1;
    }else if($idade > 30 && $idade < 45) {
        $faixa3 += 1;
    }else if($idade > 45 && $idade < 60) {
        $faixa4 += 1;
    }else  {
        $faixa5 += 1;
    }
}

echo $faixa1."\n";
echo $faixa2."\n";
echo $faixa3."\n";
echo $faixa4."\n";
echo $faixa5;
*/