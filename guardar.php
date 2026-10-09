<?php
require "conexion.php";
 
$nombre = $conexion->real_escape_string($_POST["nombre"]);
$ciudad = $conexion->real_escape_string($_POST["ciudad"]);
$mensaje = $conexion->real_escape_string($_POST["mensaje"]);
 
if (isset($_POST["publico"])) {
    $publico = 1;
} else {
    $publico = 0;
}
 
$conexion->query("INSERT INTO mensajes (nombre, ciudad, mensaje, publico) VALUES ('$nombre', '$ciudad', '$mensaje', $publico)");
 
header("Location: gracias.html");
?>
 