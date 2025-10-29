<?php
$arr = ['A',1,'B',2,5,'C','D'];

$x = count($arr);
$y = 0;

while ($y<$x){
    
    if (is_string($arr[$y])){
        echo($arr[$y]);
    }
    $y++;

}