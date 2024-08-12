<?php

// ----+++      Generador de numeros Primos      +++----

// crea un script que que genere los primeros 10 numero primos
echo 'Numeros primos' . '<br>';
echo 'Lo primeros 10 numeros son: ' . '<br>';

function esPrimo($num){
    if($num <= 1){
        return false;
    }
    for($i = 2; $i <= sqrt($num); $i++){
        if($num % $i === 0){
            return false;
        }
    }
    return true;
}

$primos = [];
$contador = 0;
$num = 2;

while ($contador < 10){
    if(esPrimo($num)){
        $primos[] = $num;
        $contador++;
    }
    $num++;
}

echo '<pre>';
print_r ($primos);