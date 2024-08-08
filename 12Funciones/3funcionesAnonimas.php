<?php

// ----+++      Funciones Anonimas     +++----

// como su nombre nos los indica son anonimas SIN NOMBRE
// muy utilizada eta funcion para usarla con otas funciones
// para mandar a llamarlo se usa una variable 



// Funcion Normal 
function sumar($arg1, $arg2){
    return $arg1 + $arg2;
}
echo sumar(2,5);        // 7



// Funcion Anonima
$resta = function ($arg1, $arg2){
    return $arg1 - $arg2;
};
echo $resta(10,7);       // 3



// funciones CON fuciones Anonimas
// en este caso usamos una funcion que ya esta implementada dentro del propio PHP
// para incremneetar un en uno el valor
$arrayNumeros = [5,10,15,20,25,30];

$incremento = array_map(function($n){
    return $n + 1; 
}, $arrayNumeros);
echo "<pre>";
var_dump ($incremento);     // 6, 11, 16, 21, 26, 31



// Ejemplo 2
// buscaremos los multiplos en una sier de datos datos
// en una funcion ya implementada en PHP
$datos = [3, 6, 10, 33, 1, 77, 79, 80, 125];

$multiplos = array_filter($datos, function ($n){
    return $n % 5 == 0;
});
print_r ($multiplos);       // 10, 80, 125