<?PHP
//comenetario una linea 
echo "Hola PHP";

/*
Comentario
en
varias
lineas
*/

//Variables
$variableString = "Esto es una cadena de texto";
echo $variableString;

$texto1 = "texto para";
$texto2 = "cocatenar";
$texto2 = " que cambia su info";
echo $texto1 . $texto2;

echo gettype($texto2);  // imprime el tipo de variable que es

$entero = 6;
$entero = 8;
echo $entero; //8
echo gettype($entero);   //Integer (entero)

$decimal = 4.5;
echo $decimal;  //4.5

$booleano = true;
echo $booleano; // 1
echo gettype($booleano); //boolean

$booleano = false;
echo $booleano;     // (  )      -> no imprime nada o lo que igual a false
echo gettype($booleano); //boolean

echo "El valor de mi entero es: $entero y en valor de mi decimal es: $decimal , asi como el valor de mi booleano es:$boolean ";
?>