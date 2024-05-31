<?php
//          ---+++++     foreach     +++++---

// porporciona una modo sencillo de iterar sobre arrays
// solo funciona sobre arrays y objectos en cualquiel otro da error
// sintaxis equiste de 2 formas
/* 
    foreach (expr_array as $valor)
        sentencia

    foreach (expr_array as $clave => $valor)
        sentencia
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
?>