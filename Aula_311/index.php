<?php

$conn = new mysqli("localhost","root","","zeus");
$sql = "select * from clientes";
$result="";

if($conn->connect_errno){
    echo("Erro: ".$conn->connect_error);
}



$result = $conn->query($sql);
print_r($result);

$conn->close();

