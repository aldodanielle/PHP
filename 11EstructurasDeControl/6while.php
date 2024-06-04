<?php
//          ---+++++     while     +++++---

// la traducion literaria es "miestras que", es decir siempre que se cumpla la sentencia se ejecuta

// Ej 1
$i = 1;
while ($i <= 10){
    echo $i++ ."\n" ;
}

// Ej 2
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
    echo "\n";
endwhile;



// Ej 3
$boletos = 5;
$ganador = 3;
$contador = 1;  
while($contador <= $boletos):
    if ($contador == $ganador){
        echo "El bolento ganador es: $ganador";
        echo "\n";
    }else{
        echo $contador;
        echo "\n";
    }
    $contador++;
endwhile;


?>