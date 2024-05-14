<?php

// las variables se representan por $nombre 
// son estas son sencibles a mayusculas y minusculas (no son iguales incluso si tiene el mismo nombre)

$var1 = "Aldo";
$VAR1 = "aldo";
$this;          // variable especial que no puede ser utilizada o asignada

echo $var1 . $VAR1;     // Aldo aldo



// usos de la variables
$var = 'Daniel';
$var1 = 'Lara';

echo "$var, $var1";     // Daniel, Lara

$4You = 'For You';      // Invalido -> empieza con un numero -> 
$_4You = 'For You';     // Valido -> empieza con un guion Bajo -> 'For You'
$täyte = 'mansikka';    // Valido la letra 'ä' pertenece al codigo ASCII

echo $täyte;



$name = 'Daniel';
$referencia = &$name;
$referencia = "Mi nombre es $referencia";   // modifica $referencia ...
echo $referencia;         // Mi nombre es Daniel
echo "\n";
echo $name;     // Mi nombre es Daniel -> modica $name



// a tener en cuenta 
// Solo las variables con nombre pueden ser asignada por referencia
$foo = 25;
$bar = &$foo;       // valido -> hace referencia una variable
$bar = &(24 * 7);   // invalido -> hace referencia a una expresion

function test(){
    return 25;
}

$bar = &test();     // invalido -> hace referencia a una funcion

echo $bar;




//-------------------------- Valores predeterminados en variables sin inicializar
// Una variable no definida Y no referenciada (sin contexto de uso);
var_dump($varialbe_indefinida);     // NULL

// Uso booleano; imprime 'false' (Con operadore ternario)
echo ($bolean_indefinido ? "true\n" : "false\n")

// Uso de una cadena; imprime 'string(3) "abc"'
$cadena_indefinida .= 'abc';
var_dump($cadena_indefinida);

// Uso de un entero; imprime 'int(25)'
$int_indefinido += 25;      // 0 + 25 => 25
var_dump($int_indefinido);

// Uso de flotante/doble; imprime 'float(1.25)'
$float_indefinido += 1.25;
var_dump($float_indefinido);

// Uso de array; imprime array(1) {  [3]=>  string(3) "def" }
$array_indefinida[3] = "def";    // array() + array(3 => "def") => array(3 => "def")
var_dump($array_indefinida);

// Uso de objetos; crea un nuevo objeto stdClass (vea http://www.php.net/manual/en/reserved.classes.php)
// Imprime: object(stdClass)#1 (1) {  ["foo"]=>  string(3) "bar" }
$objeto_indefinido->foo = 'bar';
var_dump($objeto_indefinido);



?>