<?php 
 
function mostrarDia ($numeroSemana) {
    switch ($numeroSemana) {
        case 1:
            print "\nO número inserido corresponde a DOM. \n\n";
        break;
        case 2:
            print "\nO número inserido corresponde a SEG. \n\n";
        break;
            
        case 3:
            print "\nO número inserido corresponde a TER. \n\n";
        break;
        case 4:
            print "\nO número inserido corresponde a QUA. \n\n";
        break;
        case 5:
            print "\nO número inserido corresponde a QUI. \n\n";
        break;
        case 6:
            print "\nO número inserido corresponde a SEX. \n\n";
        break;
        case 7:
            print "\nO número inserido corresponde a SAB. \n\n";
        break;
        default:
        exit("\n\nNúmero inválido, dia inexistente... \n\n\n");
        break;
    }
}

print "Digite um numero entre 1 e 7, e sera mostrado o dia da semana: ";
$numeroSemana = (float) fgets(STDIN);

$nomeDia = mostrarDia ($numeroSemana);