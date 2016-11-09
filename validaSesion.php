<?php
//Iniciamos sesión
session_start();

//Si la variable de sesión no esta definida

if(!isset($_SESSION['s_usuario'])){
    header("Location: index.html");
}

?>