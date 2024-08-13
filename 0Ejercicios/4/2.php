<?php

// ----+++      Numero mas grande en Arreglo      +++----
echo '<pre>';


$numMayor = function($n){
    return max($n);
};

$array = [22, 3, 14, 30, 99, 0 , 1000];

print_r($array);
echo 'El numero mayor es: ' .  $numMayor($array); 