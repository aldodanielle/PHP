<?php
// Aveces es conveniente tener variables variables
// es decir son nombre de variables que se pueden definir y usar dinamicamente

// variable NORMAL
$hi = 'HOLA';

// variable variable -> es cuando el se toma el valor de una variable y lo trata como noombre de variable
$$hi = 'Hello';


// con la anterior linea se a almacenado 2 variables 
// $hi que contiene HOLA  y $HOLA que contiene Hello 
// este ultimo se hace con $$

echo "$hi ${$hi}";  // HOLA Hello
echo "$hi $HOLA";   // HOLA hello       Are same



// ejmplo propeedad Variable 
class foo{
    var $bar = 'Soy Bar';
    var $arr = array('Soy A.', 'Soy B.', 'Soy C.');
    var $r  = 'Soy r';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo $foo -> $bar . "\n";
echo $foo -> {$baz[1]} . "\n";

$start  = 'b';
$end = 'ar';
echo $foo -> {$start  . $end} . "\n";

$arr = 'arr';
echo $foo -> $arr[1] . "\n";
echo $foo -> {$arr[1]} . "\n";


?>