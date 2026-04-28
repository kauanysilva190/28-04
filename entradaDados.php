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


//saude

use function saude\calcularIMC;
use function saude\ValorIdealAgua;
use function saude\frequenciaCardiacaMaxima;
use function saude\converterLibrasParaQuilo;
use function saude\calcularCaloriasBasais;

echo "\nO seu valor do seu IMC é: ", calcularimc(90, 1, 96);

echo "\nA sua quantidade miníma de água é de: ", ValorIdealAgua(90);

echo "\nA sua frequência cardíaca máxima é: ", frequenciaCardiacaMaxima(17);

echo "\nO seu peso de libras para quilos é: ", converterLibrasParaQuilo(198.416);

echo "\nA suas basais é de: ", calcularCaloriasBasais(90, 17, "masculino", 1,96);













?>