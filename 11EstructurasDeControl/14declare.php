<?php
//          ---+++++     Declare     +++++---
// 
// usado para fijar directivas de ejecucion para bloqueo de codigo
// la sintaxis es igual al de otros contructores de control de flujo

// esto es valido
declare(ticks = 1);

// Esto no es valido
const TICK_VALUE = 1;
declare(ticks = TICK_VALUE);



// tambien utilizado para el alcance global
declare(tick = 1 ){
    // aqui va un script
}

// esto es lo mismo que lo de arriba
declare(tick = 1);
// aqui va un script





//          ---+++++     Ticks     +++++---
// es un evento que ocurre para cada sentencia tickable N de bajo nivel de ejecucion dentro del bolque

// Ej 1 de uso de ticks
declare( ticks = 1);

// Una funcion llamada en cada evento tick
function tick_handler(){
    echo "tick_handler() Llamado" . "\n" . $a++;
}

register_tick_function('tick_handler');

$a = 1;

if($a > 0){
    $a += 2;
    print($a . "\n");
}


// Ej 1 de uso de ticks
function tick_handlerr()
{
    echo "tick_handlerr llamado \n";
}
$a = 1;
tick_handlerr();
if($a < 0){
    $a += 2;
    tick_handlerr();
    print($a);
    tick_handlerr();
}
tick_handlerr();




//          ---+++++     encodig     +++++---
// Una codificación de script puede ser especificada para cada script usando la directiva encoding.
// investigar mas sobre este tema
declare(encoding = 'ISO-8859-1'){
    echo encoding;
}
// aqui el codigo
?>