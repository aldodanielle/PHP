<?php
// Manipulacion de Tipos

// PHP no requiere la declaracion explicita de variable
// estas se determinan mejor por el contexto por el cual se emplea la variable 

// Ej en '+' si por lo menos un valor es float (0.0) las dos variables se comportarian como float
// y el resultado de igual manera seria float en otro caso si lo valores son integer el resultado de igual 
// forma se manegaria como integer (entero)

$var = "0";     // String ("0")
$var = 2;       // integer (3)
$var += 2;      // integer (2)
$var = $var + 1.5;  // float o double (3.5)


$var = 5 + "9 perritos pequeñitos";     // integer 14 -> por uno de los dos valores es integer y el otro 
$var = 5 + "10 perros pequeños";        // integer 15 -> string pero arroga un error uno de los dos datos es
$var = 5 + "11";                        // integer 16 -> non-numeric y se tendria que poner solo el numero

echo gettype($var);
echo $var;

// Conversion de String a numeros
// esto es un cracteristica/funcion que tiene string en donde el valor esta dado por la parte inicial 
// del string 

$var1 = 3 + "cerditos = 2";
echo gettype($var1 . "\n");     // compilara marcara error porque para la operacion 
echo $var1;                     // toma los primeros valores del string "cerditos"



// some ejmple to use String 

$newVar = 1 + "10.5";                   // $newVar es float (11.5)  -> string 11.5
$newVar = 1 + "-1.3e3";                 // $newVar es float (-1299) -> string -1299
$newVar = 1 + "bob-1.3e3";              // $newVar es integer (1) -> error al sumar
$newVar = 1 + "bob3";                   // $newVar es integer (1) -> error al sumar intger con string
$newVar = 1 + "10 pequeños cerdos";     // $newVar es integer (11) -> string 11
$newVar = 4 + "10.2 pequeños cerditos"; // $newVar es float (14.2) -> string 14.2
$newVar = "10.0 cerdos " + 1;           // $newVar es float (11) -> string 11
$newVar = "10.0 cerdos " + 1.0;         // $newVar es float (11) -> string 11



echo "\$newVar==$newVar; tipo :" . gettype($newVar) . "<br> \n"; // $newVar==5; tipo :integer<br> 
echo gettype($newVar . "\n");
echo $newVar;




// forzado de tipos
// esto sucede cuando en el tipo deseado se describe entre parentesis 
// antes de la variable que se desea forzar

$foo = 10;              // foo es un integer
$bar = (boolean) $foo;  // $bar es un boolean

echo gettype($foo);     // integer
echo $foo;              // 10
echo gettype($bar);     // boolean
echo $bar;              // 1

$foo = (int) $bar;
$foo = ( int ) $bar;    // no importanta los espacios

echo "\n";
echo gettype($foo);     // integer


// forzado de tipos que estan permitidos
$queSoy = 2;
$cadena = (string) $queSoy;
echo gettype($cadena);      // string
// (int), (integer) - forzado a integer
// (bool), (boolean) - forzado a boolean
// (float), (double), (real) - forzado a float
// (string) - forzado a string
// (array) - forzado a array
// (object) - forzado a object
// (unset) - forzado a NULL (PHP 5)
?>