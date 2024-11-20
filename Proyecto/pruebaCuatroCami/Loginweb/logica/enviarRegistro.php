<?php
include "./conexion.php";
mysqli_set_charset($conexion, 'utf8');
$nombreUser = $_POST['email'];

$buscarusuario = "SELECT * FROM artistas WHERE email ='$nombreUser'";
$resultado = $conexion->query($buscarusuario);
$count = mysqli_num_rows($resultado);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffebee; /* Fondo rojo claro */
        }
        h1, h2 {
            color: #b71c1c; /* Rojo oscuro para títulos */
        }
        .card {
            background-color: #ffcdd2; /* Fondo suave de tarjeta */
            border-radius: 10px;
            padding: 20px;
        }
        .btn-custom {
            background-color: #d32f2f; /* Botón rojo */
            color: white;
        }
        .btn-custom:hover {
            background-color: #b71c1c; /* Hover con rojo más oscuro */
        }
        .link {
            color: #e57373; /* Color de enlaces en tono rojo */
        }
        .link:hover {
            color: #c62828; /* Hover para enlaces */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card center-align">
            <?php if ($count == 1): ?>
                <h1>El usuario ya está registrado</h1>
                <a href="../Registro.php" class="link">Nuevo registro</a>
            <?php else: ?>
                <?php
                mysqli_query($conexion, "INSERT INTO artistas(
                    usuario, cantante, anios, cancion, album, telefono, email, password)
                    VALUES(
                        '$_POST[usuario]',
                        '$_POST[cantante]',
                        '$_POST[anios]',
                        '$_POST[cancion]',
                        '$_POST[album]',
                        '$_POST[telefono]',
                        '$_POST[email]',
                        '$_POST[password]'
                    )");
                ?>
                <h1>Usuario creado con éxito</h1>
                <div>
                    <a href="../Registro.php" class="btn btn-custom waves-effect waves-light">Nuevo registro</a>
                    <a href="../Principal.php" class="btn btn-custom waves-effect waves-light">Ver registros</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Importa el archivo JS de Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>