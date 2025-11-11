<?php 

function check_value($array_number){
 $array_7 =[];

    for($i=0;$i<count($array_number)-1;$i++){  
     
        if($array_number[$i]>7){
           array_push($array_7,$array_number[$i]);
        }    
    }

     return($array_7);

}


$array_number = [1,2,3,4,5,6,7,8,9,10,11,12];
$array_valores = check_value($array_number);


foreach($array_valores  as $number ){
    echo("$number é maior que 7 <br/>");

}