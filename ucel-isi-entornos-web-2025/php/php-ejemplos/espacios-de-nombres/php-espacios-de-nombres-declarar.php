<?php

require 'libreria1/constante.php';
require 'libreria1/funcion.php';
require 'libreria1/clase.php';
require 'libreria2/constante.php';
require 'libreria2/funcion.php';
require 'libreria2/clase.php';

echo Libreria1\MICONSTANTE, '<br>';
Libreria1\miFuncion();
$c1 = new Libreria1\MiClase();
$c1->miMetodo();

echo '<br>';

echo Libreria2\MICONSTANTE, '<br>';
Libreria2\miFuncion();
$c2 = new Libreria2\MiClase();
$c2->miMetodo();
