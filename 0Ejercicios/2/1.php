<?php

// ----+++      Ej 1: Determina si una persona es mayor de edad.      +++----
/* This PHP code snippet is determining if a person is of legal age. Here's a breakdown of what each
part does: */

$edad = 23;
echo 'Dame tu edad ' . $edad . " años " . "\n"; 
if ($edad >= 18){
    echo "Eres MAYOR de edad";
}else{
    echo "Eres MENOR de edad";
}

echo "\n"."\n";
echo 'Dame tu edad ' . $edad . " años " . "\n" ;
echo $edad>= 18 ? "You are a person is of legal age" : "You aren't  a person is of legal age";
 

