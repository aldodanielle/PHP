<?php
//          ---+++++     Operdaores de Tipo     +++++---

// instanceof se utiliza para determinar si una variable de PHP es un objeto instanciado de una cierta clase.

// Ej.
// Ejemplo #1 Utilizando instanceof con clases
class myClass{
}
class notClass{
}
$a = new myClass();

var_dump($a instanceof myClass);    // bool(true)
var_dump($a instanceof notClass);   // bool(false)


// instanceof también se puede utilizar para determinar si una variable es un objeto instanciado de una clase que hereda de una clase padre

//Ejemplo #2 Utilizando instanceof con clases heredadas
class fatherClass{
}
class daughterClass extends fatherClass{
}
$b = new daughterClass;

var_dump($b instanceof fatherClass);    // bool(true)
var_dump($b instanceof daughterClass);  // bool(true)


// Para comprobar si un objeto no es una instancia de una clase, se puede usar el operador lógico not.

// Ejemplo #3 Utilizando instanceof para verificar si un objeto no es una instancia de una clase
class miClass{
}
$c = new miClass;
var_dump(!($c instanceof stdClass));    // true


//Finalmente, instanceof también se puede utilizar para determinar si una variable es un objeto instanciado de una clase que implementa una interface:

// Ejemplo #4 Utilizando instanceof para la clase
interface myInterface{
}
class myClasse implements myInterface{
}
$d = new myClasse;
var_dump($d instanceof myInterface);    // bool(true)
var_dump($d instanceof myClasse);       // bool(true)


// Ejemplo #5 Utilizando instanceof con otras variables
interface myInterface2 {
}
class myClass2 implements myInterface2{
}
class notMyClass extends myClass2{}
$a = new myClass2;
$b = new myClass2;
$c = 'myClass2';
$d = 'notMyClass';

var_dump($a instanceof $b); // bool(true)   -> $b is an object of class MyClass
var_dump($a instanceof $c); // bool(true)   -> $c is a string 'MyClass'
var_dump($a instanceof $d); // bool(false)  -> $d is a string 'NotMyClass'



// Ejemplo #6 Usar instanceof para comprobar otras variables
$a = 1;
$b = null;
$c = imagecreate(5, 5);
var_dump($a instanceof stdClass);   // false -> $a es entero 
var_dump($b instanceof stdClass);   // false -> $b es null 
var_dump($c instanceof stdClass);   // false -> $c es un recurso
var_dump(FALSE instanceof stdClass);// error

// Ejemplo #7 Evitando búsquedas del nombre de clase y errores fatales con instanceof en PHP 5.0
$d = 'NotMyClass';
var_dump($a instanceof $d); // bool(false) -> aquí no hay error fatal
?>