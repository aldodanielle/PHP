<?php
//          ---+++++     Argumentos de Funciones     +++++---

// cualquier informacion puede ser pasada a las funciones mediante la lista de argumentos
// la cual es una lista de expresiones delimitadas por comas 
// lo argumentos son evaluados de izquierda a derecha

// EJ 1 -> Pasar de arrays a funciones 
function tomar_array($entrada)
{
    echo "$entrada[0] + $entrada[1] = ". $entrada[1]+$entrada[0];
}


// EJ 2 -> Paso de parametros de una funcion por referencia
function anadir_algo(&$cadena)
{
    $cadena .= " Y algo mas ";
}
$cad = " Esto es una cadena, ";
anadir_algo($cad);
echo $cad;      // Esto es una cadena,  Y algo mas 


// EJ 3 -> uso de paramentros predeterminados en funcion
function hacer_cafe($tipo = 'capuchino')
{
    return "Hacer una taza de $tipo. \n";
}
echo hacer_cafe();              // Hacer una taza de capuchino. 
echo hacer_cafe(null);          // Hacer una taza de .
echo hacer_cafe("expresso");    // Hacer una taza de expresso.


// EJ 4 -> Usar tipos NO escalares como valores predeterminados
function hacer_cafe2($tipos = array("capuchino"), $fabricateCafe = NULL)
{
    $aparato = is_null($fabricateCafe) ? "las manos" : "$fabricateCafe";
    return "Hacer una taza de " .join(", ", $tipos). " con $aparato \n";
}
echo hacer_cafe2();     // Hacer una taza de capuchino con las manos 
echo hacer_cafe2(array("capuchino", "lavazza"), "una tetera");  // Hacer una taza de capuchino, lavazza con una tetera 
echo hacer_cafe2(array("capuchino", "lavazza"),);  // Hacer una taza de capuchino, lavazza con las manos 


// EJ 5 -> Uso INCORRECTO de argumentos predeterminados en una función
function hacer_yogurt($tipo = 'acidofilo', $sabor)
{
    return "Hacer una taza de yogut $tipo de $sabor";
}
echo hacer_yogurt("Fresa");     // NO FUNCIONA


// EJ 6 -> Correccion del ejecicio anterior
function hacer_yogurt2($sabor, $tipo = 'acidofilo')
{
    return "Hacer una taza de yogut $tipo de $sabor.";
}
echo hacer_yogurt2("Fresa");    // Hacer una taza de yogut acidofilo de Fresa


// EJ 7 ->

// EJ 1 -> 
// EJ 1 -> 
// EJ 1 -> 
// EJ 1 -> 
// EJ 1 -> 
// EJ 1 -> 

?>