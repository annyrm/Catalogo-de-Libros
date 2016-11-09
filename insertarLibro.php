<?php
include ("validaSesion.php");
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$edicion = $_POST["edicion"];
$editorial= $_POST["editorial"];
$fecha = $_POST["año"];
$isbn = $_POST["isbn"];
$idioma = $_POST["idioma"];
$pags = $_POST["pags"];
$desc = $_POST["desc"];
$codigo = $_POST["codigo"];
$id = $_POST["id"];


include("conexion.php");

$r= mysqli_query($conexion, "INSERT INTO libros VALUES ('$titulo', '$autor', '$edicion','$editorial','$fecha','$isbn','$idioma', '$pags','$desc', '$codigo','$id')");

if($r){
    echo "se guardo correctamente";
}else{
    echo "no se guardo correctamente";
}

mysqli_close($conexion);
?>