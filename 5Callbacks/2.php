<?php
// las funciones callbacks 
// son una forma de asegurarmos de que
// un determinado codigo no se ejecuta hasta que otro codigo alla finalizado su ejecucion 
// es decir nuestro codigo se ejecuta de arriba asi bajo



// EJ
// retrollamada haciendo un cierre

// nuestro cierre
$doble = function ($a){
    return $a * 2;
};

// rango de nuemeros 
$numbers = range(1, 5);

// Usar el cierre como llamada de retorno para
// doblar el valor de cada elemento de nuestro
// rango
$newNumbers = array_map($doble, $numbers);
print implode(' ', $newNumbers);


// Nota:

// Las funciones de retorno de llamada que se registran con funciones como call_user_func() y 
// call_user_func_array() no se llamarán si se produce una excepción en la función de retorno previa.

?>