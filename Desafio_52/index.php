<?php

function somaElementos($num_1,$num_2){
    return ($num_1+$num_2);
}

$arr_numero = [1,2,3,4,5];
echo(array_reduce($arr_numero,"somaElementos"));
