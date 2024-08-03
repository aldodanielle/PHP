<?php

// ----+++      Ej 1: Calcula la suma de los primeros 100 números naturales.     +++----

$sum = 0;
for($i = 0; $i <= 100; $i++){
    $sum += $i;
}

echo 'La suma es: ' . $sum;