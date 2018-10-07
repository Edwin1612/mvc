<?php

$stmt =	Datos::getUsuariosID($_GET["id"]);
session_start();
//Obtenemos los datos de la sesion
?>

<h1>Editar Usuario</h1>
<!--Formulario que agrega los valores de la sesion en cada input como valor establecido y hace un envio por post de los datos acutalizados y tambien un evio por get del id de la sesion y la contraseña de la sesion-->
<form method="POST" action='index.php?action=editar&id=<?= $_GET["id"] ?>'>
	<label>USUARIO:</label>
	<input type="text" name="usuario" value="<?php echo $stmt["usuario"] ?>"><br>
	<label>CONTRASEÑA:</label>
	<input type="password" name="contrasena" value="<?php echo $stmt["contrasena"] ?>"><br>
	<label>CORREO:</label>
	<input type="email" name="correo" value="<?php echo $stmt["correo"] ?>">
	<input type="submit"></button>
</form>

<?php
//Se inicialica el controlador para hacer llamar un metodo del mismo controlador para editar al usuario.
$registro = new MvcController();
$registro ->editarUsuario();
echo $registro ->editarUsuario();
?>