<?php

namespace converso;{

function dolarParaReal($valor, $cotacao){
    return $valor * $cotacao;
    
}

function euroParaReal($valor, $cotacao){ 
    return $valor * $cotacao;

}

function pesoParaReal($valor, $cotacao){
    return $valor * $cotacao;

}

function libraParaReal($valor, $cotacao){
    return $valor * $cotacao;


}

function ieneParaReal($valor, $cotacao){
    return $valor * $cotacao;
 

}

}




namespace geometria;{

    function areaQuadrado($lado){
    return $lado * $lado;
    }

    function areaRetangulo($base, $altura){
        return $base * $altura;
    }

    function areaTriangulo($base, $altura){
        return $base * $altura / 2;
    }

    function areaCirculo($raio){
        return 3.14 * $raio ** 2;
    }

    function areaTrapezio($baseMaior, $baseMenor, $altura){
        return ($baseMaior * $baseMenor) * $altura / 2;
    }

}









