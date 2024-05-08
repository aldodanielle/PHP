<?php
include 'personas.php';
include 'empleados.php';

// creamos un objeto de la clase empleado
$empleado = new Empleado;

// Usamo el Set para establecer un nombre
$empleado -> setNombre("Danielle");

// Usamo el metodo Set para establecer un saldo
$empleado -> setSueldo(55);

// Usamos el metodo Get para obtener el nombre
echo "Nombre: " . $empleado->getNombre() . "\n";

// Usamos el metodo Get para obtener el nombre
echo "Saldo: " . $empleado->getSueldo() . " \n";


?>