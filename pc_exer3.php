<?php

function notas ($n1,$n2) {
    $media = ($n1+$n2)/2;
    return $media;
}

print "Digite a primeira nota:";
$n1 = (float) fgets(STDIN);
print "Digite a segunda nota:";
$n2 = (float) fgets(STDIN);
$media = notas($n1,$n2);

if ($media >= 6) {
    print "Parebéns você foi aprovado com a nota ".$media."\n"; 
}else {
    print "Parabéns você foi reprovado com nota ".$media."\n";
}