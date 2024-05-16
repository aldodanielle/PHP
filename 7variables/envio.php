<?php

// acceso a los datos del formulario
echo $_POST['user'];
echo $_REQUEST['user'];


echo 'Hola' . htmlspecialchars($_GET["nombre"]) . "!";
?>