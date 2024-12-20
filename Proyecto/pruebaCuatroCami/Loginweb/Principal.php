<?php
session_start();

// Verifica si el usuario no ha iniciado sesión
if (!isset($_SESSION['loggedin'])) {
    // Guarda la URL de la página actual en una variable de sesión llamada 'redirect_to'
    $_SESSION['redirect_to'] = $_SERVER['REQUEST_URI'];
    
    // Redirige al usuario a la página de login
    header('Location: index.php');
    exit(); // Detiene la ejecución del script para asegurar la redirección
}

$email = $_SESSION['usermane']; // Número de cuenta del usuario
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #c8e6c9; /* Fondo verde claro */
        }
        h1 {
            color: #388e3c; /* Verde oscuro para el título */
        }
        .card {
            background-color: #a5d6a7; /* Fondo de tarjeta verde suave */
            border-radius: 10px;
        }
        .card-content {
            padding: 20px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #388e3c;
        }
        th {
            background-color: #81c784; /* Fondo verde más claro para los encabezados */
        }
        .btn-custom {
            background-color: #388e3c;
            color: white;
        }
        .btn-custom:hover {
            background-color: #2c6e29; /* Hover con un verde más oscuro */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-content">
            <h1 class="center-align">Hola, tu correo es: <?php echo $email; ?></h1>
        </div>
    </div>

    <?php
    // Requiere el archivo de conexión
    require "./logica/conexion.php";
    mysqli_set_charset($conexion, 'utf8');

    // Genera el query
    $consulta_sql = "SELECT * FROM artistas";
    $resultado = $conexion->query($consulta_sql);

    // Muestra los datos en una tabla
    if (mysqli_num_rows($resultado) > 0) {
        echo "<table class='highlight'>";
        echo "<tr>
                <th>USUARIO</th>
                <th>CANTANTE</th>
                <th>AÑOS</th>
                <th>CANCIÓN</th>
                <th>ALBUM</th>
                <th>TELEFONO</th>
                <th>EMAIL</th>
            </tr>";

        // Muestra cada registro de la base de datos en una fila de la tabla
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['usuario'] . "</td>";
            echo "<td>" . $row['cantante'] . "</td>";
            echo "<td>" . $row['anios'] . "</td>";
            echo "<td>" . $row['cancion'] . "</td>";
            echo "<td>" . $row['album'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<h2 class='center-align' style='color:red;'>Sin ningún registro</h2>";
    }
    ?>

    <div class="center-align">
    <br> <br> <br>
        <a href='EliminarUsuario.php' class="btn btn-custom waves-effect waves-light">Eliminar Usuario</a>
        <a href='Registro.php' class="btn btn-custom waves-effect waves-light">Nuevo Registro</a>
        <br><br>
        <a href='logica/salir.php' class="btn btn-custom waves-effect waves-light">Salir</a>
    </div>
</div>

<!-- Importa el archivo JS de Materialize -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
