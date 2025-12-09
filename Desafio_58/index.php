<?php

class Carro
{

    //propriedades
    public $velocidade_maxia = 0;
    public $nome;

    //metodos

    function set_velocidade_maxima($velocidade_maxia)
    {
        $this->velocidade_maxia = $velocidade_maxia;
    }

    function get_velocidade_maxima()
    {
        return ($this->velocidade_maxia);
    }
}

$gol = new Carro();
$polo = new Carro();

$gol->set_velocidade_maxima(120);
$gol->nome = "Gol";

$polo->set_velocidade_maxima(160);
$polo->nome = "Polo";


echo ("A velocidade maxima do maximo do carro $gol->nome é ".$gol->get_velocidade_maxima()."<br/>");

echo ("A velocidade maxima do maximo do carro $polo->nome é ".$polo->get_velocidade_maxima()."<br/>");


