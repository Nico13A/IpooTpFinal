<?php

class Pasajero extends Persona {
    private $nropasaje;
    private $objViaje;

    public function __construct() {
        parent::__construct();
        $this->nropasaje = 0;
        $this->objViaje = null;
    }

    public function cargar($nroDoc, $nombre, $apellido, $telefono, $nroPasaje = null, $objViaje = null) {
        parent::cargar($nroDoc, $nombre, $apellido, $telefono);
        $this->setNroPasaje($nroPasaje);
        $this->setObjViaje($objViaje);
    }

    //GETTERS
    public function getNroPasaje()
    {
        return $this->nropasaje;
    }
    public function getObjViaje()
    {
        return $this->objViaje;
    }

    //SETTERS
    public function setNroPasaje($nroPasaje)
    {
        $this->nropasaje = $nroPasaje;
    }
    public function setObjViaje($objViaje)
    {
        $this->objViaje = $objViaje;
    }

    public function __toString()
    {
        $cadena = parent::__toString();
        $cadena .= "Número de pasaje: " . $this->getNroPasaje() . "\nInformación del pasaje:\n" . $this->getObjViaje();
        return $cadena;
    }

}

?>