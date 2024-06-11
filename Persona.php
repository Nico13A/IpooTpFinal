<?php

class Persona {
    private $nrodoc;
    private $nombre;
    private $apellido;
    private $telefono;

    public function __construct() {
        $this->nrodoc = "";
        $this->nombre = "";
        $this->apellido = "";
        $this->telefono = "";
    }

    public function cargar($nroDoc, $nombre, $apellido, $telefono) {
        $this->setNrodoc($nroDoc);
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setTelefono($telefono);
    }

    //GETTERS
    public function getNrodoc()
    {
        return $this->nrodoc;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }

    //SETTERS
    public function setNrodoc($nroDoc)
    {
        $this->nrodoc = $nroDoc;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function __toString()
    {
        return "DNI: " . $this->getNrodoc() . "\nNombre: " . $this->getNombre() . " " . $this->getApellido() . "\nTeléfono: " . $this->getTelefono() . "\n";
    }
}

/*
$objPersona = new Persona("41050862", "Nicolas", "Antinao", "+54 9 2996571810");
echo $objPersona;
*/

?>