<?php

// acceso a los datos del formulario
echo $_POST['user'];
echo $_REQUEST['user'];


//echo 'Hola' . htmlspecialchars($_GET["nombre"]) . "!";
?>

<!-- variables en formulario mas complejos -->
<?php
if($_POST){
    echo '<pres>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pres>';
}
?>

<form action="" method="post">
    Nombre: <input type="text" name="personal[nombre]" /> <br/>
    Email: <input type="text" name="personal[emal]"/><br/>
    Sexo: <br/>
        <select multiple name="sexo[]">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select> <br/>
        <input type="submit" value="Enviar">
</form>
