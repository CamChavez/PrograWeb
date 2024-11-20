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
    <link rel="stylesheet" href="./estilos/estilosEliminarUsuario.css">
</head>
<header>
    <h3>Pasa a eliminar</h3>
</header>
<body>
    <div class="container">
    <img src="./media/Rauw Alejandro.jpeg" alt="RauwRauw">
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
                        <a href="./Principal.php">Inicio de listas</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
    </div>

    <!-- Importa el archivo JS de Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
<footer>
    <h3>Gracias, ojala no sea necesario que ocupes esta pagina ;)</h3>
</footer>
</html>
