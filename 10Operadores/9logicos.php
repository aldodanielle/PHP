<?php
//          ---+++++     Operador Logicos     +++++---

$a and $b;      // And (y)              -> true si tanto $a como $b son true
$a or $b;       // or (o inclusivo)     -> true si cualquiera de $a o $b es true
$a xor $b;      // Xor (o exlusivo)     -> true si $a o $b es true pero no ambos 
!$a;            // not (no)             -> si $a no es true
$a && $b;       // and (y)              -> si tanto $a como &b son true 
$a || $b;       // or (o inclusivo)     -> si cualquiera de $a o $ es true




// por lo menos uno es verdadero
$e = false || true;
// por lo menos uno es verdadero
$f = false or true;

var_dump($e, $f);



// los dos tiene que ser verdaderos
$g = true && false;
// los dos tiene que ser verdaderos
$h = true and false;

var_dump($g, $h);
?>