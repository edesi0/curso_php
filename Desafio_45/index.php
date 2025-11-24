<?php
$arr_number = range(10, 45);

for ($i = 0; $i < count($arr_number); $i++) {
    
    $soma = $arr_number[$i] + 6;

    if ($soma > 30) {
        echo ("Este nnúermo e maior que 30 :");
    }
    echo (" o numero é $arr_number[$i] e a som é $soma <br/>");
}
