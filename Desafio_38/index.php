<?php 

$lista_supermercado = ["Cerveja","Sal","Legumes"];

function listarMercadorias($lista){
    $return = "Voce levou as seguintes mercadorias: ";

    for($i=0;$i<count($lista);$i++){
       
        if($i+1<>count($lista)){
             $return.=$lista[$i].",";
        }
        else{
        $return.=$lista[$i].".";
        }
    }

    return($return);
}

echo(listarMercadorias($lista_supermercado));