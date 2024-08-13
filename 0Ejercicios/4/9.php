<?php
echo '<pre>';
// ----+++      Suma de 1 en 1 hasta 10      +++----
// Crea una función que reciba un número entero como parámetro y 
// devuelva el número de veces que se puede sumar 1 sin superar el número 10.

echo '<h1> Suma de 1 en 1 hasta 10 </h1>';
echo '<h2> Condicion que sea entero </h2>';

function sumaHastaDiez($n){
    // $contador = 0;
    while($n < 10){
        $n++;
        // $contador++;
        echo 'El nuevo valor es: "' . $n . '"<br>';
    }
    return 0; // $contador;
}

$valorInicial = 8.1;
echo 'El valor inicial es: "' . $valorInicial . '"';
echo '<br>';
echo '<br>';

if(is_float($valorInicial)){
    echo 'No es un numero entero';
    // return 1;
}else{
    sumaHastaDiez($valorInicial);
}