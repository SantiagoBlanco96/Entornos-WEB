<?php

namespace Libreria4;

const MICONSTANTE = 4;

require 'libreria1/constante.php';
require 'libreria1/funcion.php';
require 'libreria1/clase.php';
require 'libreria2/constante.php';
require 'libreria2/funcion.php';
require 'libreria2/clase.php';
require 'libreria3/funcion.php';

echo __NAMESPACE__, '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

echo var_dump(defined('MICONSTANTE')), '<br>';
echo var_dump(defined('libreria1\MICONSTANTE')), '<br>';
echo var_dump(defined('libreria2\MICONSTANTE')), '<br>';
echo var_dump(defined('libreria3\MICONSTANTE')), '<br>';
echo var_dump(defined('libreria4\MICONSTANTE')), '<br>';
$constantes = get_defined_constants(true);
echo print_r($constantes['user'], true), '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

echo var_dump(function_exists('MiFuncion')), '<br>';
echo var_dump(function_exists('libreria1\MiFuncion')), '<br>';
echo var_dump(function_exists('libreria2\MiFuncion')), '<br>';
echo var_dump(function_exists('libreria3\date')), '<br>';
echo var_dump(function_exists('date')), '<br>';
$funciones = get_defined_functions();
echo print_r($funciones['user'], true), '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

echo var_dump(class_exists('MiClase')), '<br>';
echo var_dump(class_exists('libreria1\MiClase')), '<br>';
echo var_dump(class_exists('libreria2\MiClase')), '<br>';
$clases = get_declared_classes();
echo print_r($clases, true), '<br>';
