<?php

function resto ($x,$y) {
    $resultado = $x%$y;
    if ($resultado == 0) {
        
        $resposta = "Nesse caso a função ira ratornar 1";
    
    }else {
        $resposta = "Nesse caso a função ira ratornar 0";   
    }
    return $resposta;
}

print "Digite um numero x para ser dividido por um numero y: ";
$x = (float) fgets(STDIN);
print "Numero y: ";
$y = (float) fgets(STDIN);

$resposta = resto ($x,$y);

print $resposta;



