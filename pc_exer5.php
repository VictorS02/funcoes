<?php

function perimetro ($l1,$m2) {
    if ($l1 == 3){
        $perimetro = 3 * $m2;
        return $perimetro;
    }elseif ($l1 == 4) {
        $perimetro = 4 * $m2;
        return $perimetro;
    }

}

print "Digite o numero de lados de um polígono (sendo 3,4 ou 5):";
$l1 = (float) fgets(STDIN);

if ($l1 == 3) {
    print "Digite em cm a medida do lado do polígono: ";
$m2 = (float) fgets(STDIN);
    $perimetro = perimetro($l1,$m2);
    print "Isso é um TRIÂNGULO e o valor do seu perímetro é ".$perimetro."\n";
}elseif ($l1 == 4) {
    print "Digite em cm a medida do lado do polígono: ";
$m2 = (float) fgets(STDIN);
    $perimetro = perimetro($l1,$m2);
    print "Isso é um QUADRADO e o valor da sua ária é ".$perimetro."\n";
}else {
    print "Isso é um PENTÁGONO.\n";
}

