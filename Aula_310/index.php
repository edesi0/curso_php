<?php

$conn = new mysqli("localhost","root","","zeus");

if($conn->connect_errno){
    echo("Erro: ".$conn->connect_error);

}
