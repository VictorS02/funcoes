<?php

function somaDeTudo ($n1,$n2) {
    $soma = 0;
    for ($i=$n1; $i <= $n2; $i++) { 
        $soma += $i;
    }
   return $soma;
}

print "Digite um numero inteiro: ";
$n1 = (float) fgets(STDIN);

print "Digite outro numero inteiro: ";
$n2 = (float) fgets(STDIN);

$soma = somaDeTudo ($n1,$n2);

print "A soma de todos os números inteiros contidos no intervalo digitado é ".$soma."\n";