<?php
//              Operadores de compracion
// Estos operadores nos permiten hacer compracion entre 2 valores 

$a = 5;
$b = '777';


$a == $b;       // igual
$a === $b;      // identico
$a != $b;       // diferente
$a <> $b;       // diferente
$a !== $b;      // no identico
$a < $b;        // menor que
$a > $b;        // mayor que
$a <= $b;       // menor o igual
$a >= $b;       // mayor o igual


$a <=> $b;      // Nave espacial 
//                 Un integer menor, igual a, o mayor cuanto a $a es repectivamente menor que, igual a, o mayor que $b      APARTIR DE LA PHP 7

$a ?? $b ?? $c; // Fusion de null
//              El primer operador de izquierda a derecha que exista y que no sea NULL. null si no hay valores definidos y no son null 

if ($a <=> $b){
    echo 'Soy integer';
}else{
    echo 'NO';
}

echo "\n";
$a = null;
$b = null;
$c = null;
if($a ?? $b ?? $c){
    echo "Soy Fusion de null";
}else{
    echo "NO";
}
?>