<?php
class A{
    private $A;
}

class B extends A{
    private $A;
    public $AA;
}

// var_dump((array) new B);


//array con valores string
$colores = array('Negro', 'Blanco', 'Rojo', 'Azul', 'Amarillo');

foreach ($colores as $colors){
    echo "<br>"."Te gusta el colo $colors?" ;
    print_r( $colors === "Negro" ? "si me gusta" . "\n" : "NO ME GUSTA " . "\n");
}

?>