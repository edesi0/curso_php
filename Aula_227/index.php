<?php

class User
{

    //metodos

    function falar()
    {

        echo ("OLa meu nome é objeto, que vim de uma classe");
    }
}

$edesio = new User();
$edesio->falar();