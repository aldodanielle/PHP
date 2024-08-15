<?php
echo '<pre>';
// ----+++      Maximo comun divisor      +++----
// Crea un programa que encuentre el máximo común divisor (MCD) de dos números enteros. 
// El MCD es el número más grande que divide a ambos números sin dejar resto.

echo '<h1> Maximo comun divisor de 2 numero enteros </h1>';
function gcd($n1, $n2){
    // return gcd($n1, $n2);
    // verificarlo porque existe esta funcion que en teoria es mas facil 

    while($n2 != 0){
        $temp = $n2;
        $n2 = $n1 % $n2;
        $n1 = $temp;
    }
    return $n1;
}



$n1 = 35;
$n2 = 50;
echo 'El maximo comun divisor de: "' . $n1 . '" y "' . $n2 . '" es: ';
$mcd = gcd($n1, $n2);
echo $mcd;