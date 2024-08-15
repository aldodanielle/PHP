<?php
echo '<pre>';
// ----+++      Convertido Binario      +++----
// 
echo '<h1> Convertidor Binario </h1>';
echo '<h2> unica condicion que sea un numero entero </h2>';

function aBinario($n){
    return decbin($n);
}

$numero = 128;
if(is_int($numero)){
    echo aBinario($numero);
}else {
    echo 'No es un numero entero';
}