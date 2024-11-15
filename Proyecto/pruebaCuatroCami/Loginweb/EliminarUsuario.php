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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
    <!-- Importa Materialize CSS desde el CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Estilos personalizados para colores morados, azules y rosas -->
    <style>
        body {
            background-color: #f3e5f5; /* Color de fondo lila claro */
        }
        .card {
            background-color: #e1bee7; /* Fondo de tarjeta en tono morado suave */
        }
        .card-title {
            color: #6a1b9a; /* Tono morado oscuro para el título */
        }
        .btn-custom {
            background-color: #7e57c2; /* Botón morado */
            color: white;
        }
        .btn-custom:hover {
            background-color: #512da8; /* Color de hover morado oscuro */
        }
        a {
            color: #0288d1; /* Enlace azul */
        }
        a:hover {
            color: #0277bd; /* Hover en azul más oscuro */
        }
        .input-field input[type="text"]:focus {
            border-bottom: 1px solid #ec407a; /* Color rosa */
            box-shadow: 0 1px 0 0 #ec407a;
        }
        .input-field label {
            color: #6a1b9a; /* Color morado */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align">Eliminar Usuario</span>
                        <form method="POST" action="./logica/deleteUsuario.php">
                            <div class="input-field">
                                <input id="email" type="text" name="email" placeholder="email" required>
                                <label for="email">Correo Electrónico</label>
                            </div>
                            <div class="center-align">
                                <button class="btn btn-custom waves-effect waves-light" type="submit">Eliminar usuario</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-action center-align">
                        <a href="Principal.php">Inicio de listas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Importa el archivo JS de Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>
