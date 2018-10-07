

<?php

//Enviar los datos al controlador mcvcontroler (es la clase principal de controller.php)
$registro = new MvcController();
session_start();
//se invoca la funcion registrousuariocontroller de la clase mvccontroller;
$registro -> iniciarSesionController();

if(isset($_SESSION["usuario"])){

    echo "Sesion Iniciada";

}else
{?>


<h1> Ingresar</h1>

<form method="post">

    <input type="text" placeholder="usuario" name="usuario" required>

    <input type="password" placeholder="contraseña" name="password" required>

    <input type="submit" value="Enviar">

</form>

<?php }

?>