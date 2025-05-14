<?php

require 'php-excepciones-extender-miexcepcion.php';

try {
    $nombre = '';

    if (empty($nombre)) {
        throw new MiExcepcion('Debe completar el campo Nombre.', 1234);
    }

    echo 'El campo Nombre es válido.', '<br>';
} catch (MiExcepcion $e) {
    throw $e;
}
