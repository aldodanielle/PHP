<?php
//listas
$entero = 8;
$duble = 8.02;
$boolean = true;
$string = "Cadena de texto";

$varLista = [$entero, $double, $boolean, $string];
echo gettype($varLista);    //array
echo $varLista[0];      // 8
echo $varLista[3];      // Cadena de texto

// añadimos un nuevo elemento al array
$nuevoElemento = 'Carne Asada';
array_push($varLista, $nuevoElemento); 
echo $varLista;
?>