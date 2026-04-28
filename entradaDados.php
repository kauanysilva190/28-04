<?php

require_once "biblioteca_funcoes.php";

use function converso\dolarParaReal;
use function converso\euroParaReal;
use function converso\pesoParaReal;
use function converso\libraParaReal;
use function converso\ieneParaReal;

echo "Dolar para Real: ", dolarParaReal(10, 5), "\n";

echo "EuroParaReal: ", euroParaReal(10, 5.82), "\n";

echo "PesoParaReal: ", pesoParaReal(10, 0.0035 ), "\n";

echo "libraParaReal ", libraParaReal(10, 6.74), "\n";

echo "ieneParaReal: ", ieneParaReal(10, 0.031), "\n";


?>