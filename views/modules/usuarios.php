
<?php
if (isset($_GET["id"])) {
	# code...
}
//Pagina que hace mediante una tabla, la proyecion de todos los datos de la tabla usuarios
session_start();
if(isset($_SESSION["usuario"])){
    $stmt =	Datos::getUsuarios();
    ?>
    <table>
	<thead>
		<tr>
			<td>Nombre</td>
			<td>Contraseña</td>
			<td>Correo</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody>
	<?php while($datos = $stmt->fetch(PDO::FETCH_ASSOC))
	//Se hace un array asociativo para poder sacar los valores
    	{?>
    		
    		<tr>
    			<td><?= $datos['usuario'] ?></td>
    			<td><?= $datos['contrasena'] ?></td>
    			<td><?= $datos['correo'] ?></td>
    			<td><a href="index.php?action=editar&id=<?= $datos['idUsuario'] ?>">Editar</a></td>
    			<td><a href="index.php?action=eliminar&id=<?= $datos['idUsuario'] ?>">Eliminar</a></td>
    		</tr>
    	<?php }?>

    </tbody>
	</table>

    <?php
}else
{
	//Si no se puede iniciar sesion hacer un header con el action en ingresar el cual es una pagina para iniciar sesion.
	header("location:index.php?action=ingresar");
}
?>
