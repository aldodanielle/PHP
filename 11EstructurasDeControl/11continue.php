<?php
//          ---+++++     Continue     +++++---

// utilizado para saltar la iteneracion actual, para terminar con el flujo antes de pasar
// a la siguiente iteneracion
// en switch es el mismo procedimieno que el break y tambien con la enumeracion continue 1, continue 2
while(list($clave, $valor) = each($array)){
    if(!($clave % 2)){  // salta los miembros pares
        continue;
    }
    hace_algo($valor);
}


$i = 0;
while($i++ < 5){
    echo "Exterior \n";
    while(1){
        echo "medio \n";
        while(1){
            echo "Exterior \n";
            continue 3;
        }
        echo "Never se imprime \n";
    }
    echo "this neither (tampoco) \n";
}



// para -> for
for($i = 0; $i < 5; ++$i){
    if($i == 2)
        continue
    print $i . "\n";
}
?>