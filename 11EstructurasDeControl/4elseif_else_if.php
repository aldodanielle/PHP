<?php
//          ---+++++     elseif / else if     +++++---

// esta esctructura es una combinacion de if y else, esta setencia estiende una de if para ejecutar
// diferente en caso de que la operacion if original se evaluada como false

$a = 5;
$b = 5;

if($a  > $b){
    echo "$a es mayor que $b";
}elseif($a == $b){
    echo "$a es igual que $b";
}else{
    echo "$a es menor que $b";
}
// 5 es igual que 5


// se pueden usar tantos elseif como se han necesarios (tener cuidado con el anidar muchos if)
// ese setntencia tambien se puede dividir en dos palabras (else if) y el resultado es el mismo
$w = 77;
$x = 60;
$y = 89;
$z = 1;

// este codigo se puede mejorar muchisimo por que algunas sentencias ya estan comparadas no abria necesidad
// de volver a compararlas 
if ($w > $x && $w > $y && $w >$z){
    echo "$w es mayor que $x, $y, $z";
}elseif($x > $w && $x > $y && $x >$z){
    echo "$x es mayor que $w, $y, $z";
}else if ($y > $w && $y > $x && $y >$z){
    echo "$y es mayor que $w, $x, $z";
}else if ($z > $w && $z > $x && $z >$y){
    echo "$z es mayor que $w, $x, $y";
}else{
    echo "todos son iguales";
}




//          ---+++++     uso sin los {}     +++++---

// ---------- Metodo incorrecto
$x = 10;
$y = 8;
if($x > $y):
    echo "$x es mayor que $y";
else if($a == $b):      // se cambia "else if" por "elseif" para que no marque error
    echo "Error la linea anterior comete un error";
endif;


// ---------- Metodo correcto
$a = 10;
$b = 8;

if ($a > $b):
    echo "$a es mayor que $b";
elseif ($a == $b): // Tenga en cuenta la combinación de las palabras.
    echo "$a es igual a $b";
else:
    echo "$a no es ni mayor ni igual a $b";
endif;
?>