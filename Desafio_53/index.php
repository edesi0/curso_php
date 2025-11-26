<?php

function maiorElemento($arr_numeros)
{
    $num_compare = 0;

    foreach ($arr_numeros as $numero) {

        if ($numero > $num_compare) {
            $num_compare = $numero;
        }
    }
    return ($num_compare);
}

$numeros = [1,5,88,75,485,2653,21,24,25];
echo(maiorElemento($numeros));