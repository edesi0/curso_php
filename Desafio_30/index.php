<?php
$array_numeros = [];


for ($i=0;$i<=20;$i++){
    $array_numeros[$i]= $i;
}

for ($y=0;$y<=count($array_numeros)-1;$y++){
  
    if ($array_numeros[$y] % 2 == 0){
         echo("$array_numeros[$y] <br/>");
    }
 
}


$array_numeros = [];

for($i = 0;$i<=10;$i++){
array_push($array_numeros,$i);
}

print_r($array_numeros);