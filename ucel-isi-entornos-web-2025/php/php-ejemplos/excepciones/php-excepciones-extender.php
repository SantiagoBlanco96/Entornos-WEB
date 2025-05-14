<?php

require 'php-excepciones-extender-miexcepcion.php';

try {
    $nombre = '';

    if (empty($nombre)) {
        throw new MiExcepcion('Debe completar el campo Nombre.');
    }

    echo 'El campo Nombre es válido.', '<br>';
} catch (MiExcepcion $e) {
    echo $e->getMiMensaje(), '<br>';
} catch (Exception $e) {
    echo $e->getMessage(), '<br>';
}
