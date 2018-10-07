<?php
session_start();
//Si el login fue exitoso entra a esta pagina y muestra el nombre de la sesion actual
$nombre = $_SESSION["usuario"];
echo " <h1>Hola $nombre</h1>";
?>
