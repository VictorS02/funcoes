<?php

function fartocel ($tf) {
    $tc = ($tf - 32) * 5/9;
    return $tc;
}

print "Digite uma temperatura em Fahrenheit: ";
$tf = (float) fgets(STDIN);
$tc = fartocel($tf);
print $tf . "Fahrenheit equivale a ".$tc."Celsius\n";
