<?php
//          ---+++++     goto     +++++---

// puede ser usado para saltar a otra seccion en el programa 
// el destino se identifica por una etiqueta seguida por 2 puntos y la instruccion es dada por goto
// seguida de la etiqueta del destino deseada 

// la etiqueta de destino debe estar en el mismo fichero y mismo contexto
// lo que significa que no se puede saltar fuera de una funcion o metodo, ni dentro del mismo

// a lo mismo nose puede saltar dentro de un bucle o switch aunque si se puedesaltar fue de ellos



// Ej 1 -> sencillo o basico
goto a;
echo 'Esto no se imprime';

a:
echo "Aqui se hace el salto";   // se imprime



// Ej 2 -> Dentro de un bucle
for ($i = 0; $i <= 7; $i++){
    echo "i = $i \n";       // se imprime del 0 al 5 y despues hace un salto
    if($i == 5) goto sal5;
}
sal5:
echo "salto de goto por que es igual a 5";  // salta aqui

// Ej 2.1 -> segundo ejemplo de bucle
for($i=0,$j=50; $i<100; $i++) {
    while($j--) {
        if($j==17) goto end;
    }  
}
echo "i = $i";
end:
echo 'j alcanzó 17';    // se imprime 




// ejemplo no funcional
goto loop;
for ($i = 0, $j = 50; $i < 100; $i++ ){
    while($j--){
        loop:
    }
}
echo "i = $i";
?>