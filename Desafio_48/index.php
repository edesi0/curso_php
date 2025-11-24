<?php
$arr =["batata","maçã","pera","feijão","arroz"];

echo("array sem alteração ");
print_r($arr);
$removidos  = array_splice($arr,2,2);


echo("<br/> array com alteração >");
print_r($removidos);