<?php 

/**
 * Excepción personalizada para el envío del estado
 */
class ExcepcionAPI extends Exception
{
    public $estado;

    public function __construct($estado, $mensaje, $codigo = 400)
    {
        $this->estado = $estado;
        $this->message = $mensaje;
        $this->code = $codigo;
    }

}
?>