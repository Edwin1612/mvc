<!--Plantilla que vera el usuario al entrar en la applicacion-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Plantilla</title>
    <style>
        header{
            position: relative;
            margin: auto;
            text-align: center;
            padding: 5px;
        }
        nav{
            position: relative;
            margin: auto;
            width: 100%;
            height: auto;
            background: black;
        }
        nav ul{

            position: relative;
            margin: auto;
            width: 50%;
            text-align: center;
        }

        nav ul li{
            display: inline-block;
            width: 24%;
            line-height: 50%;
            list-style: none;
        }

        nav ul li a{
            color: white;
            text-decoration: none;
        }
        
        section{
            position: relative;
            padding: 1%;
            margin: auto;
            width: 400px;
        }

        section h1{
            position: relative;
            margin: auto;
            padding: 10px;
            text-align: center;
        }

        section form{
            position:relative;
            margin:auto;
            width:400px;
        }

        section form input{
            display: inline-block;
            padding:10px;
            width:95%;
            margin:5px;
        }

        section form input[type="submit"]{
            position:relative;
            margin:20px auto;
            left:4.5%;

        }
        table{
            position:relative;
            margin:auto;
            width:100%;
            left:-10%;
        }
        table thead tr th{
            padding:10px;
        }
        table tbody tr td{
            padding:10px;
        }
    </style>
</head>
<body>
    
    <header><h1> Sistema de usuarios - PHP MVC </h1></header>

    <?php
        include('modules/navegacion.php');
    ?>

    <section>
    <?php

        //Mostraremos un controlador que muestra la plantilla 
        $mvc = new MvcController();

        //Mostramos la funcion 
        $mvc -> enlacesPaginasController();

    ?>
    </section>

</body>
</html>