<?php
//Si se entra a este archivo se obtiene la sesion y se destruye y hace un header al index
session_start();
session_destroy();
header("location:index.php");
  ?>