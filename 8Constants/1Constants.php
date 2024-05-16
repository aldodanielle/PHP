<?php
// Es un identificador con un valor simple
//como su nombre nos lo indica su valor NO puede cambiar SIEMPRE ES EL MISMO

// siguen el patron de cualquier otra etiqueta 
define("foo", "something");             // valid constant name
define("foo2", "something else");       // Valid constant name
define("FOO_BAR", "something more");    // valid constant name

echo foo;
echo foo2;
echo FOO_BAR;


define("2FOO", "Algo"); // invalido NO puede empezar con un NUMERO
echo 2FOO;



define("__foo__", "Cualquier cosa");
echo __foo__;           // valido pero se recomienda evitarlo en futuras actualizaciones de PHP lo puede romper el script
?>