<?php 
//          ---+++++     Switch     +++++---

// similara a la sentencia de if pero a diferencia de esa sentencia esta nos ayuda 
// a comparar on varias sentencias y no con solamente unas pocas

// mismo codigo de con if y switch
$i = 1;
if ($i == 0){
    echo "i es igual a 0";
}elseif($i == 1){
    echo "i es igual a 1";  // este se imprime
}elseif($i == 2){
    echo "i es igual a 2";
}

$i = 1;
switch($i){
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";  // este se imprime
        break;
    case 2:
        echo "i es igual a 2";
        break;
}

// switch con string
$i = 'manzana';
switch($i){
    case 'manzana':
        echo "i es igual a manzana";    // este se imprime
        break;
    case 'pera':
        echo "i es igual a pera"; 
        break;
    case 'mango':
        echo "i es igual a mango";
        break;
}

// si no se utiliza break se ejecutan todas las sentencias
switch ($i) {
    case 0:
        echo "i es igual a 0" . "\n";   // se imprime esta linea
    case 1:
        echo "i es igual a 1" . "\n";   // se imprime esta linea
    case 2:
        echo "i es igual a 2" . "\n";   // se imprime esta linea
}

// para casos vacios
$i = 5;
switch($i){
    case 1:
    case 2:
    case 3:
    case 4:
        echo "El valor de i es $i";
        break;
    case 5:
        echo "El valor de i es $i"; // este se imprime
        break;
}

// default -> cuando no coincide ninguna
$i = 0;
switch($i){
    case 1:
        echo "El valor de i es $i";
        break;
    case 2:
        echo "El valor de i es $i";
        break;
    default:
    echo "El valor por efecto de i es $i";
    break;
}
?>