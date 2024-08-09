<?php

// ----+++      Verificador de email      +++----

//Crea un script que verifique si un email es válido o no. 
//Debe cumplir con los siguientes requisitos:
//      • Contener al menos un carácter @
//      • Contener al menos un punto. después del @
//      • No contener espacios en blanco
function verificarCorreo($email){
    // verificamos el @
    if(strpos($email, '@' === false)){
        return false;
    }

    // verificamos el punto
    $partes = explode('@', $email);
    if(count($partes) != 2){
        return false;
    }

    $dominio = $partes[1];
    if(strpos($dominio, '.') === false){
        return false;
    }

    // verificamos que NO tenga espacios en blanco
    if(strpos($email, ' ') !== false){
        return false;
    }

    return true;
}

// Ejemplo
//$email = $_POST['email'];
$email = 'correo2024@lara.com';
if(verificarCorreo($email)){
    echo $email;
    echo '<br>';
    echo 'Correo valido' . '✔';
}else{
    echo $email;
    echo '<br>';
    echo 'Correo invalido' . '❌';
}