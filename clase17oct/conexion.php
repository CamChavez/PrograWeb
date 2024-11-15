<?php
    $host_db="127.0.0.1:3306";
    $user_name="root";
    $user_pass="cam080818";
    $db_name="fes_aragon";

    $conexion = new mysqli($host_db, $user_name, $user_pass, $db_name);

    //if ($conexion -> connect_error){
    //} 
    //else{
    
       // echo "<h1>Conexion realizada</h1>";

    //}

    // Verificar si la conexión falló
    if ($conexion->connect_error) {
        die("<script>alert('Error en la conexión: " . $conexion->connect_error . "');</script>");
    } else {
        echo "<script>alert('Conexión realizada correctamente');</script>";
    }
?>