<?php

function Sumar($a,$b){
    echo $a+$b;
}
function Restar($a,$b){
    echo $a-$b;
}
function Multiplicar($a,$b){
    echo $a*$b;
}
function Dividir($a,$b){
    echo $a/$b;
}


$a= $_POST["num1"];
$b= $_POST["num2"];


switch ($_POST["operacion"]) {
    case 'sumar':
         echo Sumar($a,$b) ;
        break;
    case 'restar':
            echo Restar($a,$b) ;
           break;
    case 'div':
            echo Dividir($a,$b) ;
           break;
    case 'mult':
            echo Multiplicar($a,$b) ;
           break;
     
     default:
       echo "ingrese valores";
        break;
    }



