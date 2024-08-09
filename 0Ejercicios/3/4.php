<?php

// ----+++      Juego de adivinanza      +++----

// Crea un script que genere un número aleatorio entre 1 y 100, y pida al usuario que lo adivine. 
// Si el usuario se equivoca, debe indicar si el número es mayor o menor que el que se generó.

$numAleatorio = rand(1, 5);

echo '<h1> Adivida el Numero</h1>' . '<br>';
echo '<h3> Ingresa un numero: </h3> ' . '<br>';
echo 'numero aleatrio: ' .  $numAleatorio . '<br>';
$numIngresado =  2;
echo 'numero ingresado: ' .  $numIngresado . '<br>';

if($numIngresado <= 100 && $numIngresado > 0){
    if($numIngresado < $numAleatorio){
        echo "Dame un numero mas alto";
    }elseif($numIngresado > $numAleatorio){
        echo "Dame un numero mas chico";
    }else{
        echo 'Correcto ADIVINASTE';
    }
}else{
    echo 'solo puedes ingresar numero de 1 a 100';
}