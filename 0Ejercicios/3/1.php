<?php

// ----+++      Calculadora de edad      +++----

// Crea un script que pida al usuario su fecha de nacimiento y calcule su edad actual.

echo 'Calculo de edad' . "<br>";
echo 'Dame tu fecha de nacimeinto: (dd/mm/yyyy)';
// $fechaNacimiento = trim(fgets(STDIN));
$fechaNacimiento = "10/08/1998";
echo '<br>' . 'Fecha ingresada ' . $fechaNacimiento;

list($dia, $mes, $anos) = explode("/", $fechaNacimiento);

$anoActual = date("Y");
$edad = $anoActual - $anos;

echo "<br>";
echo "Su edad es: " .$edad . " años";
