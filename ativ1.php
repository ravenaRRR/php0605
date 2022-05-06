<?php

$nome = $_GET['nome'];
$salario = $_GET['salario'];
$aumento = $_GET['aumento'];


switch($aumento){


    case 0:
        echo  "Aumento de 0%, a diferença é de 0", 
        "<br>";
        echo "seu novo salário é de ", $salario+$salario * ($aumento/100);
        break;


    case 10:
            echo  "Aumento de 10%, a diferença é de ",  $salario*($aumento/100), 
            "<br>";
            echo "seu novo salário é de ", $salario+$salario * ($aumento/100);
            break;

    case 25:
            echo  "Aumento de 25%, a diferença é de ",  $salario*($aumento/100), 
            "<br>";
            echo "seu novo salário é de ", $salario+$salario * ($aumento/100);
            break;

    case 33:
            echo  "Aumento de 33%, a diferença é de ",  $salario*($aumento/100), 
            "<br>";
             echo "seu novo salário é de ", $salario+$salario * ($aumento/100);
             break;

    case 41:
             echo  "Aumento de 41%, a diferença é de ",  $salario*($aumento/100), 
             "<br>";
             echo "seu novo salário é de ", $salario+$salario * ($aumento/100);
             break;

    case 50: 
             echo  "Aumento de 50%, a diferença é de ",  $salario*($aumento/100), 
             "<br>";
             echo "seu novo salário é de ", $salario+$salario * ($aumento/100);
             break;

}



