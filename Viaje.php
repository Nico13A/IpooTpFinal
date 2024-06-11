<?php

class Viaje {
    private $idviaje;
    private $vdestino;
    private $vcantmaxpasajeros;
    private $objEmpresa;
    private $objResponsable;
    private $vimporte;

    public function __construct() {
        $this->idviaje = 0;
        $this->vdestino = "";
        $this->vcantmaxpasajeros = 0;
        $this->objEmpresa = null;
        $this->objResponsable = null;
        $this->vimporte = 0;
    }

    public function cargar($vdestino, $vcantmaxpasajeros, $objEmpresa, $objResponsable, $vimporte) {
        $this->setVDestino($vdestino);
        $this->setVCantMaxPasajeros($vcantmaxpasajeros);
        $this->setObjEmpresa($objEmpresa);
        $this->setObjResponsable($objResponsable);
        $this->setVImporte($vimporte);
    }

    //GETTERS
    public function getIdViaje() {
        return $this->idviaje;
    }

    public function getVDestino() {
        return $this->vdestino;
    }

    public function getVCantMaxPasajeros() {
        return $this->vcantmaxpasajeros;
    }

    public function getObjEmpresa() {
        return $this->objEmpresa;
    }

    public function getObjResponsable() {
        return $this->objResponsable;
    }

    public function getVImporte() {
        return $this->vimporte;
    }

    //SETTERS
    public function setIdViaje($idviaje) {
        $this->idviaje = $idviaje;
    }

    public function setVDestino($vdestino) {
        $this->vdestino = $vdestino;
    }

    public function setVCantMaxPasajeros($vcantmaxpasajeros) {
        $this->vcantmaxpasajeros = $vcantmaxpasajeros;
    }

    public function setObjEmpresa($objEmpresa) {
        $this->objEmpresa = $objEmpresa;
    }

    public function setObjResponsable($objResponsable) {
        $this->objResponsable = $objResponsable;
    }

    public function setVImporte($vimporte) {
        $this->vimporte = $vimporte;
    }

    public function __toString() {
        return "ID de viaje: " . $this->getIdViaje() . "\nDestino: " . $this->getVDestino() . "\nCantidad máxima de pasajeros: " . $this->getVCantMaxPasajeros() . "\nEmpresa:\n" . $this->getObjEmpresa() . "\nResponsable:\n" . $this->getObjResponsable() . "\nImporte: " . $this->getVImporte() . "\n";
    }
}

?>