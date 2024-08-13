<?php
echo '<pre>';
// ----+++      Numero de palabras en String      +++----
// Crea una función que reciba un string como parámetro y 
// devuelva el número de palabras que contiene el string.

echo '<h1> Numero de palabras en String </h1>';
function numeroPalabras($frase){
    $minuscula = strtolower($frase);
    $palabras = explode(' ', $minuscula);
    return count($palabras);
}

$frase ='  En asuntos de amor los locos son los que tienen más experiencia. 
    De amor no preguntes nunca a los cuerdos; los cuerdos aman cuerdamente, que es como no haber amado nunca.';

echo 'La siguiete frase: ' . '<br>' . '"' . $frase  .'"' . '<br>' . 'tiene: "' . numeroPalabras($frase) . '" palabras'; 