<?php
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');
$registroEliminado = $_POST['email'];
$consulta = "DELETE FROM artistas WHERE email = '$registroEliminado'";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);
header('Location: ../EliminarUsuario.php');
?>
