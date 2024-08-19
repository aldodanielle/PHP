<?php
echo '<pre>';
// ----+++      simulador de cagero automatico      +++----
// Crea un programa que simule un cajero automático. El programa debe pedir al usuario su número de cuenta 
// y su contraseña, y luego permitirle realizar operaciones como depositar, retirar y consultar saldo.

echo '<h1> Cajero Automatico </h1>';

$user = 1234567890;
$pin = 1998;

$userIngresado = 1234567890;
$pinIngresado = 1998;

echo '<h3> Ingresa tus credenciales </h3>';
if($user === $userIngresado){
    if ($pin === $pinIngresado){
        echo 'validando... ' . 'Cargando... ';
        echo acciones(2);
    }else{
        echo 'pin incorrecto';
    }
}else{
    echo 'usuarion NO existe';
}




function acciones($accion){
    echo '<h4> Buen dia </h4>';
    echo '¿Que vas a realizar hoy?' . '<br>';

    switch($accion){
        case 1:
            echo '<h5> Deposito de Saldo </h5>';
            echo despositarSaldo();
            break;
        case 2:
            echo '<h5> Retiro de Saldo </h5>';
            echo retirarSaldo();
            break;
        case 3:
            echo '<h5> Consulta de Saldo </h5>';
            echo consultarSaldo();
            break;
        default:
            echo 'verifica tu opcion otra vez';
            break;
    }
}



function despositarSaldo(){
    $saldo = 18908.74;
    $saldoRetirado = 4500;

    echo 'Tu saldo es: ' . '<b>' . $saldo . '</b>' . '<br>';
    echo 'Dinero depositado: ' . '<b>' . $saldoRetirado . '</b>' . '<br>';
    echo 'Nuevo saldo: ' . '<b>' . $saldo + $saldoRetirado . '</b>' . '<br>';
    return 'Saliendo...';
}



function retirarSaldo(){
    $saldo = 18908.74;
    $saldoRetirado = 3500;

    echo 'Tu saldo es: ' . '<b>' . $saldo . '</b>' . '<br>';
    echo 'Dinero retirado: ' . '<b>' . $saldoRetirado . '</b>' . '<br>';
    echo 'Nuevo saldo: ' . '<b>' . $saldo - $saldoRetirado . '</b>' . '<br>';
    return 'Saliendo...';
}



function consultarSaldo(){
    $saldo = 18908.74;
    echo 'Tu saldo es: ' . '<b>' . $saldo . '</b>' . '<br>';
    return 'Saliendo...';
}