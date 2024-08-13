<?php
echo '<pre>';
// ----+++      Apariciones en un string      +++----
// Crea una función que reciba un string como parámetro y devuelva el número de veces 
// que aparece la letra "a" en el string.

echo '<h1> Apariciones en un string </h1>';
function numVecesQueAparece($frase, $letra){
    // return strpos($frase, $letra);
    return  substr_count(strtolower($frase), $letra);
}

echo '<br>';
$frase = 'Ryan Gosling';
$letra = 'n';
echo 'La letra "' . $letra . '" aparece ' . 
        numVecesQueAparece($frase, $letra) . ' veces en la frase "' . $frase . '"';