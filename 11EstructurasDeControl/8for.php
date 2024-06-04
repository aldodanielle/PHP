<?php
//          ---+++++     for     +++++---

// bucles -> esta estructura cuenta con se define de la siguiente manera:
//          for (expr1; expr2; expr3;)
//                  sentencia
// de donde:
// expr1 -> es la primera en ser evaluada (ejecutada) y aqui es donde inicia el bucle
// expr2 -> es la segunda en ser evaludad si es true continua con la ejecucion y si es false aqui termina
// expr3 -> si se cumplen las 2 primeras se ejecuta esta ultima



// difertes formas de postrar la numeracion del 1 al 10
// Ej 1
for ($i = 1; $i <= 10; $i++){
    echo $i;
}
// Ej 2
for($i = 1; ;$i++){
    if($i > 10){
        break;
    }
    echo $i;
}
// Ej 3
$i = 1;
for(; ;){
    if($i > 10){
        break;
    }
    echo $i;
    $i++;
}
// Ej 4
for($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);




//          ---+++++     iteraciones por arrays     +++++---
$people = array(
    array('name' => 'kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);
for($i = 0; $i < count($people); $i++){
    $people[$i]['salt'] = mt_rand(000000, 999999);
}


// este codigo es un poco mas rapido y veloz que el anterior
$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);

for($i = 0, $size = count($people); $i < $size; ++$i) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
}
?>