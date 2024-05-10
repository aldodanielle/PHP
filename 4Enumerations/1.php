<?php 
// segun la documentacion su definicion es:
// Las enumeraciones, o “Enums”, en PHP son una capa restrictiva sobre las clases y las constantes de 
// clase, destinadas a proporcionar una forma de definir un conjunto cerrado de posibles valores para un 
// tipo1. Esto puede ser especialmente útil al definir un modelo de dominio, ya que permite "hacer que los 
// estados no válidos no sean representables


// https://www.php.net/manual/es/language.enumerations.php
// https://www.php.net/manual/es/language.types.enumerations.php


// Enumerations -> Enumeradores o enum
// es un tipo de dato especaial que permite un conjunto de valores especificos 
// estos valores son fijos y no cambian durante su ejecucion

enum Estado {
    case Activo;
    case Pendiente;
    case Inactivo;
}

class Tarea {
    public string $nombre;
    public Estado $estado;

    public function __construct(String $nombre, Estado $estado){
        $this -> nombre = $nombre;
        $this -> estado = $estado;
    }
}

$tarea = new Tarea("Tarea 1", Estado::Pendiente);

echo "Tarea '{$tarea->nombre}' su estado es '{$tarea -> estado -> name}' . "




?>