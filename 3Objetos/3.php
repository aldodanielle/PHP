<?php
// conversion a objeto
// pasar de cualquier otra funcionalidad a objeto 

// Ejemplo array a objeto
// Cuando tenemos un objeto y lo queremos convertir con object 
// este no cambiara por que los array no se pueden convertir solomante asi
// https://www.php.net/manual/es/language.types.object.php
$ejObjeto = (object) array(
    '0' => 'Mano',
    '1' => 'Pie',
    '2' => 'cabeza',
);

var_dump(isset($ejObjeto -> {'1'}));    // bool(true)
var_dump(key($ejObjeto));       // string(1) "0"




// Otro ejemplo
// Es usado para cuando no es un array 
$objNuevo = (object) 'cio';
echo $objNuevo -> scalar;






?>