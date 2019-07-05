<?php

    function convercao($pol){
        $cm=$pol*2.54;
        return $cm;
    }
    print "Digite um número em polegadas: ";
    $pol = (float) fgets(STDIN);
    
    $cm = convercao($pol);

    print $pol." polegadas equivale a ".$cm." centímetros ";