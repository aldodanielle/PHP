<?php
//          ---+++++     foreach     +++++---

// Se utiliza principalmente para recorrer manipular los elementos de un array 

// porporciona una modo sencillo de iterar sobre arrays
// solo funciona sobre arrays y objectos en cualquiel otro da error
// sintaxis equiste de 2 formas
/* 
    foreach (expr_array as $valor)
        sentencia

    foreach (expr_array as $clave => $valor)
        sentencia
*/



//ejemplo basico
$array = array(3, 5, 7, 9);
foreach($array as $valor){
    echo $valor . "\n";
}
// no imprime el array con saltos de linea

// ----------- Array asociativo
$array_asociativo = array("nombre" => "Juan", "edad" => 30, "ciudad" => "Madrid");

foreach ($array_asociativo as $clave => $valor) {
    echo "La clave es " . $clave . ", y el valor es " . $valor . "\n";
}
/* 
La clave es nombre, y el valor es Juan
La clave es edad, y el valor es 30
La clave es ciudad, y el valor es Madrid
*/




// valor es el ultimo elemento del array
$array = array (1, 2, 3, 4);
foreach($array as $valor){
    $valor = $valor*2;
    echo $valor;    // (2, 4, 6, 8)
}
unset($valor);  // con esto en teoria vita imprimirlo




// lo mismo pero nos imprime con la asigacion igual
$array = array(1, 2, 3, 4);
foreach ($array as $clave => $valor) {
    // $array[3] se actualizará con cada valor de $array...
    echo "{$clave} => {$valor} ";
    print_r($array);
}


// este codigo se puede usar despues de la version PHP  5.5.0
foreach (array(1, 2, 3, 4) as &$valor) {
    $valor = $valor * 2;
    echo $valor;
}



// --------------------------------------------------------------------------------------------------------
// ejemplo mas para demostar su uso

// Ej 1
$a = array(1, 2, 3, 17);
foreach($a as $v){
    echo "el valor actal de \$a: $v\n";
}
/* 
el valor actal de $a: 1
el valor actal de $a: 2
el valor actal de $a: 3
el valor actal de $a: 17
*/


// Ej 2 -> con su votacion de acceso manual impreso con fines ilustrativos 
$a = array(1, 2, 3, 17);
$i = 0; /* solo fines ilustrativos*/
foreach($a as $v){
    echo "\$a[$i] => $v.\n";
    $i++;
}
/* 
$a[0] => 1.
$a[1] => 2.
$a[2] => 3.
$a[3] => 17.
*/



// Ej 3 -> clave valor
$a = array(             // se crea un array asociativo
    'uno' => 1,
    'dos' => 2,
    'tres' => 3,
    'diecisiete' => 17,
);

foreach($a as $k => $v){    // recorremos cada elemento de array y el valor actual se almacena en $k(uno),
    echo "\$a[$k] => $v.\n";// asi sucesivamnete y su valor en $v(1) y asi sucesivamente 
}
/* 
$a[uno] => 1.
$a[dos] => 2.
$a[tres] => 3.
$a[diecisiete] => 17.
*/



// Ej 4 -> array multidimensional
$a = array();           // se crea array vacio
$a[0][0] = 'a';         // asignamos a los valores de array
$a[0][1] = 'b';
$a[1][0] = 'c';
$a[1][1] = 'd';
foreach($a as $v1){     // primer foreach para recorrer cada elemento de array y se almacena en $v1
    foreach($v1 as $v2){// segundo para recorrer cada elemneto del array que se esta almacenando en $v1
        echo "$v2\n";
    }
}
/*
a
b
c
d
*/




// Ej 5 -> array dinamico
foreach(array(1, 2, 3, 4, 5) as $v){
    echo "$v\n";
}
/*
1
2
3
4
5
*/

?>