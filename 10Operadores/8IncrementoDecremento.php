<?php
//          ---+++++     Operador de Incremento/Decremento     +++++---

// estes timpo de operador solo afecta a numeros y string
// a los demas operadores no

++$a;       // Pre-incremento   -> Incrementa $a a uno, y luego retorna $a
$a++;       // Post-incremento  -> Retorna $a, y luego incrementa $a a uno
--$b;       // Pre-Decremento   -> Decrementa $b a uno, y luego retorna $b
$b--;       // Post-Decremento  -> Retorna $b, y luego decrementa $b a uno


// Ej
// 
echo "<h3>Post-incremento</h3>";
$a = 5;
echo "Debe ser 5: " . $a++ . "<br /> \n";
echo "Debe ser 6: " . $a . "<br /> \n";


// pimero lo incrementa y conserva el valor que incremneta
echo "<h3>Pre-incremento</h3>";
$b = 5;
echo "Debe ser 6: " . ++$b . "<br /> \n";
echo "Debe ser 6: " . $b . "<br /> \n";


// 
echo "<h3>Post-decremento</h3>";
$c = 5;
echo "Debe ser 5: " . $c-- . "<br /> \n";
echo "Debe ser 4: " . $c . "<br /> \n";


//primero decrementa el valor y conserva el valor que se decrementa
echo "<h3>Post-decremento</h3>";
$d = 5;
echo "Debe ser 4: " . --$d . "<br /> \n";
echo "Debe ser 4: " . $d . "<br /> \n";




?>