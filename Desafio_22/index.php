<?php

function compararNumeros($num1,$num2){
    
    if($num1>$num2){
        return("O primeiro número é maior");
        
    }elseif ($num2>$num1) {
        return("O segundo número  é maior");
    }elseif ($num1=$num2){
        return("Os números são iguais");
    }
}
    
   echo(compararNumeros(7,1));



