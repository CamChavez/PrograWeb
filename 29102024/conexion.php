<?php
// $host_db="127.0.0.1:3308";
// $user_db="root";
// $pass_db="123456";
// $db_name="test_php";

$host_db="if0_37372716_pruebaphp";
$user_db="si0_37372716";
$pass_db="yo3BXhhc4v2T3sI";
$db_name="sql301.infinityfree.com";


$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no te está dando permisos para ejecutar las consultas</h1>";
} else {
    echo"<h2 style='color: greenyellow; text-align: center;'>Hola, tu conexión está funcionando.</h2>";
}


?>