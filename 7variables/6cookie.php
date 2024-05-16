<?php
// PHP soporta cookies en PHP
// las cookies son un mecanismo para almacenar datos en el navegador y asi rastrear 
// o identificar a usuarios que vuelven 



// multiples valores a una sola cookie
setcookie("MiCookie [Foo]", 'Prueba 1', time()+3600);
setcookie("MiCookie [bar]", 'Prueba 2', time()+3600);
// esto prepara 2 cookies se paradas aunque MiCookie sera un array simple en el script
// Si solo queresmo una cookie con valores multiples se concideran el uso de llas funciones
// serialize() o explode()



//--------------------------
// Ej de setcookie
if(isset($_COOKIE['coteo'])){
    $conteo = $_COOKIE['conteo'] + 1;
}else{
    $conteo = 1;
}

setcookie('conteo', $conteo, time()+3600);
setcookie("Carrito[$conteo]", $item, time()+3600);
// Nótese que una cookie reemplazará a una cookie anterior que tuviese el mismo nombre en el navegador a menos que la ruta o el dominio fuesen diferentes. Así, para una aplicación de carrito de compras se podría querer mantener un contador e ir pasándolo. Es decir:
?>