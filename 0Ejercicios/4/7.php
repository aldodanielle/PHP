<?php
echo '<pre>';
// ----+++      Numero menor en arreglo      +++----
// Crea una función que reciba un número entero como parámetro y 
// devuelva el número de veces que se puede dividir entre 2 sin dejar resto.

echo '<h1> Numero menor en arreglo </h1>';
function numeroMenor($n){
    return min($n);
}

$array = [78, 55, 6, 17, 10,  7, 69, 150, 202];
print_r ($array);
echo 'El numero menor del arreglo es: "' . numeroMenor($array) . '"';