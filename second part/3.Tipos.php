<?php
//                          TIPOS DE DATOS

// null, bool, int
// float (tambien como double)
// string, array, object 
// callable, resource 


$salto = '<br>';

$varNulo = null;
$varBool = true;
$varInt = 12;
$varFloat = 1.2;
$varstring = 'Maximo Decimo Meridio';
$varArray = [
    'apple' => 'Manzana',
    'banana' => 'Platano',
    ];
    
// Object player(){
//     'name' -> 'Maximo',
//     'age' -> 26
// }

$varCallable;
$varResource;

echo gettype(($varCallable));
?>