<?php

function encontrarPares($arr_numeros)
{
    $num_compare = [];

    foreach ($arr_numeros as $numero) {

        if ($numero % 2 === 0) {
           array_push($num_compare,$numero);
        }
    }
    return ($num_compare);
}

$numeros = [1,5,88,75,485,2653,21,24,25];
print_r(encontrarPares($numeros));