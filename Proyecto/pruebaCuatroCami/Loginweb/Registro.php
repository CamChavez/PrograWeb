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
    <title>Registro en la DB</title>
    <!-- Importa Materialize CSS desde el CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Estilos personalizados para tonos azules -->
    <style>
        body {
            background-color: #e3f2fd; /* Fondo azul claro */
        }
        .card {
            background-color: #bbdefb; /* Fondo de tarjeta azul suave */
        }
        .card-title, label {
            color: #1565c0; /* Azul fuerte para títulos y etiquetas */
        }
        .btn-custom {
            background-color: #1976d2; /* Botón azul */
            color: white;
        }
        .btn-custom:hover {
            background-color: #0d47a1; /* Hover en azul más oscuro */
        }
        a {
            color: #1e88e5; /* Enlace azul */
        }
        a:hover {
            color: #1565c0; /* Hover de enlace en azul más oscuro */
        }
        .input-field input[type="text"]:focus, .input-field input[type="email"]:focus, .input-field input[type="password"]:focus {
            border-bottom: 1px solid #1e88e5; /* Color azul */
            box-shadow: 0 1px 0 0 #1e88e5;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center-align">Registro en mi DB</span>
                        <form action="./logica/enviarRegistro.php" method="post">
                            <div class="input-field">
                                <label for="usuario">Ingresa nombre usuario:</label>
                                <input type="text" name="usuario" id="usuario" required maxlength="100" placeholder="Ingresa tu Nombre">
                            </div>
                            <div class="input-field">
                                <label for="cantante">¿Cuál es tu cantante favorito?</label>
                                <input type="text" name="cantante" id="cantante" required maxlength="100" placeholder="Ingresa tu favorito">
                            </div>
                            <div class="input-field">
                                <label for="anios">¿Desde hace cuánto lo conoces?</label>
                                <input type="text" name="anios" id="anios" required maxlength="100" placeholder="Ingresa solo el numero en años">
                            </div>
                            <div class="input-field">
                                <label for="cancion">¿Cuál es tu canción favorita?</label>
                                <input type="text" name="cancion" id="cancion" required maxlength="100" placeholder="Ingresa tu canción favorita">
                            </div>
                            <div class="input-field">
                                <label for="album">¿Cuál es tu álbum favorito?</label>
                                <input type="text" name="album" id="album" required maxlength="100" placeholder="Ingresa tu álbum favorito">
                            </div>
                            <div class="input-field">
                                <label for="telefono">Teléfono:</label>
                                <input type="text" name="telefono" id="telefono" required maxlength="9" placeholder="Ingresa tu teléfono">
                            </div>
                            <div class="input-field">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" required maxlength="100" placeholder="Ingresa tu email">
                            </div>
                            <div class="input-field">
                                <label for="password">Contraseña:</label>
                                <input type="password" name="password" id="password" required maxlength="8" placeholder="Ingresa tu contraseña">
                            </div>
                            <div class="center-align">
                                <button class="btn btn-custom waves-effect waves-light" type="submit" name="submit">Enviar registro</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-action center-align">
                        <br> <br> <br>
                        <a href='./Registro.php'>Nuevo registro</a>
                        <a href='./Principal.php'>Ver registro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Importa el archivo JS de Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
