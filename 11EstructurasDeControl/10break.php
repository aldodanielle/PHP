<?php
//          ---+++++     Break     +++++---

// Break finaliza la ejecucion de la estructura for, foreach. while, do-while y switch
// al ejecutarse esta finaliza en el flujo del proyecto esta finaliza inmediatamente
// tambien se puede escribir como break 1;

$array = array('uno', 'dos', 'tres', 'cuatro', 'NA', 'cinco');
while (list(, $val) = each($array)){    // la funcion each fue removida en desde la version php 7 en adelante
    if($val == 'NA'){
        break;
    }
    echo $val . "\n"; 
}



// cualquier argumento se la opcion 
$i = 0;
while(++$i){
    switch($i){
        case 5:
            echo "Estoy en $i, saliendo..." . "\n";
            break 1;    // sale del switch
        case 10:
            echo "Entoy en $i, saliendo..."  . "\n";
            break 2;    // sale del while
        default:
        //echo "$i \n";   // muestra la secuencia
        break;  // solo muestra las salidas de los break
    }
}




//ejemplo personal
echo "Ya ordeno?" ."\n";
$orden = true;
switch($orden){
    case false:
        echo "NO" . "\n";
        echo "Le puedo tomar la orden" . "\n";
        echo "ordenando......" . " \n";
        $orden = true;
        if($orden == true){
            echo "anything else?". "\n";
            echo "ordenando..." . "\n";
            break;
        }else{
            echo "OK \n";
        }
    case true:
        echo "Si $orden" . "\n";
        echo "En un momento tiene su orden" . "\n";
}

?>