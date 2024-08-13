<?php
echo '<pre>';
// ----+++      Divisible entre 2      +++----
// Crea una función que reciba un número entero como parámetro y 
// devuelva el número de veces que se puede dividir entre 2 sin dejar resto.

echo '<h1> Divisible entre 2 </h1>';
function divisibleEntreDos($n){
    $contador = 0;
    echo "Divisiones: " . '<br>';
    while ($n % 2 === 0){
        echo "$n / 2 = " . ($n / 2) . "<br>";
        $n = $n / 2;
        $contador++;
    }
    // echo 'Numero de divisiones: ' . $contador . '<br>';
    return $contador;
}

$n = 8;
echo '<br>';
echo 'El numero: "' . $n . '" se puede dividir "' . divisibleEntreDos($n) . '" veces';