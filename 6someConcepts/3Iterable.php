git pull<?php
// Es un seudotipo introducico en PHP 7.1
// Acepta cualquier array u objecto que acepte la interfaz Traversable 
// interface Traversable {
//     // interfaz para detectar si una clase puede recorrer mediante foreach
// }
// Esto dos tipos se recorren con foreach y se pueden emplear con yield from dentro de un generador



// Ej 1 -> Tipo de parametro iterable
function Vaca(iterable $iterable){
    foreach ($iterable as $valor){
        //...
        echo $valor . "\n";
    }
}

Vaca(["hola","mundo"]);

// Ej 2 -> Valor predeterminado de un parametro iterable
// en este caso el valor est vacio 
function toro(iterable $iterable = []){
    //...
}


// function toro(iterable $iterable = []) {
//     foreach ($iterable as $valor) {
//         echo $valor . "\n";
//     } 
// }
// este solo cambia en que es vacion pero practicamnte es el mismo que el de ariba


// Ejemplo de uso
toro(["Vaca", "Fuerte"]);








// Ej 3 -> Tipo de retorno iterable
function chivo(): iterable{
    return [1, 3, 4];
}

foreach (chivo() as $valor){
    echo $valor . "\n";
}










// Ej 4 -> T ipo de retorno de generadro iterable
function gen(): iterable{
    yield 1;
    yield 2;
    yield 3;
    yield 4;
}

//para imprimierlo en todos los casos seria lo mismo nada mas cambiar el nombre de la funcion
foreach (gen() as $valor){
    echo $valor . "\n";
}










// Ej 5 -> Varianza de tipo interable
interface Ejemplo {
    public function method(array $array) : iterable;
}

class implementacionDeEjemplo implements Ejemplo{
    public function method(array $array): array|Traversable{
        // paramentro ampliado y tipo de retorno reducido
    }
}







// lo mismo que en los casos anteriores 
interface Ejemplo1 {
    public function method(array $array): iterable;
}

class ImplementaciónDeEjemplo implements Ejemplo1 {
    public function method(array $array): iterable {
        foreach ($array as $valor) {
            yield $valor;
        }
    }
}

// Ejemplo de uso
$ejemplo = new ImplementaciónDeEjemplo();
foreach ($ejemplo->method([1, 2, 3]) as $valor) {
    echo $valor . "\n";
}


?>