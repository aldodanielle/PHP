<?php

// ----+++      Verificador de palíndromo      +++----

// script para verifique si una palabra o frase es un palíndromo

function esPalíndromo($cadena){
    $cadena = strtolower($cadena);
    $cadena = preg_replace('/\W/', '', $cadena);
    $reversa =strrev($cadena);
    return $cadena === $reversa;
}



$palabra = 'Hannah ese es mi nombre';
echo '<br> La siguiente palabras: ' . $palabra . ' ';

echo '<pre>';
if(esPalíndromo($palabra)){
    echo ' ' . ' es Palidromo';
}else{
    echo ' NO es palidromo';
}