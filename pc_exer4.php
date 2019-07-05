<?php

function pesoideal($s1,$h2) {
    if ($s1 == 1) {
        $pi = (62.1 * $h2)-44.7;
            return $pi;
    }else {
        $pi = (72.7 * $h2)-58;
            return $pi;
    }
}

print "Digite seu sexo (1-feminino 2-masculino):";
$s1 = (float) fgets(STDIN);
print "Digite a sua altura: ";
$h2 = (float) fgets(STDIN);
$pi = pesoideal($s1,$h2);
print "O peso ideal para a sua altura é ".$pi."\n";