<?php
$nome = "Edésio";
$idade = 37;
$peso = "90 kg";
$altura = 1.85;


$arr_pessoa = compact("nome","idade","peso","altura");


foreach($arr_pessoa as $caracteristicas=>$value){
   echo("$caracteristicas:$value <br/>");
}