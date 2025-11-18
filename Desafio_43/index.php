<?php
$frase = "carro-navio-helicoptero-barco-jangada";
$frase_array = explode("-",$frase);

print_r($frase_array);

foreach($frase_array as $item){
 echo("$item <br/>");
}