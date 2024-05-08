<?php

// uso de Setters y Getters
class Persona{
    private $nombre;

    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }

    public function getNombre(){
        return $this -> nombre;
    }
}
?>