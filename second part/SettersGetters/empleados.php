<?php
class Empleado extends Persona{
    private $sueldo;

    public function setSueldo($sueldo){
        $this -> sueldo = $sueldo;
    }

    public function getSueldo(){
        return $this -> sueldo;
    }
}
?>