<?php

class Empresa {
    private $idempresa;
    private $enombre;
    private $edireccion;

    public function __construct() {
        $this->idempresa = 0;
        $this->enombre = "";
        $this->edireccion = "";
    }

    public function cargar($enombre, $edireccion) {
        $this->setENombre($enombre);
        $this->setEDireccion($edireccion);
    }

    //GETTERS
    public function getIdEmpresa() {
        return $this->idempresa;
    }

    public function getENombre() {
        return $this->enombre;
    }

    public function getEDireccion() {
        return $this->edireccion;
    }

    //SETTERS
    public function setIdEmpresa($idempresa) {
        $this->idempresa = $idempresa;
    }

    public function setENombre($enombre) {
        $this->enombre = $enombre;
    }

    public function setEDireccion($edireccion) {
        $this->edireccion = $edireccion;
    }

    public function __toString() {
        return "ID de empresa: " . $this->getIdEmpresa() . "\nNombre: " . $this->getENombre() . "\nDirección: " . $this->getEDireccion() . "\n";
    }
}

?>