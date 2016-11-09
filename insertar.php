<?php
include ("validaSesion.php");
$usuario = $_POST["usuario"];
$pass = $_POST["pass"];
$passCrypt = md5($pass, true);

include("conexion.php");

$r= mysqli_query($conexion, "INSERT INTO usuarios VALUES (null, '$usuario', '$passCrypt')");

if($r){
    echo "se guardo correctamente";
}else{
    echo "no se guardo correctamente";
}

mysqli_close($conexion);
?>