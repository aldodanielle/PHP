<?php

// ----+++      Cantidad de digitos      +++----

// se crea una funcion que reciba un numero entero y cuente la cantidad de digitos que lo componen
echo '<pre>';

function cantidadDigitos($n){
    return strlen($n);
}

$num = 999;
echo 'El numero: ' . $num . ' tiene '. cantidadDigitos($num) . ' digitos ';