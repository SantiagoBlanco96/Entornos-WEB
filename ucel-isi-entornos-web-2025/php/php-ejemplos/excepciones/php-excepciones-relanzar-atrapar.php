<?php

try {
    require 'php-excepciones-relanzar.php';
} catch (Exception $e) {
    echo 'Mensaje: ', $e->getMessage(), '<br>';
    echo 'Código: ', $e->getCode(), '<br>';
    echo 'Arcihvo: ', $e->getFile(), '<br>';
    echo 'Línea: ', $e->getLine(), '<br>';
    echo 'Seguimiento (array): ', var_dump($e->getTrace()), '<br>';
    echo 'To string: ', $e->__toString(), '<br>';
}
