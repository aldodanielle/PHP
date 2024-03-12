<?php
//listas
$entero = 8;
$double = 8.02;
$boolean = true;
$string = "Cadena de texto";

$varLista = [$entero, $double, $boolean, $string];
echo gettype($varLista) . "\n";    //array
echo $varLista[0] . "\n";      // 8
echo $varLista[3] . "\n";      // Cadena de texto

// añadimos un nuevo elemento al array
$nuevoElemento = 'Carne Asada';
array_push($varLista, $nuevoElemento); 
echo $varLista;
print_r($varLista);
echo $varLista[5]; // Error no existe el elemento 5

//diccionario 
$name = "Daniel";
$lastname = "Lara";
$age = 25;
$addres = "Enrique Segoviano";

$dicccionario = array ("Nombre" => $name,
                        "Apellido" => $lastname,
                        "Edad" => $age,
                        "Direccion" => $addres);
echo gettype($dicccionario);
print_r($dicccionario); // imprime todo el array
// echo $dicccionario[0];   //Error no existe el elemeto 0 si no que a este elemento tiene un nombre 
echo $dicccionario["Nombre"];

// SET
// esta caracteristicas nos dice que no se pueden repetir valores
$nueva_lista = ["uno", "dos", "tres"];
array_push($nueva_lista, "cinco");

echo($nueva_lista);



?>