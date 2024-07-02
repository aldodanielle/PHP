<?php
//          ---+++++     include     +++++---

// incluye y evalua un archivo
// los rachivos se incluyen por medio de la ruta dada
// cuando se incluye un archivo este hereda el ambito de la variables en la linea en la cual 
// ocurre la inlcusion 

// Ej 1 basico
// variables.php
$color = 'verde';
$fruta = 'manzana';

// test.php
echo "Una $furta $color";   // Una
include 'variables.php';
echo "Una $furta $color";   // Una manzana verde


// Ej 2 funciones
// cuando se incerta en una funcion solo existe dentro de esa funcion
function coktel(){
    global $color;

    include 'variables.php';

    echo "Una $fruta $color";   // Una fruta verde
}

coktel();                   // Una manzana verde
echo "Una $fruta $color";   // Una verde    -> porque color es una variable global 



// Ej 3 con direcciones url
include 'https://www.example.com/file.php?el=barto=2';

// Ej 4 para evaluar el retorno
if((include 'variables.php') == true){
    echo 'ok';
} 

// Ej 5 include y la sentencia retur

// return.php
$var = 'PHP';
return $var;

// noreturn.php
$var = 'PHP';

// testreturns.php
$foo = include 'return.php';
echo $foo; // muestra 'PHP'
$bar = include 'noreturn.php';
echo $bar; // muestra 1


// Ej 6 Usando buffering de salida para incluir un archivo PHP dentro de una cadena
$string = get_include_contents('somefile.php');

function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}
?>