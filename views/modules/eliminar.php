<?php

$stmt =	Datos::getUsuariosID($_GET["id"]);
session_start();
//Se obtienen los valores de la sesion y se agrega el input como el valor
?>
<!--Formulario que envia los valores por post y tambien envia variables por get a la ppagina index, con la variable action en eliminar el md5 es porq segurida 
ya que se envia la contraseña de la sesion por get-->
<form method="POST" action='index.php?action=eliminar&id=<?= $_GET["id"] ?>&Contra=<?= MD5($_SESSION["contrasena"]) ?>'>
	<label for="passs">INGRESA TU CONTRASEÑA:</label>
	<input type="password" name="ContS" id="passs">
	<input type="submit"></button>
</form>

<?php
//Metodos que eliminan al usuario.
$registro = new MvcController();
$registro ->eliminarUsuario();
echo $registro ->eliminarUsuario();

?>