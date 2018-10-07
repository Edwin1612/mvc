<h1> REGISTRO DE USUARIO</h1>

<form method="post">

    <input type="text" placeholder="usuario" name="usuarioRegistro" required>

    <input type="password" placeholder="contraseña" name="passwordRegistro" required>

    <input type="email" placeholder="Email" name="emailRegistro" required>

    <input type="submit" value="Enviar">

</form>

<?php

//Enviar los datos al controlador mcvcontroler (es la clase principal de controller.php)
$registro = new MvcController();

//se invoca la funcion registrousuariocontroller de la clase mvccontroller;
$registro -> registroUsuarioController();

if(isset($_GET["action"])){

    if($_GET["action"] == "ok"){
        echo "Registro Exitoso";
    }

}