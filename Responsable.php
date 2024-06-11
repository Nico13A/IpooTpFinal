<?php

class Responsable extends Persona {
    private $rnumeroempleado;
    private $rnumerolicencia;

    public function __construct() {
        parent::__construct();
        $this->rnumeroempleado = 0;
        $this->rnumerolicencia = "";
    }

    public function cargar($nroDoc, $nombre, $apellido, $telefono, $numEmpleado = null, $numLicencia = null) {
        parent::cargar($nroDoc, $nombre, $apellido, $telefono);
        $this->setRNumeroEmpleado($numEmpleado);
        $this->setRNumeroLicencia($numLicencia);
    }

    //GETTERS
    public function getRNumeroEmpleado()
    {
        return $this->rnumeroempleado;
    }
    public function getRNumeroLicencia()
    {
        return $this->rnumerolicencia;
    }

    //SETTERS
    public function setRNumeroEmpleado($rNumeroEmpleado)
    {
        $this->rnumeroempleado = $rNumeroEmpleado;
    }
    public function setRNumeroLicencia($rNumeroLicencia)
    {
        $this->rnumerolicencia = $rNumeroLicencia;
    }

    public function __toString()
    {
        $cadena = parent::__toString();
        $cadena .= "Número de empleado: " . $this->getRNumeroEmpleado() . "\nNúmero de licencia: " . $this->getRNumeroLicencia() . "\n";
        return $cadena;
    }

}

?>