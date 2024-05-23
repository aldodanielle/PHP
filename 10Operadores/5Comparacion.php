<?php
//              Operadores de compracion
// Estos operadores nos permiten hacer compracion entre 2 valores 

$a = 5;
$b = '777';


$a == $b;       // igual
$a === $b;      // identico
$a != $b;       // diferente
$a <> $b;       // diferente
$a !== $b;      // no identico
$a < $b;        // menor que
$a > $b;        // mayor que
$a <= $b;       // menor o igual
$a >= $b;       // mayor o igual


$a <=> $b;      // Nave espacial 
//                 Un integer menor, igual a, o mayor cuanto a $a es repectivamente menor que, igual a, o mayor que $b      APARTIR DE LA PHP 7

$a ?? $b ?? $c; // Fusion de null
//              El primer operador de izquierda a derecha que exista y que no sea NULL. null si no hay valores definidos y no son null 

if ($a <=> $b){
    echo 'Soy integer';
}else{
    echo 'NO';
}

echo "\n";
$a = null;
$b = null;
$c = null;
if($a ?? $b ?? $c){
    echo "Soy Fusion de null";
}else{
    echo "NO";
}





// ---+++++    Ejemplos    ---+++++
var_dump(0 == "a");         // 0 == 0 -> bool(false) solo este salio incorrecto a la documentacion
var_dump("1" == "01");      // 1 == 1 -> bool(true)
var_dump("10" == "1e1");    // 10 == 10 -> bool(true)
var_dump(100 == "1e2");     // 100 == 100 -> bool(true)

var_dump("a" === "a");      // true porque es estrictamente igual


switch ("a"){
    case 0:
        echo "Caso 0";
        break;
    case "a":
        echo "Caso a";
        break;
    default:
        echo "default";
}


//          ---+++++     Integers     +++++---

// solo para resultados de -1, 0 ,1 asi que     4 <=> 1 da como resultado 1
echo 1 <=> 1;   // 0
echo 1 <=> 2;   // -1
echo 4 <=> 1;   // 1

// floats
echo 1.5 <=> 1.5;   // 0
echo 1.5 <=> 2.5;   // -1
echo 3.5 <=> 1.5;   // 1

// strings
echo "a" <=> "a";   // 0
echo "a" <=> "b";   // -1
echo "b" <=> "a";   // 1

echo "aldo" <=> "aldo"; // 0
echo "aldo" <=> "dani"; // -1
echo "dani" <=> "aldo"; // 1

// array
echo [] <=> [];                 // 0
echo [1, 2, 3] <=> [];          // 1
echo [1, 2, 3] <=> [1, 2, 1];   // 1
echo [1, 2, 3] <=> [1, 2, 4];   // -1

// object
$a = (object) ["a" => "b"];
$b = (object) ["a" => "b"];
echo $a <=> $b;     // 0

$a = (object) ["a" => "b"];
$b = (object) ["a" => "c"];
echo $a <=> $b;     // -1

$a = (object) ["a" => "c"];
$b = (object) ["a" => "d"];
echo $a <=> $b;     // -1


//only value are compared}
$a = (object) ["a" => "b"];
$b = (object) ["b" => "b"];
echo $a <=> $b;     // 1




//          ---+++++     boolean/null     +++++---

// boolean y null son comprados simpre como bool
var_dump(1 == true);        // TRUE - same a (bool)1 == TRUE
var_dump(0 == false);       // TRUE - same a (bool)0 == FALSE
var_dump(100 < true);       // FALSE - same a (bool)100 < TRUE
var_dump(-10 < false);      // FALSE - same a (bool)-10 < FALSE

var_dump(min(-100, -10, NULL, 10, 100));    // NULL




//          ---+++++     Comparacion estandar con array     +++++---
// los Array son comprados de esta forma con los operadores de compracion estandar 

function standard_array_compare($op1, $op2){
    if (count($op1) < count($op2)) {
        return -1; // $op1 < $op2
    } elseif (count($op1) > count($op2)) {
        return 1; // $op1 > $op2
    }
    foreach ($op1 as $key => $val) {
        if (!array_key_exists($key, $op2)) {
            return null; // uncomparable
        } elseif ($val < $op2[$key]) {
            return -1;
        } elseif ($val > $op2[$key]) {
            return 1;
        }
    }
    return 0; // $op1 == $op2
}




//          ---+++++     Aignacion de valor predeterminado     +++++---

// Ej de uso con operador ternario
echo $action = (empty($_POST['action'])) ? 'default' : $_POST['action'];

// con sentencia IF
if (empty($_POST['action'])){
    echo $action = 'default';
}else{
    echo $action = $_POST['action'];
}




//          ---+++++     Comportamiento ternario poco obvio     +++++---
// las operacions ternarias se elimina de izquierda a derecha
echo (true ? 'true' : false ? 't' : 'f');   // error de compilacion (no soportado)

// una mejor correcion del ejemplo anterior
echo ((true ? 'true' : false)? 't' : 'f');  // salida 't'
?>