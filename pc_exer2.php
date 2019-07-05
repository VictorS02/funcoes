<?php

function hipo ($c1,$c2) {
    $hipo = sqrt(($c1**2)+($c2**2));
    return $hipo;
}

print "Digite o primeiro cateto:";
$c1 = (float) fgets(STDIN);
print "Digite o segundo cateto:";
$c2 = (float) fgets(STDIN);
$hipo = hipo($c1,$c2);
print "Quando os cateros são, ".$c1." e ".$c2." a hipotenusa será ". $hipo."\n";