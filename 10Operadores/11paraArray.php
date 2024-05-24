<?php 
//          ---+++++     Operadores para Array     +++++---

$a + $b;        // Union        -> entre $a + $b
$a == $b;       // true Igualdad     -> si $a i $b son iguales
$a === $b;      // true Idetidad     -> si tanto $a y $b son igualmnte tanto en valor como en tipo de dato
$a != $b;       // true Desigualdad  -> si $a no es igual a $b
$a <=> $b;      // true Desigualdad  -> si $a no es igual a $b
$a !== $b;      // true NO-identidad -> si $a no es identico a $b


$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");


//          ---+++++     solo se grega "c" => "cherry"     +++++---
$c = $a + $b;   // union de $a + $b
echo "Union de \$a y \$b: \n";
var_dump($c);


//          ---+++++     aparece el $b completo     +++++---
$c = $b + $a;   // union de $b + $a
echo "Union de \$b y \$a: \n";
var_dump($c);



//          ---+++++     aparecen los valores de $a y $b     +++++---
$a += $b;   // Unión de $a += $b es $a y $b
echo "Union de \$a += \$b: \n";
var_dump($a);

?>