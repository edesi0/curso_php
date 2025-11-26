<?php

function ordenarNumeros($arr_numeros)
{
    sort($arr_numeros);
}

$numeros = [1,5,88,75,485,2653,21,24,25];
ordenarNumeros($numeros);
print_r(($numeros));
echo("<br/>");


$numeros2 = [1,5,88,75,485,2653,21,24,25];
ordenarNumeros($numeros2);
print_r(($numeros2));