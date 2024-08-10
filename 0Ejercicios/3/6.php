<?php

// ----+++      Buscador de palabras      +++----

// Busqueda una palabra específica en un texto y devuelva la posición en la que se encuentra.

function findWord($texto, $palabra){
    $PALABRAS = explode(' ', $texto);
    foreach($PALABRAS as $i => $w){
        if(strtolower($w) === strtolower($palabra)){
            return $i + 1;
        }
    }
    return -1;
}

$texto = "Si te caes siete veces, levántate ocho.";
$palabra = "caes";
$posicion = findWord($texto, $palabra);

if ($posicion !== -1) {
    echo "La palabra \"$palabra\" se encuentra en la posición $posicion.";
} else {
    echo "La palabra \"$palabra\" no se encuentra.";
}