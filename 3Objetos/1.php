<?php
// para crear un objeto se utiliza la palabra NEW
// Los objetos principalmente son creados apartir de una clase 
// los objetos son la parte mas importante de la POO

// son la forma de representar cosas o conceptos de un programa
// la clase define las propiedad (atributos) y metodos que caranterizan al objeto

class persona{

    private $fullName;
    private $age;
    private $direction;
    private $phone;

    public function setFullName($fullName){
        $this -> fullName = $fullName;
    }
    public function getFullName(){
        return $this -> fullName;
    }
    public function setAge($age){
        $this -> age = $age;
    }
    public function getAge(){
        return $this -> age;
    }
    public function setDirection($direction){
        $this -> direction = $direction;
    }
    public function getDirection(){
        return $this -> direction;
    }
    public function setPhone($phone){
        $this -> phone = $phone;
    }
    public function getPhone(){
        return $this -> phone;
    }
    function saluda(){
        echo 'Hola';
    }
    }

    $objeto = new persona;
    $objeto -> setFullname('Denielle Lara');
    $objeto -> setAge(25);
    $objeto -> setDirection('Av. Roberto Segobiano');
    $objeto -> setPhone(1987654321);
    echo 'Nombre: ' . $objeto -> getFullName() . "\n"
        . 'Edad: ' . $objeto -> getAge() . "\n"
        . "Dir: " . $objeto -> getDirection() . "\n"
        . "Tel: " . $objeto -> getPhone() . "\n";
    $objeto -> saluda();
?>