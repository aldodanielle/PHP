<?php
//                  Operadores de Asignacion

// no es mas que "=" pero no es mimo que "igual a"

// Ej
$a = ($b = 4) + 5;  // donde $a es igual a 9 y $b se establce como en 4

echo $a;    // 9


// uso del operadores combianos (para ASIGNARA y NO sobreescribir)
// Ej
$x = 3;
$x += 5;        // $x establece en 8 como si hubieramos dicho $x = $x + 5; (me suma el valor anterior)
$y = "Hola";
$y .= "Dani";   // $y lo establece como "Hola Dani" como si fuera $y = $y . "Dani"; (concatename)

echo $x;    // 8
echo $y;    // Hola Dani


// asignacion por REFERENCIA
$q = 3;
$e = &$q;   // hace referencia a $q

print "$q\n";   // Muestra 3
print "$e\n";   // Muestra 3

$q = 5; // cambio de valor

print "$q\n";   // 5 -> se cambio el valor
print "$e\n";   // 5 -> por que hace referencia a $q

?>