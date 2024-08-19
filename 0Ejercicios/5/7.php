<?php
echo '<pre>';
// ----+++      pyramid with asterisk      +++----
// create a program to generate a pattern of (*) y pida al usuario la altura


echo '<h1> Pyramid with asterisk (*) </h1>';
function pyramid($altura){
    $cadena = null;
    while($altura){
        $cadena .= "*";
        $altura--;
        echo $cadena . '<br>';
    }
}


$altura = 7;
echo 'la altura de la pyramid es: "' . $altura . '"';
echo '<br>'; 
if(is_int($altura)){
    echo pyramid($altura);
}else{
    echo 'solo puede ingresar numeros enteros';
}