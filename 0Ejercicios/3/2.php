<?php

// ----+++      Generador de contraseña      +++----

// Crea un script que genere una contraseña aleatoria de 8 caracteres, 
// que contenga al menos una letra mayúscula, una letra minúscula y un número.


function generarContrasena(){
    $mayusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $minusculas = 'abcdefghijklmnopqrstuvwxyz';
    $numeros = '0123456789';
    $caracteres = '<!>"#$%&/()=¿?¡+*[]{}^~';

    // por los menos un valor 
    $contrasena = 
    [
        $mayusculas[rand(0, strlen($mayusculas)- 1 )],
        $minusculas[rand(0, strlen($minusculas)- 1 )],
        $numeros[rand(0, strlen($numeros)- 1 )],
        $caracteres[rand(0, strlen($caracteres)- 1 )],
    ];

    // rellenamos el resto
    for($i = 0; $i < 5; $i++){
        $caracteres = $mayusculas . $minusculas . $numeros. $caracteres;
        $contrasena[] =  $caracteres[rand(0, strlen($caracteres)- 1 )];
    }

    // mezclamos  para evitar que simpre sea una Mayuscula, minuscula y numero
    shuffle($contrasena);

    // unimos la lista a una cadena
    $contrasena = implode('', $contrasena);
    return $contrasena;
}

echo generarContrasena();