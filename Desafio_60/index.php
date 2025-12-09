<?php

class Cachorro {

    //propriedades
    private $cor;
    private $peso;
    private $raca;

    //constructor
    function __construct($cor,$peso,$raca){
        $this->cor = $cor;
        $this->peso = $peso;
        $this->raca = $raca;

    }

    public function descreve_cachorro(){
        echo(" Este cachorro é da raça: ".$this->raca .", atualmente esta com peso de: ".$this->peso." kg e é da cor: ".$this->cor );
    }
}

$cachorro = new Cachorro("branco e preto",35,"Husk");

$cachorro->descreve_cachorro();

