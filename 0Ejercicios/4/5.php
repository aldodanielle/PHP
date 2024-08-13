<?php
echo '<pre>';
// ----+++      String invertido      +++----
// Función que reciba un arreglo de números enteros como parámetro 
// y devuelva el promedio de los números del arreglo.

echo '<h1> String invertido </h1>';

function invertido($frase){
    return strrev($frase);
}

$frase = 'Tacos de cabeza';
echo 'Esta es la frase original: "' . $frase . '"';
echo '<br>';
echo 'Esta es la frase invertida: "' . invertido($frase) . '"';