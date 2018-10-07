<?php

class MvcController{ 
    //Llamar a la plantilla
    public function pagina(){
        //Include se utiliza para invocar el arhivo que contiene el codigo HTML
        include "views/template.php";
    }

    //Interacción con el usuario
    public function enlacesPaginasController(){
        //Trabajar con los enlaces de las páginas
        //Validamos si la variable "action" viene vacia, es decir cuando se abre la pagina por primera vez se debe cargar la vista index.php

        if(isset($_GET['action'])){
            //guardar el valor de la variable action en views/modules/navegacion.php en el cual se recibe mediante el metodo get esa variable
            $enlaces = $_GET['action'];
        }else{
            //Si viene vacio inicializo con index
            $enlaces = "index";
        }

        //Mostrar los archivos de los enlaces de cada una de las secciones: inicio, nosotros, etc.
        //Para esto hay que mandar al modelo para que haga dicho proceso y muestre la informacions

        $respuesta = Paginas::enlacesPaginasModel($enlaces);

        include $respuesta;
    }

    public function registroUsuarioController(){
        if(isset($_POST["usuarioRegistro"])){

            //Recibe a traves del metodo POST el name (html) de usuario, password y email, se almacenan los datos en una variable de tipo array con sus respectivas propiedades (usuario, password y email)
            $datosController = array("usuario" => $_POST["usuarioRegistro"],
                                     "password" => $_POST["passwordRegistro"],
                                     "email" => $_POST["emailRegistro"]);

            
            //Se le dice al modelo models/crud.php (Datos::registroUsuarioModel), que en la clase "Datos" la funcion "registrousuariomodel" reciba en sus dos parametros los valores $datosController y el nombre de la tabla a conectarnos la cual es "usuarios"
            $respuesta = Datos::registroUsuarioModel($datosController, "usuario");

            //Se imprime la respuesta en la vista
            if($respuesta == "success"){
                header("location:index.php?action=ok");
            }
            else{
                header("loaction:index.php");
            }
        }
    }
    //Controlador que recibe las variables de los diferentes modelos
    public function iniciarSesionController()
    {
        if (isset($_POST["usuario"]) && isset($_POST["password"]))
        {
            //Se hace un array con las variables
            $datosController = array("usuario"=>$_POST["usuario"],"password"=>$_POST["password"]);
            //Y con la clase datos que viene siendo el modelo se agregan los datos, o en este caso se inicia la sesion
            $respuesta = Datos::IniciarSesionModel($datosController);
            if ($respuesta=="success") 
            {//Si se inicia bien pasa a la pagina siExiste y si no lo regresa al index
                header("location:index.php?action=siExiste");
            }else
            {
                header("loaction:index.php");
            }
        }
    }
    //Este metodo lo que hace es enviar las variables al modelo UpdateUsuariosModel el cual es el que se encarga de editar los datos
    public function editarUsuario()
    {
        if(isset($_POST["usuario"]) && isset($_POST["contrasena"]) && isset($_POST["correo"]))
        {   
            $datosController = array("usuario"=>$_POST["usuario"], "contrasena"=>$_POST["contrasena"], "correo"=>$_POST["correo"], "id"=>$_GET["id"]);
            $respuesta = Datos::updateUsuariosModel($datosController);
            //Y la da respuesta de acuerdo al resultado que se obtenga
            return $respuesta;
        }
    }
    //Metodo que envia las variables al modelo eliminarUsuario, que es el que se encarga de eliminar el usuario , solo se le envia las 2 contraseñas la de la sesion y la que agrego al querer elimianr los datos
    public function eliminarUsuario()
    {
        if(isset($_GET["id"]) && isset($_GET["Contra"]) && isset($_POST["ContS"]))
        {
            $datosController = array("id"=>$_GET["id"], "Pas2"=>$_GET["Contra"], "Pas1"=>$_POST["ContS"] );
            $respuesta = Datos::eliminarUsuario($datosController);
            return $respuesta;
        }else
        {return "no ha entrado";}
    }
}

?>