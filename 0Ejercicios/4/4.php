<?php
echo '<pre>';
// ----+++      Promedio de numeros en arreglo      +++----
// Función que reciba un arreglo de números enteros como parámetro 
// y devuelva el promedio de los números del arreglo.


echo '<h1> Promedio en arreglo </h1>';
function promedio($valores){
    $sum = array_sum($valores);
    $toalDatos = count($valores);

    return $promedio = $sum / $toalDatos; 
}

echo '<br>';
$array = [10, 8, 9, 6, 5, 5, 9, 7, 9, 8];
print_r ($array);
echo 'El promedio de el arreglo es: ' . promedio($array);