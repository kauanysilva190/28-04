<?php

require_once "biblioteca_funcoes.php";
//conversoes

use function converso\dolarParaReal;
use function converso\euroParaReal;
use function converso\pesoParaReal;
use function converso\libraParaReal;
use function converso\ieneParaReal;

//areas

use function geometria\areaQuadrado;
use function geometria\areaRetangulo;
use function geometria\areaTriangulo;
use function geometria\areaCirculo;
use function geometria\areaTrapezio;


echo "\narea do quadrado: ", areaQuadrado(4);

echo "\narea do retangulo: ",  areaRetangulo(8,8);

echo "\narea do triangulo: ", areaTriangulo(9,6);

echo "\narea do circulo: ", areaCirculo(7);

echo "\narea do trapezio: ", areaTrapezio(9,5,8);















?>