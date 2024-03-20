<?php 

//Clases
//Definimos la clase
class usuario{
    public $name;
    public $age;
    private $addres;

    function __construct ($name, $age, $addres){
        $this -> name = $name;
        $this -> age = $age;
        $this -> addres = $addres;
    }
}

// Creamos la clase, 

$variableParaClase = new usuario('Daniel', 25, 'Enrique Segoviano');

// accedemos a todo los valores
print_r($variableParaClase);

// accedemos a un solo valor
print_r($variableParaClase->name . "\n");
// en este caso no podemos acceder a la direccion por
// que es privada

$variableParaClase->name = "Aldo";
// cabiamos el valor
print_r($variableParaClase->name . "\n");

echo gettype($variableParaClase);
?>