<?php

class MiExcepcion extends Exception
{
    public function getMiMensaje()
    {
        echo 'Mensaje personalizado: ', $this->getMessage();
    }

    // public function getMessage() {  // Error fatal al sobreescribir
        // return 'Mensaje personalizado: ' . $this->getMessage();
    // }

    public function __toString()
    {
        return __CLASS__;
    }
}
