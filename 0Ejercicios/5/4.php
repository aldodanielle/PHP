<?php
echo '<pre>';
// ----+++      ordenamiento del menor al mayor      +++----
// Crea un programa que ordene un arreglo de números enteros de menor a mayor. El programa debe pedir 
// al usuario la cantidad de números que quiere ordenar y luego pedir cada número individualmente
echo '<h1> ordenamiento del menor al mayor </h1>';

$peticiones = fopen("C:\Users\aldo.lara\Desktop\peticiones.txt", "r") or die ("no se puede abrir");

echo 'How many numbers do you want to order? ';
echo $cantidad = 10;

echo '<br>';
echo 'Give me the values ';
echo '<br>';
$edades = array
(
    "Juan" => "40", 
    "Jose" => "78", 
    "Maria" => "28", 
    "Daniel" => "7", 
    "Lulu" => "9", 
    "Fer" => "16", 
    "Mikayla" => "35", 
    "Dante" => "10", 
    "Maximilino" => "5", 
    "Jorge" => "39"
);
print_r ($edades);
echo '<br>';

sort($edades);
echo 'The new order is: ';
echo '<br>';
print_r($edades);