<?php
$array_mult = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

$i = 0;
$j = 0;

for ($i=0;$i<count($array_mult);$i++){
    echo("Array $i <br/>");
    echo("Quantidade de arrays ".count($array_mult)."<br/>");
$array_interno = $array_mult[$i];

    for($j=0;$j<count($array_interno);$j++){
        echo("Valor: $array_interno[$j] <br/>");
    }
  
   if (!($i ===count($array_mult)-1)){
    echo("<br/>Mudando de array<br/>");
   }
}