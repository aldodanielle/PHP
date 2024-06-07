<?php
//          ---+++++     Argumentos de Funciones     +++++---

// cualquier informacion puede ser pasada a las funciones mediante la lista de argumentos
// la cual es una lista de expresiones delimitadas por comas 
// lo argumentos son evaluados de izquierda a derecha

// EJ 1 -> Pasar de arrays a funciones 
function tomar_array($entrada)
{
    echo "$entrada[0] + $entrada[1] = ". $entrada[1]+$entrada[0];
}


// EJ 2 -> Paso de parametros de una funcion por referencia
function anadir_algo(&$cadena)
{
    $cadena .= " Y algo mas ";
}
$cad = " Esto es una cadena, ";
anadir_algo($cad);
echo $cad;      // Esto es una cadena,  Y algo mas 


// EJ 3 -> uso de paramentros predeterminados en funcion
function hacer_cafe($tipo = 'capuchino')
{
    return "Hacer una taza de $tipo. \n";
}
echo hacer_cafe();              // Hacer una taza de capuchino. 
echo hacer_cafe(null);          // Hacer una taza de .
echo hacer_cafe("expresso");    // Hacer una taza de expresso.


// EJ 4 -> Usar tipos NO escalares como valores predeterminados
function hacer_cafe2($tipos = array("capuchino"), $fabricateCafe = NULL)
{
    $aparato = is_null($fabricateCafe) ? "las manos" : "$fabricateCafe";
    return "Hacer una taza de " .join(", ", $tipos). " con $aparato \n";
}
echo hacer_cafe2();     // Hacer una taza de capuchino con las manos 
echo hacer_cafe2(array("capuchino", "lavazza"), "una tetera");  // Hacer una taza de capuchino, lavazza con una tetera 
echo hacer_cafe2(array("capuchino", "lavazza"),);  // Hacer una taza de capuchino, lavazza con las manos 


// EJ 5 -> Uso INCORRECTO de argumentos predeterminados en una función
function hacer_yogurt($tipo = 'acidofilo', $sabor)
{
    return "Hacer una taza de yogut $tipo de $sabor";
}
echo hacer_yogurt("Fresa");     // NO FUNCIONA


// EJ 6 -> Correccion del ejecicio anterior
function hacer_yogurt2($sabor, $tipo = 'acidofilo')
{
    return "Hacer una taza de yogut $tipo de $sabor.";
}
echo hacer_yogurt2("Fresa");    // Hacer una taza de yogut acidofilo de Fresa



//          ---+++++     Declaraciones de Tipo     +++++---
// EJ 7 -> Declaracion basica de tipo clase
Class C{}
class D extends C{}

//No extiende a C
class E{}   
function f(C $c){
    echo get_class($c) . "\n";
}
f(new C);   // C
f(new D);   // D
f(new E);   // Fatal error: Uncaught...


// EJ 8 -> Declaracion basica de tipo interfaz 
interface I { public function f(); }
class C implements I { public function f() {}}

// Esta NO implementa I
class E{}

function f ( I $i ){
    echo get_class($i) . "\n";
}

f(new C);   // C
f(new E);   // fatal error: 


// EJ 9 -> Tipos de paramentros pasador por defecto 
function array_baz(array &$param)
{
    $param = 1;
}
$var = [];
array_baz($var);
var_dump($var);
array_baz($var);
// int (1)
// Fatal error: ...


// EJ 10 -> Declaracion de tipo nulo 
class C{}
function f(C $c = null){
    var_dump($c);
}
f(new C);       // object(C)#1 (0){}
f(null);        // NULL



//          ---+++++     Tipificacion estricta     +++++---
// modo estricto -> en funciones de cada fichero
// la foma de declararlo es --->    declare con la declaracion  strict_types 


// EJ 11 -> Tipificacion estricta 
declare(strict_types = 1);      // fuerza el chequeo estricto de tipos en las declaracion de funciones
// en este caso la funcion espera un entero y forzosamente tiene que es un entero
function sum(int $a, int $b){
    return $a + $b;
}
var_dump(sum(2, 3));    // int (5)
var_dump(sum(1.4, 2.6));// error no  por que espera un entero y no es un entero



// EJ 12 -> Tipificacion debil
function suma(int $a, int $b){
    return $a + $b;
}
var_dump(suma(2, 3));       // inte(5)
// en esta son oblicado a hacerce enteros y es como si se sumara 1 + 2 = 3
var_dump(suma(1.4, 2.6));   // int(3)


// EJ 13 -> se captura la exepcion (TypeError)
declare (strict_types = 1);
function sum2(int $a, int $b){
    return $a + $b;
}

try{
    var_dump(sum2(2, 3));       // int (5)
    var_dump(sum2(1.4, 2.6));   // se lanza el error a capturar 
}catch(TypeError $e){
    echo 'Error: ' . $e -> getMessage(); // captura el Error: sum2(): Argument #1 ($a) must be of type, float given, called in C:\URL\del\script\ on line 
}



//          ---+++++     Listas de argumentos de logitud variable     +++++---
// EJ 14 -> Usando ... para acceder a argumentos variables 
function sum3(...$numeros){
    $acc = 0;
    foreach ($numeros as $n){
        $acc += $n;
    }
    return $acc;
}
echo sum3(1, 2, 3, 4);  // 10



// EJ 15 -> Usar ... para proporcionar argumentos
function add ($a, $b){
    return $a + $b;
}

echo add(...[1, 2]);    // 3
$a = [2, 3];
echo add(...$a);    // 5


// EJ 1 -> Argumentos variables de declaración de tipo
function total_inteval($unit, DateInterval ...$intevals){
    $time = 0;
    foreach($intevals as $inteval){
        $time += $inteval->$unit;
    }
    return $time;
}
$a = new DateInterval('P1D');
$b = new DateInterval('P2D');
echo total_inteval('d', $a, $b) . ' days ';   // 3 days

// esto fallara, debido a que null no esun objeto de DateInterval
echo total_inteval('d', null);  // error
// EJ 1 ->


?>