<?php
$str = "O rato roeu a roupa do rei de Roma";
$result = 0;

for ($i = 0; $i < strlen($str); $i++) {
    if(strtolower($str[$i]) =='a'){
      $result+=1;
    }
}

echo("Há $result letras A nesta string");
