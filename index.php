<?php
//El index que muestra al usuario las salidas de la vistas y a traves de el se enviará las diferentes acciones del usuario al controlador

//Mostrar la plantilla al usurio (template.php) la cual se alojará en views

//Invocamos el modelo que se utilizará en todos los archivos
require_once('models/enlaces.php');
require_once('models/crud.php');
require_once('controllers/controller.php');

//Para poder ver el template o plantilla, se hace una peticion mediante a un controlar
//creamos el objeto:
$mvc = new MvcController();

//Muestra la funcion "plantilla" que se encuentra en controllers/controller
$mvc->pagina();

?>