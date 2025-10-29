<?php
$array = [];
$valor_array = 10;
$i=0;

while ($valor_array <= 100) {

    if ($valor_array ==30 || $valor_array == 40){
         $valor_array += 10;
        continue;
    }
    $array[count($array) - 1] = $valor_array;
    $valor_array += 10;
}

while($i<(count($array)-1)){
 echo("$array[$i] <br/>");
 $i++;
}
