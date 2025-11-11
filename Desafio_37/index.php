<?php
function sumEvenNumbers($num){
    $pair_numbers = [];

    for ($i = 1; $i <= $num; $i++) {

        if ($i % 2 == 0) {
            array_push($pair_numbers, $i);
        }
     
    }
       return ($pair_numbers);
}

$numeros = sumEvenNumbers(12);

foreach ($numeros as $pair) {
    echo ("O $pair e par <br/>");
}
