<?php
echo '<pre>';
// ----+++      suma de numero impares de 1 hasta el ingresado      +++----
// Crea un programa que calcule la suma de los números impares entre 1
// y un número entero que el usuario ingrese
echo '<h1> suma de numero impares de 1 hasta el ingresado </h1>';

function sumaImpar($num){
    $sum = 0;
    for ($i = 1; $i <= $num; $i++) {
        if ($i % 2 !== 0) {
        $sum += $i;
        }
    }
    return $sum;
}

$numIngresado = 15;
echo 'La suma de los numero impares del "1" hasta "' . $numIngresado . '" es: ';
echo sumaImpar($numIngresado);


$num = (int) readline("Enter a number: ");
$result = sumaImpar($num);
echo "The sum of odd numbers up to $num is $result\n";