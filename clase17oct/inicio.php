<?php
    
    include "conexion.php";     

    $consulta_sql = "SELECT * FROM alumno";

    $resultado = $conexion -> query ($consulta_sql);
    $count = mysqli_num_rows($resultado);

    echo "<table>";
        echo "<tr>";
            echo "<th> Nombre de usuario </th>";
            echo "<th>Fecha de registro</th>";
            echo "<th>Carrera</th>";
        echo "</tr>";

        if( $count > 0 ){
            while( $row = mysqli_fetch_assoc($resultado) ){
                echo "<tr>";
                    echo"<td>".$row['nombre_usuario']."</td>";
                    echo"<td>".$row['fecha_registro']."</td>";
                    echo"<td>".$row['carrera']."</td>";
                echo "</tr>";
            }
            
        }

?>