<?php

class Humano
{
    public $nome;
    public $idade;

    function falar()
    {
        return ("esta dizendo");
    }

}

class Professor extends Humano
{
    public $tipo_professor;

    function professor_falando($falando)
    {
        echo (" O professor de ".$this->tipo_professor. " de nome $this->nome " . $this->falar() . "que sua idade é " . $this->idade . " e que $falando");
    }
}

$professor = new Professor();

$professor->nome = "Edésio";
$professor->idade=36;
$professor->tipo_professor ="Informatica";
$professor->professor_falando(" quero ganhar dinheiro com essa profissão é possivel?");