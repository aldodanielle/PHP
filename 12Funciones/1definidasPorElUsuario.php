<?php
//          ---+++++     Funciones definidas por el usuario     +++++---

// son bloques de codigo reutilizables que realizan una tarea especifica 
// sintaxis 
function _nombre_fuction($arg1, $arg2, /* ... ,*/ $argN )
{
    echo "Funcion de ejemplo";
    return $valor_devuelto;
}



// Ej 1 -> funciones condicionales
$hace_algo = true;  // si es false no se imprime foo()
// foo ();  // Error por que todavia no existe la funcion 
bar();  // llamamos esta a la funcion aunque todavia NO exista

if($hace_algo){
    function foo()
    {
        echo "No existe haste que la ejecucion del programa llegue hasta mi" . "\n";// se imprime segundo
    }
}

// ahora si se puede llamar a foo()
if($hace_algo) foo();

function bar()
{
    echo "Existo desde del momento que empieza el programa (script)" . "\n";    // se imprime primero
}



// Ej 2 -> funciones dentro de fuciones 
function primeraFuncion()
{
    echo "1° -> Primera Funcion" . "\n";
    function segundaFuncion()
    {
        echo "2° -> Segunda funcion" . "\n";
    }
}

// de esta manera devulve error porque todavia NO existe la segunda funcion
segundaFuncion();
primeraFuncion();

// se esta menra funciona
primeraFuncion();
segundaFuncion();



// Ej 3 -> funcion recursiva
function recursiva($a)
{
    // $a = 10;
    if ($a < 20)
    {
        echo "$a\n";
        recursiva($a + 1);
    }
}
recursiva(15);
?>