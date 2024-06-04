<?php
//          ---+++++     do while     +++++---

// this strcuture se verifica al final de la iteracion, es decir, que por lo menos se realiza uno vez
$i = 2;
do{
    echo " i es $i \n";
    echo " i es mayor a 3";
}while($i > 3);     // se ejecuta solo una vez porque $i no es mayor que 3


$f = 0;
do{
    echo " f es $f \n";
    echo " f hora es $f por lo tanto menor a 3 \n";
    $f++;
}while($f < 3);     // se ejecuta varias veces(3) hasta que se cumpla la condicion 


// concepto de encapsular do-while(0)
$i = 2;
do{
    if ($i < 5){
        echo "i no es suficientemente grande";
        break;
    }
    $i *= $factor;
    if($i < $minimum_limit){
        break;
    }
    echo "i es suficiente";

    /* Procesa i*/
}while(0);
?>