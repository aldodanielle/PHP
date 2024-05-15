<?php
// El ambito de una variable es el contexto dentro del que la variable esta definida 
// la matoria de las variables en PHP tienen un ambito simple
// Este ambito simple tambien abarca los ficheros incluidos y los requerimientos 
// Por ejemplo:

$a = 1;         // la varaible a esta a disponibilidad de 'b.inc'
include 'b.inc';

echo $a;


// cualquier variable usada dentro de una funcion esta por opcion limitada al ambito local de funcion
$a = 1;     // ambito global

function test (){
    echo $a;      // referencia al ambito locak (NO IMPRIME NADA)
}

test();


// Para usarlo debemos hacer uso de la palabra reservada "global"
$a = 1;
$b = 2;

function Suma(){
    global $a, $b;
    $b = $a + $b;
}

Suma();     // hacemos una llamada a la funcion y esto no se realiza el echo imprime el valor inicial "2"
echo $b;



// reiscribiendo el valor programa anterior usando 
// el array $GLOBALS
$a = 1;
$b = 2;

function Suma2(){
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Suma2();
echo $b;    // 3 -> mismo resultado diferentes ambito global usando el array $GLOBALS





// $GLOBALS es una superglobal
function test_global(){
    // La mayoría de variables predefinidas no son "super" y requieren
    // 'global' para estar disponibles al ámbito local de las funciones.
    global $HTTP_POST_VARS;
    echo $HTTP_POST_VARS ['name'];
    // Las superglobales están disponibles en cualquier ámbito y no
    // requieren 'global'. Las superglobales están disponibles desde
    // PHP 4.1.0, y ahora HTTP_POST_VARS se considera obsoleta.
    echo $_POST ['name'];
}




//-------------------------------------------------------------------------------------------------------
// Uso de variables Static
// Variable Estatica
// Esta existe solo en el ambito local de la funcion, pero no pierde su valor cuando la ejecucion 
// del programa abandona este ambito

// De muestra la necesidad de variables staticas
function test2(){
    $a = 0;
    echo $a;
    $a++;
}
test2();    // 0
test2();    // 0

// ahora usando una variable estatica 
// con el fin de almacenar el valor y que este NO desaparezca al finalizar
function test3(){
    static $a = 0;
    echo $a;
    $a++;
}

test3();    // 0
test3();    // 1


//--------------------------
// variables Staticas con funcion recursiva
function test4(){
    static $count = 0;
    $count++;
    echo $count;

    if($count < 10){
        test4();
    }
    $count--;
}
test4();    // 12345678910


//--------------------------
// Declaracion de variables Staticas
function declaracion(){
    static $int = 0;        // correcto
    static $int = 1 + 2;     // correcto (apartir de php 5.6)
    static $int = sqrt(121);// incorrecto (ya que es una funcion)

    $int--;
    echo $int;
}
declaracion();


//--------------------------
// Referencia con variables Staticas y Globales

function pruebaReferenciaGlobal(){
    global $obj;
    $obj = &new stdClass;
};
function pruebaNOReferenciaGlobal(){
    global $obj;
    $obj = new stdClass;
}
pruebaReferenciaGlobal();
var_dump($obj);
pruebaNOReferenciaGlobal();
var_dump($obj);
// NULL
// object(stdClass)(0) {
// }


//--------------------------
// las referncias no son almecenadas en estaticamente
function &obtenerIntanciaRef(){
    static $obj;

    echo 'Objecto estatico';
    var_dummp($obj);
    if(!isset($obj)){
        //Asignar una referencia a la variable estatica
        $obj = &new stdClass;
    }
    $obj -> propety++;
    return $obj;
}

function &obtenerIntenciaNORef(){
    static $obj;

    echo 'Objecto estatico';
    var_dump($obj);
    if(!isset($obj)){
        // Asignamos a un objeto a la variable statica
        $obj = new stdClass;
    }
    $obj -> propety++;
    return $obj;
}


$obj1 = obtenerIntanciaRef();
$aun_obj1 = obtenerIntenciaNORef();
echo "\n";
$obj2 = obtenerIntenciaNORef();
$aun_obj2 = obtenerIntenciaNORef();











function &obtener_instancia_ref() {
    static $obj;

    echo 'Objeto estático: ';
    var_dump($obj);
    if (!isset($obj)) {
        // Asignar una referencia a la variable estática
        $obj = &new stdclass;
    }
    $obj->property++;
    return $obj;
}

function &obtener_instancia_no_ref() {
    static $obj;

    echo 'Objeto estático: ';
    var_dump($obj);
    if (!isset($obj)) {
        // Asignar el objeto a la variable estática
        $obj = new stdclass;
    }
    $obj->property++;
    return $obj;
}

$obj1 = &obtener_instancia_ref();
$aun_obj1 = &obtener_instancia_ref();
echo "\n";
$obj2 = &obtener_instancia_no_ref();
$aun_obj2 = &obtener_instancia_no_ref();



// Objeto estático: NULL
// Objeto estático: NULL

// Objeto estático: NULL
// Objeto estático: object(stdClass)(1) {
// ["property"]=>
// int(1)
// }
?>