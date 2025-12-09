<?php

class Cachorro{

function latir(){
    echo("Latindo <br/>");
}

function andar(){
    echo("Andando <br/>");
}
}

$buldog = new Cachorro();
$husk = new Cachorro();

$buldog->andar();
$husk->latir();