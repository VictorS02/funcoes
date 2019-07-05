<?php 
 
function mostrarMes ($numeroMes) {
    switch ($numeroMes) {
        case 1:
            print "\nO número inserido corresponde ao mês de JANEIRO. \n\n";
        break;
        case 2:
            print "\nO número inserido corresponde ao mês de FEVEREIRO. \n\n";
        break;
            
        case 3:
            print "\nO número inserido corresponde ao mês de MARÇO. \n\n";
        break;
        case 4:
            print "\nO número inserido corresponde ao mês de ABRIL. \n\n";
        break;
        case 5:
            print "\nO número inserido corresponde ao mês de MAIO. \n\n";
        break;
        case 6:
            print "\nO número inserido corresponde ao mês de JUNHO. \n\n";
        break;
        case 7:
            print "\nO número inserido corresponde ao mês de JULHO. \n\n";
        break;
        case 8:
            print "\nO número inserido corresponde ao mês de AGOSTO. \n\n";
        break;
        case 9:
            print "\nO número inserido corresponde ao mês de SETEMBRO. \n\n";
        break;
        case 10:
            print "\nO número inserido corresponde ao mês de OUTUBRO. \n\n";
        break;
        case 11:
            print "\nO número inserido corresponde ao mês de NOVEMBRO. \n\n";
        break;
        case 12:
            print "\nO número inserido corresponde ao mês de DEZEMBRO. \n\n";
        break;
        default:
            exit("\n\nNúmero inválido, mês inexistente... \n\n\n");
        break;
    }
}

print "Digite um numero entre 1 e 12, e sera mostrado o mês correspondente: ";
$numeroMes = (float) fgets(STDIN);

$nomeMes = mostrarMes ($numeroMes);
