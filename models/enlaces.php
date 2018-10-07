<?php


class Paginas{

    //Una funcion con el parametro $enlacesModel que se recibe a traves del controlador

    public function enlacesPaginasModel($enlacesModel){
        //Validamos
        if($enlacesModel == "ingresar" || $enlacesModel == "usuarios" || $enlacesModel == "editar" || $enlacesModel == "salir
        " || $enlacesModel=="siExiste" || $enlacesModel=="eliminar"){
            //Mostramos el URL concatenado con la variable $enlacesModel
            $module = "views/modules/".$enlacesModel.".php";
        }

        //Una vez que action vienen vacio (validnaod en el controlador) enctonces se consulta si la variable $enlacesModel es igual a la cadena index de ser asi se muestre index.php
        else if($enlacesModel == "index"){
            $module = "views/modules/registro.php";
        }
        else if($enlacesModel == "ok"){
            $module = "views/modules/registro.php";
        }
        else if($enlacesModel == "fallo"){
            $module = "views/modules/ingresar.php";
        }
        else if($enlacesModel == "cambio"){
            $module = "views/modules/usuario.php";
        }else if($enlacesModel=="SiExiste")
        {//Se agregan estos modulos los cuales son los extras en la actividad
            $module = "views/modules/siExiste.php";
        }else if ($enlacesModel=="salir")
        {
            $module = "views/modules/salir.php";
        }else if($enlacesModel=="usuarios")
        {
            $module = "views/modules/usuarios.php";
        }
        else if($enlacesModel=="eliminar")
        {
            $module = "views/modules/eliminar.php";
        }
        //Validar una LISTA BLANCA 
        else{
            $module = "views/modules/registro.php";
        }

        return $module;
    }

}


?>