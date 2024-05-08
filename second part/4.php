<?php
$salto = "\n";
$varArray = array (
    "name" => "Daniel",
    "lastname" => "lara",
    "age" => 26,
);

//echo $varArray;
var_dump($varArray);

//Array simple
$arraySimple = array(
    "foo" => "bar",
    "bar" => "foo",
);

var_dump($arraySimple);
echo $salto;



// Amoldamiento de tipo y escritura
// se sobre escribe y el ultimo valor que queda es el "d"
$arrayAmoldamientoTipoEscritura = array (
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => "d",
);

var_dump($arrayAmoldamientoTipoEscritura);
echo $salto;


// Claves mixtas integer y string 
$arrayIntgerString = array (
    "foot" => "bar",
    "bar" => "foot",
    100 => -100,
    -100 => 100,
);

var_dump($arrayIntgerString);
echo $salto;


// Array indexado sin clave
$arraySinClave = array (
    "foot", 
    "bar",
    "hello", 
    'world'
);
var_dump($arraySinClave[0]);    // impimer el tipo de dato, tamaño y el valor       string(4) foot 
// echo $arraySinClave[0];      // solo imprimer el valor (foot)
// echo $salto;
// print_r($arraySinClave[1]);  // solo imprime el valor (bar)
echo $salto;


// Array sin clave en todos los elemntos
// imprime el array normalmente, pero al llegar a el asignado
// el valor de ese elemento cambia y los que siguen lo mismo 
$arraySinClaveEnAlgunosElementos = array (
    "a",
    "b",
    "c",
    6 => "d",
    "e",
    "f",
);
var_dump($arraySinClaveEnAlgunosElementos);
echo $salto;

// Acceso a elementos de un array (array dentro de un array)
$arrayElementoArray = array (
    "fut" => "bol",
    42 => 24,
    "multi" => array (
        "dimensional" => array (
            "deporte" => "Futbol"
        )
    )
);
// var_dump($arrayElementoArray);          // imprime todo
echo $salto;
// $miArray [0][0][0]
var_dump($arrayElementoArray['multi']['dimensional']['deporte']);
echo $salto;




// Array referencia al resultado de una Funcion
// $arrayReferenciaResultadoArray
function getArray(){
    return array(0, 1, 2, 'A');
}

//echo $ReferenciaResultadoArray = getArray()[3];     // A

// anteriormente
$tmp = getArray();
echo $secondElement = $tmp[3];
// tambien
echo list($secondElement) = getArray();



// Array con corchetes
$saltoLinea = '\n';
$arrayClasico = array(5 => 1, 12 => 2);
var_dump($arrayClasico);
// agregamos un nuevo valor al array
// Esto es lo mismo que $arr[13] = 3
$arrayClasico[] = 3;
var_dump($arrayClasico);
// agregamos un nuevo valor al array [x]
$arrayClasico["x"] = 4;
var_dump($arrayClasico);

// eliminar un valor del array [5]
unset($arrayClasico[5]);
var_dump($arrayClasico);

// eliminat todo el array 
print_r('se eliminan los datos?' . "\n") ;
unset($arrayClasico);
if (empty($arrayClasico) === true){
    echo 'Se elimino';
}else{
    echo 'NO';
}





//---------------------------------------------------------------------------
$array2 = array (1, 2, 3, 4, 5);
print_r($array2);
echo "\n";

// array elemina todos los elemntos y el deja el array intacto
// foreach existe solamanete para un los arra
foreach($array2 as $i => $value){
    unset($array2[$i]);
}
print_r($array2);

// Se agrega un valor
// como se eliminaron los valores de array y se queda intcato 
// esta vez empieza desde le 5 y no desde 0
$array2[] = 6;
print_r($array2);

// Re-indexar (recontruccion de indices)
// vuelve a a contar desde el valor 1 y no desde 5 como antes
$array2 = array_values($array2);
$array2[] = 7;
print_r($array2);



// para mas funciones del un array en php
// https://www.php.net/manual/es/ref.array.php
// mayusculas de 
$cambioArray = array (
    'uNo'=> 1,
    'dOs'=> 2,
    'trEes'=> 3,
    'cuATro'=> 4,
);

print_r(array_change_key_case($cambioArray, CASE_UPPER));
// Array
// (
//     [UNO] => 1
//     [DOS] => 2
//     [TREES] => 3
//     [CUATRO] => 4
// )
print_r(array_key_first($cambioArray));
//uNo






// versiones anteriores
// algunas estan declaradas sin '' y por lo cual no funcionara
// sin embargo esto podria estar definido como una constante y asu vez como una lo 
// cual permitiria que si funcionara 
//define('bar', 'mal');
$versionesAnteriores[bar] = 'bad';
echo $versionesAnteriores[bar];


// asi si funciona
$versionesAnteriores['bar'] = 'bad';
echo $versionesAnteriores['bar'];











error_reporting(E_ALL);                     // Muestra todos los errores
ini_set('display_error', true);
ini_set('html_error', false);
// Array simple:
$array = array(1, 2);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo "\nRevisando $i: \n";
    echo "Mal: " . $array['$i'] . "\n";
    echo "Bien: " . $array[$i] . "\n";
    echo "Mal: {$array['$i']}\n";
    echo "Bien: {$array[$i]}\n";
}






// array unpacking (desempaque)
$arr1 = [1, 2, 3];      // 1 2 3
$arr2 = [...$arr1];     // 1 2 3
$arr3 = [0, ...$arr1];  // 0, 1, 2, 3
$arr4 = ['a', 'b', 'c', ...$arr3];  // a, b, c, 1, 2, 3
$arr5 = ['y', 'z', ...$arr1, $arr4, 5, 6];
print_r($arr5);


function getArray2(){
    return ['a', 'b'];  // tiene 2 valores el arreglo 
}

$arr6 = [...getArray2(), 'c' => 'd']; // se agrega un valor al arreglo con el inidice de c y valor d
print_r($arr6);

// Array
// (
//     [0] => a
//     [1] => b
//     [c] => d
// )


$llenadoArray = [5];
print_r($llenadoArray);
?>