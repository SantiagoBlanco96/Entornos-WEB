<?php

require 'libreria1/modulo1/clase.php';

use Libreria1\Modulo1\OtraClase;

$c1 = new OtraClase();
$c1->otroMetodo();

echo '<br>';

use Libreria1\Modulo1\OtraClase as ocl;

$c2 = new ocl();
$c2->otroMetodo();

/*
Apodar constantes y funciones:
use const Libreria1\Modulo1\OtraConstante as oco;
use function Libreria1\Modulo1\OtraFuncion as ofu;
*/
