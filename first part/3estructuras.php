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
array_push($nueva_lista, 'cinco');

print_r($nueva_lista);
// imprime toda la lista sin importa si se repite o no


print_r(array_unique($nueva_lista));    
// imprime la lista pero con e valor de SET 
// es decir no entria por que imprimit 2 veces el cinco
// ni no solamente una vez


// FLUJOS
// para recorrer la una lista 

for($valorN = 0; $valorN <= 10; $valorN++){
    echo $valorN . "\n";
}


$carneCerdo = 'Cerdo';
$carneRes = 'Res';
$carnePollo = 'Pollo';
$carneConejo = 'Conejo';

$listaCarnes = [$carneCerdo, $carneRes, $carnePollo, $carneConejo];

// print_r( $listaCarnes );

// para acceder a cada uno de los elementos
// no deja de ser un bucle for
foreach($listaCarnes as $tipoCarne){
    echo $tipoCarne . "\n";
}


$contador = 2;
while($contador != 6){
    print_r($contador . "\n");
    $contador++;
}


$orden = true;
$ordenEcha = "Su orden esta en camino"; 
$ordarAqui = "¿Que desea ordenar?";

echo $orden ? $ordenEcha : $ordarAqui;


if ($orden == true){
    echo $ordenEcha;
}else{
    echo $ordarAqui;
}

?>