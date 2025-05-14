<?php

try {
    $nombre = '';

    if (empty($nombre)) {
        throw new Exception('Debe completar el campo Nombre.');
    }

    echo 'El campo Nombre es válido.', '<br>';
} catch (Exception $e) {
    echo $e->getMessage(), '<br>';
}

echo 'Sigue...', '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

try {
    $apellido = '';
  
    if (empty($apellido)) {
        throw new Exception('Debe completar el campo Apellido.');
    }
  
    echo 'El campo Apellido es válido.', '<br>';
} catch (Exception $e) {
    echo $e->getMessage(), '<br>';
} finally {
    echo 'Realiza algo al final.', '<br>';
}

echo 'Sigue...', '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

function validarDireccion($direccion)
{
    try {
        if (empty($direccion)) {
            throw new Exception('Debe completar el campo Dirección.');
        }

        return 'El campo Dirección es válido.';
    } catch (Exception $e) {
        return $e->getMessage();
    } finally {
        return 'Realiza algo al final.';
    }
}

echo validarDireccion(''), '<br>';

//--------------------------------------------------------------------
echo '<hr>'; // Separador
//--------------------------------------------------------------------

try {
    $telefono = '';

    if (empty($telefono)) {
        throw new Exception('Debe completar el campo Teléfono.', 1234);
    }
  
    echo 'El campo Teléfono es válido.', '<br>';
} catch (Exception $e) {
    echo 'Mensaje: ', $e->getMessage(), '<br>';
    echo 'Código: ', $e->getCode(), '<br>';
    echo 'Archivo: ', $e->getFile(), '<br>';
    echo 'Línea: ', $e->getLine(), '<br>';
    echo 'Seguimiento (array): ', var_dump($e->getTrace()), '<br>';
    echo 'To string: ', $e->__toString(), '<br>';
}
