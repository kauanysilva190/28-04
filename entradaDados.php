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

$op = "";
$opcoes = "";



while ($opcoes != 4){
    echo "Menu
    Eschola uma das categorias abaixo:
    1 - Conversão
    2 - Geometria
    3 - Saúde
    4 - Sair
    \n";
    $opcoes = readline(">>> ");

    switch ($opcoes){
        case 1:
            echo "Conversão
            Eschola uma das opções abaixo:
            1 - Dolar para Real
            2 - Euro para Real
            3 - Peso para Real
            4 - Libra para Real
            5 - Iene para Real
            \n";
            $op = readline(">>> ");
            switch ($op){
                case 1:
                    $dolar = readline("Valor em dolar: ");
                    echo "Valor em real: ", dolarParaReal($dolar, 5.00, 0);
                    break;
                case 2:
                    $euro = readline("Valor em euro: ");
                    echo "Valor em real: ", euroParaReal($euro, 5.84, 0);
                    break;
                case 3:
                    $peso = readline("Valor em peso: ");
                    echo "Valor em real: ", pesoParaReal($peso, 0.0035, 0);
                    break;
                case 4:
                    $libra = readline("Valor em libra: ");
                    echo "Valor em real: ", libraParaReal($libra, 6.71, 0);
                    break;
                case 5:
                    $iene = readline("Valor em iene: ");
                    echo "Valor em real: ", ieneParaReal($iene, 0.031, 0);
                    break;
                default:
                    echo "Opção inválida!";
            }
            break;
        case 2:
            echo "Geometria
            Eschola uma das opções abaixo:
            1 - Area do quadrado
            2 - Area do retangulo
            3 - Area do triangulo
            4 - Area do circulo
            5 - Area do trapezio
            \n";
            $op = readline(">>> ");
            switch ($op){
                case 1:
                    $lado = readline("Valor do lado: ");
                    echo "Area do quadrado: ", areaQuadrado($lado);
                    break;
                case 2:
                    $base = readline("Valor da base: ");
                    $altura = readline("Valor da altura: ");
                    echo "Area do retangulo: ", areaRetangulo($base, $altura);
                    break;
                case 3:
                    $base = readline("Valor da base: ");
                    $altura = readline("Valor da altura: ");
                    echo "Area do triangulo: ", areaTriangulo($base, $altura);
                    break;
                case 4:
                    $raio = readline("Valor do raio: ");
                    echo "Area do circulo: ", areaCirculo($raio);
                    break;
                case 5:
                    $baseMaior = readline("Valor da base maior: ");
                    $baseMenor = readline("Valor da base menor: ");
                    $altura = readline("Valor da altura: ");
                    echo "Area do trapezio: ", areaTrapezio($baseMaior, $baseMenor, $altura);
                    break;
                default:
                    echo "Opção inválida!";
            }
            break;
        case 3:
            
            echo "Saúde
            Eschola uma das opções abaixo:
            1 - Calcular IMC
            2 - Valor ideal de agua
            3 - Frequencia cardiaca maxima
            4 - Converter libras para kilo
            5 - Calcular calorias basais
            \n";
        

            $op = readline(">>> ");
            switch ($op){
                
                case 1:
                    $peso = readline("Valor do peso: ");
                    $altura = readline("Valor da altura: ");
                    echo "Calcular IMC: ", calcularImc($peso, $altura);
                    break;
                case 2:
                    $peso = readline("Valor do peso: ");
                    echo "Valor ideal de agua: ", valorIdealAgua($peso);
                    break;
                case 3:
                    $idade = readline("Valor da idade: ");
                    echo "Frequencia cardiaca maxima: ", frequenciaCardiacaMaxima($idade);
                    break;
                case 4:
                    $libras = readline("Valor em libras: ");
                    echo "Converter libras para kilo: ", converterLibrasParaQuilo($libras);
                    break;
                case 5:
                    $peso = readline("Valor do peso: ");
                    $idade = readline("Valor da idade: ");
                    $sexo = readline("Valor do sexo (Homem ou Mulher): ");
                    $altura = readline("Valor da altura (em cm): ");
                    echo "Calcular calorias basais: ", calcularCaloriasBasais($peso, $idade, $sexo, $altura);
                    break;
                default:
                    echo "Opção inválida!";
            }
            break;
    }
    


}












?>